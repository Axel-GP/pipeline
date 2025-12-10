<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LandingController extends Controller
{
    public function index($locale)
    {
        return view('pages.home')
            ->with('captchaQuestion', $this->generateCaptchaQuestion());
    }

    public function taxistas($locale)
    {
        return view('pages.taxistas');
    }

    public function privacyPolicy($locale)
    {
        return view('pages.privacy');
    }

    public function legalNotice($locale)
    {
        return view('pages.legal');
    }

    public function cookiePolicy($locale)
    {
        return view('pages.cookies');
    }

    public function store(Request $request, $locale)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'telefono' => ['required', 'regex:/^\+?[0-9]{9,15}$/'],
            'mensaje' => 'required|string|max:500',
            'captcha' => 'required|integer',
        ], [
            'telefono.regex' => __('ui.contact_form.validation_phone'),
        ]);

        $expectedCaptcha = session()->pull('landing_captcha_answer');
        if ($expectedCaptcha === null || intval($validated['captcha']) !== $expectedCaptcha) {
            return $this->redirectToContactSection()
                ->withErrors(['captcha' => __('ui.contact_form.captcha_invalid')])
                ->withInput();
        }

        ContactMessage::create([
            'nombre' => $validated['nombre'],
            'telefono' => $validated['telefono'],
            'mensaje' => $validated['mensaje'],
            'locale' => app()->getLocale() ?: 'es',
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        Log::info('Solicitud de reserva Galtaxi', $validated);

        return $this->redirectToContactSection()->with('status', trans('home.sections.contact.success'));
    }

    private function generateCaptchaQuestion(): string
    {
        $first = random_int(1, 8);
        $second = random_int(1, 8);
        session(['landing_captcha_answer' => $first + $second]);

        return trans('ui.captcha_question', ['first' => $first, 'second' => $second]);
    }

    private function redirectToContactSection()
    {
        $homeRoute = route('landing', ['locale' => app()->getLocale()]);
        return redirect()->to($homeRoute . '#contacto');
    }
}
