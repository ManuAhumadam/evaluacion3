<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'nombre' => 'Santiago',
                'direccion' => 'Otoñal Ote. 11880, Las Condes, Región Metropolitana',
                'imagen' => '/img/sucursal1.png'
            ],
            [
                'nombre' => 'Viña de Mar',
                'direccion' => '10 Nte 730, Valparaíso, Viña del Mar 2520707, Valparaíso',
                'imagen' => '/img/sucursal2.png'
            ],
            [
                'nombre' => 'Quilpué',
                'direccion' => 'Bruselas 109, Quilpué, Valparaíso',
                'imagen' => '/img/sucursal3.png'
            ],
        ));
    }
}
