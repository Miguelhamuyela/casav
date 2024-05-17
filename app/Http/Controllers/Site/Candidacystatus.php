<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Candidacy;
use Illuminate\Http\Request;
use PDF;

class Candidacystatus extends Controller
{


    public function index()
    {
        return view('site.candidacystatus.index');
    }


    public function show(Request $request){


        $validation = $request->validate([
            'search' => 'required|string|min:14|max:255',

        ]);
        $response['search'] = $request->search;
        $response['candidacy'] = Candidacy::where('bi', $request->search)->with('province')->first();
        $response['information'] = Candidacy::where('bi', $request->search)->first();

        return view('site.candidacystatus.index', $response);
    }


    public function print($bi)
    {

        $response['candidacy'] = Candidacy::where([
            ['bi', $bi],
            ['state', 'Aprovada'],
            ['perpage', 'Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022'],
            ['province_id', 'P11'],
            ['placeregion','Centro de Escrutínio Nacional']
        ])->first();
        $pdf = PDF::loadView('pdf.candidacy.proof.index', $response);

        return $pdf->setPaper('A5')->download('CNE-Comprovativo-'.$bi.'.pdf');
    }

}
