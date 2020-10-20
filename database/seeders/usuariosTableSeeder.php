<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class usuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        // 20 datos falsos
        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'nombre' => str_random(10),
                'apellido' => str_random(10),
                'telefono' => int_random(10),
                'direccion' => str_random(10),
                'mail' => str_random(10)
            ]);
        }
    }
}
