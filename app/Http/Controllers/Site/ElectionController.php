<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{

    public function show($date)
    {
        try {
            $response['election'] = Election::with('images')->where([ ['date', $date]])->first();
            return view('site.elections.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.home');
        }
    }
}
