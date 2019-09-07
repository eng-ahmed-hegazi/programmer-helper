<?php

namespace App\Http\Controllers;

use App\Interview;
use Illuminate\Http\Request;
use App\Resource;
use App\Tag;
use App\Article;
use Symfony\Component\HttpFoundation\Exception\RequestExceptionInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home',[
            'resources' => Resource::count(),
            'tags'      => Tag::count(),
            'articles'  => Article::count(),
            'interview' => Interview::count()
        ]);
    }
}
