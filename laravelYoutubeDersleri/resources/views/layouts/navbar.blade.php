<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            {{-- <a class="nav-link {{  Route::is("index") ? "active" : "" }}" aria-current="page" href="{{ route('index') }}">Home</a> --}}
            {{-- <a class="nav-link {{  Route::currentRouteName() == "index" ? "active" : "" }}" aria-current="page" href="{{ route('index') }}">Home</a> --}}
            <a class="nav-link {{  request()->route()->getName() == "index" ? "active" : "" }}" aria-current="page" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link {{  Route::is("iletisim") ? "active" : "" }}" href="{{ route('iletisim') }}">Contact</a> --}}
            {{-- <a class="nav-link {{  Route::currentRouteName() == "iletisim" ? "active" : "" }}" href="{{ route('iletisim') }}">Contact</a> --}}
            <a class="nav-link {{  request()->route()->getName() == "iletisim" ? "active" : "" }}" href="{{ route('iletisim') }}">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>