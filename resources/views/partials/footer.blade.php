<footer class="bg-dark text-light landing-footer py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <h5 class="fw-bold">{{ __('ui.footer.title') }}</h5>
                <p class="mb-1">{{ __('ui.footer.phone') }}</p>
                <p class="mb-1">{{ __('ui.footer.email') }}</p>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <p class="mb-1">{{ __('ui.footer.tagline') }}</p>
                <small class="text-light">{{ __('ui.footer.copyright', ['year' => date('Y')]) }}</small>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="{{ route('privacy', ['locale' => app()->getLocale()]) }}" class="text-light d-block mb-1">{{ __('ui.footer.privacy') }}</a>
                <a href="{{ route('legal', ['locale' => app()->getLocale()]) }}" class="text-light d-block mb-1">{{ __('ui.footer.legal') }}</a>
                <a href="{{ route('cookies', ['locale' => app()->getLocale()]) }}" class="text-light d-block">{{ __('ui.footer.cookies') }}</a>
            </div>
        </div>
    </div>
</footer>
