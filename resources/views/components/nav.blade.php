<nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm">
  <div class="container">
      <a class="navbar-brand fs-3 fw-bold text-light" href="{{ route('movies.index') }}">
          <i class="bi bi-film"></i> Movies
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link fs-5 text-light hover-dark" href="{{ route('movies.index') }}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-5 text-light hover-dark" href="{{ route('movies.create') }}">New Movie</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-5 text-light hover-dark" href="{{ route('movies.search') }}">Search</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
