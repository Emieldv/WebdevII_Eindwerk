<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
    public function subscribe(Request $r){

        Newsletter::subscribe($r->email);

        return view('pages.home');
    }
}
