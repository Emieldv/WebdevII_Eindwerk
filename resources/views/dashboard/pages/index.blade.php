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
                <h1 class="h2">Website pagina's</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <a class="btn btn-md btn-success col-md-12" href="{{ route('dashboard.pages.create') }}">Pagina
                        toevoegen</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Titel</th>
                                <th>Intro</th>
                                <th>Acties</th>
                                <th></th>
                                <th>Zichtbaarheid</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>
                                    {{$page->title}}
                                </td>
                                <td>
                                    {{ Str::limit($page->intro, 40) }}
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.pages.edit', $page) }}"
                                        class="btn btn-md btn-warning col-md-12">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('dashboard.pages.delete', $page->id) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                        <button type="submit" class="btn btn-md btn-danger col-md-12">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    @if ($page->active == 1)
                                    <p class="btn btn-md btn-success col-md-8">Actief</p>
                                    @else
                                    <p class="btn btn-md btn-danger col-md-8">Inactief</p>
                                    @endif
                                </td>
                            </tr>
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
