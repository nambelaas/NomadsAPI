<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => "Koko",
            'email' => "koko@gmail.com",
            'email_verified_at' => new \DateTime,
            'password' => bcrypt('123'),
            
        ];
        
        \DB::table('users')->insert($users);
    }
}
