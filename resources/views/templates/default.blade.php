@extends('layout')

@section('content')

<main role="main" class="flex-shrink-0">
    <div class="container py-5">
        <blockquote>
            {{ $page->into }}
        </blockquote>

        {!! $page->content !!}

    </div>
  </main>

@endsection
