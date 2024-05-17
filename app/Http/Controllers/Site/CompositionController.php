<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Compositon;
use App\Models\Member;
use Illuminate\Http\Request;

class CompositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['compositons'] = Compositon::get();
        $response['members'] = Member::orderBy('name', 'asc')->get();
        return view('site.cne.composition.index', $response);
    }
}
