@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    @php
        $document = trans('cookies');
    @endphp

    <main>
        <section class="section-padding bg-white">
            <div class="container">
                <div class="text-center mb-4">
                    <p class="text-uppercase text-muted mb-1">{{ $document['document_title'] }}</p>
                    <h1 class="section-title">{{ $document['page_title'] }}</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="legal-page">
                            <div class="legal-inner">
                                {!! $document['content'] !!}
                            </div>
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
        window.taxixiSteps = window.taxixiSteps || [];
    </script>
    <script src="{{ asset('js/landing.js') }}" defer></script>
@endpush

