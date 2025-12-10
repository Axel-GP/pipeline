<?php

return [
    'meta_title' => 'Galtaxi | Movilidad inteligente',
    'meta_description' => 'Rápido para pedir, claro para seguir, perfecto para viajar. Así es Galtaxi.',
    'hero' => [
        'eyebrow' => 'MOVILIDAD INTELIGENTE',
        'headline' => 'Cuando quieras, donde quieras:',
        'title' => 'GALTAXI',
        'subtitle' => 'Rápido para pedir, claro para seguir, perfecto para viajar. Así es Galtaxi.',
        'download_note' => 'Pronto podrás descargar la app de Galtaxi para taxistas.',
        'premium_note' => 'Servicio premium 24/7 · Atención en español e inglés · Trayectos aeropuerto, hoteles y empresas',
    ],
    'sections' => [
        'services' => [
            'eyebrow' => 'Servicios Galtaxi',
            'title' => 'Movilidad para cada tipo de viaje',
            'description' => 'Puntualidad, seguridad y una experiencia digital que evita llamadas innecesarias.',
        ],
        'experience' => [
            'eyebrow' => 'Experiencia Galtaxi',
            'title' => '¿Cómo funciona Galtaxi?',
        ],
        'experience_items' => [
            [
                'titulo' => 'Reserva programada',
                'descripcion' => 'Agenda tu recogida para la fecha y hora exactas.',
                'icon' => '🗓️',
            ],
            [
                'titulo' => 'Tarifas reguladas',
                'descripcion' => 'Importes fijados por la autoridad: claridad y confianza en cada trayecto.',
                'icon' => '⚖️',
            ],
            [
                'titulo' => 'Viaja tranquilo',
                'descripcion' => 'Seguimiento del vehículo y conductor asignado hasta la llegada.',
                'icon' => '🛟',
            ],
        ],
        'fast' => [
            'eyebrow' => 'Galtaxi en tus manos',
            'title' => 'Galtaxi, tu forma fácil de moverte',
            'description' => 'Sin llamadas y sin complicaciones. Gestiona tus servicios desde el móvil en segundos.',
            'bullets' => [
                'Tarifas públicas y transparentes.',
                'Conductores autorizados del servicio de taxi.',
                'Asistencia continua 24/7.',
            ],
        ],
        'reviews' => [
            'eyebrow' => 'Opiniones reales',
            'title' => 'Así viven Galtaxi nuestros viajeros',
            'stars' => '★★★★★',
        ],
        'contact' => [
            'eyebrow' => 'Reserva tu taxi',
            'title' => 'Contacto',
            'description' => 'Déjanos tus datos para contactar con nosotros.',
            'form' => [
                'name' => 'Nombre',
                'phone' => 'Teléfono',
                'message' => 'Mensaje',
                'captcha' => 'Captcha: :question',
                'submit' => 'Enviar solicitud',
            ],
            'success' => 'Gracias por contactar con Galtaxi. Pronto confirmaremos tu reserva.',
        ],
        'contact_cta' => [
            'eyebrow' => 'Contacto instantáneo',
            'title' => 'Conecta con nosotros',
            'description' => 'Elige cómo prefieres contactar para pedir un taxi o avisarnos si quieres la app en cuanto esté lista.',
            'cards' => [
                [
                    'title' => '¿Necesitas un taxi?',
                    'description' => 'Llamamos a un conductor en menos de dos minutos.',
                    'button' => 'Llamar ahora',
                    'href' => 'tel:+34828111999',
                    'icon' => 'call',
                ],
                [
                    'title' => 'Mensaje instantáneo',
                    'description' => 'Habla por WhatsApp directamente con nuestra base.',
                    'button' => 'Solicitar por WhatsApp',
                    'href' => 'https://wa.me/34828111999?text=Hola%20Galtaxi%2C%20necesito%20un%20taxi',
                    'icon' => 'whatsapp',
                    'target' => '_blank',
                ],
                [
                    'title' => 'Android',
                    'description' => 'Próximamente disponible en Android.',
                    'button' => 'Próximamente en Android',
                    'href' => '#contacto',
                    'icon' => 'android',
                ],
                [
                    'title' => 'iOS',
                    'description' => 'Próximamente disponible en iOS.',
                    'button' => 'Próximamente en iOS',
                    'href' => '#contacto',
                    'icon' => 'ios',
                ],
            ],
        ],
    ],
    'services' => [
        ['icon' => '🚖', 'titulo' => 'Una experiencia de viaje pensada para ti', 'texto' => 'Reservas rápidas, seguimiento en vivo y total tranquilidad en cada viaje'],
        ['icon' => '🏨', 'titulo' => 'Hoteles y villas', 'texto' => 'Solicita tu taxi en un clic desde la recepción: Galtaxi está integrado en la mayoría de alojamientos.'],
        ['icon' => '🗺️', 'titulo' => 'Rutas turísticas', 'texto' => 'Escoge rutas personalizadas o deja que uno de nuestros guías locales te recomiende lugares.'],
        ['titulo' => 'Servicios realizados', 'texto' => 'Hemos realizado todos estos servicios con éxito hasta el momento', 'stat_live' => true],
    ],
    'steps' => [
        [
            'titulo' => 'Localízate al instante',
            'descripcion' => 'Elige tu punto de salida gracias al mapa interactivo y ve qué conductor está disponible.',
            'imagen' => asset('img/busca.jpeg'),
            'video' => asset('img/busca.mp4'),
            'icon' => '1️⃣',
        ],
        [
            'titulo' => 'Reserva en segundos',
            'descripcion' => 'Confirma el servicio, recibe la tarifa estimada y accede a los datos del conductor en el acto.',
            'imagen' => asset('img/solicita.jpeg'),
            'icon' => '2️⃣',
        ],
        [
            'titulo' => 'Sigue el viaje',
            'descripcion' => 'Recibe alertas cuando el taxi esté cerca y revisa la ruta en tiempo real hasta tu destino.',
            'imagen' => asset('img/verifica.jpeg'),
            'video' => asset('img/movimiento.mp4'),
            'icon' => '3️⃣',
        ],
    ],
    'testimonials' => [
        ['nombre' => 'Carla R.', 'texto' => 'Reservé el taxi desde el hotel, puntualidad y coche en buen estado.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Luis M.', 'texto' => 'Utilizamos Galtaxi en la empresa, con cuenta de crédito y una gestión sencilla.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'María P.', 'texto' => 'Reservé para toda la familia desde la app y en minutos recibí confirmación con datos del conductor.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Daniel S.', 'texto' => 'Programo mi taxi y todo a tiempo sin tener que llamar.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Alicia V.', 'texto' => 'El seguimiento en vivo me da tranquilidad cuando viajo con mi bebé.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Jorge C.', 'texto' => 'Equipo amable y responden rápido.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Nora F.', 'texto' => 'App fácil, ver el coche en tiempo real es un diez.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Marta G.', 'texto' => 'Reservé un traslado nocturno y el conductor llegó sin esperas.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Pedro L.', 'texto' => 'Atención 24/7 y vehículos limpios incluso en horarios complicados.', 'foto' => asset('img/testimonial-avatar.svg')],
    ],
];
