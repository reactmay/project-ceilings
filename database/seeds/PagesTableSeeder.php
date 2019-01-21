<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ['Главная',  'home', 'text text text text', ''],
            ['О нас',  'about', 'text text text text', ''],
        ];

        foreach($seeds as $seed){
            Page::create([
                'name' => $seed[0],
                'alias' => $seed[1],
                'text' => $seed[2],
                'images' => $seed[3],
            ]);
        }
    }
}
