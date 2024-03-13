<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Super Admin',
            'phone_number' => '+917874319733',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 1,
            'is_lock' => 0
        ]);

    }
}
