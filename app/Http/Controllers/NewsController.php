<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function getNews() {

        $articles = Article::all();

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

    public function getIndexNews() {

        $articles = Article::all();

        return view('dashboard.news.index', [
            'articles' => $articles
        ]);
    }

    public function getCreateNews() {

        return view('dashboard.news.create', []);
    }

    public function postCreateNews(Request $r) {

        $page = new Article();
        $page->title = $r->title;
        $page->slug = Str::snake($r->title);
        $page->intro = $r->intro;
        $page->content = $r->content;
        $page->save();

        return redirect(route("news.index"));

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
        $article->save();

        return redirect(route("news.index"));

    }

    public function postDeleteNews($id) {

        Article::destroy($id);

        return redirect()->route('news.index');

    }
}
