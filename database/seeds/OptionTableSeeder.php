<?php

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objetivos = new Option;
        $objetivos->titulo = 'Misión';
        $objetivos->cuerpo = 'En esta sección se podrá ir escribiendo todo lo que desees';
        $objetivos->class  = 'col-md-4 mb-r wow fadeInUp';
        $objetivos->icono  = 'fas fa-user fa-3x orange-text';
        $objetivos->status = 1; // (1) active (0)disabled
        $objetivos->save();


        $objetivos = new Option;
        $objetivos->titulo = 'Visión';
        $objetivos->cuerpo = 'En esta sección se podrá ir escribiendo todo lo que desees';
        $objetivos->class  = 'col-md-4 mb-r wow fadeInUp';
        $objetivos->icono  = 'fas fa-flag fa-3x  blue-grey-text';
        $objetivos->status = 1; // (1) active (0)disabled
        $objetivos->save();

        $objetivos = new Option;
        $objetivos->titulo = 'Valores';
        $objetivos->cuerpo = 'En esta sección se podrá ir escribiendo todo lo que desees';
        $objetivos->class  = 'col-md-4 mb-r wow fadeInUp';
        $objetivos->icono  = 'fa fa-cubes fa-3x red-text';
        $objetivos->status = 1; // (1) active (0)disabled
        $objetivos->save();
    }
}
