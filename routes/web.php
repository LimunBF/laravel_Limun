<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\pekerjaan;

$pekerjaan = [
    [
        'id' => '1',
        'judul' => 'Guru',
        'gaji' => 'Rp. 17.000.000'
    ],
    [
        'id' => '2',
        'judul' => 'Desainer',
        'gaji' => 'Rp. 9.000.000'
    ],
    [
        'id' => '3',
        'judul' => 'Animator',
        'gaji' => 'Rp. 15.000.000'
    ]
];

// Using variable pekerjaan
Route::get('/', function () use($pekerjaan) {
    return view('home', [
        'pekerjaan' => $pekerjaan
    ]);
});

// Using Models App pekerjaan
Route::get('/listkerja', function () {
    return view('listkerja', [
        'pekerjaan' => pekerjaan ::daftar_kerja()
    ]);
});

Route::get('/ listkerja/{id}', function ($id) {
    $kerja = pekerjaan::daftar_kerja($id);
    // dd($kerja);
    return view('kerja', ['kerja' => $kerja]);

});

Route::get('/contact', function () {
    return view('/contact');
});