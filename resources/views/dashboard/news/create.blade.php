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

<div class="container">
    <div class="row py-4">
        <div class="col-12">
            <h3>nieuws artikel aanmaken</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('news.create') }} " method="post">
                @csrf

                <input type="hidden" name="id">

                <div class="form-group">
                    <label for="title">artikel titel</label>
                <input type="text" class="form-control" id="title" name ="title" placeholder="Place title here" required>
                </div>
                <div class="form-group">
                    <label for="active">Actief</label>
                    <select class="form-control" id="active" name="active">
                        <option  value="1">Pagina zichtbaar</option>
                        <option  value="0">Pagina Onzichtbaar</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="intro">Intro</label>
                    <textarea class="form-control" id="intro" name="intro" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Inhoud</label>
                    <textarea id="content" name="content"></textarea>
                </div>

                <button class="btn btn-md btn-success col-md-12" type="submit">
                    Bewerkingen opslaan
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
