<?php

use Illuminate\Database\Seeder;

class hotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel')->insert([
            [
                "hotel_name" => "MAI HOUSE Saigon",
                "hotel_price" => 500,
                "tmp_name"=> 'MAI HOUSE Saigon',
                "id_account"=>1,
                "hotel_address" => "157 Nam Ky Khoi Nghia Street (or 01 Ngo Thoi Nhiem Street), Ward 6, District 3, Quận 3, TP. Hồ Chí Minh, Việt Nam",
                "location" => "1",
                "hotel_describes" => "Enjoy world-class, world-class service at MAI HOUSE Saigon",
                "hotel_img" => "223869171.jpg",
                "status" => "1",
                "sale" => 20,
                'rating'=> 5.8
            ],
            [
                "hotel_name" => "Icon Saigon - Luxury Design Hotel",
                "hotel_price" => 600,
                "tmp_name"=> 'Icon Saigon - Luxury Design Hotel',
                "id_account"=>1,
                "hotel_address" => "65 - 67 Hai Ba Trung, District 01, District 1, TP. Ho Chi Minh City, Vietnam",
                "location" => "1",
                "hotel_describes" => "In the heart of the city. Ho Chi Minh",
                "hotel_img" => "225991101.jpg",
                "status" => "1",
                "sale" => 20,
                'rating'=> 5.8
            ],
            [
                "hotel_name" => "Caravelle Saigon",
                "hotel_price" => 800,
                "tmp_name"=> 'Caravelle Saigon',
                "id_account"=>1,
                "hotel_address" => "19 - 23 Lam Son Square, District 1, TP. Ho Chi Minh City, Vietnam",
                "location" => "1",
                "hotel_describes" => "In the heart of the city. Ho Chi Minh",
                "hotel_img" => "214186294.jpg",
                "status" => "1",
                "sale" => 20,
                'rating'=> 5.8
            ],

            [
                "hotel_name" => "Hotel Nikko Saigon",
                "hotel_price" => 1000,
                "tmp_name"=> 'Hotel Nikko Saigon',
                "id_account"=>1,
                "hotel_address" => "235 Nguyen Van Cu Street, District 1, City. Ho Chi Minh City, Vietnam",
                "location" => "1",
                "hotel_describes" => "Enjoy world-class, world-class service at Hotel Nikko Saigon",
                "hotel_img" => "216168941.jpg",
                "status" => "1",
                "sale" => 20,
                'rating'=> 5.8
            ],
            [
                "hotel_name" => "Sofitel Saigon Plaza",
                "hotel_price" => 260,
                "tmp_name"=> 'Sofitel Saigon Plaza',
                "id_account"=>1,
                "hotel_address" => "17 Le Duan Boulevard, District 1, City. Ho Chi Minh City, Vietnam",
                "location" => "1",
                "hotel_describes" => "Enjoy world-class, world-class service at Sofitel Saigon Plaza",
                "hotel_img" => "160820655.jpg",
                "status" => "1",
                "sale" => 20,
                'rating'=> 5.8
            ],
            [
                "hotel_name" => "Mia Saigon – Luxury Boutique Hotel ",
                "hotel_price" => 580,
                "tmp_name"=> 'Mia Saigon – Luxury Boutique Hotel ',
                "id_account"=>1,
                "hotel_address" => " 2-4 Street 10, An Phu ward, District 2, Quận 2, TP. Hồ Chí Minh, Việt Nam ",
                "location" => "1",
                "hotel_describes" => "Enjoy world-class, world-class service at Mia Saigon - Luxury Boutique Hotel",
                "hotel_img" => "199231782.jpg",
                "status" => "1",
                "sale" => 0,
                'rating'=> 5.8
            ],
        ]);
    }
}
