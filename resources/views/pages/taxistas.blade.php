@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    @php
        $hero = trans('taxistas.hero');
    @endphp

    <main>
        <section id="inicio" class="bg-white position-relative hero-full">
            <div class="hero-gradient"></div>
            <div class="hero-phones-desktop" aria-hidden="true">
                <img src="{{ asset('img/taxistas5.jpeg') }}" alt="Experiencia Galtaxi 1" class="hero-phone hero-phone-1">
                <img src="{{ asset('img/taxistas3.jpg') }}" alt="Experiencia Galtaxi 2" class="hero-phone hero-phone-2">
                <img src="{{ asset('img/taxistas4.jpg') }}" alt="Experiencia Galtaxi 3" class="hero-phone hero-phone-3">
            </div>
            <div class="container py-5">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6">
                        <p class="text-uppercase text-muted mb-2">{{ $hero['eyebrow'] }}</p>
                        <h1 class="display-4 fw-bold lh-base hero-headline">
                            <span class="hero-headline-line hero-title-text d-block">
                                {!! $hero['title_line1'] !!}
                            </span>
                            <span class="hero-headline-line hero-title-text d-block">{{ $hero['title_line2'] }}</span>
                        </h1>
                        <p class="lead text-muted mb-4 hero-subtext">{{ $hero['subtitle'] }}</p>
                        <div class="d-flex flex-wrap gap-3 hero-buttons">
                            <a href="{{ route('landing', ['locale' => app()->getLocale()]) }}#contacto" class="btn btn-primary-taxixi btn-lg">{{ $hero['cta'] }}</a>
                        </div>
                        <div class="mt-4 text-muted">
                            <small>{{ $hero['note'] }}</small>
                        </div>
                    </div>
                    <div class="col-12 d-lg-none hero-phones-mobile-wrapper">
                        <div class="hero-phones-mobile-stack">
                            <img src="{{ asset('img/taxistas5.jpeg') }}" class="hero-phone-mobile hero-mobile-1" alt="">
                            <img src="{{ asset('img/taxistas3.jpg') }}" class="hero-phone-mobile hero-mobile-2" alt="">
                            <img src="{{ asset('img/taxistas4.jpg') }}" class="hero-phone-mobile hero-mobile-3" alt="">
                        </div>
                    </div>
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
        window.taxixiSteps = [];
    </script>
    <script src="{{ asset('js/landing.js') }}" defer></script>
@endpush

