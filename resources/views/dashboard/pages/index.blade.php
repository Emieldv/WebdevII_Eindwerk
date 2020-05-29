@extends('layout')
@section('content')

    <div class="container">
        <div class="row py-4">
            <div class="col-12">
            <a class="btn btn-md btn-success col-md-12" href="{{ route('pages.create') }}">Pagina toevoegen</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titel</th>
                            <th>Intro</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>
                                {{$page->title}}
                            </td>
                            <td>
                                {{ Str::limit($page->intro, 50) }}
                            </td>
                            <td>
                            <a href="{{ route('pages.edit', $page) }}" class="btn btn-md btn-warning col-md-12">
                            Edit
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('pages.delete', $page->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button type="submit" class="btn btn-md btn-danger col-md-12">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
