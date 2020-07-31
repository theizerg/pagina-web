<?php

use Illuminate\Database\Seeder;
use App\Models\Somos;

class SomosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $somos = new Somos;
        $somos->titulo = '¿Quiénes somos?';
        $somos->cuerpo = 'En esta parte se agregará de manera personalizada todo lo que tenga que ver en los datos de quienes somos, para que la gente nos pueda conocer de una manera más directa y todo sea confiable.';
        $somos->status = 1; // (1) active (0)disabled
        $somos->save();
    }
}
