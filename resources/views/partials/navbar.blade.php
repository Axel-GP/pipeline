@php
        $availableLocales = config('locales.available', ['es']);
        $currentLocale = app()->getLocale();
        $routeName = Route::currentRouteName() ?? 'landing';
        $routeParams = request()->route()?->parameters() ?? [];
        $homeRoute = route('landing', ['locale' => $currentLocale]);
        $buildRouteForLocale = function ($locale) use ($routeName, $routeParams) {
            $params = array_merge($routeParams, ['locale' => $locale]);
            return route($routeName, $params);
        };
        $taxistaIcons = [
            'es' => 'galtaxi/icono-taxista-azul.png',
            'gl' => 'galtaxi/icono-taxista-gl-azul.png',
            'en' => 'galtaxi/icono-taxista-en-azul.png',
        ];
        $taxistaIcon = $taxistaIcons[$currentLocale] ?? $taxistaIcons['es'];
                $languageOptions = [
            'es' => ['label' => __('ui.language_names.es'), 'flag' => 'bandera_de_españa.svg.webp', 'acronym'=> 'ES'  ],
            'gl' => ['label' => __('ui.language_names.gl'), 'flag' => 'bandera_gallega.png', 'acronym'=> 'GL'],
            'en' => ['label' => __('ui.language_names.en'), 'flag' => 'bandera_reino_unido.png', 'acronym'=> 'EN'],
        ];
        $currentLanguage = $languageOptions[$currentLocale] ?? $languageOptions['es'];
    @endphp

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ $homeRoute }}" class="navbar-brand-logo-link">
                <img src="{{ asset('img/galtaxi/Logo_Rectangular_Transparente.png') }}" alt="Galtaxi logo" class="navbar-brand-logo" height="44">
                <span class="visually-hidden">Galtaxi</span>
            </a>
            <!--
            <a class="navbar-brand-phone" href="tel:+34828111999" aria-label="Telefono de contacto">
                <span class="navbar-brand-phone-label">Tlf</span>
                <span class="navbar-brand-phone-number">+34 828 111 999</span>
            </a>
        -->
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLanding">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLanding">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="langDropdownLanding" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('img/' . $currentLanguage['flag']) }}" alt="{ $currentLanguage['label'] }}" class="me-1" style="height: 16px; width: 30px;"  >{{ $currentLanguage['acronym'] }} </span>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdownLanding">
                        @foreach ($availableLocales as $locale)
                            @continue($locale === $currentLocale)
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="{{ $buildRouteForLocale($locale) }}">
                                    <img src="{{ asset('img/' . $languageOptions[$locale]['flag']) }}" alt="{{ $languageOptions[$locale]['label'] }} flag" style="height: 16px; width: 30px">
                                    {{ $languageOptions[$locale]['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ $homeRoute }}#inicio">{{ __('ui.nav.home') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ $homeRoute }}#servicios">{{ __('ui.nav.services') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ $homeRoute }}#como-funciona">{{ __('ui.nav.experience') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ $homeRoute }}#opiniones">{{ __('ui.nav.reviews') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ $homeRoute }}#contacto">{{ __('ui.nav.contact') }}</a></li>
                <li class="nav-item">
                    <a class="nav-link nav-link-taxista" href="{{ route('taxistas', ['locale' => $currentLocale]) }}">
                        {{ __('ui.cta.taxi_drivers') }}
                        <span class="taxista-icon d-none d-lg-block">
                            <img src="{{ asset('img/' . $taxistaIcon) }}" alt="Icono taxista">
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
