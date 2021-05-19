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
            'Description'=>'Today we are going to talk about the mouse, in this top we will have the limit at € 20 so below we will show you which according to our studies are the best amazon mice for less than € 20: ',
            'pn1'=>'Logitech AOC',
            'pn2'=>'bbbbbbbbbb',
            'pn3'=>'ccccccccc',
            'p1'=>'Rii RM200 Wireless Mouse with Rechargeable Battery, 5 Buttons 2.4 GHz Nano Receiver, 3 Adjustable DPI Levels Multicolor LED, Ideal for Notebooks, PCs, Computers. (Black). ',
            'p2'=>'aaaaaaaaaa',
            'p3'=>'aaaaaaaaaa',
        ]);
        Top::create([
            'Name'=>'Mouse',
            'Id_Categoria'=>'1',
            'Id_User'=>'1',
            'Description'=>'<h1>aaaaaaaaaa</h1>',
            'pn1'=>'aaaaaaaaaa',
            'pn2'=>'bbbbbbbbbb',
            'pn3'=>'aaaaaaaaaa',
            'p1'=>'aaaa',
            'p2'=>'aaaaaaaaaa',
            'p3'=>'aaaaaaaaaa',
        ]);
        Top::create([
            'Name'=>'Screen',
            'Id_Categoria'=>'1',
            'Id_User'=>'1',
            'Description'=>'aaaaaaaaaa',
            'p1'=>'<h1>aaaaaaaaaa</h1>',
            'pn1'=>'aaaaaaaaaa',
            'pn2'=>'ccccccccccc',
            'pn3'=>'aaaaaaaaaa',
            'p2'=>'aaaaaaaaaa',
            'p3'=>'aaaaaaaaaa',
        ]);

    }
}
