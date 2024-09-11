<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com//docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30"
                height="24" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav gap-2">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith($title, 'Blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'About' ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav text-end">
                <li class="nav-item dropdown">
                    <img src="{{ asset('assets/images/profile.jpg') }}" alt="profile" style="width: 50px; height: 50px; border-radius: 50%;">
                </li>
            </ul>
        </div>
    </div>
</nav>
