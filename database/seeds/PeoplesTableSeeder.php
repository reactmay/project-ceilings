<?php

use Illuminate\Database\Seeder;
use App\People;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ['John',  'admin', '700944389.png', 'text text text', '10.09.1994'],
            ['John1',  'admin', '884989437.png', 'text text text', '10.09.1994'],
            ['John2',  'admin', '8834439.png', 'text text text', '10.09.1994'],
            ['John3',  'admin', '112893361.png', 'text text text', '10.09.1994'],
            ['John4',  'admin', '283106060.png', 'text text text', '10.09.1994'],
            ['John5',  'admin', '398797541.png', 'text text text', '10.09.1994'],
            ['John6',  'admin', '81528509.png', 'text text text', '10.09.1994'],
        ];

        foreach($seeds as $seed){
            People::create([
                'name' => $seed[0],
                'position' => $seed[1],
                'images' => $seed[2],
                'text' => $seed[3],
            ]);
        }
    }
}
