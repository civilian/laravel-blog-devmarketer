
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Laravel Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="{{ Request::is('/') ? 'nav-link active' : 'nav-link' }}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="{{ Request::is('blog') ? 'nav-link active' : 'nav-link' }}">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="{{ Request::is('about') ? 'nav-link active' : 'nav-link' }}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="{{ Request::is('contact') ? 'nav-link active' : 'nav-link' }}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-left">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('posts.index')}}">Post</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
    </ul>
  </div>
</nav>
