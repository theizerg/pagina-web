<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Theizer';
        $user->last_name = 'Gonzalez';
        $user->username = 'tgonzalez';
        $user->email = 'admin@mail.com';
        $user->password = 'admin123';
        $user->status = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('admin');


         $user = new User;
        $user->name = 'Ada';
        $user->last_name = 'Tovar';
        $user->username = 'atovar';
        $user->email = 'ada@gmail.com';
        $user->password = 'admin123';
        $user->status = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('user');

    }
}
