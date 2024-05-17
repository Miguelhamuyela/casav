<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Key;
use Illuminate\Http\Request;

class KeyController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function show()
    {
        //
        $response['keys'] = Key::first();
        //Logger
        $this->Logger->log('info', 'Entrou em Activar/Desativar as Inscrições');
        return view('admin.candidacy.key.index', $response);

    }

    public function update(Request $request)
    {

        Key::find(1)->update($request->all());

        //Logger
        $this->Logger->log('info', 'Desativou uma das Inscrições');
        return redirect()->back()->with('edit', '1');
    }
}
