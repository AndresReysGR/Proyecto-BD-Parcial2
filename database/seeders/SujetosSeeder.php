<?php

namespace Database\Seeders;

use App\Models\Sujetos;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class SujetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sujetos::create([
            'codigo'=> 'Insertar Codigo',
            'descripcion'=> 'Descripcion del Codigo',
            'cantidad' => '20.50',
            'precio' => '21.50',
            
        ]);
    }
}
