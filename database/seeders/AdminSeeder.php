<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Koffi',
            'lastname'  => 'Seglo',
            'email'     => 'kofesto@hotmail.com',
            'password'  =>  Hash::make('pass123'),  // password hashed
            'address'   => '24 ago palace way',
            'city'      => 'Isolo',
            'state'     => 'Lagos',
            'country'   => 'Nigeria'
        ]);
    }
}
