<?php

use Illuminate\Database\Seeder;

class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                "id_account" => "1",
                "news_title" => '10 of the best live music pubs in the UK: readers’ travel tips',
                "news_content" => 'The Backroom venue in the Greystones pub is such a small and intimate venue that the audience can converse with the musicians. Earlier this year we saw a Canadian folk duo Pharis and Romero who blew our socks off with their beautiful harmonies and banjo playing. We have also seen Wreckless Eric there and a singer-songwriter called Sarah Jarosz from Texas whose Americana and contemporary folk also blew us away. The added bonus is that Greystones is the flagship pub for a local brewery, Thornbridge, and so there is a wide range of delicious craft beers and ales to sup while enjoying the tunes.',
                "news_describes" => "Celtic jams, Americana, jazz and post-punk all get the joint jumping at our tipsters’ favourite pub venues from the Highlands down to Cornwall",
                "news_img" => "2500.jpg",
                "date_news"=>'27/10/2019'
            ],
            [
                "id_account" => "1",
                "news_title" => 'Brilliant winter holidays in Europe: readers’ travel tips',
                "news_content" => "The historic city of Deventer, a 1hr 20min train ride from Amsterdam, holds a two-day Dickens Festival every December (weekend of 14-15 this year, free entry, though be prepared to queue). Nearly 1,000 costumed Dickens characters, from gentry to urchins, play their parts with real enthusiasm in the spruce-tree decked streets. You might bump into Bob Cratchit, say hello to Miss Havisham or share a stuffed potato or bag of roasted chestnuts with Scrooge. The picturesque Bergkwartier with its pretty shops twinkles with lights. Orchestras and choirs fill the churches with seasonal music, in addition to the outdoor carol singers.",
                "news_describes" => "Your wintry wanderings take in a Dickensian Christmas festival, snowshoeing, skiing and digging a snow hole bedroom – plus cosy bars and hotels to warm up in",
                "news_img" => "4256.jpg",
                "date_news"=>'27/10/2019'
            ],
            [
                "id_account" => "1",
                "news_title" => 'Send us a tip about your favourite travel book for the chance to win a £200 hotel voucher',
                "news_content" => "Travel books not only broaden the mind and provide inspiration for your own dream journey, they can transport you to another world.",
                "news_describes" => "Whether it’s an exploration of a local landscape or a tale of an exotic destination, we want to hear about your literary choices",
                "news_img" => "4479.jpg",
                "date_news"=>'27/10/2019'
            ],
            [
                "id_account" => "1",
                "news_title" => 'Send us a tip on a hidden UK gem for the chance to win a £200 hotel voucher',
                "news_content" => "Next week’s Guardian Travel section will be dedicated to hidden UK gems – and we want to include some of your recommendations in our roundup. It could be a community-run pub or cinema, a gallery or railway run by volunteers, an out of the way or eccentric attraction that’s worth the trip … anywhere or anything you think is worth shouting about.",
                "news_describes" => "Whether it’s an unsung museum, pub or shop, a great little place round the corner or somewhere you stumbled upon on your travels, we want you to unearth your hidden gem",
                "news_img" => "4928.jpg",
                "date_news"=>'27/10/2019'
            ],
            [
                "id_account" => "1",
                "news_title" => 'Share your best travel discovery of 2019 in the UK and Europe for the chance of winning a £200 hotel voucher',
                "news_content" => "You might have found a beautiful beach, a superb walk, a particularly friendly little cafe, a wonderful bookshop, or finally succeeded in climbing a mountain you’ve always wanted to go up. Perhaps you stumbled across a bar in the middle of nowhere with live music, a friendly, family-run B&B, an unsung museum or had the best meal of your life.",
                "news_describes" => "Did you come across anywhere brilliant on your travels this year? Whatever and wherever it is in Europe or the UK, we want to hear about it for our end-of-year round up",
                "news_img" => "5763.jpg",
                "date_news"=>'27/10/2019'
            ],

        ]);
    }
}
