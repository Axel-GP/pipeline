<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LandingController extends Controller
{
    /**
     * Muestra la landing principal de TAXIXI.
     */
    public function index()
    {
        return view('landing');
    }

    /**
     * Muestra la página dirigida a los taxistas.
     */
    public function taxistas()
    {
        return view('taxistas');
    }

    /**
     * Valida el formulario de contacto/reserva y registra los datos de prueba en el log.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'fecha_hora' => 'required|date',
            'mensaje' => 'nullable|string|max:500',
        ]);

        Log::info('Solicitud de reserva TAXIXI', $validated);

        return back()->with('status', 'Gracias por contactar con TAXIXI. Pronto confirmaremos tu reserva.');
    }
}
