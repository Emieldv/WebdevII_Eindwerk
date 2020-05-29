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
        <div class="row featurette">
      <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">{{ $article->title }}</h2>
      <p class="lead">{{ $article->intro }}</p>
      <a class="btn btn-sm btn-primary" href="/news/{{ $article->slug}}" role="button">Read more</a>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">
    @endforeach


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection
