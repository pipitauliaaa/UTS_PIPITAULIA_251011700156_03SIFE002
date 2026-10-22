<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vortex Digital Agency')</title>
    <style>
        :root {
    --bs-primary: #e65c9c !important;
    --bs-primary-rgb: 230, 92, 156 !important;
    }

    .btn-primary {
    background-color: #e65c9c !important;
    border-color: #e65c9c !important;
    color: #fff !important;
    transition: all 0.2s ease-in-out;
    }
    .btn-primary:hover, .btn-primary:focus {
    background-color: #d04b87 !important;
    border-color: #d04b87 !important;
    }

    .btn-outline-primary {
    color: #e65c9c !important;
    border-color: #e65c9c !important;
    }
    .btn-outline-primary:hover {
    background-color: #e65c9c !important;
    border-color: #e65c9c !important;
    color: #fff !important;
    }

    .badge.bg-primary {
    background-color: #ff9fc6 !important;
    color: #5a183b !important;
    font-weight: 600;
    }

    .navbar-nav .nav-link.active, 
    .navbar-nav .nav-link:hover {
    color: #ff9fc6 !important;
    }

    .pagination .page-item.active .page-link {
    background-color: #e65c9c !important;
    border-color: #e65c9c !important;
    color: #fff !important;
    }
    .pagination .page-link {
    color: #e65c9c !important;
    }
    .pagination .page-link:hover {
    background-color: #ffe6f0 !important;
    border-color: #dee2e6;
    color: #d04b87 !important;
    }

    .navbar {
    background-color: rgba(255, 255, 255, 0.85) !important;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 15px rgba(230, 92, 156, 0.2) !important;
    }

    footer {
    background-color: rgba(255, 255, 255, 0.85) !important;
    backdrop-filter: blur(10px);
    box-shadow: 0 -4px 15px rgba(230, 92, 156, 0.2) !important;
    border-top: none !important;
    }
    </style>
    <!-- Bootstrap CSS Lokal -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
     <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials.header')
    <main class="flex-fill py-4">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>