<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homePage') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('categoryPage', 1) }}">Data Science</a></li>
              <li><a class="dropdown-item" href="{{ route('categoryPage', 2) }}">Software Engineering</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('writerPage') }}">Writers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('aboutPage') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('popularPage') }}">Popular</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
