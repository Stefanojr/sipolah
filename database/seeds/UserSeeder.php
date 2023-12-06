<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name" => "petugas sampah",
                "username" => "petugas1",
                "email" => "petugas@gmail.com",
                "role" => "petugas",
                "password" => bcrypt ("123456789"),
            ],
            [
                "name" => "bank sampah",
                "username" => "banksampah1",
                "email" => "banksampah@gmail.com",
                "role" => "banksampah",
                "password" => bcrypt ("123456789"),
            ],
            [
                "name" => "pengguna",
                "username" => "pengguna1",
                "email" => "pengguna@gmail.com",
                "role" => "pengguna",
                "password" => bcrypt ("123456789"),
            ],
        ]);
    }
}
