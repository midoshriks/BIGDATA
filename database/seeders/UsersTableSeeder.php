<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => "mido",
            'last_name' => "shriks",
            'email' => "midoshriks36@gmail.com",
            'phone' => "01207200622",
            'photo' => "avatar5.png",
            'password' => bcrypt('12345678'),
            'qr_code' =>  "100",
        ]);

        $user = User::create([
            'first_name' => "bode",
            'last_name' => "alia",
            'email' => "bodealia@gmail.com",
            'phone' => "01128570252",
            'photo' => "avatar.png",
            'password' => bcrypt('12345678'),
            'qr_code' =>  "100" . random_int(100, 999),
        ]);

        for ($i = 1; $i < 2; $i++) {
            # code...
            $user = User::create([
                'first_name' => "user" . $i,
                'last_name' => "users",
                'email' => "users$i@gmail.com",
                'phone' => "012000000" . $i,
                'photo' => "avatar$i.png",
                'password' => bcrypt("12345678"),
                'qr_code' =>  "100" . random_int(100, 999),
            ]);
        }
    }
}
