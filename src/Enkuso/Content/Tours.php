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


class Tours
{
    /** @var array */
    private $tours = array(
        'winter-festival-tour' => array(
            'name' => 'Winter festival tour',
            'layout' => 'winter-festival-tour.html.twig',
            'duration' => '10 days',
            'duration2' => '10 days / 9 nights',
            'highlights' => array(
                'Ice festival',
                'Skating marathon',
                'Camel Polo',
                'Camel racing',
                'Eagle festival',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http:\/\/farm4.staticflickr.com\/3783\/10865349026_4c0c5c2366_b.jpg',
            ),
            'region' => 'Central, Southern and Northern part of Mongolia.',
            'availableTime' => '',
            'map' => 'http://farm9.staticflickr.com/8209/8172475881_8f7461e575_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8209/8172475881_8f7461e575_o.jpg',
            'bs_img' => '/img/tour/jeep_main.jpg',
            'pdf' => null,
            'itinerary' => '',
            'overview' => "",
            'testimonial' => "<p>We were delighted with our Mongolian experience. The ger camp was highlight and the traditional Mongolian concert was really enjoyable. Our overall experience was extremely positive.</p>
<p>Thank you for looking after us so well.</p>
<strong>Jane Ferguson Group from Australia</strong>",

        ),

        'mountain-bike-tour' => array(
            'name' => 'Mountain bike tour',
            'layout' => 'mountain-bike-tour.html.twig',
            'duration' => '15 days',
            'duration2' => '15 days / 14 nights',
            'highlights' => array(
                'Karakorum',
                'Erdene zuu monastery',
                'Ongi Temple',
                'Gobi Desert',
                'flaming cliffs',
                'Khongor Sand dune',
                'Earth stone',
                'Orkhon Waterfall',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http:\/\/farm4.staticflickr.com\/3783\/10865349026_4c0c5c2366_b.jpg',
            ),
            'region' => 'Central and Southern part of Mongolia.',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8344/8172475407_05708c0b9f_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8344/8172475407_05708c0b9f_o.jpg',
            'bs_img' => '/img/tour/jeep_main.jpg',
            'pdf' => null,
            'itinerary' => '',
            'overview' => "<p>This exciting trail in the southern and central provinces of South Gobi and Karakorum, passes through varied and beautiful landscapes with wide fertile valleys, forests of silver birch and poplar, rivers and mountain passes. There are a few villages along the way, but most of the population are nomadic and live in the traditional round white gers. Depending on how much rain has fallen, wild flowers may be abundant, and there is a good chance of seeing eagles, cranes, vultures, partridge, falcons and other interesting birds along the way.</p>
            <p>The trail is classed as moderate, requiring some technical skill to manage the steep rocky passes. The first couple of days are on hard packed mud tracks through valleys between the mountains. If there is much rain, the surface may be slippery and more difficult. Riding through the forests and over mountains on rocky tracks sometimes blocked by fallen trees will be quite challenging. The daily riding distance is between 40km - 80km, depending on the terrain. </p>",
            'testimonial' => "<p>Hello,
<br/>
Just want to thank you for your wonderful hospitality and expert tour guiding during our trip to Mongolia. We loved visiting the Husai National Park and exploring the city of Ulanbatar. Our favorite part of the trip was seeing the beautiful countryside and encountering wild horses camels and eagles.
<br/>Thank you so much for showing us around and making sure our trip was a success. We also enjoyed our driver, Zoloo. Look forward to planning our next adventure with you.</p>
<strong>Best,
<br/>Lisa Berkman
<br/>Tour group from USA September</strong>",

        ),

        'motor-bike-tour' => array(
            'name' => 'Motor bike tour',
            'layout' => 'motor-bike-tour.html.twig',
            'duration' => '10 days',
            'duration2' => '10 days / 9 nights',
            'highlights' => array(
                'Khongor Sand Dune',
                'Gobi Desert',
                'Bayanzag',
                'Baga Gazriin Chuluu',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http:\/\/farm4.staticflickr.com\/3783\/10865349026_4c0c5c2366_b.jpg',
            ),
            'region' => 'Central part of Mongolia.',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8349/8172474531_41db0cc315_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8349/8172474531_41db0cc315_o.jpg',
            'bs_img' => '/img/tour/jeep_main.jpg',
            'pdf' => null,
            'itinerary' => '',
            'overview' => "<p>Ride Yamaha, BMW and KTM motorbikes across in Gobi Desert. See some of the most amazing sights and geographical formations that this country has to offer, including big granite mountains with bizarre rock formations, pink and white colored limestone cliffs weathered by wind and rain, golden sand dunes 180 km long and a cold mountain canyon up in the Gobi mountains. Meet families leading the ancient nomadic lifestyle and have a chance to experience their fascinating culture.</p>",
            'testimonial' => "<p>Dear Soyoloo,
<br/>
I had an awesome time in Mongolia. I really came on the trip not knowing what to expect and honestly wasn't sure if it would be 'my thing' but you really did make it worth it and it was money well spent.
</p><p>
Thank you for your friendly, fun and professional attitude. We had a blast! Listening to Mongolian music during the drive definitely added to the mood and experience.
The wild horses were amazing and we took so many photos, it was so hard to choose the ones we wanted to print out for our photo album.
</p><p>
I definitely recommend anyone who is up for an adventure, filled with culture and history and a very friendly tour guide- who basically becomes part of the family/group; to go for Travel All Mongolia. You will leave with not only leave with knowledge of the country's hidden treasures and secrets, but also FANTASTIC photos, a HUGE smile and SATISFACTION for your money well spent. seeing this gorgeous land.
</p><p>
Thanks again Soyoloo It was really a great experience and filled with a lifetime of memories.</p>
<strong>Michealla from Australia</strong>",

        ),

        'buddhism-tour' => array(
            'name' => 'Buddhism tour',
            'layout' => 'buddhism-tour.html.twig',
            'duration' => '14 days',
            'duration2' => '14 days / 13 nights',
            'highlights' => array(
                'Karakorum',
                'Erdene zuu monastery',
                'Terkhiin Tsagaan Lake',
                'Tuvkhun Monastery',
                'Reindeer family',
                'Shankh monastery',
                'Tsenher Hop spring',
                'Huvsgul Lake',
                'Shamanism',
                'Amarbayasgalant monastery',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http:\/\/farm4.staticflickr.com\/3783\/10865349026_4c0c5c2366_b.jpg',
            ),
            'region' => 'Central and Northern part of Mongolia.',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8210/8172504068_d97fe08733_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8210/8172504068_d97fe08733_o.jpg',
            'bs_img' => '/img/tour/jeep_main.jpg',
            'pdf' => null,
            'itinerary' => '',
            'overview' => "<p>Explore Ulaan Baatar and Buddhist monasteries. Journey through dramatic deserts, endless steppe and forested mountains. Stay in gers and discover the Mongolians' fascinating nomadic lifestyle.</p>",
            'testimonial' => "<p>Hello Everybody,
<br/>
I traveled with Travel All Mongolia in Mongolia in the summer of 2010. Mr. SoyolBayar, the owner and operator. He knows the landscape and the history behind the various locations that we toured as a group of six. Our tour guide understands his clients taste and is good at custom arranging tours according to the requests of the travelers in his entourage.</p>
<p>Our tour guide had everything well timed, and calling ahead he always had our arrival destination details ready and well prepared to accommodate us when we got to our location. The sights, the food, the reception, and the accommodations were excellent. His prices included everything; tickets to enter the shows, hotel accommodations, transport, food, and guided tours. I recommend Travel All Mongolia without reservation to anyone who wishes to visit Mongolia.</p>
<p>Mongolia is a beautiful country located in the Central Asian grasslands called the Steppes. It is a land-locked country, sandwiched between Russia and China. The wide open spaces and the friendliness of the people will leave you nostalgic for a land of extensive peacefulness and vastness, long after your visit. Mongolia is worth the visit, and Mongolian Journeys is your best bet at getting your money worth seeing this gorgeous land.</p>
<strong>Jack Perera Elkridge, Maryland, USA</strong>",

        ),

        'jewels-of-mongolia' => array(
            'name' => 'Jewels of Mongolia',
            'layout' => 'jewels-of-mongolia.html.twig',
            'duration' => '10 days',
            'duration2' => '10 days / 9 nights',
            'highlights' => array(
                'Bayanzag Flaming Cliff',
                'Khongor Sand Dune',
                'Yol Valley',
                'Awesome Khuvsgul Lake',
                'Reindeer',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http:\/\/farm4.staticflickr.com\/3783\/10865349026_4c0c5c2366_b.jpg',
            ),
            'region' => 'Southern and Northern part of Mongolia.',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8477/8172503588_b843e0158a_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8477/8172503588_b843e0158a_o.jpg',
            'bs_img' => '/img/tour/jeep_main.jpg',
            'pdf' => null,
            'itinerary' => '',
            'overview' => "<p>The focus of this trip is spending less time crossing the vast landscape of Mongolia by jeep, and more time trekking off the beaten track immersed in the landscape and this trip gives you a chance to enjoy amazing Gobi Desert, and traveling with pristine Khuvsgul Lake. We enable you to make a strong and personal connection with the locals and learn about life through the eyes of the nomad.  Travelling with us will be a small caravan of local horsemen and their horses and camels that will be taking our luggage and equipment.</p>",
            'testimonial' => "<p>Hello,
<br/>
I had a very enjoyable and unforgettable holiday in Mongolia, as it truly was the holiday of a lifetime. Mongolia is a fantastic destination because the scenery is just beautiful and the people are so friendly. Soyoloo was our tour guide and he spoke very good English, he was always punctual, very helpful and generally took care of us. He had very good knowledge of Mongolia, so we were well informed well of the history of Mongolia, the summer festival Nadaam, the traditional gers in the countryside, and the city of Ulaanbaatar. Visiting the traditional gers with Soyoloo was especially fun because We got to do so many different activities like try archery, try some of the Mongolian food, ride a camel, have our names written in Mongolian and we even had Mongolian music played to us. I had learnt that Mongolia is such a fascinating and unique country, which is extremely picturesque, and we would absolutely love to visit the country again in the future. I would recommend anyone thinking of going to Mongolia through Travel All Mongolia, to absolutely go, and get in contact with Soyoloo, because you will be well looked after and you will never forget the holiday.</p>
<strong>Kayleigh Jones from England</strong>",

        ),

        'discover-central-mongolia' => array(
            'name' => 'Discover Central Mongolia',
            'layout' => 'discover-central-mongolia.html.twig',
            'duration' => '10 days',
            'duration2' => '10 days / 9 nights',
            'highlights' => array(
                'Karakorum and Erdene zuu monastery',
                'Experience a camel ride with local nomads',
                'Stay in local Ger camps',
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
                'Ugii Lake',
                'Hustai national park',
                'Relax in sensual hot springs',
                'Elsen Tasarkhai (Sand Dune)',
                'Tuvkhun Monastery',
                'Wonderful Terkhiin Tsagaan Lake',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http:\/\/farm4.staticflickr.com\/3783\/10865349026_4c0c5c2366_b.jpg',
            ),
            'region' => 'Central part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8209/8172475881_8f7461e575_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8209/8172475881_8f7461e575_o.jpg',
            'bs_img' => '/img/tour/jeep_main.jpg',
            'pdf' => null,
            'itinerary' => '',
            'overview' => "<p>Although wilderness exploration is the essence of any adventure holiday to Mongolia, no trip would be complete without a visit to the capital of Ulaanbaatar. Home to just under half the country’s population it is a unique architectural and cultural melting pot; where else would you find a Soviet-style opera house opposite an old Tibetan-style monastery Explore the wonders of Mongolia’s scenic and cultural treasures on foot and horseback, atop a Bactrian camel or in four-wheel-drive vehicles. Adventure Mongolia! is an active trip designed for enthusiastic explorers who want to travel off the beaten track, from the meadows and pine-forested mountains of the Central Mongolian countryside to the dramatic landscapes of the legendary Gobi Desert.</p>",
            'testimonial' => "<p>Hello, <br/>
Just want to thank you for your wonderful hospitality and expert tour guiding during our trip to Mongolia. We loved visiting the Husai National Park and exploring the city of Ulanbatar. Our favorite part of the trip was seeing the beautiful countryside and encountering wild horses camels and eagles. <br/>
Thank you so much for showing us around and making sure our trip was a success. We also enjoyed our driver, Zoloo. Look forward to planning our next adventure with you.</p>
<strong>Best, <br/>
Lisa Berkman <br/>
Tour group from USA September</strong>",

        ),

        'horse-trip-around-khuvsgul-lake' => array(
            'name' => 'Horse trip around khuvsgul lake',
            'layout' => 'horse-trip-around-khuvsgul-lake.html.twig',
            'duration' => '8 days',
            'duration2' => '8 days / 7 nights',
            'highlights' => array(
                'Khuvsgul Lake',
                'visit reindeer family',
                'Great Reindeers',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http:\/\/farm4.staticflickr.com\/3783\/10865349026_4c0c5c2366_b.jpg',
                'http://farm4.staticflickr.com/3670/10865649313_2384ea0d84_b.jpg',
                'http:\/\/farm6.staticflickr.com\/5503\/10865348196_4dc8f0fdb2_b.jpg',
                'http://farm3.staticflickr.com/2874/10865347356_b7f5df5d38_b.jpg',
                'http://farm8.staticflickr.com/7432/10865454634_6dd9ed4774_b.jpg',
            ),
            'region' => 'Northern part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8350/8210566917_55c039848f_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8350/8210566917_55c039848f_o.jpg',
            'bs_img' => '/img/tour/jeep_main.jpg',
            'pdf' => null,
            'itinerary' => '',
            'overview' => "<p>Ride in one of the most incredible places on earth, in the Khuvsgul National Park. Experience the real nomad lifestyle, endless steppe and great Gobi desert on horseback. The best horseback riding in Mongolia on magnificent untouched land! Riding the trails of the warriors of Chinggis Khan, admire the vast Mongolian steppes of his descendants, visit their homes, and share their traditions</p>",
            'testimonial' => "<p>When you think about Mongolia, the first thing that comes to your mind is Genghis Khan, the tales of his achievements and the strength of his warriors. And then the desert, the Gobi, the dunes. A strange landscape that makes us running with imagination in geography books. Mongolia is much more: it is a country of dust, sounds, never-ending silence, and endless landscapes, horizons that seem to grow without end and without obstacles. Mongolia is reflected in people's eyes: peaceful, calm, always helpful and kind, fair … almost noble in their attitudes. People who live in gers (a name which will not say anything to most of Italian people) but that indicates typical tents where the nomadic Mongols lived and still live. Without continuous light, no running water, no comfort, no division of rooms and even less without bathroom. A tent where every day at any time you find a thermos full of hot water or airag (fermented milk, with a slightly salty taste and alcohol), ready for guests. A small cluster, a small world open to anyone who passes. No matter whom he is, where he comes from, what language he speaks. Just stop on the road (dusty way, sometimes there is not even a path and the driver moves like following an invisible line in the middle of the landscape). Someone will arrive in the saddle of his horse or riding a motorcycle. Probably it will be a child (they are entrusted to their family’s herds) and he will immediately try to figure out how to help. Because you do not stop in the desert, if you do not really need to. You constantly travel, ride, go. And when you leave Ulaanbaatar (or UB, as they call it) you’ll see just that: a long and vast prairie, always changing. Rockets, desert, dunes, mountains and plains. One day you are in t-shirt with 35 ° C. The day after you are obliged to wear gloves and scarf! Heaven and earth meet and touch (average altitude above sea level is from 1000 meters at least, UB is 1330 meters) ... in some places you believe you can touch the clouds. So it is not surprising to find out that one of the main deities is Tenger, the god of the sky. During night the sky is so beautiful and wonderful: immense, starry, where you even look at the shades of blue in the Milky Way (yes, they are not colors you see only in books!)... A sky without interruption of artificial lights for miles, surrounded by a silence that you never imagined could exist. A place to visit because it is one of the few places remaining natural on earth, innocent ... where children still accept a gift collecting it with open hands. Where children do not know what is a deflated balloon. Just to see their eyes lighting in discovering it, it's worth flying up to Mongolia!</p>
<strong>Manuela Bolchini</strong>",

        ),

        'horse-riding-in-central-part-of-mongolia' => array(
            'name' => 'Horse riding in central part of Mongolia',
            'layout' => 'horse-riding-in-central-part-of-mongolia.html.twig',
            'duration' => '14 days',
            'duration2' => '14 days / 13 nights',
            'highlights' => array(
                'Horse riding adventures',
                'Karakorum',
                'Erdene zuu monastery',
                'Hot spring',
                'Terkhiin Tsagaan Lake',
                'Ugii Lake',
                'Hustai national park',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http://farm8.staticflickr.com/7312/10865390706_3e10d6a8a3_b.jpg',
            ),
            'region' => 'Central part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8209/8172475881_8f7461e575_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8209/8172475881_8f7461e575_o.jpg',
            'bs_img' => '/img/tour/treasure_main.jpg',
            'pdf' => 'horse-riding-in-central-part-of-mongolia',
            'itinerary' => '',
            'overview' => "<p>A horseback adventure covering many sites of central Mongolia; Karakorum, Erdene Zuu monastery, Tsenkher hot springs, Terkhiin Tsagaan Lake, Ugii Lake, Hustai national park and much more. Having maintained much of its centuries-old nomadic traditions, Mongolia is one of the only places on earth you can interact with true nomadic peoples, whilst riding traditional Mongolian horses.</p>",
            'testimonial' => '<p>We were delighted with our Mongolian experience. The ger camp was highlight and the traditional Mongolian concert was really enjoyable. Our overall experience was extremely positive.</p>
<p>Thank you for looking after us so well.</p>
<strong>Jane Ferguson Group from Australia</strong>',

        ),

        'khuvsgul-lake-tour' => array(
            'name' => 'Khuvsgul lake tour',
            'layout' => 'khuvsgul_lake_tour.html.twig',
            'duration' => '6 days',
            'duration2' => '6 days / 5 nights',
            'highlights' => array(
                'Khuvsgul Lake',
                'Reindeer people',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http://farm8.staticflickr.com/7312/10865390706_3e10d6a8a3_b.jpg',
            ),
            'region' => 'Northern part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8204/8172503520_a196a318a7_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8204/8172503520_a196a318a7_o.jpg',
            'bs_img' => '/img/tour/treasure_main.jpg',
            'pdf' => 'khuvsgul-lake-tour',
            'itinerary' => '',
            'overview' => "<p>Fly next to Muron for a three-night stay in gers that perch on the banks of the pristine Lake Hovsgol. Ride horses, visit nearby nomadic communities, or fish in the clear water. Travel off the beaten path on this extraordinary expedition to Mongolia</p>",
            'testimonial' => '<p>My wife and I, with our two adult sons, had a great family vacation with Mongolian Luxury Tours. Every day we saw beautiful places and very interesting aspects of Mongolian life and culture. The lakes, the high country and the Gobi were all very beautiful, as were the cultural artifacts. The people we met in herding families, in villages and in the capital were friendly, proud and smiling. The fauna, both domestic and wild was exotic and beautiful.
We were very happy to have a Mongolian Luxury Tours provide for our trip to Mongolia, and we are delighted with the result.
</p>
<strong>Steve LaRocca<br/>USA</strong>',

        ),

        'gobi-desert-tour' => array(
            'name' => 'Gobi Desert tour',
            'layout' => 'gobi_desert_tour.html.twig',
            'duration' => '7 days',
            'duration2' => '7 days / 6 nights',
            'highlights' => array(
                'Explore Gobi Gurvan Saikhan National Park',
                'View the largest sand dunes in Mongolia at Khongoryn Els',
                'Experience a camel ride with local nomads',
                'Stay in local Ger camps',
                'Bayanzag (Flaming Cliffs)',
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http://farm6.staticflickr.com/5490/10865615303_f0122dc679_b.jpg',
                'http://farm4.staticflickr.com/3682/10865276005_5ed316d8c4_b.jpg',
                'http://farm6.staticflickr.com/5508/10865424184_e668aef56f_o.jpg',
                'http://farm4.staticflickr.com/3823/10865276255_c55130d028_b.jpg',
                'http://farm8.staticflickr.com/7350/10865312666_f098a2dd60_b.jpg',
            ),
            'region' => 'Southern part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8481/8172503670_7e429a91c2_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8481/8172503670_7e429a91c2_o.jpg',
            'bs_img' => '/img/tour/best_main.jpg',
            'pdf' => 'gobi-desert-tour',
            'itinerary' => '',
            'overview' => "<p>This trip gives you a chance to enjoy amazing Gobi Desert. The Gobi is not just sand and gravel and dead animals. It diversifies into mountains and evergreen forest and geological freak shows - including a dune system as long and high as a mountain range - and sustains an array of endangered species that includes wild ass, wild camels and snow leopards.</p><p>At a place named Bayanzag is a convulsive gash in the steppe, a geological phenomenon of wind-sculpted sandstone known as the Flaming Cliffs. It was given this name by Chapman Andrews because the sandstone glows red in the light of the setting sun. He also called it</p>",
            'testimonial' => '<p>Hello,</p><p>I had a very enjoyable and unforgettable holiday in Mongolia, as it truly was the holiday of a lifetime. Mongolia is a fantastic destination because the scenery is just beautiful and the people are so friendly. Soyoloo was our tour guide and he spoke very good English, he was always punctual, very helpful and generally took care of us. He had very good knowledge of Mongolia, so we were well informed well of the history of Mongolia, the summer festival Nadaam, the traditional gers in the countryside, and the city of Ulaanbaatar. Visiting the traditional gers with Soyoloo was especially fun because We got to do so many different activities like try archery, try some of the Mongolian food, ride a camel, have our names written in Mongolian and we even had Mongolian music played to us. I had learnt that Mongolia is such a fascinating and unique country, which is extremely picturesque, and we would absolutely love to visit the country again in the future. I would recommend anyone thinking of going to Mongolia through Travel All Mongolia, to absolutely go, and get in contact with Soyoloo, because you will be well looked after and you will never forget the holiday.
</p>
<strong>Kayleigh Jones from England</strong>',

        ),

        'naadam-festival-journey' => array(
            'name' => 'Naadam Festival Journey',
            'layout' => 'naadam_festival_journey.html.twig',
            'duration' => '11 days',
            'duration2' => '11 days / 10 nights',
            'highlights' => array(
                'Spectacular Naadam Festival: Horse Racing, Archery & Wrestling',
                'Magnificent Lake Khuvsgul ',
                'Marvel at the spectacular Gobi Desert',
                'View the largest sand dunes in Mongolia at Khongoryn Els',
                'Experience a camel ride with local nomads',
                'Travel Overland through the legendary Gobi Desert.',
                'Bayanzag (Flaming Cliffs) and Visit nomad families ',
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
            ),
            'pictures' => array(
                'http:\/\/farm6.staticflickr.com\/5522\/10865360126_b0fc786cc2_b.jpg',
                'http:\/\/farm8.staticflickr.com\/7398\/10865660243_6b4ec95bde_b.jpg',
                //'http:\/\/farm6.staticflickr.com\/5495\/10865659933_4ccde37297_b.jpg',
                //'http:\/\/farm4.staticflickr.com\/3712\/10865322125_c0a8fe1256_b.jpg',
                'http:\/\/farm6.staticflickr.com\/5513\/10865659913_55ec543d20_b.jpg',
            ),
            'region' => 'Northern, Central & southern part of Mongolia',
            'availableTime' => 'July 23 - Aug 2',
            'map' => 'http://farm6.staticflickr.com/5549/12437569134_ac96e99683.jpg',
            'mapLarge' => 'http://farm6.staticflickr.com/5549/12437569134_ac96e99683_b.jpg',
            'bs_img' => '/img/tour/em_main.jpg',
            'pdf' => 'naadam-festival-journey',
            'itinerary' => "<p>July 5 -Day 1 Arrive in Ulaanbaatar</p><p>July 6 - Day 2 Cultural tour of Ulaanbaatar</p><p>July 7 - Day 3 Flight to Gobi Desert for 1.2 hours</p><p>July 8 - Day 4 Day trip to Flaming Cliffs and Sand Dune</p><p>July 9 - Day 5 Flight back to Ulaanbaatar – Terelj National Park</p><p>July 10 - Day 6 Drive to Hustai National Park</p><p>July 11 - Day 7 Naadam Festival, Opening Ceremony</p><p>July 12 - Day 8 Naadam Festival</p><p>July 13 - Day 9 Take a flight to Khuvsgul Lake for 1.2 hours</p><p>July 14 - Day 10 Explore Khuvsgul Lake</p><p>July 15 - Day 11 Flight back to Ulaanbaatar</p><p>July 16 - Day 12 Departure</p>",
            'overview' => "<p>The Gobi Desert is a dream destination for many travelers! You will get to explore Ulaanbaatar before flying into the South Gobi Desert to explore the world's largest sand dunes, the majestic 'flaming cliffs' where many dinosaur eggs were found, go for a camel ride, and then fly back to Ulaanbaatar to visit Mongolia's largest festival, the Naadam festival!</p>
<p>The Naadam festival means \"games\", also given the name \"eriin gurvan
naadam\" meaning \"the three games of men\". These games are Mongolian
wrestling, horse racing, and archery. The festival is held from July 11
to the 13 at the National Sports Stadium. There is an elaborate ceremony
before the games begin. During the festival, the wrestling really draws
in the crowds. There is not any age or weight restriction, besides it
being gender specific (no women are allowed compete). The objective is
to pin your opponent to the ground with your elbow or knee, no part of
the body is allowed to touch the ground besides your feet and hands. The
winner is awarded the title of Avarga (Giant, or Titan). The horse
racing event is very different from western horse racing as the races
taking place are cross-country, and covering any distance between 10 to
20 miles depending on the age of the horses. Up to 1000 horses can be
chosen to participate. The jockeys are children between the ages of 5
and 13, and training for the event begins many months in advance. The
winning jockey is praised with the title of \"tumny ekh\" or \"leader of
ten thousand\". The archery events are held between groups of ten men and
women, and each participant is supplied with four arrows. There are
hundreds of targets or \"surs\", and each team must hit at least 33 of
them. The winners are declared the National Marksmen or National
Markswomen. Some kind of version of these games have been going on for
centuries.</p>",
            'testimonial' => '<p>I’ve been meaning to write to you and thank you for the wonderful trip to your magnificent country.  Every time we turned a corner there was something new and different to experience.  Serjee was a wonderful guide; we enjoyed very much being with her.  She obviously loves Mongolia and was willing to share so much of herself (and her family) with us.  Visiting with her parents in their home was certainly a highlight. The drivers were the best.  We all felt very safe with them thru the mountains, rivers, whatever.  They participated in activities with us.  And even though they didn’t speak English we all communicated. Everything else was great.  This was one of the best trips I have ever taken. Thank you for offering it to us so we could see your wonderful country first hand.</p>
<strong>Sandra Bremer<br/>USA</strong>',

        ),

        'treasures-of-mongolia' => array(
            'name' => 'Treasures of Mongolia',
            'layout' => 'treasures_of_mongolia.html.twig',
            'duration' => '11 days',
            'duration2' => '11 days / 10 nights',
            'highlights' => array(
                'Explore Gobi Gurvan Saikhan National Park',
                'Karakorum and Erdene zuu monastery',
                'Hustai National Park and Wild Horses',
                'View the largest sand dunes in Mongolia at Khongoryn Els',
                'Experience a camel ride with local nomads',
                'Stay in local Ger camps',
                'Bayanzag (Flaming Cliffs)',
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
                'Visit nomad families',
            ),
            'pictures' => array(
                // zuragnuud
                'http://farm8.staticflickr.com/7312/10865390706_3e10d6a8a3_b.jpg',
            ),
            'region' => 'Central and Southern part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm9.staticflickr.com/8489/8172504394_f3fc07ca6b_o.jpg',
            'mapLarge' => 'http://farm9.staticflickr.com/8489/8172504394_f3fc07ca6b_o.jpg',
            'bs_img' => '/img/tour/treasure_main.jpg',
            'pdf' => 'treasures-of-mongolia',
            'itinerary' => '',
            'overview' => "<p>This trip gives you a great opportunity to see all highlights of Mongolia. We takes you deep into the Mongolian outback with the experience of living like a nomad and experiencing the culture first hand of how the local people live on the vastness of Mongolia's huge landscape. We traverse this amazing land using SUV's and camping beside lakes, riding horses, seeing Shaman rituals first hand, seeing how the Mongolians survive here like their forefathers have done for centuries plus lots more. This is an adventurous experience like no other and it's very easy to see why Mongolia is one of the fastest growing destinations for exploration tourism.</p>",
            'testimonial' => "<p>Dear Soyoloo</p><p>I had an awesome time in Mongolia. I really came on the trip not knowing what to expect and honestly wasn't sure if it would be 'my thing' but you really did make it worth it and it was money well spent.</p>
<p>Thank you for your friendly, fun and professional attitude. We had a blast! Listening to Mongolian music during the drive definitely added to the mood and experience.
The wild horses were amazing and we took so many photos, it was so hard to choose the ones we wanted to print out for our photo album.</p>
<p>I definitely recommend anyone who is up for an adventure, filled with culture and history and a very friendly tour guide- who basically becomes part of the family/group; to go for Travel All Mongolia. You will leave with not only leave with knowledge of the country's hidden treasures and secrets, but also FANTASTIC photos, a HUGE smile and SATISFACTION for your money well spent. seeing this gorgeous land.</p>
<p>Thanks again Soyoloo It was really a great experience and filled with a lifetime of memories.</p>
<strong>Michealla from Australia</strong>",

        ),

/*
        'splendors-of-mongolia' => array(
            'name' => 'Splendors of Mongolia',
            'layout' => 'splendors_of_mongolia.html.twig',
            'duration' => '10 days',
            'duration2' => '10 days / 9 nights',
            'highlights' => array(
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
                'Marvel at the spectacular Gobi Desert',
                'View the largest sand dunes in Mongolia at Khongoryn Els',
                'Experience a camel ride with local nomads',
                'Travel Overland through the legendary Gobi Desert.',
                'Bayanzag (Flaming Cliffs) and Visit nomad families ',
                'Observe wild horses called Przewalski horses',
                'Terelj National Park & Turtle Rock',
            ),
            'pictures' => array(
                'http://farm8.staticflickr.com/7312/10865390706_3e10d6a8a3_b.jpg',
                'http:\/\/farm8.staticflickr.com\/7369\/10865387656_7816f0b3fe_b.jpg',
                'http://farm4.staticflickr.com/3743/10865690713_e66630fdf0_b.jpg',
                'http:\/\/farm6.staticflickr.com\/5522\/10865350955_20ce983b05_b.jpg',
                'http://farm4.staticflickr.com/3677/10865388236_1bab50755d_b.jpg',
            ),
            'region' => 'Southern & Central part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm4.staticflickr.com/3810/13469183905_0c7268c026.jpg',
            'mapLarge' => 'http://farm4.staticflickr.com/3810/13469183905_0c7268c026_b.jpg',
            'bs_img' => '/img/tour/treasure_main.jpg',
            'pdf' => 'splendors-of-mongolia',
            'itinerary' => '<p>Day 1 Arrive in Ulaanbaatar</p>
<p>Day 2 Cultural tour of Ulaanbaatar</p>
<p>Day 3 Flight to Gobi Desert for 1.2 hours</p>
<p>Day 4 Day trip to Flaming Cliffs and Sand Dune</p>
<p>Day 5 Flight back to Ulaanbaatar &ndash; Terelj National Park</p>
<p>Day 6 Drive to Hustai National Park</p>
<p>Day 7 Take a flight to Khuvsgul Lake for 1.2 hours</p>
<p>Day 8 Explore Khuvsgul Lake</p>
<p>Day 9 Flight back to Ulaanbaatar</p>
<p>Day 10 Departure</p>',
            'overview' => '<p>From the time of Chinggis Khan, Mongolia has intrigued travelers with its open steppes, nomadic tribes and vast deserts. Our Classic Mongolia departure allows us to discover Mongolia today; a place where age old traditions and modern progress are converging; which is most evident in Ulaanbaatar. From the capitol we begin our cultural journey traveling to the steppe. Here we have a chance to meet the welcoming Mongolians and get a taste for their lives herding animals and wandering the plains. Always welcoming we will visit gers, traditional felt tents, and have a chance to share a tea and have unique cultural exchanges; the most memorable part of many travelers\' journeys.</p>',
            'testimonial' => '<p>My wife and I, with our two adult sons, had a great family vacation with Mongolian Luxury Tours. Every day we saw beautiful places and very interesting aspects of Mongolian life and culture. The lakes, the high country and the Gobi were all very beautiful, as were the cultural artifacts. The people we met in herding families, in villages and in the capital were friendly, proud and smiling. The fauna, both domestic and wild was exotic and beautiful.
We were very happy to have a Mongolian Luxury Tours provide for our trip to Mongolia, and we are delighted with the result.
</p>
<strong>Steve LaRocca<br/>USA</strong>',

        ),

        'gobi-and-beyond' => array(
            'name' => 'Gobi & Beyond',
            'layout' => 'gobi_and_beyond.html.twig',
            'duration' => '7 days',
            'duration2' => '7 days / 6 nights',
            'highlights' => array(
                'Marvel at the spectacular Gobi Desert',
                'View the largest sand dunes in Mongolia at Khongoryn Els',
                'Experience a camel ride with local nomads',
                'Travel Overland through the legendary Gobi Desert.',
                'Bayanzag (Flaming Cliffs) and Visit nomad families',
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
            ),
            'pictures' => array(
                'http://farm6.staticflickr.com/5490/10865615303_f0122dc679_b.jpg',
                'http://farm4.staticflickr.com/3682/10865276005_5ed316d8c4_b.jpg',
                'http://farm6.staticflickr.com/5508/10865424184_e668aef56f_o.jpg',
                'http://farm4.staticflickr.com/3823/10865276255_c55130d028_b.jpg',
                'http://farm8.staticflickr.com/7350/10865312666_f098a2dd60_b.jpg',
            ),
            'region' => 'Southern part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm4.staticflickr.com/3763/13469185685_d48e429a1e.jpg',
            'mapLarge' => 'http://farm4.staticflickr.com/3763/13469185685_d48e429a1e_b.jpg',
            'bs_img' => '/img/tour/best_main.jpg',
            'itinerary' => '<p>Day 1 Arrive in Ulaanbaatar</p>
<p>Day 2 City Tour</p>
<p>Day 3 Flight to Gobi Desert for 1.2 hours</p>
<p>Day 4 Day trip to Flaming Cliffs and Sand Dune</p>
<p>Day 5 Flight back to Ulaanbaatar &ndash; Terelj National Park</p>
<p>Day 6 Drive back to Ulaanbaatar</p>
<p>Day 7 departure&nbsp;</p>',
            'overview' => '<p>Mongolia is the land of the legendary Genghis Khan. It is known for the vast steppe and the Gobi Desert is a dream destination for many travelers! You will  explore the capital Ulaanbaatar, fly into South Gobi to explore the largest Sand Dunes, the Flaming Cliffs, view the excavated dinosaur eggs and other fossils, experience the nomadic lifestyle in the Ger camps, and even a enjoy a camel ride!</p>',
            'testimonial' => '<p>Our driver and vehicle were both outstanding. Our driver was so skilful that even difficult terrain was easy and a comfortable ride. Like our guide, the driver had a great personality and added a lot to our trip. The vehicle itself was very well maintained, always clean and very comfortable. My family and I thoroughly enjoyed our trip. I deeply appreciate the Mongolian Luxury Tours Tour Company for accommodating our early arrived and delayed departure with transportation.
</p>
<strong>Martin Ebert<br/>from USA</strong>',

        ),

        'a-classic-journey-of-mongolia' => array(
            'name' => 'A Classic Journey of Mongolia',
            'layout' => 'a_classic_journey_of_mongolia.html.twig',
            'duration' => '12 days',
            'duration2' => '12 days / 11 nights',
            'pictures' => array(
                'http://farm6.staticflickr.com/5478/10865156236_beb01b54c0_o.jpg',
                'http://farm6.staticflickr.com/5517/10865457583_e90e36fe93_b.jpg',
                'http://farm4.staticflickr.com/3831/10865274494_2af2b01f8f_b.jpg',
                'http://farm3.staticflickr.com/2829/10865156156_f48cab270b_o.jpg',
                'http://farm3.staticflickr.com/2875/10865457203_44a1755200_b.jpg',
            ),
            'region' => 'Northern, Central & Southern part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'highlights' => array(
                'Magnificent Lake Khuvsgul',
                'Marvel at the spectacular Gobi Desert',
                'View the largest sand dunes in Mongolia',
                'Experience a camel ride with local nomads',
                'Travel Overland through the legendary Gobi Desert.',
                'Bayanzag (Flaming Cliffs) and Visit nomad families',
                'Magnificent Erdene Zuu Monastery',
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
                'Karakorum, Ancient capital of Mongolia Great Empire',
                'Observing wild horse called Prezwalski horse',
                ),
            'map' => 'http://farm3.staticflickr.com/2873/13469289433_08bd240351.jpg',
            'mapLarge' => 'http://farm3.staticflickr.com/2873/13469289433_08bd240351_b.jpg',
            'bs_img' => '/img/tour/adventure_main.jpg',
            'pdf' => 'a-classic-journey-of-mongolia',
            'itinerary' => '<p>Day 1 Arrive in Ulaanbaatar</p>
<p>Day 2 City Tour</p>
<p>Day 3 Flight to Khuvsgul Lake</p>
<p>Day 4 Explore the Khuvsgul Lake</p>
<p>Day 5 Flight back to Ulaanbaatar &ndash; Hustai National Park</p>
<p>Day 6 Drive to Karakorum</p>
<p>Day 7 Drive back to Ulaanbaatar</p>
<p>Day 8 Flight to Gobi Desert for 1.2 hours</p>
<p>Day 9 Day trip to Flaming Cliffs and Sand Dune</p>
<p>Day 10 Flight back to Ulaanbaatar &ndash; Terelj National Park</p>
<p>Day 11 Drive to Ulaanbaatar</p>
<p>Day 12 Departure</p>',
            'overview' => '<p>Mongolia is the land of nomadic horsemen with the traditions dating back to the time of Genghis Khan. The country is a vast prairieland with more than half of country\'s population still dwelling in the Ger Camps with people using their horses or camels for their daily activities. This trip features the two major attractions of Mongolia; the Gobi desert in the south and Khuvsgul Lake in the north. You will get to take a camel ride in the sand dunes, take a hike on the shores of the lake, meet the nomadic families, and try the local cuisines.</p>',
            'testimonial' => "<p>I was looking for a destination which  most tourists haven't yet visited .  Mongolia was far beyond what I expected for it's non touristy but so friendly attitude, the exciting gobi  desert and  the magical gers.  Ulaanbaatar, was a major surprise seeing the old sad soviet  cemete blocks called buildings next to sleek skyscrapers. For anyone who wants adventure, beauty and a bit of hardship (the infrastructure is still not up to par),  this is the most amazing country to visit before it becomes the \"in place\". And working with, Mongolia luxury tours a most knowledgeable, agreeable tour company. Thanks to Soyoloo.</p>
<strong>Barbara Kingstone<br/>Canada</strong>",

        ),

        'karakorum-and-khuvsgul-lake-adventure' => array(
            'name' => 'Karakorum & Khuvsgul Lake Adventure',
            'layout' => 'karakorum_khuvsgul.html.twig',
            'duration' => '8 days',
            'duration2' => '8 days / 7 nights',
            'highlights' => array(
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
                'Observing wild horse called Prezwalski horse ',
                'Beautiful Khuvsgul lake ',
                'Visiting the Erdene Monastery, one of the oldest Tibetan Buddhism Monasteries in the world',
                'Visit reindeer Family ',
            ),
            'pictures' => array(
                'http:\/\/farm4.staticflickr.com\/3783\/10865349026_4c0c5c2366_b.jpg',
                'http://farm4.staticflickr.com/3670/10865649313_2384ea0d84_b.jpg',
                'http:\/\/farm6.staticflickr.com\/5503\/10865348196_4dc8f0fdb2_b.jpg',
                'http://farm3.staticflickr.com/2874/10865347356_b7f5df5d38_b.jpg',
                'http://farm8.staticflickr.com/7432/10865454634_6dd9ed4774_b.jpg',
            ),
            'region' => 'Northern & Central part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm8.staticflickr.com/7065/13469539514_98f18ac399.jpg',
            'mapLarge' => 'http://farm8.staticflickr.com/7065/13469539514_98f18ac399_b.jpg',
            'bs_img' => '/img/tour/jeep_main.jpg',
            'itinerary' => '<p>Day 1 Arrive in Ulaanbaatar</p>
<p>Day 2 City Tour</p>
<p>Day 3 Flight to Khuvsgul Lake</p>
<p>Day 4 Explore the Khuvsgul Lake</p>
<p>Day 5 Flight back to Ulaanbaatar &ndash; Hustai National Park</p>
<p>Day 6 Drive to Ulaanbaatar</p>
<p>Day 7 Departure</p>',
            'overview' => "<p>This week long adventure takes you off the beaten path to beautiful Khuvsgul Lake, located in Mongolia’s northern region near the Russian border on the foothills of the Sayan Mountains. It is the largest freshwater lake by volume in Mongolia, making up about 70% of all of Mongolia’s fresh water.
</p><p>
After exploring the capital city of Ulaanbaatar, you’ll fly into Muron and transfer to your deluxe ger, a traditional nomadic tent, perched on the banks of the pristine Khuvsgul Lake. You’ll have the opportunity to ride horses, interact with the nearby nomadic communities or fish in the clear waters.
</p><p>
Your adventure ends with a visit to Hustai National Park where you have the opportunity to see Przewalski (Tahki) Horses. These endangered wild horses are native to the steppes of Mongolia. After becoming extinct in the wild in the 1960’s they were reintroduced to Hustai from a group of horses from several zoos in 1992. Today they roam freely through Hustai National Park, one of the best protected areas in Mongolia.</p>",

        ),

        'naadam-festival-journey' => array(
            'name' => 'Naadam Festival Journey',
            'layout' => 'naadam_festival_journey.html.twig',
            'duration' => '11 days',
            'duration2' => '11 days / 10 nights',
            'highlights' => array(
                'Spectacular Naadam Festival: Horse Racing, Archery & Wrestling',
                'Magnificent Lake Khuvsgul ',
                'Marvel at the spectacular Gobi Desert',
                'View the largest sand dunes in Mongolia at Khongoryn Els',
                'Experience a camel ride with local nomads',
                'Travel Overland through the legendary Gobi Desert.',
                'Bayanzag (Flaming Cliffs) and Visit nomad families ',
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
            ),
            'pictures' => array(
                'http:\/\/farm6.staticflickr.com\/5522\/10865360126_b0fc786cc2_b.jpg',
                'http:\/\/farm8.staticflickr.com\/7398\/10865660243_6b4ec95bde_b.jpg',
                //'http:\/\/farm6.staticflickr.com\/5495\/10865659933_4ccde37297_b.jpg',
                //'http:\/\/farm4.staticflickr.com\/3712\/10865322125_c0a8fe1256_b.jpg',
                'http:\/\/farm6.staticflickr.com\/5513\/10865659913_55ec543d20_b.jpg',
            ),
            'region' => 'Northern, Central & southern part of Mongolia',
            'availableTime' => 'July 23 - Aug 2',
            'map' => 'http://farm6.staticflickr.com/5549/12437569134_ac96e99683.jpg',
            'mapLarge' => 'http://farm6.staticflickr.com/5549/12437569134_ac96e99683_b.jpg',
            'bs_img' => '/img/tour/em_main.jpg',
            'pdf' => 'naadam-festival-journey',
            'itinerary' => "<p>July 5 -Day 1 Arrive in Ulaanbaatar</p><p>July 6 - Day 2 Cultural tour of Ulaanbaatar</p><p>July 7 - Day 3 Flight to Gobi Desert for 1.2 hours</p><p>July 8 - Day 4 Day trip to Flaming Cliffs and Sand Dune</p><p>July 9 - Day 5 Flight back to Ulaanbaatar – Terelj National Park</p><p>July 10 - Day 6 Drive to Hustai National Park</p><p>July 11 - Day 7 Naadam Festival, Opening Ceremony</p><p>July 12 - Day 8 Naadam Festival</p><p>July 13 - Day 9 Take a flight to Khuvsgul Lake for 1.2 hours</p><p>July 14 - Day 10 Explore Khuvsgul Lake</p><p>July 15 - Day 11 Flight back to Ulaanbaatar</p><p>July 16 - Day 12 Departure</p>",
            'overview' => "<p>The Gobi Desert is a dream destination for many travelers! You will get to explore Ulaanbaatar before flying into the South Gobi Desert to explore the world's largest sand dunes, the majestic 'flaming cliffs' where many dinosaur eggs were found, go for a camel ride, and then fly back to Ulaanbaatar to visit Mongolia's largest festival, the Naadam festival!</p>
<p>The Naadam festival means \"games\", also given the name \"eriin gurvan
naadam\" meaning \"the three games of men\". These games are Mongolian
wrestling, horse racing, and archery. The festival is held from July 11
to the 13 at the National Sports Stadium. There is an elaborate ceremony
before the games begin. During the festival, the wrestling really draws
in the crowds. There is not any age or weight restriction, besides it
being gender specific (no women are allowed compete). The objective is
to pin your opponent to the ground with your elbow or knee, no part of
the body is allowed to touch the ground besides your feet and hands. The
winner is awarded the title of Avarga (Giant, or Titan). The horse
racing event is very different from western horse racing as the races
taking place are cross-country, and covering any distance between 10 to
20 miles depending on the age of the horses. Up to 1000 horses can be
chosen to participate. The jockeys are children between the ages of 5
and 13, and training for the event begins many months in advance. The
winning jockey is praised with the title of \"tumny ekh\" or \"leader of
ten thousand\". The archery events are held between groups of ten men and
women, and each participant is supplied with four arrows. There are
hundreds of targets or \"surs\", and each team must hit at least 33 of
them. The winners are declared the National Marksmen or National
Markswomen. Some kind of version of these games have been going on for
centuries.</p>",
            'testimonial' => '<p>I’ve been meaning to write to you and thank you for the wonderful trip to your magnificent country.  Every time we turned a corner there was something new and different to experience.  Serjee was a wonderful guide; we enjoyed very much being with her.  She obviously loves Mongolia and was willing to share so much of herself (and her family) with us.  Visiting with her parents in their home was certainly a highlight. The drivers were the best.  We all felt very safe with them thru the mountains, rivers, whatever.  They participated in activities with us.  And even though they didn’t speak English we all communicated. Everything else was great.  This was one of the best trips I have ever taken. Thank you for offering it to us so we could see your wonderful country first hand.</p>
<strong>Sandra Bremer<br/>USA</strong>',

        ),

        'highlights-of-mongolia' => array(
            'name' => 'Highligts of Mongolia',
            'layout' => 'highlights_of_mongolia.html.twig',
            'duration' => '12 days',
            'duration2' => '12 days / 11 nights',
            'highlights' => array(
                'Spectacular Naadam Festival: Horse Racing, Archery & Wrestling',
                'Magnificent Lake Khuvsgul ',
                'Marvel at the spectacular Gobi Desert',
                'View the largest sand dunes in Mongolia at Khongoryn Els',
                'Experience a camel ride with local nomads',
                'Travel Overland through the legendary Gobi Desert.',
                'Bayanzag (Flaming Cliffs) and Visit nomad families ',
                'Explore the capital Ulaanbaatar and the Gandan Monastery',
            ),
            'pictures' => array(
                'http://farm6.staticflickr.com/5478/10865156236_beb01b54c0_o.jpg',
                'http://farm6.staticflickr.com/5517/10865457583_e90e36fe93_b.jpg',
                'http:\/\/farm6.staticflickr.com\/5522\/10865350955_20ce983b05_b.jpg',
                'http://farm4.staticflickr.com/3677/10865388236_1bab50755d_b.jpg',
            ),
            'region' => 'Northern, Central & southern part of Mongolia',
            'availableTime' => 'May 01-October 1',
            'map' => 'http://farm3.staticflickr.com/2905/13469289143_a84a625337.jpg',
            'mapLarge' => 'http://farm3.staticflickr.com/2905/13469289143_a84a625337_b.jpg',
            'bs_img' => '/img/tour/em_main.jpg',
            'pdf' => 'highlights-of-mongolia-july',
            'itinerary' => "<p>Day 1 Arrive in Ulaanbaatar
</p><p>Day 2 City Tour
</p><p>Day 3 Flight to Gobi Desert for 1.2 hours
</p><p>Day 4 Yol Valley to Flaming Cliffs
</p><p>Day 5 Yol Valley to Moltsog Sand Dune
</p><p>Day 6 Gobi - Ulaanbaatar - Terelj NP
</p><p>Day 7 Terelj NP - 13th century - Terelj NP
</p><p>Day 8 Terelj NP - Hustai NP - HS Luxury resort
</p><p>Day 9 HS Luxury Resort to Ulaanbaatar
</p><p>Day 10 Departure</p>",
            'overview' => "<p>When you travel with Mongolian Luxury Tours you will experience the very best of our country and become totally immersed in what makes our little corner of the world so great such as the beauty of our landscapes, the charm of our people, the embrace of our culture and the warmth of our welcome. We specialize in luxury travel so our trips include five star hotels and luxury tourist camps and resorts as well. We do recognize that a luxury experience requires a certain level of consultation and because all are different, we prefer to design a bespoke itinerary for you based on understanding your needs. Nothing will be left to chance and you can rest assured our team is experienced in dealing with the most discerning of valued clients.</p>",

        ),

        'bird-watching-trip' => array(
            'name' => 'Bird Watching Trip',
            'layout' => 'bird_watching_trip.html.twig',
            'slides1' => array(
			    "/img/birding/1.jpg",
			    "/img/birding/2.jpg",
			    "/img/birding/3.jpg",
			    "/img/birding/4.jpg",
			    "/img/birding/5.jpg",
			    "/img/birding/6.jpg",
            ),
            'slides2' => array(
                "/img/birding/1_t.jpg",
                "/img/birding/2_t.jpg",
                "/img/birding/3_t.jpg",
                "/img/birding/4_t.jpg",
                "/img/birding/5_t.jpg",
                "/img/birding/6_t.jpg",
            ),
        ),
*/

    );

    /**
     * Get all tours
     *
     * @return array
     */
    public function getTours()
    {
        return $this->tours;
    }

    /**
     * Get tour info by slug
     *
     * @param $key
     * @return array|null
     */
    public function getTourInfo($key)
    {
        if(array_key_exists($key, $this->tours))
            return $this->tours[$key];

        return null;
    }

    /**
     * Get all bookable tours
     *
     * @return array
     */
    public function getBookableTours()
    {
        return array(
            'Splendors of Mongolia' => 'Splendors of Mongolia',
            'A Classic Journey of Mongolia' => 'A Classic Journey of Mongolia',
            'Gobi and Beyond' => 'Gobi and Beyond',
            'Naadam Festival Journey' => 'Naadam Festival Journey',
            'Karakorum and Khuvsgul lake adventures' => 'Kharakorum and Khuvsgul lake adventures',
            'Highlights of Mongolia' => 'Highlights of Mongolia',
        );
    }
} 