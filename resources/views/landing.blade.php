@extends('layouts.app')

@php
    $servicios = [
        ['icon' => '🚕', 'titulo' => 'Traslados aeropuerto', 'texto' => 'Seguiremos tu vuelo y coordinamos la recogida para que no tengas esperas.'],
        ['icon' => '🏨', 'titulo' => 'Hoteles y villas', 'texto' => 'Llegamos a tu alojamiento con puntualidad y conductores con trato premium.'],
        ['icon' => '🗺️', 'titulo' => 'Rutas turísticas', 'texto' => 'Escoge rutas personalizadas o deja que uno de nuestros guías locales te recomiende lugares.'],
        ['icon' => '🏢', 'titulo' => 'Movilidad corporativa', 'texto' => 'Vehículos discretos para equipos y eventos, controlando tiempos y espacios.'],
    ];

    $pasos = [
        [
            'titulo' => 'Localízate al instante',
            'descripcion' => 'Elige tu punto de salida gracias al mapa interactivo y ve qué conductor está disponible.',
            'imagen' => 'https://placehold.co/340x720/ffffff/1f1f1f?text=GPS+en+curso',
            'icon' => '📍',
        ],
        [
            'titulo' => 'Reserva en segundos',
            'descripcion' => 'Confirma el servicio, recibe la tarifa estimada y accede a los datos del conductor en el acto.',
            'imagen' => 'https://placehold.co/340x720/ffffff/1f1f1f?text=Reserva+confirmada',
            'icon' => '⚡',
        ],
        [
            'titulo' => 'Sigue el viaje',
            'descripcion' => 'Recibe alertas cuando el taxi esté cerca y revisa la ruta en tiempo real hasta tu destino.',
            'imagen' => 'https://placehold.co/340x720/ffffff/1f1f1f?text=Sigue+el+taxi',
            'icon' => '🛰️',
        ],
    ];

    $testimonios = [
        ['nombre' => 'Carla R.', 'texto' => 'TAXIXI hizo perfecto el traslado desde el aeropuerto; coche impecable y puntualidad absoluta.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=CR'],
        ['nombre' => 'Luis M.', 'texto' => 'Utilizo TAXIXI para la movilidad corporativa y cada reserva es flexible, rápida y sin sorpresas.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=LM'],
        ['nombre' => 'María P.', 'texto' => 'Reservé para toda la familia desde la app y en minutos recibí confirmación con datos del conductor.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=MP'],
        ['nombre' => 'Daniel S.', 'texto' => 'Programa mis traslados recurrentes y todo llega puntual, sin tener que llamar al teléfono.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=DS'],
        ['nombre' => 'Alicia V.', 'texto' => 'El seguimiento en vivo me da tranquilidad cuando viajo con mi bebé.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=AV'],
        ['nombre' => 'Jorge C.', 'texto' => 'Equipo amable y comunicaciones rápidas, ideal para clientes corporativos.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=JC'],
        ['nombre' => 'Nora F.', 'texto' => 'La app es intuitiva y las tarifas se muestran antes de confirmar.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=NF'],
        ['nombre' => 'Marta G.', 'texto' => 'Reservé un traslado nocturno y el conductor llegó sin esperas.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=MG'],
        ['nombre' => 'Pedro L.', 'texto' => 'Atención 24/7 y vehículos limpios incluso en horarios complicados.', 'foto' => 'https://placehold.co/80x80/ffffff/000000?text=PL'],
    ];
