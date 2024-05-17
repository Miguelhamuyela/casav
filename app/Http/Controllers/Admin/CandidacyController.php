<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Candidacy;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class CandidacyController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index(Request $request, $perpage)
    {
        $response['perpage'] = $perpage;
        $response['provinces'] = Province::orderBy('name', 'asc')->get();

        if($request->province_id == 'Todas' || !$request->province_id){

            $response['candidacies'] = Candidacy::orderby('id', 'asc')->where('perpage', urldecode($perpage))->paginate(15);

        }else{
            $response['province'] =  Province::where('ref', $request->province_id)->first();
            $response['candidacies'] = Candidacy::orderby('id', 'asc')->where([['province_id', $request->province_id], ['perpage', urldecode($perpage)]])->paginate(15);
        }

        //Logger
        $this->Logger->log('info', 'Listou as Candidaturas do '.urldecode($perpage));
        return view('admin.candidacy.list.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['candidacy'] = Candidacy::where('bi', $id)->with('province')->first();

        //Logger
        $this->Logger->log('info','Visualizar uma candidatura com o BI '.$id);
        return view('admin.candidacy.details.index', $response);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'state' => 'required|string|max:255',
        ]);

        Candidacy::where('bi', $id)->update([
            'state' => $request->state,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou o estado de uma candidatura com o BI ' . $id);
        return redirect()->back()->with('edit', '1');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function decline(Request $request, $perpage)
    {
        $validation = $request->validate([
            'state' => 'required|string|max:255',
        ]);

        Candidacy::where([['state', 'Recebida'], ['perpage', urldecode($perpage)]])->update([
            'state' => $request->state,
        ]);
        //Logger
        $this->Logger->log('info', 'Reprovou todas as candidatura com o estado recebida do '.$perpage);
        return redirect()->back()->with('edit', '1');
    }

    


}
