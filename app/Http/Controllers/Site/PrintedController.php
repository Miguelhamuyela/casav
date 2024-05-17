<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Printed;

class PrintedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $response['preinteds'] = Printed::orderBy('id', 'desc')->paginate(6);
        return view('site.printed.index', $response);
    }

   
}
