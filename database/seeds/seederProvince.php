<?php

use Illuminate\Database\Seeder;

class seederProvince extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('province')->insert([
            [
                "name" => "Thành phố Hà Nội",
            ],
            [
                "name" => "Tỉnh Hà Giang",
            ],
            [
                "name" => "Tỉnh Cao Bằng",
            ],
            [
                "name" => "Tỉnh Bắc Kạn",
            ],
            [
                "name" => "Tỉnh Tuyên Quang",
            ],
            [
                "name" => "Tỉnh Lào Cai",
            ],
        ]);
    }
}
