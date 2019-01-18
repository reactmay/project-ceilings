<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ['Work1',  'text text text', 'portx1.jpg', 'Mobile'],
            ['Work2',  'text text text', 'portx1.jpg', 'Mobile'],
            ['Work3',  'text text text', 'portx1.jpg', 'Mobile'],
            ['Work4',  'text text text', 'portx1.jpg', 'Dev'],
            ['Work5',  'text text text', 'portx1.jpg', 'Dev'],
            ['Work6',  'text text text', 'portx1.jpg', 'App'],
            ['Work7',  'text text text', 'portx1.jpg', 'Geg'],
            ['Work8',  'text text text', 'portx1.jpg', 'Geg'],
            ['Work9',  'text text text', 'portx1.jpg', 'Geg'],
        ];

        foreach($seeds as $seed){
            Portfolio::create([
                'name' => $seed[0],
                'text' => $seed[1],
                'images' => $seed[2],
                'filter' => $seed[3],
            ]);
        }
    }
}
