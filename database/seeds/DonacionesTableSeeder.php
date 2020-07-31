<?php

use Illuminate\Database\Seeder;
use App\Models\Donaciones;

class DonacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $donaciones = new Donaciones;
        $donaciones->titulo = '¿Deseas hacer donaciones?';
        $donaciones->cuerpo = 'El cuerpo de las donaciones, le agregas lo que desees, para tu comodidad y podrás redactarlo como lo desees.';
        $donaciones->status = 1; // (1) active (0)disabled
        $donaciones->save();
    }
}
