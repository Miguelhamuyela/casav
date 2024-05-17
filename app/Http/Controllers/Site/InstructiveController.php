<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Instructional;
use Illuminate\Http\Request;

class InstructiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['instructional'] = Instructional::get();
        return view('site.cne.instructive.index', $response);
    }
}
