<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Voter List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
            <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('/peoples') ? 'active' : ''}}">
              <a class="nav-link" href="/peoples/">Voters</a>
            </li>
            @unless (Auth::check())
              <li class="nav-item {{Request::is('/login') ? 'active' : ''}}">
                <a class="nav-link" href="/login">Login</a>
              </li>
            @endunless
          </ul>
          @auth
              <form action="/logout" method="POST" class="ml-2 mt-2 float-right">
                @csrf
                <input type="submit" value="Logout" class="btn btn-outline-danger mr-2">
              </form>
          @endauth
          <form class="form-inline mt-2 mt-md-0" action="/search" method='get'>
            @csrf
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
            <input type="submit" value='Search' class="btn btn-outline-success my-2 my-sm-0" >
          </form>
        </div>
      </nav>