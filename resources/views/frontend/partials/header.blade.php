<header>
<div class="top-header">
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="category">
        <ul>
          <li> <a href=""></a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <div class="top-menu text-right">
        <ul>
          @guest()
          <li> <a href="">Login</a></li>
          <li> <a href="">Register</a></li>
          @endguest
          @auth()
          <li> <a href="">Profile</a></li>
          <li> <a href="">Logout</a></li>
          @endauth
          <li> <a href="">Cart</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>
            </ul>
        </div>
    </div><!-- container -->
</nav>
</header>
