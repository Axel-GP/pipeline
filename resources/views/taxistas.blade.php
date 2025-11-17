@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" id="navLanding">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-uppercase" href="#">TAXIXI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLanding">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navLanding">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#como-funciona">Cómo funciona</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#opiniones">Opiniones</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#contacto">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">¿Eres taxista?</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section id="inicio" class="bg-white position-relative hero-full">
            <div class="hero-gradient"></div>
            <div class="hero-phones-desktop" aria-hidden="true">
                <img src="https://placehold.co/240x480/ffffff/000000?text=TAXIXI+App+1" alt="Pantalla TAXIXI 1" class="hero-phone hero-phone-1">
                <img src="https://placehold.co/240x500/ffffff/000000?text=TAXIXI+App+2" alt="Pantalla TAXIXI 2" class="hero-phone hero-phone-2">
                <img src="https://placehold.co/240x460/ffffff/000000?text=TAXIXI+App+3" alt="Pantalla TAXIXI 3" class="hero-phone hero-phone-3">
            </div>
            <div class="container py-5">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6">
                        <p class="text-uppercase text-muted mb-2">Movilidad inteligente</p>
                        <h1 class="display-4 fw-bold lh-base">TAXIXI te acompaña en cada viaje</h1>
                        <p class="lead text-muted mb-4">Descubre una forma más rentable y confiable de trabajar como taxista con tecnología de seguimiento, reservas y comunicación premium.</p>
                        <div class="d-flex flex-wrap gap-3 hero-buttons">
                            <a href="#contacto" class="btn btn-primary-taxixi btn-lg">Trabaja con nosotros</a>
                            <a href="{{ route('landing') }}" class="btn btn-outline-taxixi btn-lg">Volver a la landing</a>
                        </div>
                        <div class="mt-4 text-muted">
                            <small>Operamos 24/7 en Fuerteventura con atención bilingüe y soporte dedicado para taxistas.</small>
                        </div>
                    </div>
                    <div class="col-12 d-lg-none hero-phones-mobile-wrapper">
                        <div class="hero-phones-mobile-stack">
                            <img src="https://placehold.co/160x320/ffffff/000000?text=App+1" class="hero-phone-mobile hero-mobile-1" alt="">
                            <img src="https://placehold.co/160x320/ffffff/000000?text=App+2" class="hero-phone-mobile hero-mobile-2" alt="">
                            <img src="https://placehold.co/160x320/ffffff/000000?text=App+3" class="hero-phone-mobile hero-mobile-3" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5 class="fw-bold">TAXIXI</h5>
                    <p class="mb-1">+34 999 999 999</p>
                    <p class="mb-1">info@taxixi.com</p>
                    <small>Fuerteventura • Lanzarote • Canarias</small>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <p class="mb-1">Movilidad premium para viajeros y empresas de la isla.</p>
                    <small class="text-muted">© {{ date('Y') }} TAXIXI. Todos los derechos reservados.</small>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="#" class="text-light d-block mb-1">Política de privacidad</a>
                    <a href="#" class="text-light d-block">Aviso legal</a>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush

@push('scripts')
    <script>
        window.taxixiSteps = [];
    </script>
    <script src="{{ asset('js/landing.js') }}" defer></script>
@endpush
