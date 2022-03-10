<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name'=>'Jered',
            'email'=>'jered@gmail.com',
            'password'=>\bcrypt('12345'),
       ]); 
    }
}
