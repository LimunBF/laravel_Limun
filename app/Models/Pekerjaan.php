<?php
namespace App\Models;

    class pekerjaan{
        public static function daftar_kerja(): array{
            return [
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
        }
    }

?>