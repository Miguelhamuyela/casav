<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\ElectionImage;
use Illuminate\Http\Request;

class ElectionImageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function create($id)
    {
        //
        $response['election'] = Election::with(['images'])->find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em Adicionar Imagens do ano eleitoral ');
        return view('admin.electionImage.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validation = $request->validate([

            'images' => 'required|min:1',
        ]);
        for ($i = 0; $i < count($request->allFiles()['images']); $i++) {
            $file = $request->allFiles()['images'][$i];
            $ElectionImage = ElectionImage::create([
                'path' => $file->store("ElectionImages/$id"),
                'fk_idElection' => $id
            ]);
        }

        //Logger
        $this->Logger->log('info', 'Cadastrou Imagens do ano eleitoral ');
        return redirect("admin/eleições/show/$id")->with('create_image', '1');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElectionImage  $ElectionImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou uma Imagem do ano eleitoral com o identificador ' . $id);
        ElectionImage::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
