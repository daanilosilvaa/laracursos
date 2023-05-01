<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Danilo Silva',
            'email'=> 'daanilo.silvaa96@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
