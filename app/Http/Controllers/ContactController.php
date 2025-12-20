<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index()
    {
 $contactInfo = [
        'office_name' => 'Mahira Tour & Travel',
        'tagline' => 'Umrah Bersama, Berkah Bersama',
        'main_office' => 'Jl. Muradi, Desa Koto Keras, Kecamatan Pesisir Bukit, Kota Sungai Penuh',
        'phone' => '0821 8451 5310',
        'whatsapp' => '6282184515310',
        'website' => 'www.mahiratour.co.id',
        'instagram' => '@mahiratourofficial',
        'facebook' => 'Mahira Umrah',
        'email' => 'info@mahiratour.co.id',
        'hours' => [
            'weekday' => 'Senin - Jumat: 08.00 - 17.00 WIB',
            'saturday' => 'Sabtu: 08.00 - 14.00 WIB',
            'sunday' => 'Minggu: Libur'
        ]
    ];
    
    $branches = [
        [
            'name' => 'Kantor Pusat',
            'city' => 'Sungai Penuh',
            'address' => 'Jl. Muradi, Desa Koto Keras, Kec. Pesisir Bukit',
            'phone' => '0821 8451 5310'
        ],
        [
            'name' => 'Regional Sumatera Barat',
            'city' => 'Padang',
            'address' => 'Jl. Raya Taruko 1 / Manunggal 3 No 66 A, RT 5 RW 8, Korong Gadang, Kec. Kuranji',
            'phone' => '-'
        ],
        [
            'name' => 'Cabang Jambi',
            'city' => 'Jambi',
            'address' => 'Jl. Sunan Gunung Djati RT.28, Kenali Asam, Kota Baru',
            'phone' => '-'
        ],
        [
            'name' => 'Cabang Jakarta',
            'city' => 'Jakarta Timur',
            'address' => 'Jl. Tegal Amba No 6, Desa Lorong Sawit, Kec. Lorong Sawit',
            'phone' => '-'
        ],
        [
            'name' => 'Cabang Padang Utara',
            'city' => 'Padang',
            'address' => 'Jl. Pategangan, Gang L No. 4, RT. 004, RW. 003, Air Tawar Barat',
            'phone' => '-'
        ],
        [
            'name' => 'Cabang Bengkulu',
            'city' => 'Bengkulu',
            'address' => 'Jl. Sutoyo 6, Kelurahan Tanah Patah, Kec. Ratu Agung, RW. 02, RT. 19, No. 72',
            'phone' => '-'
        ],
        [
            'name' => 'Cabang Merangin',
            'city' => 'Merangin',
            'address' => 'Muara Panco Barat, Kec. Renah Pembarap',
            'phone' => '-'
        ]
    ];
    
    $socialMedia = [
        'facebook' => 'https://facebook.com/MahiraUmrah',
        'instagram' => 'https://instagram.com/mahiratourofficial',
        'whatsapp' => 'https://wa.me/6282184515310'
    ];
    
    return view('pages.contact', compact('contactInfo', 'branches', 'socialMedia'));
    }
}
