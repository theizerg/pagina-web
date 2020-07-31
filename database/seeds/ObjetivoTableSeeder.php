<?php

use Illuminate\Database\Seeder;
use App\Models\Objetivo;

class ObjetivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objetivos = new Objetivo;
        $objetivos->subtitulo = 'Titulo del objetivo';
        $objetivos->cuerpo = 'En esta sección se podrá ir escribiendo todo lo que desees';
        $objetivos->class  = 'col-lg-3 col-md-6 col-sm-12 blue darken-4 text-white wow zoomIn';
        $objetivos->status = 1; // (1) active (0)disabled
        $objetivos->save();


        $objetivos = new Objetivo;
        $objetivos->subtitulo = 'Titulo del objetivo';
        $objetivos->cuerpo = 'En esta sección se podrá ir escribiendo todo lo que desees';
        $objetivos->class  = 'col-lg-3 col-md-6 col-sm-12 red darken-4 text-white wow fadeInUp';
        $objetivos->status = 1; // (1) active (0)disabled
        $objetivos->save();

        $objetivos = new Objetivo;
        $objetivos->subtitulo = 'Titulo del objetivo';
        $objetivos->cuerpo = 'En esta sección se podrá ir escribiendo todo lo que desees';
        $objetivos->class  = 'col-lg-3 col-md-6 col-sm-12 green darkeen-3 text-white wow zoomIn';
        $objetivos->status = 1; // (1) active (0)disabled
        $objetivos->save();



        $objetivos = new Objetivo;
        $objetivos->subtitulo = 'Título del objetivo';
        $objetivos->cuerpo = 'En esta sección se podrá ir escribiendo todo lo que desees';
        $objetivos->class  = 'col-lg-3 col-md-6 col-sm-12 blue accent-1 text-white wow fadeInUp';
        $objetivos->status = 1; // (1) active (0)disabled
        $objetivos->save();
    }
}
