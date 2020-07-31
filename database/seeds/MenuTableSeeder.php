<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $menu = new Menu;
        $menu->nombre = '¿Quiénes somos?';
        $menu->ruta = '#somos';
        $menu->status = 1; // (1) active (0)disabled
        $menu->save();


        $menu = new Menu;
        $menu->nombre = 'Nuestros proyectos';
        $menu->ruta = '#proyectos';
        $menu->status = 1; // (1) active (0)disabled
        $menu->save();

        $menu = new Menu;
        $menu->nombre = 'Nuestro equipo de trabajo';
        $menu->ruta = '#equipo';
        $menu->status = 1; // (1) active (0)disabled
        $menu->save();



        $menu = new Menu;
        $menu->nombre = 'Contáctanos';
        $menu->ruta = '#contact';
        $menu->status = 1; // (1) active (0)disabled
        $menu->save();
    }
}
