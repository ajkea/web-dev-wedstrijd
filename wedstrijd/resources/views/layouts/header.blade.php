<div class="header">
<!-- <ul class="nav justify-content-center">
    <li class="nav-item">
        <a href="/"><i class="fab fa-spotify"></i> Home</a>
    </li>
    <li class="nav-item">
        <a href="/question"><i class="fa fa-gamepad"></i> Contest</a>
    </li>
    <li class="nav-item">
        <a href="/list"><i class="fa fa-list"></i> List participants</a>
    </li>
    <li class="nav-item">
        <a href="/winners"><i class="fa fa-gift"></i> Winners</a>
    </li>
    
</ul> -->

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
    <a class="navbar-brand" href="/"><i class="fab fa-spotify"></i> Spotify</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-item nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-item nav-link" href="/question"><i class="fa fa-gamepad"></i> Contest</a></li>
            <li class="nav-item"><a class="nav-item nav-link" href="/winners"><i class="fa fa-gift"></i> Winners</a></li>
            @auth
            <li class="nav-item"><a class="nav-item nav-link" href="/list"><i class="fa fa-list"></i> List participants</a></li>
            <li class="nav-item"><a class="nav-item nav-link" href="{{route('logout')}}">Logout</a></li>
            @endauth
        </ul>
  </div>
</div>
</nav>
</div>