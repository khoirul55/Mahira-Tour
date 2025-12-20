<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = [
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
            'image' => asset('storage/gallery/jamaah4.jpeg'),
            'title' => 'Sholat Jamaah di Masjidil Haram',
            'category' => 'Dokumentasi'
        ],
        [
            'image' => asset('storage/gallery/jamaah5.jpeg'),
            'title' => 'Keberangkatan Jamaah Mahira Tour',
            'category' => 'Dokumentasi'
        ],
        // Anda bisa menambahkan lebih banyak foto di sini
        // dengan menyesuaikan nama file dan kategori
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
