<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CandidacyRequest;
use App\Jobs\CandidacyJob;
use App\Models\Candidacy;
use App\Models\County;
use App\Models\Key;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidacyController extends Controller
{
    private $key;
    public function __construct()
   {
        $this->key = Key::first();
   }

    /* Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022*/
    public function first()
    {

        if($this->key->first == 'Desativado'){
            return redirect()->route('site.home')->with('closeCandidacy', '1');
            die();
        }
        $response['provinces'] = Province::orderBy('name', 'asc')->get();
        $response['others'] = true;
        return view('site.candidacy.first.index', $response);


    }

    /* Recrutamento e Selecção de Formadores Municipais para as Eleições Gerais de 2022*/
    public function second()
    {
        if($this->key->second == 'Desativado'){
            return redirect()->route('site.home')->with('closeCandidacy', '1');
            die();
        }
        $response['provinces'] = Province::orderBy('name', 'asc')->get();
        return view('site.candidacy.second.index', $response);

    }

    /* Recrutamento e Selecção de Membros das Mesas das Assembleias de Voto para as Eleições Gerais de 2022*/
    public function third()
    {

        if($this->key->third == 'Desativado'){
            return redirect()->route('site.home')->with('closeCandidacy', '1');
            die();
        }
        $response['provinces'] = Province::orderBy('name', 'asc')->get();
        return view('site.candidacy.third.index', $response);

    }

    public function store(CandidacyRequest $request)
    {

        $doc_bi = $request->file('doc_bi')->store('candidacies/bi');
        $doc_covid = $request->file('doc_covid')->store('candidacies/covid');
        $doc_qualifications = $request
            ->file('doc_qualifications')
            ->store('candidacies/qualifications');

        if($request->province_id != 'P11' && $request->placeregion == 'Centro de Escrutínio Nacional'){
            return redirect()->with('candidacyError', '1');
        }else{
         $middle = Candidacy::create([
                'doc_bi' => $doc_bi,
                'doc_covid' => $doc_covid,
                'doc_qualifications' => $doc_qualifications,
                'bi' => $request->bi,
                'name' => $request->name,
                'surname' => $request->surname,
                'father' => $request->father,
                'mother' => $request->mother,
                'birth' => $request->birth,
                'residence' => $request->residence,
                'email' => $request->email,
                'tel' => $request->tel,
                'qualifications' => $request->qualifications,
                'ocupation' => $request->ocupation,
                'eleitorycard' => $request->eleitorycard,
                'group' => $request->group,
                'province_id' => $request->province_id,
                'county' => $request->county,
                'placeregion' => $request->placeregion,
                'perpage' => $request->perpage,
                'state' => ($request->perpage == 'Recrutamento e Selecção de Membros das Mesas das Assembleias de Voto para as Eleições Gerais de 2022') ? 'Recebida' : 'Aprovada',
            ]);


            $candidacy = Candidacy::with('province')->find($middle->id);
            CandidacyJob::dispatch($candidacy)->delay(now()->addSeconds('4'));
            return redirect()->back()->with('candidacyCreate', '1');
        }

    }


    public function information(){

        return view('site.candidacy.information.index');
    }

}
