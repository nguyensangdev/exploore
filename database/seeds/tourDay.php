<?php

use Illuminate\Database\Seeder;


class tourDay extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour_day')->insert([
            [
                "id_tour" => "1",
                "tour_day_name" => "HCMC - QUANG CHAU - TRUONG GIA Gioi (Snack on board)",
                "tour_day_content" => "Gathering at International Departure Station - Tan Son Nhat airport to check in for flight to Shenzhen on flight CZ 374 (15:40 - 19:40). To Guangzhou, get luggage and check-in procedures for flight CZ 3381 (23:10 - 00:55) +1 to Zhangjiajie. Overnight in Zhangjiajie.",
                "tour_day_img" => "thien-mon-son-zhangjiajie_398393665.jpg",

            ],
            [
                "id_tour" => "1",
                "tour_day_name" => "Truong Gia Gioi (Breakfast, lunch, dinner)",
                "tour_day_content" => "Check. Visiting Truong Gia Gioi, the cable car takes the delegation to the mountain to visit Thien Mon Son - walking on the road even though it is only 11km long, the height difference between the beginning and the end is up to 1,100m with 99 bends. Visit Skywalk - the 60m-long crystal-walled crystal road made from transparent glass. Continue taking the escalator to Thien Mon Dong to visit Heaven Gate and eco-car to take the group down the mountain (or vice versa). Visit the gem shop. Check hotel. Overnight in Zhangjiajie.",
                "tour_day_img" => "Zhangjiajie-Forest-Park_140065921.jpg",
            ],
            [
                "id_tour" => "2",
                "tour_day_name" => "DUBAI - BURJ KHALIFA TOWER (Breakfast, lunch, dinner)",
                "tour_day_content" => "Discover Dubai (United Arab Emirates): visit the 150-year-old Al Fahidi Fort, which is now used as the Dubai Museum. Travel by the characteristic Abra-drive to see rich Dubai from the canals; visit and free shopping at Gold Souk (Gold Souk) with more than 200 gold shops displaying all kinds of gold jewelry from ancient to modern and Spice Market (Spice Souk) with many fragrances, spices from agarwood Incense and Herb. Visit the tallest Burj Khalifa in the world to see a spectacular and magnificent view of Dubai from the 124th floor of the Tower. You visit shopping at handmade carpet store. Check in hotel and overnight in Dubai.",
                "tour_day_img" => "Burj-Khalifa-tower_631623083.jpg",
            ],
            [
                "id_tour" => "2",
                "tour_day_name" => "DUBAI - YATCH CRUISE - SAMAR SAFARI (Breakfast, lunch, dinner)",
                "tour_day_content" => "Enjoy Yatch Cruise yacht admire the city of Dubai. Discover Palm Island - a beautiful artificial island shaped like a palm tree. Experience the monorail to see the color of the deep blue ocean, the skyscrapers with modern and fancy designs, in the distance are the luxurious 7-star Burj Al Arab hotel and the remote Atlantis The Palm hotel flower. In the afternoon, experience the unforgettable adventurous feeling of walking into the Safari desert by terrain vehicle (You can join the camel riding program, Hanna hand-drawing experience - a decorative painting of gouache on hands) or very popular legs in the Middle East). Enjoy BBQ dinner in huts constructed with dry palm leaves in the candlelight under the starry sky, watching the unique belly dance performed by talented dancers. Overnight in Dubai.",
                "tour_day_img" => "Burj-Khalifa-tower_631623083.jpg",
            ],
            [
                "id_tour" => "3",
                "tour_day_name" => "DUBAI – NICE - CANNES – NICE (dinner)",
                "tour_day_content" => "Arriving at Dubai airport, the flight connecting EK77 (08:20 - 12:35) to Nice - Queen of the Cote d 'Azur region. 12h35 arrive at Nice airport, the dreamy coastal city is surrounded by hills with a mild climate with more than 2500 hours of sunshine each year. Bus tour to depart for Cannes - the romantic blue seaside. The delegation took a photo outside the Palace of Festivals and Congresses (Palais des Festivals et des Congrès) - the place where the film festivals and the Palme d'Or logo take place in honor of the world stars. Visit the largest and most beautiful road La Croisette. Stroll around the harbor, relax and enjoy the beautiful seascape in Cannes and watch the scenery of beautiful sailing boats parked close together in the playground for the upper class. Go back to hotel room and spend the night in Nice.",
                "tour_day_img" => "Palais-des-Festivals-et-des-Congres_202383739.jpg",
            ],
            [
                "id_tour" => "3",
                "tour_day_name" => "NICE – MONACO – EZE - NICE (Breakfast, lunch, dinner)",
                "tour_day_content" => "Visit the morning flower market of Marché aux Fleurs Cours Saleya, where visitors will admire all kinds of flowers and ornamental plants. Move to the Principality of Monaco - the most luxurious paradise in the world and one of the richest countries in the world. Admire the outside of the Palais Princier Palace - the residence and work of the monarchist constitutional monarch of Monaco and the famous Monte Carlo casino; Cathédrale de Monaco - the resting place of many celebrities of the Grimaldi royal family, the aristocratic family that has ruled Monaco for 700 years. In the afternoon, the bus will take you to Eze village - a medieval village nestled in a Mediterranean mountain, famous for its botanical garden on a cliff impressing visitors. Diversity of unique tropical plants. The colorful flowers originating mainly from South Africa and the Arabian Peninsula give the garden a seductive scent filled. Visit the Fragonard perfume factory. You move back to Nice to visit the ancient town of the old town with a maze of narrow cobblestone walkways, Masséna Square featuring the strange design of statues sitting on high pillars and statues of Apollo. on the solar fountain. Freedom to walk on the famous \"Promenade des Anglais\" street, watching the panoramic view of the famous stretching coast of France. Overnight in Nice.",
                "tour_day_img" => "Promenade-des-Anglais_267127067.jpg",
            ],
            [
                "id_tour" => "4",
                "tour_day_name" => "HO CHI MINH - DA NANG - ASIAN PARK",
                "tour_day_content" => "In the morning, you gather at Gate D1, Domestic Departures Station, Tan Son Nhat Airport. HDV Travel Saigontourist welcomes you, helps with procedures. Departure to Danang on flight VN110 at 06:00. Arrive in Da Nang, visit Son Tra peninsula, admire Tien Sa port, visit Linh Ung Bai Bai Pagoda - the largest temple in Da Nang city, admire the tallest statue of Buddha Quan The Am in Vietnam. In the afternoon, the delegation visited Asia Park - Asia Park: Southeast Asia's leading amusement park with an international level. You experience \"Sun Wheel - SunWheel\" enjoy the beautiful scenery of Da Nang with a new perspective from an altitude of 115m. Overnight in Da Nang",
                "tour_day_img" => "sun-wheel-_789911887.jpg",
            ],
            [
                "id_tour" => "4",
                "tour_day_name" => "DA NANG - KDL Ba Na - GOLD BRIDGE - HCMC (Breakfast, dinner)",
                "tour_day_content" => "Freedom to explore Da Nang City. You can go to the Han River to see the Dragon Bridge - one of the largest steel dragons in the world, Tran Thi Ly Bridge - with the architecture like a sailing boat reaching out to the big sea, the statue of Dragon carp transforming - a symbol of bringing bold with art and folk beliefs, the Bridge of Love - a bridge of hearts with cute locks on the bridge is very interesting and romantic. Or go to Han market (or Con market), buy local specialties. You self-sufficient lunch, experience the unique cuisine of Da Nang.",
                "tour_day_img" => "cable-car-to-ba-na-hills.jpg",
            ],
            [
                "id_tour" => "5",
                "tour_day_name" => "TP.HCM - DOHA (dinner)",
                "tour_day_content" => "You are self-sufficient at 2nd floor - Tan Son Nhat International Airport Terminal, with a guide for flight QR973 (08: 55-13: 05) to Doha - Qatar. Arrive at Doha airport, delegation to entry procedures. The bus will take you through Westbay - a newly built West Coast urban area including many of the tallest skyscrapers in Qatar. Visit the Qatar National Museum - a white building with intricate curves inspired by desert roses. Drive along Corniche, the beautiful coastal road of Doha and see the Pearl monument in front of Dhow harbor. You can feel an ancient Doha with mysterious Arab color while freely walking around Souq Waqif - an ancient traditional market with many stalls on the streets and buildings built of attractive mud plaster walls. Many tourists visit. You can find many traditional items such as textiles, spices, crafts, souvenirs and even gold. Especially not to be missed Falcon Market (Falcon Souq), where there are many trained falcons. Check in hotel and overnight in Doha.",
                "tour_day_img" => "Doha.jpg",
            ],
            [
                "id_tour" => "5",
                "tour_day_name" => "DOHA (Breakfast, lunch,dinner)",
                "tour_day_content" => "Continue the journey to explore Qatar. You move to Camel Race Track - the place where the exciting camel race. Visit the Education City mosque with its impressive architecture, covered with embossed Quran verses, surrounded by hundreds of small white windows like mysterious caverns creating a wonderful artistic works; Qatar National Library - a huge library containing over one million books and space for thousands of readers with cooling, artificial lighting and book exchange system. Take a photo outside the Khalifa International Stadium - one of the eight stadiums prepared for the 2022 World Cup. Shopping at Villagio Mall - one of the bustling and modern malls designed uniquely with the sky on the ceiling and the artificial river inside. Overnight in Doha.",
                "tour_day_img" => "ThanhDuong-Education-City_1051356008.jpg",
            ],
            [
                "id_tour" => "6",
                "tour_day_name" => "TP.HCM – ZURICH -  GENEVA",
                "tour_day_content" => "You are self-sufficient at the 2nd floor of International Departure Station - Tan Son Nhat Airport, with the guide of procedures for flight LX8061 (08:00 - 15:15) direct flight to Zurich - the cultural capital of Switzerland. 15:15 meeting at Zurich airport, you entry procedures and connect LX2808 flight (17:00 - 17:50) to Geneva. Pick up at the airport to take you to check in hotel. Overnight in Geneva.",
                "tour_day_img" => "Lausanne-Cathedral_706926415.jpg",
            ],
            [
                "id_tour" => "6",
                "tour_day_name" => "GENEVA – LAUSANNE (Breakfast, lunch,dinner)",
                "tour_day_content" => "Start the journey to discover Geneva - an international city with many important headquarters of the world. Sightseeing and taking photos outside the United Nations Building, Red Cross Museum. Admire the tallest Jet d'eau in the world - the symbol of Geneve, the Flower Clock Tower and the Anglais garden. In the afternoon, move to Lausanne, which has spectacular views and is also known as the city of fairy dreams. You can wander on Cinderella's feel as you walk to the Old Quarter, putting yourself on brilliant coaches and dreaming of your horses. Photographed outside Lausanne Cathedral - the most beautiful church in Switzerland was built in 1175 and is the typical work of Gothic architecture. Check in hotel and overnight at Lausanne.",
                "tour_day_img" => "Chapel-bridge_321350090.jpg",
            ],
        ]);
    }
}
