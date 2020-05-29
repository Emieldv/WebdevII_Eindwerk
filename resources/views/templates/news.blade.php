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

            {!! $page->content ?? $article->content!!}
        </div>
    </div>
  </main>

@endsection
