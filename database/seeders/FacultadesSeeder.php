<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacultadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codfacultad' => '10',
                'nomfacultad' => 'Artes'
            ],
            [
                'codfacultad' => '20',
                'nomfacultad' => 'Ingenieria'
            ],
            [
                'codfacultad' => '30',
                'nomfacultad' => 'Ciencias Sociales'
            ],
            [
                'codfacultad' => '40',
                'nomfacultad' => 'Ciencias Exactas'
            ],
            [
                'codfacultad' => '50',
                'nomfacultad' => 'Derecho'
            ]
        ];

        DB::table('facultades')->insert($datos);
    }
}
