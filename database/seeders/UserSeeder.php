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
            'name' => 'Manolo',

            'email'=>'manolopenya@dws.es',
            'password'=>bcrypt('secret'),
            ]);
        User::create([
            'name' => 'Ana',
            'email'=>'anapenya@dws.es',
            'password'=>bcrypt('secret'),
            ]);
        User::create([
            'name' => 'Jose',
            'email'=>'josepenya@dws.es',
            'password'=>bcrypt('secret'),
            ]);
        User::create([
            'name' => 'Ruben',
            'email'=>'rubenpenya@dws.es',
            'password'=>bcrypt('secret'),
            ]);
        User::create([
            'name' => 'Maria',
            'email'=>'mariapenya@dws.es',
            'password'=>bcrypt('secret'),
            ]);
        User::create([    
            'name' => 'admin',
            'email'=>'admin@dws.es',
            'password'=>bcrypt('secret'),
            ]);            
    }
}
