<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Listdelegates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListdelegatesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['provinces'] =  Listdelegates::select(DB::raw('province'))
        ->groupBy('province')->get();
        return view('site.listdelegates.all.index', $response);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {

        try {
            $response['province'] = urldecode($name);
            $response['counties'] = Listdelegates::where('province', urldecode($name))->orderby('id', 'asc')->get();

            return view('site.listdelegates.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.listdelegates');
        }
    }
}
