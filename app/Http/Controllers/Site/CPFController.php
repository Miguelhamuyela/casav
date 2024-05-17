<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cpf;
use Illuminate\Http\Request;

class CPFController extends Controller
{
    public function index()
    {
        $response['alphabet'] = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $response['cpfs'] = Cpf::orderBy('country', 'asc')->get();
        return view('site.cpf.index', $response);
    }
}
