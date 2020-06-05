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
            <h3>Pagina aanmaken</h3>
        </div>
    </div>
    @if($errors->any())
          <div class="alert-danger">
          <ul>

          @foreach($errors->all() as $error)
          <li>
          {{ $error }}
          </li>
          @endforeach

          </ul>
          </div>
          @endif
    <div class="row">
        <div class="col">
            <form action="{{ route('dashboard.pages.create') }} " method="post">
                @csrf

                <input type="hidden" name="id">

                <div class="form-group">
                    <label for="title">Paginatitel</label>
                <input type="text" class="form-control" id="title" name ="title" placeholder="Place title here" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="active">Actief</label>
                    <select class="form-control" id="active" name="active">
                        <option  value="1" @if( old('active') == '1') selected="selected" @endif>Pagina zichtbaar</option>
                        <option  value="0" @if( old('active') == '0') selected="selected" @endif>Pagina Onzichtbaar</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="intro">Intro</label>
                    <textarea class="form-control" id="intro" name="intro" rows="5">{{ old('intro') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="content">Inhoud</label>
                    <textarea id="content" name="content">{{ old('content') }}</textarea>
                </div>

                <button class="btn btn-md btn-success col-md-12" type="submit">
                    Bewerkingen opslaan
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
