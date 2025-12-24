<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = [
            // Makkah
            [
                'image' => asset('storage/gallery/jamaah1.jpeg'),
                'title' => 'Jamaah Mahira Tour di Masjidil Haram',
                'category' => 'Makkah'
            ],
            [
                'image' => asset('storage/gallery/jamaah2.jpeg'),
                'title' => 'Jamaah di depan Ka\'bah',
                'category' => 'Makkah'
            ],
            [
                'image' => asset('storage/gallery/jamaah3.jpeg'),
                'title' => 'Tawaf bersama Muthawwif',
                'category' => 'Makkah'
            ],
            [
                'image' => asset('storage/gallery/makkah-1.jpeg'),
                'title' => 'Sa\'i Safa dan Marwah',
                'category' => 'Makkah'
            ],
            [
                'image' => asset('storage/gallery/makkah-2.jpeg'),
                'title' => 'Berdoa di Multazam',
                'category' => 'Makkah'
            ],
            
            // Madinah
            [
                'image' => asset('storage/gallery/madinah-1.jpeg'),
                'title' => 'Jamaah di Masjid Nabawi',
                'category' => 'Madinah'
            ],
            [
                'image' => asset('storage/gallery/madinah-2.jpeg'),
                'title' => 'Ziarah Raudhah',
                'category' => 'Madinah'
            ],
            [
                'image' => asset('storage/gallery/madinah-3.jpeg'),
                'title' => 'Berfoto di depan Payung Masjid Nabawi',
                'category' => 'Madinah'
            ],
            
            // Wisata Islami
            [
                'image' => asset('storage/gallery/wisata-1.jpeg'),
                'title' => 'Ziarah Jabal Rahmah',
                'category' => 'Wisata Islami'
            ],
            [
                'image' => asset('storage/gallery/wisata-2.jpeg'),
                'title' => 'Gua Hira',
                'category' => 'Wisata Islami'
            ],
            [
                'image' => asset('storage/gallery/wisata-3.jpeg'),
                'title' => 'Masjid Quba',
                'category' => 'Wisata Islami'
            ],
            [
                'image' => asset('storage/gallery/wisata-4.jpeg'),
                'title' => 'Jabal Uhud',
                'category' => 'Wisata Islami'
            ],
            
            // Akomodasi
            [
                'image' => asset('storage/gallery/hotel-1.jpeg'),
                'title' => 'Hotel Bintang 5 Dekat Masjidil Haram',
                'category' => 'Akomodasi'
            ],
            [
                'image' => asset('storage/gallery/hotel-2.jpeg'),
                'title' => 'Kamar Hotel yang Nyaman',
                'category' => 'Akomodasi'
            ],
            [
                'image' => asset('storage/gallery/hotel-3.jpeg'),
                'title' => 'View Hotel Menghadap Ka\'bah',
                'category' => 'Akomodasi'
            ],
            
            // Dokumentasi
            [
                'image' => asset('storage/gallery/jamaah4.jpeg'),
                'title' => 'Sholat Jamaah di Masjidil Haram',
                'category' => 'Dokumentasi'
            ],
            [
                'image' => asset('storage/gallery/jamaah5.jpeg'),
                'title' => 'Keberangkatan Jamaah Mahira Tour',
                'category' => 'Dokumentasi'
            ],
            [
                'image' => asset('storage/gallery/dokumentasi-1.jpeg'),
                'title' => 'Foto Bersama di Bandara',
                'category' => 'Dokumentasi'
            ],
            [
                'image' => asset('storage/gallery/dokumentasi-2.jpeg'),
                'title' => 'Pembagian Perlengkapan Umrah',
                'category' => 'Dokumentasi'
            ],
            [
                'image' => asset('storage/gallery/dokumentasi-3.jpeg'),
                'title' => 'Manasik Umrah',
                'category' => 'Dokumentasi'
            ],
            
            // Fasilitas
            [
                'image' => asset('storage/gallery/fasilitas-1.jpeg'),
                'title' => 'Bus AC Full',
                'category' => 'Fasilitas'
            ],
            [
                'image' => asset('storage/gallery/fasilitas-2.jpeg'),
                'title' => 'Makan Prasmanan Hotel',
                'category' => 'Fasilitas'
            ],
            [
                'image' => asset('storage/gallery/fasilitas-3.jpeg'),
                'title' => 'Perlengkapan Umrah Lengkap',
                'category' => 'Fasilitas'
            ],
            
            // Transportasi
            [
                'image' => asset('storage/gallery/transportasi-1.jpeg'),
                'title' => 'Pesawat Garuda Indonesia',
                'category' => 'Transportasi'
            ],
            [
                'image' => asset('storage/gallery/transportasi-2.jpeg'),
                'title' => 'Check-in di Bandara',
                'category' => 'Transportasi'
            ],
            [
                'image' => asset('storage/gallery/transportasi-3.jpeg'),
                'title' => 'Bus Pariwisata Mewah',
                'category' => 'Transportasi'
            ],
        ];

        $categories = [
            'all' => 'Semua',
            'Makkah' => 'Makkah',
            'Madinah' => 'Madinah',
            'Wisata Islami' => 'Wisata Islami',
            'Akomodasi' => 'Akomodasi',
            'Dokumentasi' => 'Dokumentasi',
            'Fasilitas' => 'Fasilitas',
            'Transportasi' => 'Transportasi'
        ];

        return view('pages.gallery', compact('galleries', 'categories'));
    }
}