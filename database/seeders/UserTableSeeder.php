<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'anil kumar thakur',
            'email' => 'anilkumarthakur60@gmail.com',
            'password' => bcrypt('aaaassss'),
            'email_verified_at' => now(),


        ]);
    }
}
