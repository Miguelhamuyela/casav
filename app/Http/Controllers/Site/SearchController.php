<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Compositon;
use App\Models\Cpf;
use App\Models\Defini;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\News;
use App\Models\Parties;
use App\Models\SlideShow;
use App\Models\Video;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.search.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $validation = $request->validate([
            'search' => 'required|string|min:3|max:255',

        ]);

        $response['search'] = $request->search;
        $response['news'] = News::query()->where([['state', 'Autorizada'],['title', 'LIKE', "%{$request->search}%"]])->orWhere('body', 'LIKE', "%{$request->search}%")->get();
        $response['galleries'] = Gallery::query()->where([['name', 'LIKE', "%{$request->search}%"]])->get();
        $response['slideshows'] = SlideShow::query()->where([['title', 'LIKE', "%{$request->search}%"]])->get();
        $response['annonces'] = Annonce::query()->where([['title', 'LIKE', "%{$request->search}%"]])->orWhere('body', 'LIKE', "%{$request->search}%")->get();
        $response['cpfs'] = Cpf::query()->where([['name', 'LIKE', "%{$request->search}%"]])->orWhere('description', 'LIKE', "%{$request->search}%")->get();
        
        $response['compositons'] = Compositon::query()->where([['title', 'LIKE', "%{$request->search}%"]])->orWhere('information', 'LIKE', "%{$request->search}%")->first();
        $response['members'] = Member::query()->where([['name', 'LIKE', "%{$request->search}%"]])->orWhere('function', 'LIKE', "%{$request->search}%")->get();
        
        $response['definitions'] = Defini::query()->where([['title', 'LIKE', "%{$request->search}%"]])->orWhere('definicon', 'LIKE', "%{$request->search}%")->first();

        $response['parties'] = Parties::query()->where([['parties', 'LIKE', "%{$request->search}%"]])->orWhere('body', 'LIKE', "%{$request->search}%")->get();
        
        /*
       
         $response['slideshows'] = News::query()->where([['title', 'LIKE', "%{$request->search}%"]])->orWhere('body', 'LIKE', "%{$request->search}%")->get();
         $response['slideshows'] = News::query()->where([['title', 'LIKE', "%{$request->search}%"]])->orWhere('body', 'LIKE', "%{$request->search}%")->get();
       */
        return view('site.search.index', $response);
    }
}
