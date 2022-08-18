<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
    <div class="container">
        <a class="navbar-brand d-lg-none" aria-current="page" href="{{route('home')}}">Menu</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
