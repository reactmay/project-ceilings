<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ['Service1',  'text text text', 'fa fa-eye fa-5x'],
            ['Service2',  'text text text', 'fa fa-eye fa-5x'],
            ['Service3',  'text text text', 'fa fa-eye fa-5x'],
            ['Service4',  'text text text', 'fa fa-eye fa-5x'],
            ['Service5',  'text text text', 'fa fa-eye fa-5x'],
            ['Service6',  'text text text', 'fa fa-eye fa-5x'],
        ];

        foreach($seeds as $seed){
            Service::create([
                'name' => $seed[0],
                'text' => $seed[1],
                'icon' => $seed[2],
            ]);
        }
    }
}
