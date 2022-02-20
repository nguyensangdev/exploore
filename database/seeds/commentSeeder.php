<?php

use Illuminate\Database\Seeder;

class commentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            [
                "id_account" => 1,
                "email"=> 'Vung tau',
                "full_name"=>'khanh',
                "status" => 1,
                "comment_content" => "dadsa",
                "id_news" => null,
                "id_tour" => null,
                "id_hotel" => null,
                "date_comment"=>'24/10/2019'
            ],
        ]);
    }
}
