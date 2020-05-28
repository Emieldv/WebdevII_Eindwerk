@extends('layout')

@section('content')

<div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../images/bandcamp_circle.png" alt="" width="72" height="72">
      <h2>Contact formulier</h2>
      <p class="lead">Heeft u een vraag voor ons? Aarzel niet om ons te contacteren! Je kan ons bereiken via onderstaand formulier.</p>
    </div>

<div class="row">
<div class="col-md-12 order-md-1">
    <form action="" method="post">
        @csrf
      <div class="row">

        <div class="col-md-12 mb-3">
          <label for="name">Naam</label>
          <input type="text" class="form-control" id="name" name="name"  required>
        </div>

      <div class="col-md-12 mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
      </div>

      <div class="col-md-12 mb-3">
        <label for="subject">Onderwerp</label>
        <input type="text" class="form-control" name="subject" id="subject" required>
      </div>

      <div class="col-md-12 mb-3">
        <label for="content">Bericht</label>
        <textarea name="content" class="form-control" id="content" cols="30" rows="10" required></textarea>
      </div>


      <button class="btn btn-primary btn-lg btn-block" type="submit">Verzenden</button>
      <hr class="col-md-12 mb-3">
    </form>
  </div>
</div>
</div>

@endsection
