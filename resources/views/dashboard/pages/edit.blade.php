@extends('layout')

@section('scripts')
<script>
    tinymce.init({
      selector: '#content',
      height: "480"
    });
  </script>
@endsection

@section('content')

<script>
    tinymce.init({
      selector: '#content',
      height: "480"
    });
  </script>

<div class="container">
    <div class="row py-4">
        <div class="col-12">
            <h3>Pagina Bewerken</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('dashboard.pages.edit', $page->id) }}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{ $page->id }}">

                <div class="form-group">
                    <label for="title">Paginatitel</label>
                <input value="{{ $page->title }}" type="text" class="form-control" id="title" name ="title" placeholder="Place title here" required>
                </div>
                <div class="form-group">
                    <label for="active">Actief</label>
                    <select class="form-control" id="active" name="active">
                        <option @if($page->active) selected @endif value="1">Pagina zichtbaar</option>
                        <option @if(!$page->active) selected @endif value="0">Pagina Onzichtbaar</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="intro">Intro</label>
                    <textarea class="form-control" id="intro" name="intro" rows="5" required>{{ $page->intro }}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Inhoud</label>
                    <textarea id="content" name="content">{{ $page->content }}</textarea>
                </div>

                <button class="btn btn-md btn-success col-md-12" type="submit">
                    Bewerkingen opslaan
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
