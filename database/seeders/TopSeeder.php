<?php

namespace Database\Seeders;

use App\Models\Top;
use Illuminate\Database\Seeder;

class TopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Top::create([
            'Name'=>'Keyboard',
            'Id_Categoria'=>'1',
            'Id_User'=>'1',
            'Description'=>'aaaaaaaaaa'
        ]);
        Top::create([
            'Name'=>'Mouse',
            'Id_Categoria'=>'1',
            'Id_User'=>'1',
            'Description'=>'aaaaaaaaaa'
        ]);
        Top::create([
            'Name'=>'Screen',
            'Id_Categoria'=>'1',
            'Id_User'=>'1',
            'Description'=>'aaaaaaaaaa'
        ]);

    }
}
