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
            ['John',  'admin', 'member-1.jpg', 'text text text'],
            ['John1',  'admin', 'member-1.jpg', 'text text text'],
            ['John2',  'admin', 'member-1.jpg', 'text text text'],
            ['John3',  'admin', 'member-1.jpg', 'text text text'],
            ['John4',  'admin', 'member-1.jpg', 'text text text'],
            ['John5',  'admin', 'member-1.jpg', 'text text text'],
            ['John6',  'admin', 'member-1.jpg', 'text text text'],
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
