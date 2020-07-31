<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(HeaderTableSeeder::class);
        $this->call(SomosTableSeeder::class);
        $this->call(ObjetivoTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(ProyectoTableSeeder::class);
        $this->call(EquipoTableSeeder::class);
        $this->call(OptionProyectosTableSeeder::class);
        $this->call(DonacionesTableSeeder::class);
        $this->call(OptionDonacionesTableSeeder::class);
        $this->call(PersonaTableSeeder::class);
    }
}
