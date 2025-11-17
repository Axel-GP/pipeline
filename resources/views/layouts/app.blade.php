<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAXIXI — Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        :root {
            --taxixi-yellow: #ffc107;
            --taxixi-dark: #1f1f1f;
            --taxixi-gray: #e2e8f0;
            --taxixi-light: #f8f9fa;
            --taxixi-shadow: rgba(15, 23, 42, 0.12);
        }

        * {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--taxixi-light);
            font-family: "Inter", "Segoe UI", system-ui, sans-serif;
            color: var(--taxixi-dark);
        }

        .section-padding {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .section-title {
            font-size: 2.3rem;
            font-weight: 700;
            letter-spacing: 0.01em;
        }

        .btn-primary-taxixi {
            background-color: var(--taxixi-yellow);
            border-color: var(--taxixi-yellow);
            color: var(--taxixi-dark);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary-taxixi:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px var(--taxixi-shadow);
        }

        .btn-outline-taxixi {
            border-color: var(--taxixi-dark);
            color: var(--taxixi-dark);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-outline-taxixi:hover {
            background-color: var(--taxixi-dark);
            color: white;
        }

        .card-soft {
            border-radius: 1.25rem;
            box-shadow: 0 25px 45px var(--taxixi-shadow);
            border: none;
        }

        .focus-glow {
            transition: box-shadow 0.3s ease;
        }

        .focus-glow:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.35);
        }

        nav {
            backdrop-filter: blur(12px);
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    @stack('styles')
</head>
<body class="text-dark">
<div id="app">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>
