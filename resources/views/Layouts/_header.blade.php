<header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand font-tertiary h3" href="{{asset('index')}}"><img src="assets/images/logo.png" alt="Myself"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{asset('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('about')}}">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('portfolio')}}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
