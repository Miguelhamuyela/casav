<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Directive;
use App\Models\DirectiveCategory;

class DirectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $response['categories'] = DirectiveCategory::orderBy('title', 'asc')->get();
        $response['directives'] = Directive::get();

        return view('site.cne.directive.index', $response);
    }
}
