<?php

use Illuminate\Database\Seeder;

class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            [
                "email" => "admin@gmail.com",
                "password" => "admin123",
                "full_name" => "admin",
                "address" => "Việt nam",
                "phone" => "0983505309",
                "avatar" => "hotel-6.jpg",
                "permissions" => "1",
            ]
        ]);
    }
}
