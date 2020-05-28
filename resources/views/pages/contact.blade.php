@extends('layout')

@section('content')

<div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h2>Contact formulier</h2>
      <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

<div class="row">
<div class="col-md-12 order-md-1">
    <form class="needs-validation" novalidate>
      <div class="row">

        <div class="col-md-6 mb-3">
          <label for="firstName">Voornaam</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
        </div>

        <div class="col-md-6 mb-3">
          <label for="lastName">Achternaam</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com">
      </div>

      <div class="mb-3">
        <label for="address2">Onderwerp</label>
        <input type="text" class="form-control" id="subject">
      </div>

      <div class="mb-3">
        <label for="address2">Bericht</label>
        <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
      </div>

      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit">Verzenden</button>
    </form>
  </div>
</div>

@endsection
