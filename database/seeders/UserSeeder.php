<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => Str::random(10),
                'password' => Hash::make('123456789'),
            ]
        );
    }
}
