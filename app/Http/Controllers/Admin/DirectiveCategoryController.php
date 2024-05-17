<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\DirectiveCategory;
use Illuminate\Http\Request;

class DirectiveCategoryController extends Controller
{


    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $DirectiveCategory = DirectiveCategory::create($request->all());
        return redirect()->back()->with('create', '1');
        //Logger
        $this->Logger->log('info', 'Cadastrou uma Categoria de Diretiva com o titulo ' . $DirectiveCategory->title);
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
        $this->Logger->log('info', 'Eliminou uma Categoria de Diretiva com o identificador ' . $id);
        DirectiveCategory::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
