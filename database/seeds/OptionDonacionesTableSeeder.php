<?php

use Illuminate\Database\Seeder;
use App\Models\OptionDonaciones;

class OptionDonacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $proyecto = new OptionDonaciones;

        $proyecto->titulo = 'Titulo de la donación';
        $proyecto->cuerpo = ' Hemos tomado la desición de ayudar a las familias venezolanas, ofrecerles a ellos una oportunidad para mejorar su estilo de vida en cuanto a la alimentación.';
        $proyecto->class  = 'text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded';
        $proyecto->status = 1; // (1) active (0)disabled
        $proyecto->save();

        $proyecto = new OptionDonaciones;

        $proyecto->titulo = 'Titulo de la donación';
        $proyecto->cuerpo = ' Hemos tomado la desición de ayudar a las familias venezolanas, ofrecerles a ellos una oportunidad para mejorar su estilo de vida en cuanto a la alimentación.';
        $proyecto->class  = 'text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded';
        $proyecto->status = 1; // (1) active (0)disabled
        $proyecto->save();

        $proyecto = new OptionDonaciones;

        $proyecto->titulo = 'Titulo de la donación';
        $proyecto->cuerpo = ' Hemos tomado la desición de ayudar a las familias venezolanas, ofrecerles a ellos una oportunidad para mejorar su estilo de vida en cuanto a la alimentación.';
        $proyecto->class  = 'text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong py-3 px-3 rounded';
        $proyecto->status = 1; // (1) active (0)disabled
        $proyecto->save();

     }

    
}
