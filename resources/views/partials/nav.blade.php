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
                @if ($page->active == 1)
                    <a class="dropdown-item" href="/{{ $page->slug}}">{{ $page->title}}</a>
                @endif
                @endforeach
            </div>
          </li>
        </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.pages.index') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('dashboard.pages.index') }}">Dashboard</a>

                            <a class="dropdown-item" href="{{ route('register') }}">Register admin</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
      </div>
    </nav>
  </header>
