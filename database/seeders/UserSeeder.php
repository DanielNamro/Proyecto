<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'Login' => 'Pepe',
            'Name' => 'Pepon',
            'Surname' => 'Pepito',
            'Tlf' => '1234567',
            'Email' => 'aa@pep.es',
            'Rol' => 'User',
            'password' => 'aaaaaaaaaa'
        ]);
        User::create([
            'Login' => 'Pepa',
            'Name' => 'Pepoa',
            'Surname' => 'Pepita',
            'Tlf' => '123451',
            'Email' => 'aa@pepa.es',
            'Rol' => 'User',
            'password' => 'aaaaaaaaaa'
        ]);
        User::create([
            'Login' => 'Pepi',
            'Name' => 'Pepi',
            'Surname' => 'Pepiti',
            'Tlf' => '1239',
            'Email' => 'aa@pepi.es',
            'Rol' => 'User',
            'password' => 'aaaaaaaaaa'
        ]);
    }
}
