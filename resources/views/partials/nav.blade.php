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
        </ul>
            <a class="nav-link" style="color: white;" href="{{ route('pages.index') }}">Dashboard</a>
      </div>
    </nav>
  </header>
