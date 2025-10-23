<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8b4513;">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-coffee"></i> Coffee World</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', ['username' => request('username')]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', ['username' => request('username')]) }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan') }}">Pengelolaan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>