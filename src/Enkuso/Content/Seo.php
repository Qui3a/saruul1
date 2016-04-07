<?php
/*
 * This file is part of the TravelMongolia.us package.
 *
 * (c) Enkhbayasgalan Galsandorj (g.enkhbayasgalan@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Enkuso\Content;


class Seo
{
    /** @var array */
    private $meta_data = array(
        # Tours
        'a-classic-journey-of-mongolia' => array(
            'title'         => 'This remarkable journey features Mongolia\'s signature destinations. Traveling in style',
            'description'   => 'A highlight of your trip will be the opportunity to experience nomadic hospitality and learn about their interesting lives. And to truly appreciate the nomadic lifestyle, you’ll even have the opportunity to stay in an authentic Mongolian traditional ger that has been modified to provide you with all the comforts of a modern hotel.',
            'keyword'       => 'Travel Mongolia, Mongolia Tours, Luxury Tour Mongolia, Luxury Trips Mongolia, Mongolia Luxury Travel,'
        ),
        'highlights-of-mongolia' => array(
            'title'         => 'Visit a nomadic family and learn about the traditional Mongolian lifestyle',
            'description'   => 'Your expert local guide will impart Mongolian history and culture as you visit museums, monasteries, monuments and temples',
            'keyword'       => 'Mongolia Luxury Travel, Cultural Tours, Jeep Tours Mongolia, Private Luxury Tours, Luxury Vacation Mongolia'
        ),
        'gobi-and-beyond' => array(
            'title'         => 'Gobi Desert & Beyond, Tour Mongolia, Travel Mongolia, Unique tour itineraries',
            'description'   => 'This tour highlights the amazing Gobi Desert - a diversity of mountains, evergreen forests, sand dunes, and geological wonders',
            'keyword'       => 'Gobi Desert Tour, Mongolian Gobi, Travel Gobi Deserts, Camel Riding, Nomad Family, Fly to Gobi Desert'
        ),
        'karakorum-and-khuvsgul-lake-adventure' => array(
            'title'         => 'Travel Mongolia, Mongolia Tour, Mongolian Adventure Tours, Trip Mongolia',
            'description'   => 'Walking and hiking on the lake shore, horseback riding, go on a trek near the lake, and visit yak breeding family to experience their unique lifestyle',
            'keyword'       => 'Horseback Riding Mongolia, Riding Reindeer, Tour to Khuvsgul Lake, Khuvsgul Lake Travel '
        ),
        'splendors-of-mongolia' => array(
            'title'         => 'Travel Information Mongolia, Mongolia Travel Guide, Journey Mongolia',
            'description'   => 'We offer a wide range of high quality services and tours in Mongolia including horse and camel-back riding and tours, exploration through the vast Gobi Desert, research and study tours, trekking adventures and overland jeep tours across Mongolia',
            'keyword'       => 'Trip to Mongolia, Tours Mongolia, Mongolia Travel, Holidays Mongolia, Mongolian Gobi Desert, Adventure Holidays Mongolia '
        ),
        'naadam-festival-journey' => array(
            'title'         => 'Naadam Festival Mongolia, Mongolian Naadam Festival Tour',
            'description'   => 'The Naadam Festival is held from July 11 to the 13 at the National Sports Stadium.',
            'keyword'       => 'Naadam Festival, Festival Mongolia, Naadam Festival Travel, Mongolia Naadam, Horse racing, Archery & Wrestling '
        ),
        'bird-watching-trip' => array(
            'title'         => 'Bird Watching trip, Mongolian Bird Watching tour',
            'description'   => 'In the heart of remote Central Asia lies a country that conjures up images of nomadic horsemen striding across barren, wind-swept plains with the grand Altai Mountains rising up above the endless expanse of the Gobi Desert.',
            'keyword'       => 'Birding in Mongolia, Bird Watching tour in Mongolia, Bird Watching Travel'
        ),
        'treasures-of-mongolia' => array(
            'title'         => 'Mongolia Tour Packages, Tour Mongolia, Active Adventure Tours Mongolia, Travel Mongolia',
            'description'   => 'Discover Mongolia Tours invites you to join us this coming summer for an experience of a lifetime in the awesome landscapes of Mongolia, from mountains, to lakes, to hot dry desert, to rolling hills of open grassland.',
            'keyword'       => 'Mongolia Travel Packages, Travel information Mongolia, Tour Mongolia, Mongolia travel guide, Mongolia travel tour, cultural tour Mongolia, Mongolia adventure travel, Mongolia holidays'
        ),
        'gobi-desert-tour' => array(
            'title'         => 'Gobi Mongolia, Gobi Tour Mongolia, Mongolia Gobi travel, Mongolia Gobi, Gobi tours, Mongolia Gobi Tours, Gobi Desert tours Gobi Travel',
            'description'   => 'This trip gives you a chance to enjoy amazing Gobi Desert. The Gobi is not just sand and gravel and dead animals. It diversifies into mountains and evergreen forest and geological freak shows - including a dune system as long and high as a mountain range - and sustains an array of endangered species that includes wild ass, wild camels and snow leopards.',
            'keyword'       => 'Travel Gobi Mongolia, Gobi Tour Mongolia, Mongolia Gobi travel, Gobi Expeditions, Gobi Travel, Gobi trips, Mongolia trips Gobi, Mongolia adventure Gobi tours'
        ),
        'khuvsgul-lake-tour' => array(
            'title'         => 'Mongolian Lake Khuvsgul, Reindeer Family, Khuvsgul lake tour, travel to Khuvsgul lake, Travel Mongolia',
            'description'   => 'Fly next to Muron for a three-night stay in gers that perch on the banks of the pristine Lake Hovsgol. Ride horses, visit nearby nomadic communities, or fish in the clear water. Travel off the beaten path on this extraordinary expedition to Mongolia',
            'keyword'       => 'Mongolian Lake Khuvsgul, Khuvsgul lake tour, travel to Khuvsgul lake, Travel Mongolia'
        ),
        'horse-riding-in-central-part-of-mongolia' => array(
            'title' =>        "Horse Riding Mongolia, horse trek in Mongolia, Mongolia horse tour, horse trip Mongolia, travel on horseback Mongolia, horseback Mongolia",
            'description' =>  "Riding a horse around Mongolia sounds like a great idea! Most tours and trips people go on to include a few days of horseback riding and camel riding.",
            'keyword' =>      "horseback Mongolia, horse riding holidays, Mongolia horse treks, Mongolia horse riding tours"
        ),
        'buddhism-tour' => array(
            'title' =>        "Tour Mongolia, Mongolia travel guide, Mongolia tour travel, Mongolia tour packages",
            'description' =>  "Visit Buddhist monasteries and the medieval capital of Genghis Khan, from where he launched his victorious cavalry. Hiking, horseback riding, are the main activities. Overnights are mainly in traditional felt covered tents locally known as gers.",
            'keyword' =>      "Mongolia travel guide, Mongolia tour travel, Mongolia tour packages, adventure travel in Mongolia",
        ),
        'motor-cycle-tour' => array(
            'title' =>        "Motorcycle tour in Mongolia, Moto tour in Mongolia, Mongolian adventure tours",
            'description' =>  "Ride Yamaha, BMW and KTM motorcycles across in Gobi Desert. See some of the most amazing sights and geographical formations that this country has to offer, including big granite mountains with bizarre rock formations, pink and white colored limestone cliffs weathered by wind and rain, golden sand dunes 180 km long and a cold mountain canyon up in the Gobi mountains.",
            'keyword' =>      "Motorcycle tour in Mongolia, Moto tour in Mongolia, Mongolian adventure tours",
        ),
        'mountain-bike-tour' => array(
            'title' =>        "Mongolian Mountain bike tour, mountain bike tour, cycling tours in Mongolia, biking tour in Mongolia",
            'description' =>  "This exciting trail in the southern and central provinces of South Gobi and Karakorum, passes through varied and beautiful landscapes with wide fertile valleys, forests of silver birch and poplar, rivers and mountain passes. There are a few villages along the way, but most of the population are nomadic and live in the traditional round white gers.",
            'keyword' =>      "Mongolian Mountain bike tour, mountain bike tour, cycling tours in Mongolia, biking tour in Mongolia",
        ),
        'horse-trip-around-khuvsgul-lake' => array(
            'title' =>        "Mongolia horse riding tours, Mongolia horse treks, horse treks in Mongolia, horse trips Mongolia, Mongolia horse riding travel",
            'description' =>  "A horseback adventure covering many sites of central Mongolia; Karakorum, Erdene Zuu monastery, Tsenkher hot springs, Terkhiin Tsagaan Lake, Ugii Lake, Hustai national park and much more. Having maintained much of its centuries-old nomadic traditions, Mongolia is one of the only places on earth you can interact with true nomadic peoples, whilst riding traditional Mongolian horses.",
            'keyword' =>      "Mongolia horse tour, riding tours, riding treks in Mongolia, Mongolia adventure horse trip, Mongolia adventure horse tours"
        ),
        'a-classic-journey-of-mongolia-with-naadam-festival' => array(
            'title' =>        "Naadam Festival 2016, Naadam Festival Tour, Naadam Festival Travel",
            'description' =>  "Naadam festival is celebrated every year at 11-13th July in Central stadium. Mongolia celebrates its independence and its rich cultural heritage with a festival of sports and revelry in Ulaanbaatar.",
            'keyword' =>      "Naadam Festival 2016, Naadam Festival Tour, Naadam Festival Travel, Mongolian Naadam Festival, Naadam Festival"
        ),
        'taste-of-mongolia-with-naadam-festival' => array(
            'title' =>        "Naadam Festival 2016, Naadam festival 2016 dates, Mongolian Naadam Festival ",
            'description' =>  "Naadam festival is celebrated every year at 11-13th July in Central stadium. Mongolia celebrates its independence and its rich cultural heritage with a festival of sports and revelry in Ulaanbaatar. ",
            'keyword' =>      "Naadam Festival 2016, Mongolian Naadam Festival, Naadam Festival, Naadam Festival Tours "
        ),
        'taste-of-mongolia' => array(
            'title' =>        "Taste of Mongolia, Go deep into the Mongolian outback and experience life as a nomad",
            'description' =>  "Go deep into the Mongolian outback and experience life as a nomad. You’ll have the opportunity to stay in traditional ger camps and spend time with local families while you travel to many of the highlights of this beautiful country.",
            'keyword' =>      "Travel Mongolia, Mongolia Travel, Travel to Mongolia, Traveling Mongolia, Mongolian Travel"
        ),
        'western-southern-and-northern-mongolia-expedition' => array(
            'title' =>        "Western, Southern and Northern Mongolia Expedition 16 days",
            'description' =>  "This tour is designed to make you feel comfortable with more flights and less travels on dirt roads. If you choose, you can fly to Bayan-Ulgii province, the most western corner of Mongolia famous for its splendorous mountains and Kazakh eagle hunters. You visit and get introduced with Kazakh people lifestyle. This is a great opportunity for you to find out their eagle hunting while trying their delicious cuisine. ",
            'keyword' =>      "Western Mongolia, Mongolia Tours, Tours to Mongolia"
        ),
        'ultimate-mongolia' => array(
            'title' =>        "Ultimate Mongolia 18 days, Adventure Tours to Mongolia",
            'description' =>  "The tour begins with a flight to Bayan-Ulgii province, the home of the Kazakh people, located in the westernmost part of Mongolia. While Kazakhs can be found in other countries, only Mongolian Kazakhs have preserved their unique culture and traditions such as eagle hunting.  The landscape is very different in this part of Mongolia. We'll visit the Gobi Desert where you'll be surprised to find that it is not at all as you may have imagined.  We'll see abundant wildlife in the Yolin Am Valley, search for dinosaur bones at the famous Flaming Cliffs, spend time with a camel herder family at the Khongor Sand Dunes, ride Bactrian camels, and enjoy climbing to the top of the Singing Dunes.",
            'keyword' =>      "Adventure Travel Mongolia, Traveling to Mongolia, Mongolia Travel "
        ),
        'golden-eagle-festival' => array(
            'title' =>        "Eagle Festival Mongolia | Mongolian Eagle Hunting Festival - Eagle Festival",
            'description' =>  "Enjoy the Eagle Festival Mongolia! Mongolian eagle hunting festival is celebrated in Bayan Ulgii. The Eagle festival is a tournament of falconers from the region, who hunt with trained eagles.",
            'keyword' =>      "Eagle Festival Mongolia, Mongolian Eagle Hunting Festival"
        ),
        'jewels-of-mongolia-with-rural-naadam-festival-in-khuvsgul-lake' => array(
            'title' =>        "Naadam Festival 2017 | Jewels of Mongolia with Rural Naadam Festival",
            'description' =>  "Experience Jewels of Mongolia with Rural Naadam Festival 2017. This trip gives you a great opportunity to see all highlights of Naadam Festival in Mongolia.",
            'keyword' =>      "naadam festival 2017"
        ),
        # Pages
        'tourist-attractions' => array(
            'title' =>        "Adventure and Cultural Tours, Mongolia travel guide, Nomadic Adventures Mongolia, Mongolia tour travel, Mongolia tour packages",
            'description' =>  "Visit Buddhist monasteries and the medieval capital of Genghis Khan, from where he launched his victorious cavalry. Hiking, horseback riding, are the main activities. Overnights are mainly in traditional felt covered tents locally known as gers.",
            'keyword' =>      "Mongolia travel guide, Nomadic Adventures Mongolia, Mongolia tour travel, Mongolia tour packages, adventure travel in Mongolia",
    ),
        'trip-calendar' => array(
            'title'         => 'Tailor-Made Tour, Small Group Travel, Join in adventure tour',
            'description'   => 'Mongolia is located in the heart of central Asia and her image is often associated with endless steppes, Gobi desert, nomadic lifestyle, horse-based culture and herders wandering around beautiful contractive natural zones of Gobi desert flat steppes and sub-arctic and mountainous areas.',
            'keyword'       => 'Private Tour Mongolia, Luxury Experience, Luxury travel Mongolia'
        ),
        'experience-luxury-in-mongolia' => array(
            'title'         => 'Gobi Desert Tour in Mongolia, Travel to Gobi with Mongolian Luxury Tours',
            'description'   => 'Mongolia seems like the end of the earth. Outside the few major cities, you begin to wonder if you haven’t stepped into another century, rather than another country. It is one of the last unspoiled travel destinations in Asia, as well as the oldest',
            'keyword'       => 'Gobi Tour Mongolia, Mongolian Gobi Travel, Bespoke Travel itinerary'
        ),
        'travel-accommodations' => array(
            'title'         => 'Our accommodations include a variety of luxury hotel resort and lodges',
            'description'   => 'Experience Luxury Accommodation in Mongolia, Luxurious hotel',
            'keyword'       => 'Luxury hotel Mongolia, Luxury Accommodation, Mongolian Yurt, Mongolian Deluxe hotel, Mongolia Hotels'
        ),
        'hotels-in-ulaanbaatar' => array(
            'title'         => 'Luxury hotel Mongolia, Mongolia Hotel, Luxury accommodation Mongolia',
            'description'   => 'Stay with nomad hosts in traditional ‘gers’ and learn about their traditional, isolated way of life. Since before Genghis Khan the peoples of north Asia have lived in these wood-framed dwellings; snug in winter, and easy to transport by pack animal, it’s the perfect accommodation for exploring this stunning country.',
            'keyword'       => 'Hotel in Mongolia, Mongolia Luxury hotel, Mongolia hotels'
        ),
        'mongolian-trains' => array(
            'title' =>        "Trains Mongolia, Trans Mongolia tours, Trans Siberian Tour, Mongolia trains, Mongolian train tickets",
            'description' =>  "The Trans-Mongolian Line of the legendary Trans-Siberian Railway links Mongolia's capital Ulaanbaatar with Moscow, Russia and Beijing, China.",
            'keyword' =>      "Trains Mongolia, Trans Mongolia tours, train to Mongolia, Mongolia trains, Mongolian train tickets"
        ),
        'mongolian-visa' => array(
            'title'         => 'Visa Mongolia, Mongolia Visa Tour Mongolia, Luxury tour Mongolia, Visa Mongolia',
            'description'   => 'The Great Gobi Desert is a treasure chest full of astonishing surprises that draw in the most avid travelers, explorers and scientists.',
            'keyword'       => 'Visa Mongolia, how to apply Mongolia Visa, Mongolian Visa'
        ),
        'nomadic-experience' => array(
            'title'         => 'Explore Way of Nomadic Lifestyle, Mongolian Luxury Tours',
            'description'   => 'Explore Way of Nomadic Lifestyle, Mongolian Luxury Tours',
            'keyword'       => 'Explore Way of Nomadic Lifestyle, being Mongolian, Mongolian Luxury Tours'
        ),
        'tourist-events' => array(
            'title' =>        "Trekking Tours Mongolia, Hiking and Trekking Mongolia - Tourist Events",
            'description' =>  "Travel All Mongolia invites you to join Trekking Tours in Mongolia, for an experience of lifetime in the awesome landscape of Mongolian, from mountains, to lakes, to hot dry desert, rolling hills of open grassland.",
            'keyword' =>      "trekking tours mongolia"
        ),
        'about-mongolia' => array(
            'title'         => "Cultural Tours Mongolia, Vacation Mongolia and Tours to Mongolia - About Mongolia",
            'description'   => "Welcome to the Ancient land of the Great Mongolian Empire. Cultural Tours Mongolia invites you to join us this coming summer for an experience of a lifetime in the awesome landscapes of Mongolia, from mountains, to lakes, to hot dry desert, to rolling hills of open grassland.",
            'keyword'       => "Cultural Tours Mongolia, Vacation Mongolia, Tours to Mongolia",
        ),
        'terms-and-conditions' => array(
            'title'         => 'Mongolian Travel, private Tour to Mongolia, Mongolia Travel',
            'description'   => 'Highlights of the city include a 75 foot high Buddha statue in the Gandan Monastery, as well as an impressive Natural History Museum. Many of the world’s best preserved and earliest dinosaur fossils have been found in Mongolia so there’s plenty to see in this respect.',
            'keyword'       => 'Trip Mongolia, Traveling Mongolia, Mongolia Travel Guide, Mongolia Tours, Tours to Mongolia, Travel Mongolia, Holiday Mongolia'
        ),
        'privacy-policy' => array(
            'title'         => 'Luxury Travel to Mongolia, tailor-made holidays to Mongolia ',
            'description'   => 'Mongolia is a unique destination. The desolate Gobi Desert, the massive Lake Khövsgöl and the Four Holy Peaks around Ulan Bator are the most memorable geographical sites, but it is the people who make Mongolia a highlight. Their nomadic way of life creates some logistical problems for your average tour operator, but Mongolians\' hospitable nature and rich culture makes for a fascinating holiday.',
            'keyword'       => 'Tour Mongolia, Travel Mongolia, Mongolia Trips, Exceptional Holiday to Mongolia'
        ),
        'homepage' => array(
            'title' =>        "Tours & Travel Mongolia, Mongolia Travel Guide, Trips to Mongoli, Adventure Holidays in Mongolia, Holiday Vacations to Mongolia, Mongolia Adventure Trips",
            'description' =>  "Travel to Mongolia and discover adventure travel in a land of stark, barren and spectacular beauty, a world without boundaries, where vast plains are matched only by the enormous blue sky. This is nature on an almost unimaginable scale, dwarfing all who pass through it. The endless wilderness populated only by the nomadic peoples and their livestock who live day to day in the awe-inspiring landscape.",
            'keyword' =>      "Mongolia Travel Guide, Tours Mongolia, Travel Mongolia, Mongolia Journeys, Tour Mongolia, Horse trek Mongolia, Jeep overland Mongolia, Adventure Travel Mongolia, Active Adventure tours Mongolia, travel Mongolia, Fish Mongolia, Fly Fishing Mongolia, Tour Mongolia, Travel to Mongolia, hotel Mongolia, Fly to Mongolia, Adventure trips Mongolia, Tours to Mongolia, Mongolia vacation, Holiday Mongolia, Mongolia tour operator",
        ),
        'contact-us' => array(
            'title'         => 'A Taste of Mongolia Tour, Luxury Travel Mongolia, Mongolia Vacations ',
            'description'   => 'Mongolia is a very large land mass covered in vast rolling steppes where nomadic traditions still flourish, herds of wild horses roam freely in national parks and the sand dunes of the immense Gobi Desert “sing” in the wind.',
            'keyword'       => 'Vacation Mongolia, Horse Riding Mongolia, Camel Riding, Visit Nomad Family, Gobi Desert'
        ),
        'about-us' => array(
            'title'         => 'Mongolian Tour Operator | Mongolia Budget Tour - About Us',
            'description'   => 'We are recognized as an industry leader in Mongolian Tour Operator, luxury travel packages for couples, families, corporate incentive programs and Mongolia Budget Tour.',
            'keyword'       => 'Mongolian Tour Operator, Mongolia Budget Tour, luxury travel to Mongolia'
        ),
        'gallery' => array(
            'title'         => 'Tour Mongolia, Mongolia Tours, Mongolia Travel',
            'description'   => 'This land is Mongolia, the world’s most sparsely populated nation, a country of fascinating legend and history; little changed over the years and the heart of the once vast Mongol Empire',
            'keyword'       => 'Travel Mongolia, Tour Mongolia, Mongolia Tours'
        ),
        'frequently-asked-questions' => array(
            'title'         => 'Frequenty Asked Questions, Mongolian Luxury Tours',
            'description'   => 'Frequenty Asked Questions, Mongolian Luxury Tours',
            'keyword'       => 'Frequenty Asked Questions, Mongolian Luxury Tours'
        ),
        'tours' => array(
            'title'         => 'Small Group and Custom Tours to Mongolia, with Travel All Mongolia',
            'description'   => 'Mongolia is a country of nomads who have preserved their  traditional way of life for centuries and modern people who are keeping  pace with the global development. It is praiseworthy to say that  Mongolia has a rich heritage of history, tradition, culture that  reflects the nomadic way of life',
            'keyword'       => 'Travel Mongolia, Mongolia Travel, Travel to Mongolia, Mongolian travel',
        ),
        'why-travel-with-us' => array(
            'title'         => 'Mongolian Luxury Tours is specialized in tailor-made tours & Honeymoon travel',
            'description'   => 'There are a number of major tourism centers across this huge country, including the capital Ulan Bator, the vast Gobi Desert and the unspoilt natural beauty of Terelj National Park.',
            'keyword'       => 'Premier Tour to Mongolia, High End Travel Mongolia, Exclusive Travel Packages Mongolia, Luxury Holiday Mongolia'
        ),
        'site-map' => array(
            'title'         => 'Travel Information Mongolia',
            'description'   => 'Terelj National Park is situated to the north east of Ulan Bator and is quite a contrast to the desert just a few hundred kilometers to the south! Lush and verdant, the rolling green hills are surrounded by stunning rocky bluffs creating an extremely dramatic landscape.',
            'keyword'       => 'Tour Mongolia, Mongolia Travel Guide, Travel Mongolia, Mongolia Tours, Trips Mongolia, Journey Mongolia'
        ),
        'mongolian-arts-and-culture' => array(
            'title'         => 'Mongolian Arts and Culture',
            'description'   => 'Mongolian Arts and Culture, The Tale of Khoomii, Long song of Mongolia, The Legend of a Long Song, Horse head fiddle: Morin khuur, Tsam dance',
            'keyword'       => 'Mongolian Arts and Culture, The Tale of Khoomii, Long song of Mongolia, The Legend of a Long Song, Horse head fiddle: Morin khuur, Tsam dance'
        ),
        'all' => array(
            'title' =>        "Mongolia Travel Guide, Tours Mongolia, Adventure Travel Mongolia, Active Adventure tours Mongolia, travel Mongolia",
            'description' =>  "Travel to Mongolia and discover adventure travel in a land of stark, barren and spectacular beauty, a world without boundaries, where vast plains are matched only by the enormous blue sky. This is nature on an almost unimaginable scale, dwarfing all who pass through it. The endless wilderness populated only by the nomadic peoples and their livestock who live day to day in the awe-inspiring landscape.",
            'keyword' =>      "Mongolia Travel Guide, Tours Mongolia, Travel Mongolia, Mongolia Journeys, Tour Mongolia, Horse trek Mongolia, Jeep overland Mongolia, Adventure Travel Mongolia, Active Adventure tours Mongolia, travel Mongolia, Fish Mongolia, Fly Fishing Mongolia, Tour Mongolia, Travel to Mongolia, hotel Mongolia, Fly to Mongolia, Adventure trips Mongolia, Tours to Mongolia, Mongolia vacation, Holiday Mongolia, Mongolia tour operator",
        ),
    );

    /**
     * Get page title
     *
     * @param $key
     * @return null|string
     */
    public function getTitle($key)
    {
        return $this->getMeta('title', $key);
    }

    /**
     * Get page description
     * @param $key
     * @return null|string
     */
    public function getDescription($key)
    {
        return $this->getMeta('description', $key);
    }

    /**
     * Get page keywords
     *
     * @param $key
     * @return null|string
     */
    public function getKeyword($key)
    {
        return $this->getMeta('keyword', $key);
    }

    /**
     * @param $meta
     * @param $key
     * @return null|string
     */
    private function getMeta($meta, $key)
    {
        if(array_key_exists($key, $this->meta_data)) {
            if(array_key_exists($meta, $this->meta_data[$key])) {
                return $this->meta_data[$key][$meta];
            }
            return '';
        }

        return null;
    }
} 