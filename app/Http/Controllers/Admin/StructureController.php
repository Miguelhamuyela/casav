<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{


    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        //
        $response['structure'] = Structure::first();
         //Logger
         $this->Logger->log('info', 'Visualizou a Estrutura Orgânica ');
        return view('admin.cne.structure.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['structure'] = Structure::find($id);
     //Logger
     $this->Logger->log('info', 'Entrou em editar Estrutura Orgânica');
        return view('admin.cne.structure.edit.index', $response);
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
        $request->validate(['file' =>  'required|mimes:jpg,png,pdf,docx,pptx', ]);

        $file = $request->file('file')->store('structures');
        Structure::find($id)->update([
            'file' => $file,
        ]);

        //Logger
        $this->Logger->log('info', 'Editou Estrutura Orgânica');
        return redirect()->back()->with('edit', '1');
    }

}
