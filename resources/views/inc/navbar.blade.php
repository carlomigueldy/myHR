<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/">{{config('app.name','myHR')}}</a>
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/posts">Blog</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="/employees">Employees</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/positions">Positions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/functionalities">Functionalities</a>
          </li>
        </ul>
      </div>
  </div>
</nav>