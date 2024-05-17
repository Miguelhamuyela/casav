<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Mandate;
use Illuminate\Http\Request;

class MandateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['mandates'] = Mandate::get();
        return view('site.cne.mandate.index', $response);
    }
}
