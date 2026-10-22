<header>
    <nav class="navbar navbar-expand-lg navbar-dark text-dark shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase tracking-wider text-dark" href="/">🚴 SEWPEDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-dark" id="navbarNav">
                <ul class="navbar-nav ms-auto text-dark">
                    <li class="nav-item">
                        <a class="nav-link text-dark {{ Request::is('/') ? 'active fw-bold text-primary' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark {{ Request::is('bike*') ? 'active fw-bold text-primary' : '' }}" href="/bike">Katalog Sepeda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark {{ Request::is('about*') ? 'active fw-bold text-primary' : '' }}" href="/about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark {{ Request::is('kontak*') ? 'active fw-bold text-primary' : '' }}" href="/kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>