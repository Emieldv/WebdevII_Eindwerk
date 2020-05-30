<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home() {

        $title ='end of the lesson';
        $content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quae blanditiis natus. Saepe suscipit sequi maiores, dolorum amet perspiciatis. Accusamus corrupti fugit ratione necessitatibus maxime perspiciatis ipsam assumenda exercitationem quod.';

        return view('pages.home', [

            'title' => $title,
            'content' => $content
        ]);
    }
}

