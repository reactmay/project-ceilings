<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ['Сергей', 'zugurysus@gmail.com',  '12341234'],
        ];

        foreach($seeds as $seed){
            User::create([
                'name' => $seed[0],
                'email' => $seed[1],
                'password' => bcrypt($seed[2]),
            ]);
        }
    }
}
