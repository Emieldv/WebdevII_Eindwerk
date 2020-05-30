@extends('layout')

@section('content')

<main role="main" class="flex-shrink-0">
    <div class="container py-5">
        <div class="py-5 text-center">
            <h1>{{ $article->title ?? '' }}</h1>
            <blockquote class="lead">
                {{ $article->intro ?? '' }}
            </blockquote>
            <hr class="featurette-divider">
<div class="row">
    <div class="col-md-4">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://visibilityreseller.com/wp-content/uploads/2020/01/akrales_190918_3645_0166.jpg" width="500" height="500" alt="">
    </div>

    <div class="col-md-8">
        {!! $page->content ?? $article->content!!}
    </div>
        </div>
    </div>
</div>
  </main>

@endsection
