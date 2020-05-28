<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {

        $title ='end of the lesson';
        $content = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quae blanditiis natus. Saepe suscipit sequi maiores, dolorum amet perspiciatis. Accusamus corrupti fugit ratione necessitatibus maxime perspiciatis ipsam assumenda exercitationem quod.';

        return view('pages.home', [

            'title' => $title,
            'content' => $content
        ]);
    }

    public function news() {
        return view('pages.news');
    }

    public function about() {
        return view('pages.about');
    }

    public function privacy() {
        return view('pages.privacy');
    }

    public function donate() {
        return view('pages.donate');
    }
}
