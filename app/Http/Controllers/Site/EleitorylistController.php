<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Eleitorylist;
use Illuminate\Support\Facades\DB;

class EleitorylistController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['elements'] =  Eleitorylist::select(DB::raw('count(*) as list_count, locale'))
        ->groupBy('locale')->get();
        return view('site.eleitorylist.all.index', $response);
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
            $response['assembly'] = urldecode($name);
            $response['assemblies'] = Eleitorylist::where('locale', urldecode($name))->orderby('id', 'asc')->paginate(10);

            return view('site.eleitorylist.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.eleitorylist');
        }
    }
}
