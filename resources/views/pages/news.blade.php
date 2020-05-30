@extends('layout')

@section('content')

<div class="container marketing">

    <!-- START THE FEATURETTES -->

    <div class="py-3 text-center">
        <h2>Nieuws</h2>
        <p class="lead">Ontdek de nieuwste nieuwtjes op deze nieuwspagina!</p>
        <hr class="featurette-divider">
    </div>

    @foreach ($articles as $article)
    @if ($article->active == 1)
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">{{ $article->title }}</h2>
            <p class="lead">{{ $article->intro }}</p>
            <a class="btn btn-sm btn-primary" href="/news/{{ $article->slug}}" role="button">Read more</a>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                src="https://visibilityreseller.com/wp-content/uploads/2020/01/akrales_190918_3645_0166.jpg" width="500"
                height="500" alt="">
        </div>
    </div>

    <hr class="featurette-divider">
    @endif
    @endforeach
    {{ $articles->links() }}



</div>
@endsection
