<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Headers;
use App\Models\Somos;
use App\Models\Objetivo;
use App\Models\Option;
use App\Models\Proyecto;
use App\Models\Equipo;
use App\Models\OptionProyecto;
use App\Models\OptionDonaciones;
use App\Models\Donaciones;
use App\Models\Persona;

class TestController extends Controller
{
    public function welcome()
    {
       
      
       
       $menus       = Menu::where('status', 1)->get(); 
       $headers     = Headers::where('status', 1)->get();
       $somos       = Somos::where('status', 1)->get();
       $objetivos   = Objetivo::where('status', 1)->get();
       $options     = Option::where('status', 1)->get();
       $proyectos   = Proyecto::where('status', 1)->get();
       $equipos     = Equipo::where('status', 1)->get();
       $optionsP    = OptionProyecto::where('status', 1)->get();
       $donaciones  = Donaciones::where('status', 1)->get();
       $optionsD    = OptionDonaciones::where('status', 1)->get();
       $personas    = Persona::where('status', 1)->get();

       return view('welcome',compact('menus',
                                     'headers',
                                     'somos',
                                     'objetivos',
                                     'options',
                                     'proyectos',
                                     'equipos',
                                     'optionsP',
                                     'donaciones',
                                     'optionsD',
                                     'personas'));
        
            
    }
}