@endphp

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-uppercase" href="#">TAXIXI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLanding">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navLanding">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#como-funciona">Cómo funciona</a></li>
                    <li class="nav-item"><a class="nav-link" href="#opiniones">Opiniones</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('taxistas') }}">¿Eres taxista?</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero -->
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
                        <h1 class="display-4 fw-bold lh-base">TAXIXI te conecta con el taxi ideal</h1>
                        <p class="lead text-muted mb-4">Reserva tu viaje en segundos, recibe el seguimiento en vivo del conductor y viaja con seguridad y elegancia.</p>
                        <div class="d-flex flex-wrap gap-3 hero-buttons">
                            <a href="#contacto" class="btn btn-primary-taxixi btn-lg">Descargar Android</a>
                            <a href="https://apps.apple.com" class="btn btn-outline-taxixi btn-lg">Descargar iOS</a>
                        </div>
                        <div class="mt-3">
                            <small class="text-muted">Descarga la app para taxistas <a href="{{ route('taxistas') }}" class="text-decoration-underline">aquí</a>.</small>
                        </div>
                        <div class="mt-4 text-muted">
                            <small>Servicio premium 24/7 · Atención en español e inglés · Trayectos aeropuerto, hoteles y empresas</small>
                        </div>
                        <button class="hero-scroll" type="button" aria-label="Scroll down">
                            <span class="hero-scroll-icon" aria-hidden="true">
                                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.646 6.646a.5.5 0 0 1 .708 0L8 9.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z" fill="#0f172a"/>
                                </svg>
                            </span>
                        </button>
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

        <!-- Servicios -->
        <section id="servicios" class="section-padding bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <p class="text-uppercase text-muted mb-1">Servicios TAXIXI</p>
                    <h2 class="section-title">Movilidad para cada tipo de viaje</h2>
                    <p class="text-muted">Puntualidad, seguridad y una experiencia digital que evita llamadas innecesarias.</p>
                </div>
                <div class="row g-4">
                    @foreach ($servicios as $servicio)
                        <div class="col-md-6 col-lg-3">
                            <div class="card card-soft h-100 p-4 text-center">
                                <div class="display-4">{{ $servicio['icon'] }}</div>
                                <h5 class="mt-3">{{ $servicio['titulo'] }}</h5>
                                <p class="text-muted">{{ $servicio['texto'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Cómo funciona con pasos -->
        <section id="como-funciona" class="section-padding bg-white">
            <div class="container">
                <div class="text-center mb-5">
                    <p class="text-uppercase text-muted mb-1">Experiencia TAXIXI</p>
                    <h2 class="section-title">¿Cómo funciona TAXIXI?</h2>
                </div>
                <div class="row align-items-center como-funciona-grid g-4">
                    <div class="col-lg-4 d-flex flex-column gap-4 como-options-left">
                        @foreach ($pasos as $index => $paso)
                            <div class="funciona-detail d-flex gap-3" data-step-index="{{ $index }}" style="--delay: {{ $index * 0.12 }}s">
                                <span class="funciona-bullet flex-shrink-0 funciona-icon">{{ $index + 1 }}</span>
                                <div>
                                    <h5 class="mb-1">{{ $paso['titulo'] }}</h5>
                                    <p class="text-muted mb-0">{{ $paso['descripcion'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center como-visual">
                        <div class="card card-soft p-4 text-center phone-frame">
                            <img id="funciona-image" src="{{ $pasos[0]['imagen'] }}" alt="Pantalla TAXIXI" class="img-fluid rounded funciona-image">
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column gap-4 como-options-right">
                        @foreach ([
                            ['titulo' => 'Reserva programada', 'descripcion' => 'Agenda tu recogida para la fecha y hora exactas.', 'icon' => '🗓️'],
                            ['titulo' => 'Tarifas transparentes', 'descripcion' => 'Conoce el precio estimado y la distancia antes de subirte.', 'icon' => '💶'],
                            ['titulo' => 'Viaja tranquilo', 'descripcion' => 'Seguimiento del vehículo y conductor asignado hasta la llegada.', 'icon' => '🛡️'],
                        ] as $item)
                            <div class="funciona-detail d-flex gap-3" style="--delay: {{ ($loop->iteration + 3) * 0.12 }}s">
                                <span class="funciona-bullet-alt flex-shrink-0 funciona-icon">
                                    {{ $item['icon'] }}
                                </span>
                                <div>
                                    <h5 class="mb-1">{{ $item['titulo'] }}</h5>
                                    <p class="text-muted mb-0">{{ $item['descripcion'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección rápido -->
        <section id="facil-rapida" class="section-padding bg-light">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-lg-1">
                        <div class="card card-soft p-4">
                            <p class="text-uppercase text-muted mb-2">TAXIXI en tus manos</p>
                            <h2 class="section-title">Fácil, rápida, sin llamadas</h2>
                            <p class="text-muted">Desde la app o la web, gestiona tus trayectos sin esperas telefónicas y con total transparencia.</p>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2">✔️ Tarifas claras y confirmadas al instante.</li>
                                <li class="mb-2">✔️ Vehículos modernos y conductores certificados.</li>
                                <li>✔️ Atención personalizada 24/7 para cada traslado.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div id="facil-stack" class="facil-stack mx-auto" aria-hidden="true">
                            <div class="facil-layer" data-depth="0.9" style="--layer-rotation: -10deg;">
                                <img src="https://placehold.co/260x580/ffffff/000000?text=Mobile+1" alt="Pantalla TAXIXI 1">
                            </div>
                            <div class="facil-layer" data-depth="0.6" style="--layer-rotation: 6deg;">
                                <img src="https://placehold.co/270x600/ffffff/000000?text=Mobile+2" alt="Pantalla TAXIXI 2">
                            </div>
                            <div class="facil-layer" data-depth="0.3" style="--layer-rotation: -2deg;">
                                <img src="https://placehold.co/280x620/ffffff/000000?text=Mobile+3" alt="Pantalla TAXIXI 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Opiniones -->
        <section id="opiniones" class="section-padding">
            <div class="container">
                <div class="text-center mb-5">
                    <p class="text-uppercase text-muted mb-1">Opiniones reales</p>
                    <h2 class="section-title">Así viven TAXIXI nuestros viajeros</h2>
                </div>
            </div>
            <div class="testimonial-carousel">
                <div class="testimonial-track">
                    @foreach ($testimonios as $testimonio)
                        <div class="card card-soft p-4 testimonial-card">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <img src="{{ $testimonio['foto'] }}" alt="Cliente TAXIXI" width="60" height="60" class="rounded-circle">
                                <div>
                                    <strong>{{ $testimonio['nombre'] }}</strong>
                                    <div class="text-warning">★★★★★</div>
                                </div>
                            </div>
                            <p class="text-muted mb-0">{{ $testimonio['texto'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contacto -->
        <section id="contacto" class="section-padding contact-section">
            <div class="container">
                <div class="text-center mb-4">
                    <p class="text-uppercase text-muted mb-1">Reserva tu taxi</p>
                    <h2 class="section-title">Contacto inmediato</h2>
                    <p class="text-muted">Déjanos tus datos y confirmamos en minutos.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-panel p-4">
                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('reserva.store') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control focus-glow @error('nombre') is-invalid @enderror">
                                    @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Teléfono</label>
                                    <input type="text" name="telefono" value="{{ old('telefono') }}" class="form-control focus-glow @error('telefono') is-invalid @enderror">
                                    @error('telefono')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mensaje</label>
                                    <textarea name="mensaje" rows="5" class="form-control focus-glow @error('mensaje') is-invalid @enderror">{{ old('mensaje') }}</textarea>
                                    @error('mensaje')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary-taxixi px-4">Enviar solicitud</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5 class="fw-bold">TAXIXI</h5>
                    <p class="mb-1">+34 999 999 999</p>
                    <p class="mb-1">info@taxixi.com</p>
                    <small>Fuerteventura · Lanzarote · Canarias</small>
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
        window.taxixiSteps = @json($pasos);
    </script>
    <script src="{{ asset('js/landing.js') }}" defer></script>
@endpush


