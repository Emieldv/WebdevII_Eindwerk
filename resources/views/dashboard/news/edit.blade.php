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
            <h3>Artikel Bewerken</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('dashboard.news.edit', $article->id) }}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{ $article->id }}">

                <div class="form-group">
                    <label for="title">Paginatitel</label>
                <input value="{{ $article->title }}" type="text" class="form-control" id="title" name ="title" placeholder="Place title here" required>
                </div>
                <div class="form-group">
                    <label for="active">Actief</label>
                    <select class="form-control" id="active" name="active">
                        <option @if($article->active) selected @endif value="1">Pagina zichtbaar</option>
                        <option @if(!$article->active) selected @endif value="0">Pagina Onzichtbaar</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="intro">Intro</label>
                    <textarea class="form-control" id="intro" name="intro" rows="5" required>{{ $article->intro }}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Inhoud</label>
                    <textarea id="content" name="content">{{ $article->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">Foto URL</label>
                <input value="{{ $article->image }}" type="text" class="form-control" id="image" name ="image" placeholder="Paste image url here">
                </div>

                <button class="btn btn-md btn-success col-md-12" type="submit">
                    Bewerkingen opslaan
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
