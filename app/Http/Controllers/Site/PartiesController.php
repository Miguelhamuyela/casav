<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Parties;
use Illuminate\Http\Request;

class PartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['parties'] = Parties::where([['state', 'Autorizada']])->orderBy('parties', 'asc')->paginate(10);
        return view('site.parties.all.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $title
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //
        try {
            $response['party'] = Parties::where([['state', 'Autorizada'], ['parties', urldecode($title)]])->first();
            return view('site.parties.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.parties');
        }
    }
}
