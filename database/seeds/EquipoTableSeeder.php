<?php

use Illuminate\Database\Seeder;
use App\Models\Equipo;

class EquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipos = new Equipo;
        $equipos->titulo = 'Nuestro equipo';
        $equipos->cuerpo = 'Aqui podrás colocar la información que desees sobre el equipo de trabajo';
        $equipos->status = 1; // (1) active (0)disabled
        $equipos->save();
    }
}
