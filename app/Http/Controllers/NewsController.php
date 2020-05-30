<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndexNews() {

        $articles = Article::orderBy('id', 'desc')->get();

        return view('dashboard.news.index', [
            'articles' => $articles
        ]);
    }

    public function getCreateNews() {

        return view('dashboard.news.create', []);
    }

    public function postCreateNews(Request $r) {

        $article = new Article();
        $article->title = $r->title;
        $article->slug = Str::snake($r->title);
        $article->intro = $r->intro;
        $article->content = $r->content;
        $article->image = $r->image;
        $article->active = $r->active;
        $article->save();

        return redirect(route("dashboard.news.index"));

    }

    public function getEditNews(Article $article) {

        return view('dashboard.news.edit', ['article' => $article]);
    }

    public function postEditNews(Article $article, Request $r) {

        if($r->id != $article->id) abort('403', 'Sloeber, dat mag helemaal niet!');

        $article->title = $r->title;
        $article->slug = Str::snake($r->title);
        $article->intro = $r->intro;
        $article->content = $r->content;
        $article->image = $r->image;
        $article->active = $r->active;
        $article->save();

        return redirect(route("dashboard.news.index"));

    }

    public function postDeleteNews($id) {

        Article::destroy($id);

        return redirect()->route('dashboard.news.index');

    }
}
