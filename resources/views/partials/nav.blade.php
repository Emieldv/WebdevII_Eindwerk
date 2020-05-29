<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img class="navbar-brand" src="../images/bandcamp_circle.png" alt="" width="40" height="40">
      <a class="navbar-brand" href="{{ route('home') }}">Bandcamp</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('news') }}">Nieuws</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('donate') }}">Doneer</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Meer</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
                @foreach ($pages as $page)
            <a class="dropdown-item" href="/{{ $page->slug}}">{{ $page->title}}</a>
                @endforeach
            </div>
          </li>
        </ul>
            <a class="nav-link" style="color: white;" href="{{ route('pages.index') }}">Dashboard</a>
      </div>
    </nav>
  </header>
