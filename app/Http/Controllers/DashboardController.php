<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndexPages() {

        $pages = Page::all();

        return view('dashboard.pages.index', [
            'pages' => $pages
        ]);
    }

    public function getCreatePage() {

        return view('dashboard.pages.create', []);
    }

    public function postCreatePage(Request $r) {

        $validationRules = [
            'title' => 'required|max:100',
            'intro' => 'required|max:1000',
            'content' => 'required',
            'active' => 'required|in:1,0',
        ];

        $r->validate($validationRules);

        $page = new Page();
        $page->title = $r->title;
        $page->slug = Str::snake($r->title);
        $page->intro = $r->intro;
        $page->content = $r->content;
        $page->active = $r->active;
        $page->save();

        return redirect(route("dashboard.pages.index"));

    }

    public function getEditPage(Page $page) {

        return view('dashboard.pages.edit', ['page' => $page]);
    }

    public function postEditPage(Page $page, Request $r) {

        if($r->id != $page->id) abort('403', 'Sloeber, dat mag helemaal niet!');

        $validationRules = [
            'title' => 'required|max:100',
            'intro' => 'required|max:1000',
            'content' => 'required',
            'active' => 'required|in:1,0',
        ];

        $r->validate($validationRules);

        $page->title = $r->title;
        $page->slug = Str::snake($r->title);
        $page->intro = $r->intro;
        $page->content = $r->content;
        $page->active = $r->active;
        $page->save();

        return redirect(route("dashboard.pages.index"));

    }

    public function postDeletePage($id) {

        Page::destroy($id);

        return redirect()->route('dashboard.pages.index');

    }

    public function getIndexDonations() {

        $donations = Donation::orderBy('id', 'desc')->get();

        return view('dashboard.donations.index', [
            'donations' => $donations
        ]);
    }
}
