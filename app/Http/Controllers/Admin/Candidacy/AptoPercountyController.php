<?php

namespace App\Http\Controllers\Admin\Candidacy;


use App\Http\Controllers\Controller;
use App\Models\Candidacy;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Classes\Logger;
use Illuminate\Support\Facades\DB;
use PDF;

class AptoPercountyController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function list(Request $request, $perpage)
    {

        /* relatory */
        $response['accept'] =  Candidacy::where([['state', 'Aprovada'], ['perpage', urldecode($perpage)]])->count();
        $response['decline'] =  Candidacy::where([['state', 'Não Aprovada'], ['perpage', urldecode($perpage)]])->count();
        $response['general'] =  Candidacy::where('perpage', urldecode($perpage))->count();


        $response['perpage'] = $perpage;
        $response['provinces'] = Province::orderBy('name', 'asc')->get();

        $response['province'] =  Province::where('ref', $request->province_id)->first();

        $response['perprovince'] =  Candidacy::where([ ['state', 'Aprovada'],['placeregion','!=','Centro de Escrutínio Nacional'],  ['province_id', $request->province_id], ['perpage', urldecode($perpage)]])
        ->with('province')->count();

        $response['candidacies'] =  Candidacy::where([ ['state', 'Aprovada'],['placeregion','!=','Centro de Escrutínio Nacional'],  ['province_id', $request->province_id], ['perpage', urldecode($perpage)]])
        ->select(DB::raw('count(*) as candidacy_count, county'))->groupBy('county')->get();

        $response['centers'] =  Candidacy::where([
        ['province_id', 'P11'],
        ['state', 'Aprovada'],
        ['placeregion','Centro de Escrutínio Nacional'],
        ['perpage', 'Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022']
        ])
        ->with('province')
        ->select(DB::raw('count(*) as candidacy_count, province_id'))
        ->groupBy('province_id')
        ->get();

        //Logger
        $this->Logger->log('info', 'Entrou em Listar os candidatos aprovados do concurso '.$perpage);
        return view('admin.candidacy.aptos.index', $response);
    }


    public function print($perpage, $ref, $county)
    {

        $response['perpage'] = $perpage;
        $response['county'] = $county;
        $response['province'] = Province::where('ref', $ref)->first();

        $response['decline'] =  Candidacy::where([['state', 'Não Aprovada'],['placeregion','!=','Centro de Escrutínio Nacional'],['province_id', $ref], ['county', $county], ['perpage', urldecode($perpage)]])->count();

        $response['candidacies'] = Candidacy::orderby('name', 'asc')->orderby('surname', 'asc')->where([['state', 'Aprovada'], ['placeregion','!=','Centro de Escrutínio Nacional'], ['province_id', $ref], ['county', $county], ['perpage', urldecode($perpage)]])->get();
        $pdf = PDF::loadView('pdf.candidacy.aptos.index', $response);

        //Logger
        $this->Logger->log('info', 'Imprimiu a Lista de Candidatos Aprovados da Província - '.$response['province']->name.' do '.$perpage);


        return $pdf->setPaper('a4')->setOrientation('landscape')->download($perpage.' - '.$response['province']->name.'.pdf');
    }

    public function escrutinio()
    {

        $response['state'] = 'Aprovadas';

        $response['candidacies'] = Candidacy::orderby('name', 'asc')->orderby('surname', 'asc')->where([
            ['state', 'Aprovada'],
            ['province_id', 'P11'],
            ['placeregion','Centro de Escrutínio Nacional'],
            ['perpage', 'Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022']

        ])->get();
        $pdf = PDF::loadView('pdf.candidacy.escrutinio.index', $response);

        //Logger
        $this->Logger->log('info', 'Imprimiu a Lista de Candidaturas Aprovadas ao Centro de Escrutínio Nacional');


        return $pdf->setPaper('a4')->setOrientation('landscape')->download('Candidaturas Aprovadas ao Centro de Escrutínio Nacional.pdf');

    }

}
