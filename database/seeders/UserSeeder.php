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
        User::create([
            "name" => 'Lekso',
            "email" => "leks@leks.com",
            "password" => '123'
        ]);

        User::create([
            "name" => 'Ana',
            "email" => "an@an.com",
            "password" => '123'
        ]);
    }
}
