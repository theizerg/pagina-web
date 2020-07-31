<?php

use Illuminate\Database\Seeder;
use App\Models\Persona;


class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $persona = new Persona ;
        $persona->nombre            = 'Theizer Gabriel';
        $persona->apellido          = 'Gonzalez Lugo';
        $persona->profesion         = 'analista programador';
        $persona->pensamiento       = 'Mi deseo es apoyar a esta noble causa, dando lo mejor de mi en todo momento para que todo sea una hermosa relidad-';
        $persona->icono_red_social  = 'fab fa-instagram';
        $persona->red_social        = '@Theizerg';
        $persona->imagen            = 'imagen.jpg';
        $persona->status            = 1; // (1) active (0)disabled
       
        $persona->save();


        $persona = new Persona ;
        $persona->nombre            = 'Marta Gabriela';
        $persona->apellido          = 'Gonzalez Lugo';
        $persona->profesion         = 'Escritora de blogs';
        $persona->pensamiento       = 'Mi deseo es apoyar a esta noble causa, dando lo mejor de mi en todo momento para que todo sea una hermosa relidad-';
        $persona->icono_red_social  = 'fab fa-instagram';
        $persona->red_social        = '@marta_9';
        $persona->imagen            = 'imagen.jpg';
        $persona->status            = 1; // (1) active (0)disabled
       
        $persona->save();

        $persona = new Persona ;
        $persona->nombre            = 'Maria Fernanda';
        $persona->apellido          = 'Martinez';
        $persona->profesion         = 'Comunicador social';
        $persona->pensamiento       = 'Mi deseo es apoyar a esta noble causa, dando lo mejor de mi en todo momento para que todo sea una hermosa relidad-';
        $persona->icono_red_social  = 'fab fa-instagram';
        $persona->red_social        = '@maria_fer';
        $persona->imagen            = 'imagen.jpg';
        $persona->status            = 1; // (1) active (0)disabled
       
        $persona->save();

        $persona = new Persona ;
        $persona->nombre            = 'Albert Yader';
        $persona->apellido          = 'Molsalve';
        $persona->profesion         = 'Periodista';
        $persona->pensamiento       = 'Mi deseo es apoyar a esta noble causa, dando lo mejor de mi en todo momento para que todo sea una hermosa relidad-';
        $persona->icono_red_social  = 'fab fa-instagram';
        $persona->red_social        = '@albert_y';
        $persona->imagen            = 'imagen.jpg';
        $persona->status            = 1; // (1) active (0)disabled
       
        $persona->save();
    }
}
