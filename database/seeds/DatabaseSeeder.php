<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(seederProvince::class);
        $this->call(newsSeeder::class);
         $this->call(accountSeeder::class);
         $this->call(tourSeeder::class);
          $this->call(hotelSeeder::class);
          $this->call(tourDay::class);
         $this->call(seederProvince::class);
        $this->call(roomSeeder::class);



    }
}
