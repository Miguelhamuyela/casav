<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cpf;
use Illuminate\Http\Request;

class CPFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $response['cpfs'] = Cpf::get();
        //Logger
        $this->Logger->log('info', 'Listou as Cpfs');
        return view('admin.cpf.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar Cpf');
        return view('admin.cpf.create.index');
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
            'name' => 'required|min:5|max:255',
            'country' => 'max:255',
            'link' => 'max:255'
        ]);

        $cpf = Cpf::create($request->all());
        //Logger
        $this->Logger->log('info', 'Cadastrou uma Cpf com o nome ' . $cpf->name);
        return redirect("admin/cpf/show/$cpf->id")->with('create', '1');
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
        $response['cpf'] = Cpf::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou a Cpf com o identificador ' . $id);
        return view('admin.cpf.details.index', $response);
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
        $response['cpf'] = Cpf::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar a cpf com o identificador ' . $id);
        return view('admin.cpf.edit.index', $response);
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
            'name' => 'required|min:5|max:255',
            'country' => 'max:255',
            'link' => 'max:255'
        ]);

        Cpf::find($id)->update($request->all());
        //Logger
        $this->Logger->log('info', 'Editou Cpf com o identificador ' . $id);

        return redirect("admin/cpf/show/$id")->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou a Cpf com o identificador ' . $id);
        Cpf::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
