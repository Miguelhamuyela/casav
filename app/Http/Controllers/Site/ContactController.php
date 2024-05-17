<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cpf;

class ContactController extends Controller
{

    public function index()
    {
        $response['alphabet'] = array('A');
        $response['cpfs'] = Cpf::orderBy('country', 'asc')->limit(14)->get();
        return view('site.contact.index', $response);
    }
}
