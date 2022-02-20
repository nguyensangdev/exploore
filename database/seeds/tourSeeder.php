<?php

use Illuminate\Database\Seeder;


class tourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour')->insert([
            [
                "tour_name" => "CHINESE TRAVEL - MUNICIPAL OF THE TET HOLIDAY 2020 [TRUONG GIA GIOI - PHUONG HOANG STOCK - KINH CHAU - VU HAN]",
                "tmp_name" => "CHINESE TRAVEL - MUNICIPAL OF THE TET HOLIDAY 2020 [TRUONG GIA GIOI - PHUONG HOANG STOCK - KINH CHAU - VU HAN]",
                "number_of_people" => 20,
                "tour_description" => "w",
                "rating" => 5.8,
                "tour_price" => 100,
                "sale" => 20,
                "location" => 1,
                "tour_img" => "the-river-Fenghuang-Hunan_74350603.jpg",
                "duration_tour" => 2,
                "start_day" => "24/10/2019",
                "status" => '1',
            ],

            [
                "tour_name" => "TOUR - DUBAI [CHRISTMAS - BURJ KHALIFA TOWER - YACHT CRUISE - MIRACLE GARDEN - SA MOLAR SAFARI]",
                "tmp_name" => "TOUR - DUBAI [CHRISTMAS - BURJ KHALIFA TOWER - YACHT CRUISE - MIRACLE GARDEN - SA MOLAR SAFARI]",
                "number_of_people" => 20,
                "tour_description" => "w",
                "rating" => 5.8,
                "tour_price" => 1200,
                "sale" => 20,
                "location" => 1,
                "tour_img" => "Burj-Al-Arab-in-Dubai_316526648.jpg",
                "duration_tour" => 2,
                "start_day" => "24/10/2019",
                "status" => '1',
            ],
            [
                "tour_name" => "EUROPEAN TRAVEL - 29 TET DAY IN 2020 [FRANCE - SPAIN - PORTUGAL]",
                "tmp_name" => "EUROPEAN TRAVEL - 29 TET DAY IN 2020 [FRANCE - SPAIN - PORTUGAL]",
                "number_of_people" => 20,
                "tour_description" => "w",
                "rating" => 5.8,
                "tour_price" => 1000,
                "sale" => 20,
                "location" => 1,
                "tour_img" => "Sagrada-Familia_387745048.jpg",
                "duration_tour" => 2,
                "start_day" => "24/10/2019",
                "status" => '1',
            ],
            [
                "tour_name" => "TOURISM IN DA NANG - ASIAN PARK - BA NDLA - GOLD BRIDGE - HOI AN",
                "tmp_name" => "TOURISM IN DA NANG - ASIAN PARK - BA NDLA - GOLD BRIDGE - HOI AN",
                "number_of_people" => 20,
                "tour_description" => "w",
                "rating" => 5.8,
                "tour_price" => 120,
                "sale" => 20,
                "location" => 1,
                "tour_img" => "Dragon-River-Bridge_676759177.jpg",
                "duration_tour" => 2,
                "start_day" => "24/10/2019",
                "status" => '1',
            ],

            [
                "tour_name" => "QATAR TRAVEL WELCOME NEW YEAR 2020 [QATAR - DOHA] 4-star HOTEL",
                "tmp_name" => "QATAR TRAVEL WELCOME NEW YEAR 2020 [QATAR - DOHA] 4-star HOTEL",
                "number_of_people" => 20,
                "tour_description" => "w",
                "rating" => 5.8,
                "tour_price" => 1250,
                "sale" => 20,
                "location" => 1,
                "tour_img" => "NhaTho-State-Grand_1389760331.jpg",
                "duration_tour" => 2,
                "start_day" => "24/10/2019",
                "status" => '1',
            ],
            [
                "tour_name" => "EUROPEAN TOUR IN TET HOLIDAY 2020 - 27 TET [SWITZERLAND - LIECHTENSTEIN - GERMANY]",
                "tmp_name" => "EUROPEAN TOUR IN TET HOLIDAY 2020 - 27 TET [SWITZERLAND - LIECHTENSTEIN - GERMANY]",
                "number_of_people" => 20,
                "tour_description" => "w",
                "rating" => 5.8,
                "tour_price" => 500,
                "sale" => 20,
                "location" => 1,
                "tour_img" => "Fraumunster-Church_577443817.jpg",
                "duration_tour" => 2,
                "start_day" => "24/10/2019",
                "status" => '1',
            ]
        ]);
    }
}
