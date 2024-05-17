<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Compositon;
use Illuminate\Http\Request;

class CompositonController extends Controller
{
    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function show()
    {
        //
        $response['compositon'] = Compositon::first();
        //Logger
        $this->Logger->log('info', 'Visualizou a Composição');
        return view('admin.cne.composition.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $response['compositon'] = Compositon::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar a Composição com o identificador ' . $id);

        return view('admin.cne.composition.edit.index',  $response);
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
            'title' => 'required|min:10|max:255',
            'information' => 'required|min:20',

        ]);
        Compositon::find($id)->update([
            'title' => $request->title,
            'information' => $request->information,

        ]);

        //Logger
        $this->Logger->log('info', 'Editou a Composição com o identificador ' . $id);
        return redirect()->route('admin.composition.show')->with('edit', '1');
    }
}
