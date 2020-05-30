@extends('layout')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Donaties</h1>
    <p class="lead">Wil je de bandcamp app steunen? Dat kan! Doneer €5, €10 of meer om zo onze app beter te maken!</p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">

            <form class="card-body" action="{{ route('makePayment') }}" method="GET">
                @csrf

                <input type="hidden" name="price" value="5">

                <h1 class="card-title pricing-card-title">€5</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Naam" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Uw boodschap" ></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" id="active" name="active">
                        <option value="1">Donatie zichtbaar</option>
                        <option value="0">Donatie Onzichtbaar</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-lg btn-block btn-primary">Doneer</button>
            </form>
        </div>

        <div class="card mb-4 shadow-sm">
        <form class="card-body" action="{{ route('makePayment') }}" method="GET">
                @csrf

                <input type="hidden" name="price" value="10">

                <h1 class="card-title pricing-card-title">€10</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Naam" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Uw boodschap" ></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" id="active" name="active">
                        <option value="1">Donatie zichtbaar</option>
                        <option value="0">Donatie Onzichtbaar</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-lg btn-block btn-primary">Doneer</button>
            </form>
        </div>

        <div class="card mb-4 shadow-sm">
            <form class="card-body" action="{{ route('makePayment') }}" method="GET">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="price" name="price" placeholder="€" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Naam" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Uw boodschap" ></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" id="active" name="active">
                        <option value="1">Donatie zichtbaar</option>
                        <option value="0">Donatie Onzichtbaar</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-lg btn-block btn-primary">Doneer</button>
            </form>
        </div>
    </div>
</div>

<p class="lead py-4 text-center">Deze mensen hebben al gedoneerd! Bedankt!</p>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>€</th>
                        <th>Door</th>
                        <th>Bericht</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donations as $donation)
                        @if ($donation->payment_status === "Paid")
                            @if ($donation->active == 1)
                            <tr>
                                <td>
                                    {{$donation->price}}
                                </td>
                                <td>
                                    {{ $donation->name }}
                                </td>
                                <td>
                                    {{ $donation->description }}
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td>
                                    {{$donation->price}}
                                </td>
                                <td>
                                    Anoniem
                                </td>
                                <td>

                                </td>
                            </tr>
                            @endif
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    @endsection
