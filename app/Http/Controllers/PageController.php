<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getPage($slug) {

        $page = Page::where('slug', $slug)->first();
        if(!$page) abort('404');

        return view('templates.default', [
            'page' => $page
        ]);
    }

}
