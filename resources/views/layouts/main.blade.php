<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Website Pribadi')</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header & Navigasi -->
    <header class="navbar">
        <div class="container navbar-container">
            <a href="{{ route('beranda') }}" class="navbar-brand">
                Portal<span>Web</span>
            </a>
            <ul class="nav-menu">
                <li class="nav-item {{ request()->routeIs('beranda') ? 'active' : '' }}">
                    <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item {{ request()->routeIs('aktivitas') ? 'active' : '' }}">
                    <a href="{{ route('aktivitas') }}" class="nav-link">Aktivitas</a>
                </li>
                <li class="nav-item {{ request()->routeIs('datadiri') ? 'active' : '' }}">
                    <a href="{{ route('datadiri') }}" class="nav-link">Data Diri</a>
                </li>
                <li class="nav-item {{ request()->routeIs('kontak') ? 'active' : '' }}">
                    <a href="{{ route('kontak') }}" class="nav-link">Kontak</a>
                </li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Website Pribadi. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
</html>
