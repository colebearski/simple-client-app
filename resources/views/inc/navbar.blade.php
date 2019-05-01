<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="/">Acme</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="{{Request::is('/') ? 'active' : ''}} nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="{{Request::is('about') ? 'active' : ''}} nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="{{Request::is('contact') ? 'active' : ''}} nav-link" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>