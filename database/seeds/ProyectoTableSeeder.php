<?php

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $proyectos = new Proyecto ;
        $proyectos->titulo = 'Nuestros proyectos';
        $proyectos->cuerpo = 'Hemos planificado de la mejor manera, ayudar a los más necesitados es nuestra meta, poder llegar a esta meta es lo que deseamos, junto a tí lo podremos lograr, únete a esta causa.';
        $proyectos->class  = 'px-5 mb-5 pb-3 lead blue-grey-text text-center';
        $proyectos->status = 1; // (1) active (0)disabled
       
        $proyectos->save();


        
    }
}
