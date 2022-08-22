<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'gama_celular' => 'Gama Alta'
            ],
            [
                'gama_celular' => 'Gama Media'
            ],
            [
                'gama_celular' => 'Gama Baja'
            ]
            ));
    }
}
