@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    @php
        $home = trans('home');
        $hero = $home['hero'];
        $sections = $home['sections'];
        $services = $home['services'];
        $steps = $home['steps'];
        $testimonials = $home['testimonials'];
        $experienceItems = $sections['experience_items'] ?? [];
        $contactCards = $sections['contact_cta']['cards'] ?? [];
        $iconMap = [
            'call' => 'telefono',
            'whatsapp' => 'whatsapp',
            'android' => 'android',
            'ios' => 'apple',
        ];
    @endphp

    <main>
        <!-- Hero -->
        <section id="inicio" class="bg-white position-relative hero-full">
            <div class="hero-gradient"></div>
            <div class="hero-phones-desktop" aria-hidden="true">
                <img src="{{ asset('img/inicio.jpeg') }}" alt="Pantalla Galtaxi 1" class="hero-phone hero-phone-1">
                <img src="{{ asset('img/direcciones.jpeg') }}" alt="Pantalla Galtaxi 2" class="hero-phone hero-phone-2">
                <img src="{{ asset('img/perfil.jpeg') }}" alt="Pantalla Galtaxi 3" class="hero-phone hero-phone-3">
            </div>
            <div class="container py-5">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6">
                        <p class="text-uppercase text-muted mb-2">{{ $hero['eyebrow'] }}</p>
                        <h1 class="display-4 fw-bold lh-base hero-headline">
                            <span class="hero-headline-line d-block">{{ $hero['headline'] }}</span>
                            <span class="hero-title d-block text-center">
                                <img src="{{ asset('img/Logo_Rectangular.png') }}" alt="{{ $hero['title'] }}" class="hero-title-logo">
                            </span>

                        </h1>

                        <p class="lead text-muted mb-4 hero-subtext">{{ $hero['subtitle'] }}</p>
                        <div class="d-flex flex-wrap gap-3 hero-buttons">
                            <a href="#contacto" class="hero-store-link">
                                <img src="{{ asset('img/googplay.png') }}" alt="Descargar en Google Play">
                            </a>
                            <a href="#contacto" class="hero-store-link">
                                <img src="{{ asset('img/app-store.png') }}" alt="Descargar en App Store">
                            </a>
                        </div>

                        <div class="mt-3">
                            <small class="text-muted">{!! $hero['download_note'] !!}</small>
                        </div>
                        <div class="mt-4 text-muted">
                            <small>{{ $hero['premium_note'] }}</small>
                        </div>

                        <!--<button class="hero-scroll" type="button" aria-label="Scroll down">
                            <span class="hero-scroll-icon" aria-hidden="true">
                                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.646 6.646a.5.5 0 0 1 .708 0L8 9.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z" fill="#0f172a"/>
                                </svg>
                            </span>
                        </button>
                    -->
                    </div>

                    <div class="col-12 d-lg-none hero-phones-mobile-wrapper">
                        <div class="hero-phones-mobile-stack">
                            <img src="{{ asset('img/inicio.jpeg') }}" class="hero-phone-mobile hero-mobile-1" alt="Pantalla Galtaxi 1">
                            <img src="{{ asset('img/direcciones.jpeg') }}" class="hero-phone-mobile hero-mobile-2" alt="Pantalla Galtaxi 2">
                            <img src="{{ asset('img/perfil.jpeg') }}" class="hero-phone-mobile hero-mobile-3" alt="Pantalla Galtaxi 3">
                        </div>
                    </div>

            </div>
                </div>
                <div class="taxi-track" data-animate="force" style="height:48px; overflow:hidden;">
                        <img src="img/taxi-arriva.svg" alt="Taxi" class="taxi">
            </div>
        </section>
        <!-- Servicios -->
        <section id="servicios" class="section-padding bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <p class="text-uppercase text-muted mb-1">{{ $sections['services']['eyebrow'] }}</p>
                    <h2 class="section-title">{{ $sections['services']['title'] }}</h2>
                    <p class="text-muted">{{ $sections['services']['description'] }}</p>
                </div>
                <div class="row g-4">
                    @foreach ($services as $servicio)
                        <div class="col-md-6 col-lg-3">
                        <div class="card card-soft h-100 p-4 text-center servicio-card">
                            @if (!empty($servicio['stat_live']))
                                <div class="servicio-stat-container mb-3" style="margin-top:0px !important; margin-bottom:0px !important">
                                    <span class="servicios-contador" data-live-counter="total-services">0</span>
                                </div>
                            @elseif (isset($servicio['stat']))
                                <div class="servicio-stat-container mb-3" style="margin-top:0px !important; margin-bottom:0px !important">
                                    <span class="servicios-contador" data-target="{{ $servicio['stat'] }}">0</span>
                                </div>
                            @else
                                <div class="display-4">{{ $servicio['icon'] ?? '' }}</div>
                            @endif
                            <h5 class="mt-3" style="margin-top:0px !important">{{ $servicio['titulo'] }}</h5>
                            <p class="text-muted">{{ $servicio['texto'] }}</p>
                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CÃ³mo funciona con pasos -->
        <section id="como-funciona" class="section-padding bg-white">
            <div class="container">
                <div class="text-center mb-5">
                    <p class="text-uppercase text-muted mb-1">{{ $sections['experience']['eyebrow'] }}</p>
                    <h2 class="section-title">{{ $sections['experience']['title'] }}</h2>
                </div>
                <div class="row align-items-center como-funciona-grid g-4 order-1 order-lg-1">
                    <div class="col-lg-4 d-flex flex-column gap-4 como-options-left">
                        @foreach ($steps as $index => $paso)
                            <div class="funciona-detail d-flex gap-3 clickable" data-step-index="{{ $index }}" style="--delay: {{ $index * 0.12 }}s">
                                <span class="funciona-bullet flex-shrink-0 funciona-icon">{{ $index + 1 }}</span>
                                <div>
                                    <h5 class="mb-1">{{ $paso['titulo'] }}</h5>
                                    <p class="text-muted mb-0">{{ $paso['descripcion'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center como-visual order-0 order-lg-0">
                        <div class="card card-soft p-4 text-center phone-frame">
                            <img id="funciona-image" src="{{ $steps[0]['imagen'] ?? '' }}" alt="Pantalla Galtaxi" class="img-fluid rounded funciona-image funciona-media">
                            <video id="funciona-video" class="rounded funciona-image funciona-video funciona-media d-none" autoplay loop muted playsinline poster="{{ asset('img/busca.jpeg') }}">
                                <source src="{{ $steps[0]['video'] ?? asset('img/busca.mp4') }}" type="video/mp4">
                            </video>
                        </div>

                    </div>
                    <div class="col-lg-4 d-flex flex-column gap-4 como-options-right">
                        @foreach ($experienceItems as $item)
                            <div class="funciona-detail d-flex gap-3" style="--delay: {{ ($loop->iteration + 3) * 0.12 }}s">
                                <span class="funciona-bullet-alt flex-shrink-0 funciona-icon">{{ $item['icon'] ?? '??' }}</span>
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

        <!-- SecciÃ³n rÃ¡pido -->
        <section id="facil-rapida" class="section-padding bg-light">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-lg-1">
                        <div class="card card-soft p-4">
                            <p class="text-uppercase text-muted mb-2">{{ $sections['fast']['eyebrow'] }}</p>
                            <h2 class="section-title">{{ $sections['fast']['title'] }}</h2>
                            <p class="text-muted">{{ $sections['fast']['description'] }}</p>
                            <ul class="list-unstyled text-muted">
                                @foreach ($sections['fast']['bullets'] as $bullet)
                                    <li class="mb-2">{{ $bullet }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div id="facil-stack" class="facil-stack mx-auto" aria-hidden="true">
                        <div class="facil-layer" data-depth="0.9" style="--layer-rotation: -10deg;">
                            <video class="facil-video" autoplay muted loop playsinline poster="{{ asset('img/busca.jpeg') }}">
                                <source src="{{ asset('img/busca.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="facil-layer" data-depth="0.6" style="--layer-rotation: 6deg;">
                            <img src="{{ asset('img/solicita.jpeg') }}" alt="Pantalla Galtaxi 2">
                        </div>
                        <div class="facil-layer" data-depth="0.3" style="--layer-rotation: -2deg;">
                            <video class="facil-video video-arreglo" autoplay muted loop playsinline poster="{{ asset('img/verifica.jpeg') }}">
                                <source src="{{ asset('img/movimiento2.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Opiniones -->
        <section id="opiniones" class="section-padding" style="padding-bottom: 0px !important">
            <div class="container">
                <div class="text-center mb-5">
                    <p class="text-uppercase text-muted mb-1">{{ $sections['reviews']['eyebrow'] }}</p>
                    <h2 class="section-title">{{ $sections['reviews']['title'] }}</h2>
                </div>
            </div>
            <div class="testimonial-carousel">
                <div class="testimonial-track d-flex gap-3 md-3 ">
                    @foreach ($testimonials as $testimonio)
                        <div class="card card-soft p-4 testimonial-card">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <img src="{{ $testimonio['foto'] }}" alt="Cliente Galtaxi" width="60" height="60" class="rounded-circle">
                                <div>
                                    <strong>{{ $testimonio['nombre'] }}</strong>
                            <div class="text-warning">{{ $sections['reviews']['stars'] }}</div>
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
                    <h2 class="section-title">{{ $sections['contact']['title'] }}</h2>
                    <p class="text-muted">{{ $sections['contact']['description'] }}</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-panel p-4">
                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form id='reserva-form' action="{{ route('reserva.store', ['locale' => app()->getLocale()]) }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <label class="form-label">{{ $sections['contact']['form']['name'] }}</label>
                                    <input type="text" name="nombre" value="{{ old('nombre') }}" required class="form-control focus-glow @error('nombre') is-invalid @enderror">
                                    @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">{{ $sections['contact']['form']['phone'] }}</label>
                                    <input type="tel" name="telefono" value="{{ old('telefono') }}" required pattern="^\+?[0-9]{9,15}$" title="{{ __('ui.contact_form.validation_phone') }}" class="form-control focus-glow @error('telefono') is-invalid @enderror">
                                    @error('telefono')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">{{ $sections['contact']['form']['message'] }}</label>
                                    <textarea name="mensaje" rows="5" required class="form-control focus-glow @error('mensaje') is-invalid @enderror">{{ old('mensaje') }}</textarea>
                                    @error('mensaje')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">

                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                    <p class="text-muted small">
                                    Este sitio está protegido por reCAPTCHA y se aplican la
                                    <a href="https://policies.google.com/privacy?hl=es-419" target="_blank">Política de Privacidad</a> y los
                                    <a href="https://www.youtube.com/static?gl=es&template=terms&hl=es" target="_blank">Términos de Servicio</a> de Google.
                                    </p>
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary-taxixi px-4">{{ $sections['contact']['form']['submit'] }}</button>
                                </div>
                            </form>
                            <script src="https://www.google.com/recaptcha/api.js?render=6Lc5NS0sAAAAAFyfHcnmO_aYXbuyV8Q-P7fNY_SJ"></script>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding contact-cta">
            <div class="container">
                <div class="text-center mb-4">
                    <p class="text-uppercase text-muted mb-1">{{ $sections['contact_cta']['eyebrow'] }}</p>
                    <h2 class="section-title">{{ $sections['contact_cta']['title'] }}</h2>
                    <p class="text-muted mb-0">{{ $sections['contact_cta']['description'] }}</p>
                </div>
                <div class="row g-3">
                    @foreach ($contactCards as $card)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-card h-100 d-flex flex-column align-items-center text-center p-4">
                                <div class="feature-icon feature-icon-{{ $card['icon'] }} mb-3">
                                    <img src="{{ asset('img/icons/' . ($iconMap[$card['icon']] ?? $card['icon']) . '.png') }}" alt="Icono {{ $card['title'] }}">
                                </div>
                                <h5 class="mb-1">{{ $card['title'] }}</h5>
                                <p class="text-muted small mb-3">{{ $card['description'] }}</p>
                                <a href="{{ $card['href'] }}" class="btn btn-{{ $card['icon'] }} w-100" @if(!empty($card['target'])) target="{{ $card['target'] }}" @endif @if(!empty($card['rel'])) rel="{{ $card['rel'] }}" @endif>{{ $card['button'] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>

    @include('partials.footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush

@push('scripts')
    <script>
        window.taxixiSteps = @json($steps);
    </script>
    <script src="{{ asset('js/CountFlights.js?add-fake=1_000_000') }}"
            onready="window.dispatchEvent(new CustomEvent('taxixiTotalServices', { detail: value }));" defer></script>
    <script src="{{ asset('js/landing.js') }}" defer></script>
@endpush
