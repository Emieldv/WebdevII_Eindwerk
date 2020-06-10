@extends('layout')

@section('content')

<div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../images/bandcamp_circle.png" alt="" width="72" height="72">
      <h2>Nieuwsbrief</h2>
      <p class="lead">Abonneer u hier in voor onze nieuwsbrief!</p>
    </div>

<div class="row">
<div class="col-md-12 order-md-1">
    <form action="" method="post">
        @csrf
      <div class="row">

        <div class="col-md-12 mb-3">
          <label for="firstname">Voornaam</label>
          <input type="text" class="form-control" id="firstname" name="firstname"  required>
        </div>
        <div class="col-md-12 mb-3">
            <label for="lastname">Achternaam</label>
            <input type="text" class="form-control" id="lastname" name="lastname"  required>
          </div>

      <div class="col-md-12 mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
      </div>


      <button class="btn btn-primary btn-lg btn-block" type="submit">Abonneer</button>
      <hr class="col-md-12 mb-3">
    </form>
  </div>
</div>
</div>

@endsection
