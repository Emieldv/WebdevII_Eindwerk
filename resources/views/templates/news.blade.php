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
        <img class="featurette-image" width="400" height="400" src="../images/uploads/{{ $article->image}}" alt="">
    </div>

    <div class="col-md-8">
        {!! $page->content ?? $article->content!!}
    </div>
        </div>
    </div>
</div>
  </main>

@endsection
