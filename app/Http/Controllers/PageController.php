<?php

namespace App\Http\Controllers;

use App\Article;
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

    public function getNews() {

        $articles = Article::orderBy('id', 'desc')->paginate(4);

        return view('pages.news', [
            'articles' => $articles
        ]);
    }

    public function getNewsDetail($slug) {

        $article = Article::where('slug', $slug)->first();
        if(!$article) abort('404');

        return view('templates.news', [
            'article' => $article
        ]);
    }

    public function getNewsletter() {

        return view('pages.newsletter');
    }

}
