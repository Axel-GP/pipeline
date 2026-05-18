<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

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

        ], [
            'telefono.regex' => __('ui.contact_form.validation_phone'),
        ]);

        $token = $request->input('g-recaptcha-response');
        $secretKey = env('RECAPTCHA_SECRET_KEY');
        $umbral_seguridad = 0.6;

        // Verificación inicial del token
        if (empty($token)) {
            return $this->redirectToContactSection()
                ->withErrors(['captcha' => 'Error de seguridad: Token de reCAPTCHA faltante.'])
                ->withInput();
        }

        // Llamada al servicio de verificación de Google
        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $secretKey,
                'response' => $token,
                'remoteip' => $request->ip(),
            ]);

            $resultado = $response->json();

        } catch (\Exception $e) {
            Log::error('Error al contactar con reCAPTCHA: ' . $e->getMessage());
            // Si Google no responde, por seguridad o por fallo, se asume un riesgo.
            return $this->redirectToContactSection()
                ->withErrors(['captcha' => 'Error de red. Inténtalo de nuevo.'])
                ->withInput();
        }

        // Evaluación del resultado
        if ($resultado['success'] === false || $resultado['score'] < $umbral_seguridad) {
            $score = $resultado['score'] ?? 0;
            Log::warning('Intento de bot detectado por reCAPTCHA.', [
                'ip' => $request->ip(),
                'score' => $score
            ]);

            // Retorna un error indicando fallo de seguridad
            return $this->redirectToContactSection()
                ->withErrors(['captcha' => "Verificación de seguridad fallida. Puntuación ({$score})."])
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

        Log::info('Solicitud de reserva Galtaxi (Verificada por reCAPTCHA)', $validated);

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
