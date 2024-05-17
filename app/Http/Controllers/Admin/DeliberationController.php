<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Deliberation;
use Illuminate\Http\Request;

class DeliberationController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['deliberations'] = Deliberation::get();
        //Logger
        $this->Logger->log('info', 'Listou as Deliberações');
        return view('admin.cne.deliberation.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //Logger
        $this->Logger->log('info', 'Entrou em Criar Deliberação');
        return view('admin.cne.deliberation.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' =>  'mimes:jpg,png,pdf,docx,pptx',
            'title' => 'required|min:5|max:255',

        ]);
        $file = $request->file('file')->store('files');
        $deliberation = Deliberation::create([
            'file' => $file,
            'title' => $request->title,


        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou uma Deliberação com o titulo ' . $deliberation->title);
        return redirect("admin/deliberation/show/$deliberation->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['deliberation'] = Deliberation::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Deliberação com o identificador ' . $id);

        return view('admin.cne.deliberation.detalis.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['deliberation'] = Deliberation::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Deliberação com o identificador ' . $id);
        return view('admin.cne.deliberation.edit.index', $response);
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

        $request->validate([
            'file' =>  'required|mimes:jpg,png,pdf,docx,pptx',
            'title' => 'required|min:5|max:255',

        ]);
        $file = $request->file('file')->store('files');
        Deliberation::find($id)->update([
            'file' => $file,
            'title' => $request->title,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma Deliberação com o identificador ' . $id);
        return redirect("admin/deliberation/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { //Logger
        $this->Logger->log('info', 'Eliminou uma Deliberação com o identificador ' . $id);
        Deliberation::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
