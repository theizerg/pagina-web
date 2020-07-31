<?php

use Illuminate\Database\Seeder;
use App\Models\OptionProyecto;

class OptionProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proyecto = new OptionProyecto;

        $proyecto->titulo = 'Titulo del objetivo';
        $proyecto->cuerpo = ' Hemos tomado la desición de ayudar a las familias venezolanas, ofrecerles a ellos una oportunidad para mejorar su estilo de vida en cuanto a la alimentación.';
        $proyecto->class  = 'row wow fadeInLeft';
        $proyecto->status = 1; // (1) active (0)disabled
        $proyecto->icono = 'fa fa-book fa-2x cyan-text';
        $proyecto->imagen = 'no-image.jpg'; // (1) active (0)disabled
        $proyecto->save();


        $proyecto = new OptionProyecto;
        
        $proyecto->titulo = 'Titulo del objetivo';
        $proyecto->cuerpo = ' Hemos tomado la desición de ayudar a las familias venezolanas, ofrecerles a ellos una oportunidad para mejorar su estilo de vida en cuanto a la alimentación.';
        $proyecto->class  = 'row wow fadeInRight ';
        $proyecto->status = 1; // (1) active (0)disabled
        $proyecto->icono = 'fa fa-book fa-2x cyan-text';
        $proyecto->imagen = 'no-image.jpg'; // (1) active (0)disabled
        $proyecto->save();
    } 
}
