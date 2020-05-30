@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Admin Menu</span>
                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard.pages.index') }}">
                            <span data-feather="home"></span>
                            Website pagina's<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.news.index') }}">
                            <span data-feather="file"></span>
                            Nieuws
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.donations.index') }}">
                            <span data-feather="file"></span>
                            Donaties
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Donaties</h1>
            </div>

            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>€</th>
                                <th>Door</th>
                                <th>E-mail</th>
                                <th>Bericht</th>
                                <th>Zichtbaarheid</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($donations as $donation)
                                @if ($donation->payment_status === "Paid")
                                    <tr>
                                        <td>
                                            {{$donation->price}}
                                        </td>
                                        <td>
                                            {{ $donation->name }}
                                        </td>
                                        <td>
                                            {{ $donation->email }}
                                        </td>
                                        <td>
                                            {{ $donation->description }}
                                        </td>
                                        <td>
                                            @if ($donation->active == 1)
                                            <p class="btn btn-md btn-success col-md-8">Actief</p>
                                            @else
                                            <p class="btn btn-md btn-danger col-md-8">Anoniem</p>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    </div>
    </main>
</div>
</div>
@endsection
