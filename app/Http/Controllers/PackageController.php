<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
    $packages = [
        [
            'id' => 1,
            'name' => 'Paket Umrah Reguler 9 Hari',
            'type' => 'umrah',
            'duration' => '9 Hari',
            'price' => 28000000, // Estimasi
            'image' => 'https://images.unsplash.com/photo-1591604466107-ec97de577aff?w=400',
            'hotel' => 'Hotel Bintang 5',
            'features' => [
                'Tiket Pesawat PP',
                'Visa Umrah',
                'Asuransi',
                'Hotel Bintang 5',
                'Makan 3x Sehari',
                'Manasik Umrah',
                'Handling & Airport Tax',
                'Bus Exclusive',
                'Muthawwif & Tour Leader',
                'Wisata Islami',
                'Foto Dokumentasi',
                'Sertifikat Umrah',
                'Air Zam-zam 5L'
            ],
            'equipment' => [
                'Dasar Batik',
                'Kain Ihram / Mukena',
                'Koper Kecil dan Besar',
                'Sabuk Umrah',
                'Buku Panduan',
                'Syal',
                'ID Card'
            ],
            'badge' => 'Terlaris',
            'available' => true
        ],
        [
            'id' => 2,
            'name' => 'Paket Umrah VIP Premium',
            'type' => 'umrah-vip',
            'duration' => '12 Hari',
            'price' => 45000000, // Estimasi
            'image' => 'https://images.unsplash.com/photo-1564769625905-50e93615e769?w=400',
            'hotel' => 'Hotel Premium dekat Masjidil Haram',
            'features' => [
                'Tiket Pesawat PP',
                'Visa Umrah',
                'Asuransi Premium',
                'Hotel VIP dekat Masjidil Haram',
                'Makan 3x di Restoran',
                'Manasik Umrah Lengkap',
                'Layanan Personal',
                'Porter & Handling',
                'Bus Exclusive',
                'Muthawwif & TL Berpengalaman',
                'Ziarah Lengkap',
                'Foto Dokumentasi Premium',
                'Sertifikat Umrah',
                'Air Zam-zam 10L'
            ],
            'badge' => 'Premium',
            'available' => true
        ],
        [
            'id' => 3,
            'name' => 'Paket Umrah Ramadhan',
            'type' => 'umrah-ramadhan',
            'duration' => '10 Hari',
            'price' => 38000000, // Estimasi
            'image' => 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?w=400',
            'hotel' => 'Hotel Bintang 5',
            'features' => [
                'Semua Fasilitas Umrah Reguler',
                'Pengalaman Ibadah di Bulan Ramadhan',
                'Sahur & Berbuka bersama',
                'Kajian Ramadhan',
                'Tarawih di Masjidil Haram'
            ],
            'badge' => 'Khusus Ramadhan',
            'available' => true
        ],
        [
            'id' => 4,
            'name' => 'Wisata Halal Internasional',
            'type' => 'wisata-halal',
            'duration' => 'Bervariasi',
            'price' => 35000000, // Estimasi
            'image' => 'https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?w=400',
            'features' => [
                'Berbagai Destinasi Islami',
                'Fasilitas Halal',
                'Makanan Halal',
                'Tour Guide Berpengalaman',
                'Transportasi Nyaman'
            ],
            'badge' => 'Wisata Halal',
            'available' => true
        ]
    ];
    
    $packageTypes = [
        'all' => 'Semua Paket',
        'umrah' => 'Umrah Reguler',
        'umrah-vip' => 'Umrah VIP',
        'umrah-ramadhan' => 'Umrah Ramadhan',
        'wisata-halal' => 'Wisata Halal'
    ];
    
    $hotels = [
        ['name' => 'Al Safwah Hotel', 'location' => 'Makkah', 'stars' => 5],
        ['name' => 'Rayyana Hotel', 'location' => 'Makkah', 'stars' => 5],
        ['name' => 'Grand Al Massa Hotel', 'location' => 'Makkah', 'stars' => 5]
    ];
    
    $airlines = [
        'Garuda Indonesia',
        'Saudi Airlines',
        'Batik Air',
        'Lion Air',
        'Super Air Jet'
    ];
    
    return view('pages.packages', compact('packages', 'packageTypes', 'hotels', 'airlines'));
    }
}
