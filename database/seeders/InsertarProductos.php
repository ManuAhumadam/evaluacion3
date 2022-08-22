<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [//Celular 1
                'codigounico' => '5368sad456',
                'nombre'      => 'Iphone 13',
                'cantidad'    => '112',
                'descripcion' => 'Apple iPhone 13 Pro Max 128GB',
                'valor'       => '1159990',
                'categoria_id' => '1',
                'sucursal_id' => '1',
            ],
            [//Celular 2
                'codigounico' => '999587abcd2',
                'nombre'      => 'Samsung S22',
                'cantidad'    => '99',
                'descripcion' => 'SAMSUNG GALAXY S22 128GB PHANTOM BLACK',
                'valor'       => '899990',
                'categoria_id' => '2',
                'sucursal_id' => '2',   
            ],
            [//Celular 3
                'codigounico' => 'abcd12487xyz',
                'nombre'      => 'Moto g60',
                'cantidad'    => '155',
                'descripcion' => 'Motorola G60 Memoria interna: 128GB Memoria Ram 4GB',
                'valor'       => '199990',
                'categoria_id' => '3',
                'sucursal_id' => '3',   
            ]
            ));
    }
}
