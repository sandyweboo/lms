<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
          aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top" />
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2 rounded-0" type="search" placeholder="Search" aria-label="Search" />
              <button class="rounded-0 btn btn-outline-primary" type="submit">
                Search
              </button>
            </form>
          </ul>
          <div class="btn-group">
            <button type="button" class="btn btn-primary rounded-0 dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              More Action
            </button>
            <ul class="dropdown-menu rounded-0">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" onclick="logout();">log out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!--nav end-->