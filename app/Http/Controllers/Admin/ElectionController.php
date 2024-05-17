<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;


class ElectionController extends Controller
{

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['elections'] = Election::orderBy('id', 'desc')->get();
          //Logger
          $this->Logger->log('info', 'Listou os Anos Leitorais');
        return view('admin.election.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          //Logger
          $this->Logger->log('info', 'Entrou em Criar ano Eleitoral');
        return view('admin.election.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'title' => 'required|min:1|max:255',
            'date' => 'required'
        ]);

        $election = Election::create($request->all());

        //Logger
        $this->Logger->log('info', 'Cadastrou um ano eleitoral com o titulo ' . $election->title);

        return redirect("admin/eleições/show/$election->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response['election'] = Election::find($id);
            //Logger
            $this->Logger->log('info', 'Visualizou um ano eleitoral com o identificador ' . $id);
        return view('admin.election.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $response['election'] = Election::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um ano eleitoral com identificador ' . $id);
        return view('admin.election.edit.index', $response);
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
            'title' => 'required|min:1|max:255',
            'date' => 'required'
        ]);


        Election::find($id)->update($request->all());
         //Logger
         $this->Logger->log('info', 'Editou um ano eleitoral com o identificador ' . $id);
        return redirect("admin/eleições/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um ano eleitoral com o identificador ' . $id);
        Election::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
