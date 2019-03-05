<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ['zugurysus@gmail.com',  'sunwellcommunity@gmail.com'],
        ];

        foreach($seeds as $seed){
            Setting::create([
                'mail_admin' => $seed[0],
                'mail_from' => $seed[1],
            ]);
        }
    }
}
