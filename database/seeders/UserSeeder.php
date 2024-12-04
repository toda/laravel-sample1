<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'aaa',
                'email' => 'aaa@tody.jp',
                'password' => Hash::make('1qazxsw2'),
            ],
            [
                'name' => 'bbb',
                'email' => 'bbb@tody.jp',
                'password' => Hash::make('1qazxsw2'),
            ],
        ]);
    }
}
