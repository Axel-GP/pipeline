<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');
        $availableLocales = config('locales.available', ['es']);

        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.fallback_locale', 'es');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
