<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/listkerja', function () {
    return view ('/listkerja', data: [
        "pekerjaan" => [
            [
                "id" => "1",
                "judul" => "Guru",
                "gaji" => "Rp. 17.000.000"
            ],
            [
                "id" => "2",
                "judul" => "Desainer",
                "gaji" => "Rp. 9.000.000"
            ],
            [
                "id" => "3",
                "judul" => "Animator",
                "gaji" => "Rp. 13.000.000"
            ],
        ]
    ]);
});

Route::get('/contact', function () {
    return view ('/contact');
});

Route::get('listkerja/{id_pekerjaan}', function ($id) {
    $pekerjaan = [
        [
            "id" => "1",
            "judul" => "Guru",
            "gaji" => "Rp. 17.000.000"
        ],
        [
            "id" => "2",
            "judul" => "Desainer",
            "gaji" => "Rp. 9.000.000"
        ],
        [
            "id" => "3",
            "judul" => "Animator",
            "gaji" => "Rp. 13.000.000"
        ],
    ];

    $kerja = Arr::first($pekerjaan, fn ($kerja): bool=> $kerja["id"] ==$id); 
    return view('kerja', ['kerja' => $kerja]);
});
