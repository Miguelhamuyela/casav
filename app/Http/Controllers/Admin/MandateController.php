<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Mandate;
use Illuminate\Http\Request;

class MandateController extends Controller
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
        $response['mandates'] = Mandate::first();
        //Logger
        $this->Logger->log('info', 'Visualizou o Mandato ');
        return view('admin.cne.mandate.details.index', $response);
    }

    public function edit($id)
    {
        $response['mandates'] = Mandate::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar o Mandato ');
        return view('admin.cne.mandate.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|min:10|max:255',
            'information' => 'required|min:20|',

        ]);
        Mandate::find($id)->update($request->all());
        //Logger
        $this->Logger->log('info', 'Editou o Mandato');
        return redirect()->back()->with('edit', '1');
    }
}
