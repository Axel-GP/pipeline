<?php

return [
    'meta_title' => 'Galtaxi | Mobilidade intelixente',
    'meta_description' => 'Rápido para pedir, claro para seguir e perfecto para viaxar. Así é Galtaxi.',
    'hero' => [
        'eyebrow' => 'MOVILIDADE INTELIXENTE',
        'headline' => 'Cando queiras, onde queiras:',
        'title' => 'GALTAXI',
        'subtitle' => 'Rápido para pedir, claro para seguir, perfecto para viaxar. Así é Galtaxi.',
        'download_note' => 'Moi pronto dispoñible a app de Galtaxi para taxistas.',
        'premium_note' => 'Servizo premium 24/7 · Atención en castelán e inglés · Tráxectos aeroporto, hoteis e empresas',
    ],
    'sections' => [
        'services' => [
            'eyebrow' => 'Servizos Galtaxi',
            'title' => 'Mobilidade para cada tipo de viaxe',
            'description' => 'Pontualidade, seguridade e unha experiencia dixital que evita chamadas innecesarias.',
        ],
        'experience' => [
            'eyebrow' => 'Experiencia Galtaxi',
            'title' => 'Como funciona Galtaxi?',
        ],
        'experience_items' => [
            [
                'titulo' => 'Reserva programada',
                'descripcion' => 'Programa a túa recollida para a data e hora exactas.',
                'icon' => '🗓️',
            ],
            [
                'titulo' => 'Tarifas reguladas',
                'descripcion' => 'Importes fixados pola autoridade: claridade e confianza en cada traxecto.',
                'icon' => '⚖️',
            ],
            [
                'titulo' => 'Viaxa tranquilo',
                'descripcion' => 'Seguimento do vehículo e do condutor asignado ata a chegada.',
                'icon' => '🛟',
            ],
        ],
        'fast' => [
            'eyebrow' => 'Galtaxi nas túas mans',
            'title' => 'Galtaxi, a túa forma fácil de moverte',
            'description' => 'Sen chamadas e sen complicacións. Xestiona os teus servizos desde o móbil en segundos.',
            'bullets' => [
                'Tarifas públicas e transparentes.',
                'Condutores autorizados do servizo de taxi.',
                'Asistencia continua 24/7.',
            ],
        ],
        'reviews' => [
            'eyebrow' => 'Opinións reais',
            'title' => 'Así viven Galtaxi os nosos viaxeiros',
            'stars' => '★★★★★',
        ],
        'contact' => [
            'eyebrow' => 'Reserva o teu taxi',
            'title' => 'Contacto inmediato',
            'description' => 'Déixanos os teus datos e confirmamos en minutos.',
            'form' => [
                'name' => 'Nome',
                'phone' => 'Teléfono',
                'message' => 'Mensaxe',
                'captcha' => 'Captcha: :question',
                'submit' => 'Enviar solicitude',
            ],
            'success' => 'Grazas por contactar con Galtaxi. Confirmaremos a túa reserva en minutos.',
        ],
        'contact_cta' => [
            'eyebrow' => 'Contacto instantáneo',
            'title' => 'Atallos para conectar',
            'description' => 'Elixe como prefires contactar ou avisarnos se queres a app cando estea lista.',
            'cards' => [
                [
                    'title' => 'Necesitas un taxi?',
                    'description' => 'Chamamos a un condutor en menos de dous minutos.',
                    'button' => 'Chamar agora',
                    'href' => 'tel:+34828111999',
                    'icon' => 'call',
                ],
                [
                    'title' => 'Mensaxe instantánea',
                    'description' => 'Fala por WhatsApp directamente coa nosa base.',
                    'button' => 'Solicitar por WhatsApp',
                    'href' => 'https://wa.me/34828111999?text=Ola%20Galtaxi%2C%20necesito%20un%20taxi',
                    'icon' => 'whatsapp',
                    'target' => '_blank',
                ],
                [
                    'title' => 'Android',
                    'description' => 'Moi pronto en Android.',
                    'button' => 'Proximamente en Android',
                    'href' => '#contacto',
                    'icon' => 'android',
                ],
                [
                    'title' => 'iOS',
                    'description' => 'Moi pronto en iOS.',
                    'button' => 'Proximamente en iOS',
                    'href' => '#contacto',
                    'icon' => 'ios',
                ],
            ],
        ],
    ],
    'services' => [
        ['icon' => '🚖', 'titulo' => 'Unha experiencia de viaxe pensada para ti', 'texto' => 'Reservas rápidas, seguimento en vivo e total tranquilidade en cada viaxe'],
        ['icon' => '🏨', 'titulo' => 'Hoteis e vilas', 'texto' => 'Solicita o teu taxi cun clic desde a recepción: Galtaxi está integrado na maioría dos aloxamentos.'],
        ['icon' => '🗺️', 'titulo' => 'Rutas turísticas', 'texto' => 'Escolle rutas personalizadas ou deixa que un dos nosos guías locais che recomende lugares.'],
        ['titulo' => 'Servizos realizados', 'texto' => 'Levamos realizados todos estes servizos con éxito ata agora', 'stat_live' => true],
    ],
    'steps' => [
        [
            'titulo' => 'Localízate ao instante',
            'descripcion' => 'Elixe o teu punto de saída grazas ao mapa interactivo e mira que condutor está dispoñible.',
            'imagen' => asset('img/busca.jpeg'),
            'video' => asset('img/busca.mp4'),
            'icon' => '1️⃣',
        ],
        [
            'titulo' => 'Reserva en segundos',
            'descripcion' => 'Confirma o servizo, recibe a tarifa estimada e accede aos datos do condutor no acto.',
            'imagen' => asset('img/solicita.jpeg'),
            'icon' => '2️⃣',
        ],
        [
            'titulo' => 'Segue a viaxe',
            'descripcion' => 'Recibe alertas cando o taxi estea preto e revisa a ruta en tempo real ata o destino.',
            'imagen' => asset('img/verifica.jpeg'),
            'video' => asset('img/movimiento.mp4'),
            'icon' => '3️⃣',
        ],
    ],
    'testimonials' => [
        ['nombre' => 'Carla R.', 'texto' => 'Reservei o taxi dende o hotel, puntualidade e coche en bo estado.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Luis M.', 'texto' => 'Utilizamos Galtaxi na empresa, con conta de crédito e xestión sinxela.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'María P.', 'texto' => 'Reservei para toda a familia desde a app e en minutos recibín confirmación cos datos do condutor.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Daniel S.', 'texto' => 'Programo o meu taxi e todo a tempo sen ter que chamar.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Alicia V.', 'texto' => 'O seguimento en vivo dáme tranquilidade cando viaxo co meu bebé.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Jorge C.', 'texto' => 'Equipo amable e responden rápido.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Nora F.', 'texto' => 'App fácil, ver o coche en tempo real é un dez.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Marta G.', 'texto' => 'Reservei un traslado nocturno e o condutor chegou sen esperas.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Pedro L.', 'texto' => 'Atención 24/7 e vehículos limpos incluso en horarios complicados.', 'foto' => asset('img/testimonial-avatar.svg')],
    ],
];
