<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $response['presidents'] = President::get();
        return view('site.cne.president.index', $response);
    }
}
