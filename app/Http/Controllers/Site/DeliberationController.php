<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Deliberation;
use Illuminate\Http\Request;

class DeliberationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['deleiberations'] = Deliberation::get();
        return view('site.cne.deliberation.index', $response);
    }
}
