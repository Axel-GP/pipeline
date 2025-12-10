<?php

return [
    'meta_title' => 'Galtaxi | Smart mobility for travellers',
    'meta_description' => "Fast to request, clear to follow, perfect to travel. That's Galtaxi.",
    'hero' => [
        'eyebrow' => 'SMART MOBILITY',
        'headline' => 'Whenever you want, wherever you want:',
        'title' => 'GALTAXI',
        'subtitle' => "Fast to request, clear to follow, perfect to travel. That's Galtaxi.",
        'download_note' => 'The Galtaxi driver app will be available soon.',
        'premium_note' => 'Premium service 24/7 · Support in Spanish and English · Airport, hotel, and business rides',
    ],
    'sections' => [
        'services' => [
            'eyebrow' => 'Galtaxi Services',
            'title' => 'Mobility for every type of trip',
            'description' => 'Punctuality, safety, and a digital experience that avoids unnecessary calls.',
        ],
        'experience' => [
            'eyebrow' => 'Galtaxi Experience',
            'title' => 'How does Galtaxi work?',
        ],
        'experience_items' => [
            [
                'titulo' => 'Scheduled booking',
                'descripcion' => 'Plan your pick-up for the exact date and time.',
                'icon' => '🗓️',
            ],
            [
                'titulo' => 'Regulated fares',
                'descripcion' => 'Rates set by the authority: clarity and trust in every ride.',
                'icon' => '⚖️',
            ],
            [
                'titulo' => 'Travel safely',
                'descripcion' => 'Track the vehicle and assigned driver until arrival.',
                'icon' => '🛟',
            ],
        ],
        'fast' => [
            'eyebrow' => 'Galtaxi in your hands',
            'title' => 'Galtaxi, your easy way to move',
            'description' => 'No calls, no complications. Manage your rides from your phone in seconds.',
            'bullets' => [
                'Public and transparent fares.',
                'Licensed taxi service drivers.',
                'Continuous assistance 24/7.',
            ],
        ],
        'reviews' => [
            'eyebrow' => 'Real reviews',
            'title' => 'This is how travelers experience Galtaxi',
            'stars' => '★★★★★',
        ],
        'contact' => [
            'eyebrow' => 'Book your ride',
            'title' => 'Contact us instantly',
            'description' => 'Share your details and we will confirm your ride within minutes.',
            'form' => [
                'name' => 'Name',
                'phone' => 'Phone',
                'message' => 'Message',
                'captcha' => 'Captcha: :question',
                'submit' => 'Send request',
            ],
            'success' => 'Thanks for contacting Galtaxi. We will confirm your ride shortly.',
        ],
        'contact_cta' => [
            'eyebrow' => 'Instant contact',
            'title' => 'Quick access',
            'description' => 'Choose how you want to get in touch or ask us for the app as soon as it is ready.',
            'cards' => [
                [
                    'title' => 'Need a taxi?',
                    'description' => 'We call a driver in under two minutes.',
                    'button' => 'Call now',
                    'href' => 'tel:+34828111999',
                    'icon' => 'call',
                ],
                [
                    'title' => 'Instant message',
                    'description' => 'Chat directly with our base via WhatsApp.',
                    'button' => 'Request on WhatsApp',
                    'href' => 'https://wa.me/34828111999?text=Hello%20Galtaxi%2C%20I%20need%20a%20taxi',
                    'icon' => 'whatsapp',
                    'target' => '_blank',
                ],
                [
                    'title' => 'Android',
                    'description' => 'Coming soon on Android.',
                    'button' => 'Coming soon on Android',
                    'href' => '#contacto',
                    'icon' => 'android',
                ],
                [
                    'title' => 'iOS',
                    'description' => 'Coming soon on iOS.',
                    'button' => 'Coming soon on iOS',
                    'href' => '#contacto',
                    'icon' => 'ios',
                ],
            ],
        ],
    ],
    'services' => [
        ['icon' => '🚖', 'titulo' => 'A travel experience designed for you', 'texto' => 'Fast bookings, live tracking, and complete peace of mind on every ride'],
        ['icon' => '🏨', 'titulo' => 'Hotels and villas', 'texto' => 'Request your taxi in one click from reception: Galtaxi is integrated into most accommodations.'],
        ['icon' => '🗺️', 'titulo' => 'Tourist routes', 'texto' => 'Choose personalized routes or let one of our local guides recommend places.'],
        ['titulo' => 'Services completed', 'texto' => 'All these services have been successfully completed so far', 'stat_live' => true],
    ],
    'steps' => [
        [
            'titulo' => 'Locate yourself instantly',
            'descripcion' => 'Choose your pick-up point using the interactive map and see which driver is available.',
            'imagen' => asset('img/busca.jpeg'),
            'video' => asset('img/busca.mp4'),
            'icon' => '1️⃣',
        ],
        [
            'titulo' => 'Book in seconds',
            'descripcion' => 'Confirm the service, receive the estimated fare, and access the driver details instantly.',
            'imagen' => asset('img/solicita.jpeg'),
            'icon' => '2️⃣',
        ],
        [
            'titulo' => 'Track your ride',
            'descripcion' => 'Receive alerts when the taxi is nearby and check the route in real time until arrival.',
            'imagen' => asset('img/verifica.jpeg'),
            'video' => asset('img/movimiento.mp4'),
            'icon' => '3️⃣',
        ],
    ],
    'testimonials' => [
        ['nombre' => 'Carla R.', 'texto' => 'I booked the taxi from the hotel - punctual and car in great condition.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Luis M.', 'texto' => 'We use Galtaxi at our company with a credit account - very easy to manage.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'María P.', 'texto' => 'I booked for the whole family through the app and received confirmation with driver details within minutes.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Daniel S.', 'texto' => 'I schedule my taxi and everything runs on time without needing to call.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Alicia V.', 'texto' => 'Live tracking gives me peace of mind when traveling with my baby.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Jorge C.', 'texto' => 'Friendly team and very fast replies.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Nora F.', 'texto' => 'Easy app - seeing the car in real time is a 10/10.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Marta G.', 'texto' => 'Booked a night transfer and the driver arrived with no waiting.', 'foto' => asset('img/testimonial-avatar.svg')],
        ['nombre' => 'Pedro L.', 'texto' => '24/7 assistance and clean vehicles even at difficult hours.', 'foto' => asset('img/testimonial-avatar.svg')],
    ],
];
