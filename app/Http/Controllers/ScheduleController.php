<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
     public function index()
    {
 $schedules = [
        [
            'id' => 1,
            'package_name' => 'Paket Umrah Reguler 9 Hari',
            'departure_date' => '2025-03-15',
            'return_date' => '2025-03-23',
            'departure_route' => 'Start Lampung',
            'quota' => 45,
            'seats_taken' => 18,
            'status' => 'available',
            'price' => 28000000,
            'airline' => 'Saudia Airlines'
        ],
        [
            'id' => 2,
            'package_name' => 'Paket Umrah VIP Premium',
            'departure_date' => '2025-04-10',
            'return_date' => '2025-04-21',
            'departure_route' => 'Start Jakarta',
            'quota' => 30,
            'seats_taken' => 25,
            'status' => 'almost_full',
            'price' => 45000000,
            'airline' => 'Garuda Indonesia'
        ],
        [
            'id' => 3,
            'package_name' => 'Paket Umrah Reguler 9 Hari',
            'departure_date' => '2025-04-20',
            'return_date' => '2025-04-28',
            'departure_route' => 'Start Padang',
            'quota' => 40,
            'seats_taken' => 8,
            'status' => 'available',
            'price' => 28000000,
            'airline' => 'Batik Air'
        ],
        [
            'id' => 4,
            'package_name' => 'Paket Umrah Ramadhan',
            'departure_date' => '2025-05-15',
            'return_date' => '2025-05-24',
            'departure_route' => 'Start Jambi',
            'quota' => 50,
            'seats_taken' => 35,
            'status' => 'almost_full',
            'price' => 38000000,
            'airline' => 'Lion Air'
        ],
        [
            'id' => 5,
            'package_name' => 'Paket Umrah Reguler 9 Hari',
            'departure_date' => '2025-06-05',
            'return_date' => '2025-06-13',
            'departure_route' => 'Start Bengkulu',
            'quota' => 35,
            'seats_taken' => 5,
            'status' => 'available',
            'price' => 28000000,
            'airline' => 'Super Air Jet'
        ]
    ];
    
    $departure_routes = [
        'Start Padang',
        'Start Jambi',
        'Start Jakarta',
        'Start Bengkulu',
        'Start Lampung'
    ];
    
    return view('pages.schedule', compact('schedules', 'departure_routes'));
    }
}
