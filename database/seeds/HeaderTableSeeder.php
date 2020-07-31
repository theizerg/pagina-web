<?php

use Illuminate\Database\Seeder;
use App\Models\Headers;
class HeaderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $header = new Headers;
        $header->titulo = 'Puedes agregar el titulo de tu preferencia';
        $header->cuerpo = 'El cuerpo del header, le agregas lo que desees, para tu comodidad y podrás redactarlo como lo desees.';
        $header->status = 1; // (1) active (0)disabled
        $header->save();
    }
}
