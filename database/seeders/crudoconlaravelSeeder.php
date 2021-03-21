<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class crudoconlaravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    
        DB::table('crudoconlaravel')->insert([
            'codigo'=> 'Insertar Codigo',
            'descripcion'=> 'Descripcion del Codigo',
            'cantidad' => '20.50',
            'precio' => '21.50',
            
        ]);
        //
    }
}
