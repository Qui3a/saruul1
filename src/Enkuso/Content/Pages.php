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


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Pages
{
    /** @var array */
    private $pages = array(
        'about-mongolia' => array(
            'title' => 'About Mongolia',
            'body' => '<img alt="Mongolia" src="http://www.mongolianluxurytours.com/img/map.png">
<table style="width: 940px;" border="0" cellspacing="1" cellpadding="4" align="left">
<tbody>
<tr class="text">
<td valign="top" width="98">
<p><strong>Population:</strong></p>
</td>
<td valign="top" width="551">
<p>2.9 million</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Area:</strong></p>
</td>
<td valign="top" width="551">
<p>1,566,000 sq km (610,740 sq mi)</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Land boundaries:</strong></p>
</td>
<td valign="top" width="551">
<p>8,158 km, with Russia 3,485 km and with China 4,673 km</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Average altitude:</strong></p>
</td>
<td valign="top" width="551">
<p>1,580 m above sea-level</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Terrain:</strong></p>
</td>
<td valign="top" width="551">
<p>Vast semi-desert and desert plains, mountains in west and south-west, Gobi Desert in south-east</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>People:</strong></p>
</td>
<td valign="top" width="551">
<p>Khalkha Mongols (86%), Kazaks (6%), about a dozen other Mongolian ethnic groups</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Languages:</strong></p>
</td>
<td valign="top" width="551">
<p>Mongolian, Kazakh, Russian, Chinese. English is widely spoken in the Ulaanbaatar.</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Religions:</strong></p>
</td>
<td valign="top" width="551">
<p>Tibetan Buddhism, Muslim, Christian and Shamanism</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Literacy rate:</strong></p>
</td>
<td valign="top" width="551">
<p>82.9%</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Climate:</strong></p>
</td>
<td valign="top" width="551">
<p>Average summer temperature +20\'C, average winter temperature -26\'C, average rainfall 200-220 mm. Winter lasts from November to late April, Spring May through June, Summer from July through to September.</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Political system:</strong></p>
</td>
<td valign="top" width="551">
<p>Parliamentary republic. President elected for four years. Present President Enkhbayar Nambar, elected in 2005. Prime Minister appointed by State Great Khural for four years. Present Prime Minister Mr. Elbegdorj Tsakhia. was appointed in 2004.</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Legislature:</strong></p>
</td>
<td valign="top" width="551">
<p>State Great Khural (Parliament), unicameral with 76 members elected for four years. The last election was held on 2 Juny, 2004.</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Judicial system:</strong></p>
</td>
<td valign="top" width="551">
<p>Mongolian judicial system consists of Constitutional Court , Supreme Court, Aimag and capital city courts, soum and district courts.</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>State structure:</strong></p>
</td>
<td valign="top" width="551">
<p>Mongolia is a unitary state and divided administratively into Aimags (21) and a capital city; Aimags are subdivided into soums; soums into bags; and a capital city into districts; districts into khoroos.</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>National currency:</strong></p>
</td>
<td valign="top" width="551">
<p>Tugrik (MNT), about MNT 1850 = USD 1 in September, 2014</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Fiscal year:</strong></p>
</td>
<td valign="top" width="551">
<p>January 1 - December 31</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Main entry points:</strong></p>
</td>
<td valign="top" width="551">
<p>Buyant Ukhaa (airport in Ulaanbaatar ), Sukhbaatar (railway station on Mongolian-Russian border) and Zamyn Uud (railway station on Mongolian-Chinese border)</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Sea access:</strong></p>
</td>
<td valign="top" width="551">
<p>Tianjin/China (1,344 km) and Nakhodka/Russia (4,037 km)</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Public holidays:</strong></p>
</td>
<td valign="top" width="551">
<p>December 31- January 1 - New Year 3 days in January/February - Mongolian New Year (Tsagaan Sar), June 1 - Mother and Child day, July 11-13 - National Holiday (Naadam)</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Time:</strong></p>
</td>
<td valign="top" width="551">
<p>Add 8 hours to Greenwich Mean Time</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Normal working hours:</strong></p>
</td>
<td valign="top" width="551">
<p>09.00-13.00 and 14.00-18.00</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Electric current:</strong></p>
</td>
<td valign="top" width="551">
<p>220 volts/50 HZ</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Weight and measures:</strong></p>
</td>
<td valign="top" width="551">
<p>Metric System</p>
</td>
</tr>
<tr class="text">
<td valign="top" width="98">
<p><strong>Visa arrangements:</strong></p>
</td>
<td valign="top" width="551">
<p>Visa shall be issued by Mongolia Embassies and Diplomatic Missions as well as Honorary consuls of Mongolia , or can be obtained at the airport at a cost of US$53 but must be accompanied by an invitation.</p>
</td>
</tr>
</tbody>
</table>',
        ),
        'nomadic-experience' => array(
            'title' => 'Being Mongolia (lifestyle of Mongolian nomads)',
            'body' => '',
            'content' => 'explore-way-of-nomadic-lifestyle.html',
        ),
        'tourist-events' => array(
            'title' => 'Tourist events',
            'body' => '<h2>Eagle festival</h2>
<p>Every year during the first week of October, the &ldquo;Eagle festival&rdquo; is celebrated in Bayan Ulgii, in the far west of Mongolia. The aimag of Bayan Ulgii is situated in the breathtaking scenery of the Altai mountain range, where four Asian countries meet. The inhabitants of this area with its rich mix of cultures are mostly ethnic Kazakhs wearing their traditional embroidered clothes.</p>
<p>The &ldquo;Eagle festival&rdquo; is a tournament of falconers from the region, who hunt with trained eagles. Once a year, they come together from their home village to measure their skills. There are about 380 falconers organized in an association. They are of all ages, from the teenage boy to the octogenarian, but in keeping with tradition, no girls or women may practice the art.</p>
<p>The training of the future eagle-hunters sets in at a very early age. Boys under ten are initiated to the art and science of falconry by their father or grandfather, usually not starting right out with an eagle, but beginning with a smaller bird of prey. Adult falconers use the golden eagles native to the region. A tamed eagle can live up to 32 years in captivity, but as a rule, the birds are set free again after a few years hunting. A full-grown golden eagle has a wingspan of about two meters, and a weight of between six and twelve pounds. The falconers normally live as nomadic cattle breeders for most of the year and hunt only in winter. Their eagles are trained to catch small game such as hares or foxes, but they are known to kill even small wolves now and again.</p>
<p>In the tournament, the eagle-hunter has to perform three tasks. At first, the mounted falconer must call his bird from the top of a hill to settle on his arm. Then, the eagle has to hunt for hides drawn by a running horse. At last, the bird must catch a live animal typically a fox. The participants are judged not only by their skills in the art of eagle-falconry, but also by the finery of their attire, the glove, harness and bird&rsquo;s hood made from deer hide, as well as the traditional hunting dress.</p>
<p>After the falconry tournament, the men engage in rider&rsquo;s games, like plucking a flower from the back of a running horse, or the traditional &ldquo;buzkoshi&rdquo;. In this central Asian sport sometimes said to be the origin of polo several riders fight for the possession of a dead goat. Horse races and archery tournaments round off the festival. Although it&rsquo;s a long way from Ulaanbaatar, the trip is well worth it. There is no other place on earth where you can see so many golden eagles at close range.</p>
<h2><img src="/images/eagle_1.jpg" alt="Mongolian Adventure Tours" /><img src="/images/eagle_2.jpg" alt="Mongolian Adventure Tours" /><img src="/images/eagle_3.jpg" alt="Mongolian Adventure Tours" /></h2>
<h2 id="naadam">Naadam Festival</h2>
<p>The Mongolian national holiday Naadam is celebrated in Mongolia each year on 11 July. &ldquo;Eriin gurvan naadam&rdquo; the three manly games of wrestling, horse racing, and archery- make up the core activities of the National day festivals.</p>
<p>Wrestling &ndash; At the start of competition all the wrestlers with the highe r title &ndash; holder in front , enter the hall in a line wearing gutuls (decorated Mongolian boots. ) and hats and their wrestling costumes called &ldquo;zodog&rdquo;(an open fronted , long sleeves vest of silk) and &ldquo;shuudag&rdquo;(tight short trunks ). There are many different titles for the wrestlers such as Titan (avarge), Lion (arslan). Zaan and Falcon. All the names signify strength. Titles are mostly confirmed during the national festival Naadam. A wrestler who wins five fights in succession during one competition has the right to have the title of Falcon, and if he wins seven fights in succession Elephant. When a wrestler wins all the fights in a competition during one of these festivals he will be a Lion. If he wins a subsequent year he merits the title of titan, the highest rank. There is a variety of throws used to defeat opponents. Some say there are hundreds of them. When the wrestling arena or step onto the carpet in the case of an indoor competition and the second take off the wrestler\'s hats.</p>
<p>When a wrestler touches the ground with any part of his body other than his feet and arms, he is considered to be defeat. The main difference between Mongolian national wrestling and international free style wrestling is that the weight category of wrestlers is not taken into consideration.</p>
<p>Horse racing. Mongolian people have loved horse racing since time immemorial. A whole system for conducting the contests has developed over the centuries. In the races held during national festivals, including Naadam, participants are six age groups and the distances range from 15-30kms. No special tracks are prepared, the horses covering the distance in the steppe and jumping over natural barriers. Before they start the riders sing an ancient war-like song &ndash; Giingoo. The competitors start at the finishing line and at the signal to start and back to the finish line. Thus the distance is actually doubled. The horse racing can be held on saddled or unsaddled horses. Horses of two years older take part. The winner is honored with a cup of airag which he drinks and sprinkles on the head and croup of his horse. After the races, praise-singer extols the best riders and their horses.</p>
<p>Archery: the third element of the national games is archery. Five lines engraved on an ancient Mongolian target immortalize the phenomenal record of Yesuhei Hero, saying that his arrow hit the target at a distance of 536 meters. The bow is an ancient invention going back to the Mesolithic Period. Ancient Mongolians made their contribution to the design of the bow as a combat weapon.</p>
<p>Today Mongolian\'s use less complicated form archery than in ancient time; the target is &ldquo;wall&rdquo; made of cork cylinders braided together with leader straps. It is four meters long and 50cm high. The target is placed on the ground at a distance of 75 meters for men and 60 meters for women. In the past Mongolians used three types of bows; &ldquo;big hand&rdquo; (165-170cm),&rdquo;average hand&rdquo; (160cm), &ldquo;small hand&rdquo; (150cm). Today Mongolian\'s mostly use the average hand bow which requires a force of 22 to 38kg to draw it.</p>
<p>Arrows are usually made from pine wood and had feather fins which help the arrow to reach distance of 900 meters. Naadam archery also attracts individual archers as well as Teams of 8-12 people. Every male archer has forty arrows to shot at each target. The judges dressed in national attire, stand by the targets with hands held up after the arrows have been shot. They praise the best shot in a drawing recitative voice. The contests are accompanied by colorful national rites. Before the competition starts you hear the recitative song &ldquo;uukhai&rdquo;, calling on the archers to be good marksmen and hit the target.</p>
<h2><img src="/images/naadam_1.jpg" alt="Mongolian Adventure Tours" /><img src="/images/naadam_2.jpg" alt="Mongolian Adventure Tours" /><img src="/images/naadam_3.jpg" alt="Mongolian Adventure Tours" /></h2>
<h2>Tsagaan sar</h2>
<p>Tsagaansar or White Month is one of Mongolia&rsquo;s two major and long awaited holidays, the other being Naadam in July. Tsagaansar or White Month, the first month of spring, has been one of the most important celebrations of the Mongols for thousands of years. This is a time of the year when the winter passes away and the spring comes in. Tsagaansar is a festival of white food (food with white color &ndash; milk and diary products, fermented mare&rsquo;s milk etc.) Tsagaansar represents a heartfelt spirit of people. On this day, people clean their body and mind from all bad things and start a new fresh clean life. Tsagaansar is the day when people express respect to elder people and relatives, renew friendship and sympathy to each other and reconfirm family ties. Since the holiday means all relatives, neighbors, friends and guests will be treated to a lavish meal, women make more than a thousand or two buuzand dumplings. Ready dumplings are lined on wooden plates and put outside. The next day, frozen buuz are ready to be steamed. Families all across the country stock-up on food, diary products, mild milk vodka and other specialties for the occasion. The Tsagaansar eve or the last day of winter is called &ldquo;Bituun&rdquo;, which means &ldquo;full darkness&rdquo; it is a single night when no moon is invisible in the sky. Beforehand, all the business of the past year must be wrapped up; debts paid and good relations restored. All the Bituun ceremony is supposed to start when it gets dark outside. The Bituunis mainly celebrated in close family. In the evening, all the family members gather, the women start to set the table.</p>
<p>With the sunrise, the greeting ceremony starts inside the family. The oldest person stays in &ldquo;Hoimor&rdquo; (ger&rsquo;s northern side, the most respected place) and younger family members greet him or her first and then greet each other. The younger greets the older by extending arms with the palms up and holding the elder&rsquo;s elbow from underneath. This greeting is called zolgoh. Everybody greets each other except husband and wife, because they are believed to have become one person. Usually, people hold &ldquo;Khadag&rdquo; (holy scarf of blue silk with a spiritual meaning) in their arms. All of the first month of the New Year is considered a holiday and the visits and congratulations continue. It is necessary during that month to visit parents no matter where they live.</p>
<p>When the greeting ceremony is over, everyone sits behind the table and men starts exchanging &ldquo;Khoorog&rdquo; (a snuff bottle made usually semi-precious stone and filled with finely pulverized tobacco). The typical greeting words are &ldquo;Daagadalantai, byaruubulchintai, sureg mal targanorovuu?&rdquo; which can be translated as &ldquo;Does your 2 year-old horse have enough fat on the wither (means good health) does your 2-year old yak have enough muscles (means good power), &ldquo;did all your animals pass winter safety?&rdquo; and &ldquo;Sarshinedeesaihanorovuu? Nassuuderhedhurev?&rdquo;, which is used to ask an old person about her/his good health and age as people are proud of old age. Exchanging Khoorog means expressing friendly intentions to each other and is usually the starting point of introducing a stranger. Exchanging Khoorog creates a warm atmosphere between people and makes the start of a friendly talk that helps to learn the true heart of the stranger.</p>
<p>DO NOT during Tsagaansar&hellip;</p>
<ul>
<li>Do not wear a black colored deel (means traditional clothes)</li>
<li>Do not drink too much alcohol</li>
<li>Do not spend overnight in other&rsquo;s home</li>
<li>Do not leave animals at the pasture overnight (animals should be close to ger)</li>
<li>Do not greet your husband or wife</li>
<li>Do not do a haircut</li>
<li>Do not embroil or fix old clothes</li>
<li>Do not wear a knife or weapon</li>
<li>Do not get anything from another ger</li>
<li>Do not call a man by his nickname</li>
<li>Do not argue</li>
<li>Do not hunt or kill cattle</li>
</ul>
<p>&nbsp;</p>
<h2><img src="/images/tsagaansar_1.jpg" alt="Mongolian Adventure Tours" /><img src="/images/tsagaansar_2.jpg" alt="Mongolian Adventure Tours" /><img src="/images/tsagaansar_3.jpg" alt="Mongolian Adventure Tours" /></h2>',
        ),
        'tourist-attractions' => array(
            'title' => 'Tourist attractions',
            'body' => '',
            'content' => 'tourist-attractions.html'
        ),
        'geography' => array(
            'title' => 'Geography',
            'body' => '',
            'content' => 'geography.html'
        ),
        'mongolian-visa' => array(
            'title' => 'Mongolian visa',
            'body' => '<table style="width: 100%;" border="0" cellspacing="5" cellpadding="0">
<tbody>
<tr>
<td class="text">
<p align="justify">In Mongolia, visas are required by most visitors wishing to travel to the country for a holiday or for business related purposes. Mongolia does make some exceptions and offers visa free travel to a small selection of countries. Nationals of the USA visiting for the purposes of tourism may enter Mongolia without a visa for up to three months. Nationals of Cuba, Malaysia, and Israel may visit for one month, nationals of the Philippines may stay in Mongolia for up to three weeks, and Hong Kong and Singapore nationals may visit for two weeks. Beyond these concessions, all visitors to Mongolia must apply for a visa.<br /><br /><strong>Types of Visa for Mongolia<br /></strong><strong>Mongolian Tourist visa&nbsp;</strong><br /><br />In Mongolia, tourist visas are issued for a maximum period of 30 days within a period of three months. Mongolian tourist cards may be extended on further application by an additional 30 days. As with tourist visas, or visit visas in many other destinations, tourist visas are granted solely for the purpose of entering Mongolia for a holiday and do not permit their holders to work in Mongolia.<br /><br /><strong>Mongolian Business visa</strong>&nbsp;<br />Mongolian business visas, like tourist visas, are issued for a maximum of thirty days within a three-month period from the grant of the visa. Once again, these may be extendable for an additional thirty days. Business visit visas of this kind do not constitute a work permit or an employment visa and do not permit their holder to engage in employment, whether paid or unpaid. However, business visas are ideal for those who wish to travel to Mongolia for business activities such as attending business meetings and conferences.<strong><br /><br />Eligibility</strong><br />All Mongolian visa applications must be accompanied by a valid passport from the country of residence as well as proof of residence if the candidate is living outside their country of origin. The validity of the passport must extend beyond the grant of the visa. Candidates will also need to provide evidence of their ability to financially support themselves during their time in Mongolia and must also provide onward or return travel documents. Where candidates are applying for a business visa, the same requirements must be met with the addition of a letter from the applicant\'s employer in their country of residence and a letter from the associated business contact in Mongolia. The letters must detail the duration and purpose of the visit and must establish who will be financially responsible for the visa applicant during their time in Mongolia.<br /><br /><strong>Spouse Immigration and Dependent Immigration&nbsp;</strong><br />Mongolian tourist visas and business visas are short-term visa services, which oblige their holders to return to their country of residence on or before expiry of the permit. Although the initial grant of thirty days can be extended for an additional thirty days, this cannot be extended again and does not provide any opportunity to apply for long term leave to remain. There is therefore no specific provision&nbsp;made for the spouse or partner and/or dependent children of an applicant to travel with them and all such dependents who wish to visit Mongolia will need to apply for a visa in their own right.</p>
</td>
</tr>
</tbody>
</table>
<h1>&nbsp;</h1>
<table style="width: 100%;" border="0" cellspacing="5" cellpadding="0">
<tbody>
<tr>
<td class="text">
<p align="justify">&nbsp;</p>
</td>
<td class="text" valign="top" width="33%">
<p><strong>MONGOLIAN EMBASSY IN GREAT BRITIAN:</strong>&nbsp;<br />7 Kensington Court<br />London W8 5DL<br />Phone (71) 937-0150&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN FRANCE:</strong>&nbsp;<br />5 Avenue Robert Schuman&nbsp;<br />92100 Boulogne Billancourt<br /><br /><strong>MONGOLIAN EMBASSY IN SWITZERLAND:</strong><br />Chemin Mollies 4<br />1293 Bellevue<br />Phone (022) 774-1974<br /><br /><strong>MONGOLIAN EMBASSY IN GERMANY:</strong><br />Siebengebirgsblick 4-6<br />53844 Troisdorf-Sieglar<br />Phone (02241) 40 27 27<br /><br /><strong>MONGOLIAN CONSULATE IN BERLIN:</strong><br />Gotlandstr. 12<br />10439 Berlin<br />Phone (030) 446-9320<br />Fax (030) 446-9321<br /><br /><strong>HONORARY CONSULATE OF MONGOLIA, ITALY:</strong><br />Via Giulia, 10<br />34126 TRIESTE<br />Phone +39.40.575422<br />Fax +39.40.575431<br />Telex 461138 CONMON I<br />E-mail consolato.mongolia@net96.it<br /><br /><strong>MONGOLIAN EMBASSY IN THE USA:</strong><br />2833 M Street N. W.<br />Washington, D.C. 20007<br />Phone (202) 333-7117 begin_of_the_skype_highlighting<br />(202) 333-7117<br /><br /><strong>MONGOLIAN EMBASSY IN MOSCOW, RUSSIA:</strong><br />Bornsoglebkiy per.,11<br />Phone (095) 244-7867<br /><br /><strong>MONGOLIAN CONSULATE IN IRKUTSK, RUSSIA:</strong><br />Ulitsa Lapina,11<br />Phone 42370/42260<br /><br /><strong>MONGOLIAN EMBASSY IN JAPAN:</strong><br />Shoto Pinecrest Mansion<br />Kamiymam-Cho 21-4<br />Shibuya-ku, Tokyo 150<br />Phone: (03) 409 20 88&nbsp;<br />Subway: Ghibuya, Ginza Line and Hanzoman Line<br /><br /><strong>MONGOLIAN EMBASSY IN INDIAN&nbsp;</strong><br />34 Archbishop Makarios Marg&nbsp;<br />New Delhi 110003 India&nbsp;<br />Tel: (+91-11) 4631728, 4617989&nbsp;<br />Fax: (+91-11) 4633240&nbsp;<br /><br /><strong>AUSTRALIA:</strong>&nbsp;<strong>Honorary Consulate General of Mongolia</strong>&nbsp;<br />P.O.Box 1731&nbsp;<br />Level 10, 80 Mount Street&nbsp;<br />North Sydney, NSW 2060&nbsp;<br />Australia&nbsp;<br />Tel: (+61-2) 99661922&nbsp;&nbsp;<br />Fax: (+61-2) 99661922&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>AUSTRIA</strong></strong><br />Auhofstrasse 65, A-1130 Vienna, Austria<br />Phone: +43-1-877 3733&nbsp;<br />Fax: +43-1-877 373 340<br />E-Mail: office@embassymon.at&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>BELGIUM</strong></strong><br />Belgium Ambassade de Mongolie<br />Avenue Besme 18, 1190 Brussels<br />Tel: (+32-2) 3446974&nbsp;<br />Fax: (+32-2) 3443215&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>BULGARIA</strong></strong></p>
Frederic Joliot-Curie Street 52&nbsp;<br />1113 Sofia, Bulgaria&nbsp;<br />Tel: (+359-2) 9659012&nbsp;<br />Fax: (+359-2) 9630745&nbsp;<br />E-Mail: mongemb@mbox.infotel.bg<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>CANADA</strong></strong><br />151 Slater Street, Suite 503&nbsp;<br />Ottawa, ON K1P 5H3, Canada&nbsp;<br />Tel: (+1-613) 569-3830 &nbsp;<br />Fax: (+1-613) 569-3916&nbsp;<br /><br /><strong>Consulate General of Mongolia&nbsp;</strong><br />BCE Place, Suite 1800, Box 754&nbsp;<br />181 Bay Street Toronto, ON&nbsp;<br />Canada&nbsp;<br />Tel: (+1-416) 865-7779 &nbsp;<br />Fax: (+1-416) 863-1515&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>CHINA&nbsp;</strong></strong><br />No 2, Xiushui Beijie Jian Guo, Men Wai Da Jie Beijing, China<br />Phone: +86-10-6532-1810; Fax: +86-10-6532-5045<br /><br /><strong>Consulate General of Mongolia</strong>&nbsp;<br />Zhongguo Huhe Haote, Xincheng Gu Wulanxiagu, Bldg No 5, Hohhot<br />Lou Mengg u Linshiguang<br />Phone: + 86-471-4953254<br />Fax: + 86-471-4953250</td>
<td class="text" valign="top" width="33%">
<p><strong>ISRAEL: Honorary Consulate of Mongolia&nbsp;</strong><br />9 Frishman Street Tel Aviv 63578 Israel&nbsp;<br />Tel: (+972-3) 5243929&nbsp;<br />Fax: (+972-3) 5272361<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>KAZAKSTAN</strong></strong>&nbsp;<strong><br /></strong>ul. Aubakerova 1/1 ul. Aubakerova 1/1&nbsp;<br />480000 Almaty&nbsp;<br />Kazakhstan&nbsp;<br />Tel: (+7-3272) 200865&nbsp;<br />Fax: (+7-3272) 293259, 293790&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>KOREA</strong></strong><br />300-24 Dongbuichon-Dong&nbsp;<br />Yong San-gu Seoul 140-885&nbsp;<br />Republic of Korea&nbsp;<br />Tel: (+82-2) 7941350&nbsp;<br />Fax: (+82-2) 7947605<br /><br /><strong>Honorary Consulate of Mongolia&nbsp;</strong><br />189-17, Onchon 1-Dong&nbsp;<br />Dongrae-Gu Pusan 607-061&nbsp;<br />Republic of Korea&nbsp;<br />Tel: (+82-51) 5558182&nbsp;<br />Fax: (+82-51) 5554715&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>NORTH KOREA</strong></strong>&nbsp;<br />Gedongom Mansu Dong&nbsp;<br />Pjongjang&nbsp;<br />D.P.R. of Korea&nbsp;<br />Tel: (+850-2) 3817322&nbsp;<br />Fax: (+850-2) 3817616&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>LAOS</strong></strong>&nbsp;<br />P.O.Box 370&nbsp;<br />Route Q. Wat Nak Km.3&nbsp;<br />Vientiane Laos&nbsp;<br />Tel: (+856-21) 315220 &nbsp;<br />Fax: (+856-21) 315221&nbsp;<br /><br /><strong>MALAYSIA: Honorary Consulate of Mongolia</strong>&nbsp;<br />45th Floor Empire Tower&nbsp;<br />City Square Center&nbsp;<br />182 Jalan Tun Razak&nbsp;<br />50400 Kuala Lumpur&nbsp;<br />Malaysia&nbsp;<br />Tel: (+60-3) 2621933&nbsp;<br />Fax: (+60-3) 2620933&nbsp;<br /><br /><strong>NETHERLANDS: Honorary Consulate of Mongolia&nbsp;</strong><br />Notarissen De Cuserstraat 5&nbsp;<br />1081 CK Amsterdam-Buitenveldert&nbsp;<br />Netherlands&nbsp;<br />Fax: (+31-20) 6649638<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>NEW ZEALAND</strong></strong>&nbsp;<br />Address: 86 Kings Crescent<br />Lower Hutt 5010. Wellington<br />New Zealand<br />Telephone: +64 4 569 2788&nbsp;<br />Fax +64 4 566 6293<br />Mobile +64 21 464 460&nbsp;<br />Email: MongolianConsulate.NZ@alpega.com&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>POLAND</strong></strong>&nbsp;<br />Al. Rejtana 15 m 16&nbsp;<br />00-478 Warsaw&nbsp;<br />Poland&nbsp;<br />Tel: (+48-22) 8499391&nbsp;<br />Fax: (+48-22) 8499391&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>ROMANIA&nbsp;</strong></strong><br />Fagarasului Street 6&nbsp;<br />Bucharest Romania&nbsp;<br />Tel: (+40-21) 6387085 &nbsp;<br />Fax: (+40-21) 6121325&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>RUSSIA&nbsp;</strong></strong><br />Ul. Borisoglebskaya 11&nbsp;<br />121069 Moscow&nbsp;<br />Russian Federation&nbsp;<br />Tel: (+7-095) 2906792 &nbsp;<br />Fax: (+7-095) 2916171&nbsp;<br /><br /><strong>Irkutsk: Consulate of Mongolia&nbsp;</strong><br />Ul. Lapina 11 Irkutsk&nbsp;<br />Russian Federation&nbsp;<br />Tel: (+7-395) 342145, 342447&nbsp;<br />Fax: (+7-395) 342143&nbsp;<br /><br /><strong>Ulan Ude: Consulate of Mongolia</strong>&nbsp;<br />Hotel Baikal Ul. Erbanova 12&nbsp;<br />670000 Ulan Ude&nbsp;<br />Russian Federation&nbsp;<br />Tel: (+7-3012) 220499&nbsp;<br />Fax: (+7-3012) 214188&nbsp;<br /><br /><strong>Honorary Consulate of Mongolia</strong>&nbsp;<br />Eschersheimer Landstr. 62-60,<br />D - 60322 Frankfurt am Main, Germany<br />Phone: +49-69-153 096 10&nbsp;<br />Fax: +49-69-153 096 66<br /><br /><strong>Honorary Consulate of Mongolia</strong>&nbsp;<br />Reitmorstr. 13 80538 Munich&nbsp;<br />Germany&nbsp;<br />Tel: (+49-89) 233616&nbsp;<br />Fax: (+49-89) 98105609&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>CUBA&nbsp;</strong></strong><br />Calle 66 No. 505, Esq. A, 5ta-A&nbsp;<br />Miramar Habana Cuba&nbsp;<br />Tel: (+53-7) 2042763 &nbsp;<br />Fax: (+53-7) 2042763, 2040639</p>
</td>
<td class="text" valign="top" width="33%">
<p><strong>SINGAPORE: Consulate of Mongolia&nbsp;</strong><br />121 Meyer Road&nbsp;<br />#06-01 The Makena&nbsp;<br />Singapore 437932&nbsp;<br />Republic of Singapore&nbsp;<br />Tel: (+65) 63480745 &nbsp;<br />Fax: (+65) 63481753&nbsp;<br /><br /><strong>SWEDEN: Honorary Consulate of Mongolia</strong>&nbsp;<br />G&ouml;tabergsgatan 34&nbsp;<br />41134 Gothenburg&nbsp;<br />Sweden&nbsp;<br />Tel: (+46-31) 167621 &nbsp;<br />Fax: (+46-31) 160770&nbsp;<br /><br /><strong>SWITZERLAND: Consulate General and Permanent&nbsp;</strong><br /><strong>Mission of Mongolia to the United Nations&nbsp;</strong><br />4, Chemin des Mollies&nbsp;<br />1293 Bellevue (Geneva)&nbsp;<br />Switzerland&nbsp;<br />Tel: (+41-22) 7741974/5&nbsp;<br />Fax: (+41-22) 7743201&nbsp;<br /><br /><strong>Honorary Consulate of Mongolia&nbsp;</strong><br />Bahnhofstr. 104&nbsp;<br />8001 Zurich Switzerland&nbsp;<br />Tel: (+41-1) 2727924&nbsp;<br />Fax: (+41-1) 2724005&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>THAILAND&nbsp;</strong></strong><br />100/3 Soi Ekkamai 22, Sukhumvit 63<br />Klongton nua, Wattana, Bangkok 10110<br />Tel 662-392-1011&nbsp;<br />Fax. 662-392-4199<br />Opening hours: 9-12 am, 2-4 pm<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>TURKEY</strong></strong>&nbsp;<br />Koza Sokak 107&nbsp;<br />Gaziosmanpasa&nbsp;<br />Ankara Turkey&nbsp;<br />Tel: (+90-312) 4467977 &nbsp;<br />Fax: (+90-212) 4467791&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>UKRAINE&nbsp;</strong></strong><br />3 Yuri Kotsyubinsky Street&nbsp;<br />01030 Kiev Ukraine&nbsp;<br />Tel: (+380-44) 2168639&nbsp;<br />Fax: (+380-44) 2168751&nbsp;<br /><br /><strong>Permanent Mission of Mongolia to the United Nations&nbsp;</strong><br />6 East 77th Street&nbsp;<br />New York, NY 10021-1791 U.S.A.&nbsp;<br />Tel: (+1-212) 861-9460/3, 472-6517&nbsp;<br />Fax: (+1-212) 861-9464&nbsp;<br /><br /><strong>Honorary Consulate of Mongolia&nbsp;</strong><br />1221 Lamar, Suite 1201&nbsp;<br />Houston, TX 77010 U.S.A.&nbsp;<br />Tel: (+1-713) 759-2922 &nbsp;<br />Fax: (+1-713) 646-6666&nbsp;<br /><br /><strong>UZBEKISTAN:</strong>&nbsp;<strong>Consulate of Mongolia&nbsp;</strong><br />Ul. Gogol 67 700000 Tashkent&nbsp;<br />Uzbekistan&nbsp;<br />Tel: (+998-71) 2338916</p>
<strong>MONGOLIAN EMBASSY IN&nbsp;<strong>VIETNAM</strong></strong>&nbsp;<br />39, Tran phu str., Hanoi Vietnam<br />Phone: +84-4-8453009;&nbsp;<br />Fax: +84-4-8454954<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>CZECH</strong></strong>&nbsp;<br />Na Marne 5, Praha-6, 160000, Ceska Rupublika&nbsp;<br />Tel: (+420) 224311198/9, 224325760&nbsp;<br />Fax: (+420) 224314827&nbsp;<br /><br /><strong>DENMARK: Honorary Consulate of Mongolia&nbsp;</strong><br />c/o UNISCRAP A/S Genvindings Industry&nbsp;<br />Fiskerihavnsgade 6 2450 Copenhagen&nbsp;<br />Denmark&nbsp;<br />Fax: (+45) 33120373&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>EGYPT&nbsp;</strong></strong><br />14th Street, 152, Maadi Cairo&nbsp;<br />Egypt&nbsp;<br />Tel: (+20-2) 3506012, 3409574&nbsp;<br />Fax: (+20-2) 3506012, 3414229&nbsp;<br /><br /><strong>HONG KONG: Honorary Consulate General of Mongolia&nbsp;</strong><br />4 Sommerset Road Kowloon&nbsp;<br />Hong Kong&nbsp;<br />Tel: (+852) 23389034&nbsp;<br />Fax: (+852) 23380633&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>HUNGARY&nbsp;</strong></strong><br />Bogar Utca 14-c, 1022 Budapest, Hungary&nbsp;<br />Tel: (+36-1) 2124579&nbsp;<br />Fax: (+36-1) 2125731&nbsp;<br /><br /><strong>MONGOLIAN EMBASSY IN&nbsp;<strong>INDIA&nbsp;</strong></strong><br />34 Archbishop Makarios Marg&nbsp;<br />New Delhi 110003 India&nbsp;<br />Tel: (+91-11) 4631728, 4617989&nbsp;<br />Fax: (+91-11) 4633240&nbsp;<br /><br /><strong>Consulate of Mongolia&nbsp;</strong><br />Erlian Fang Dian, Room 307/308&nbsp;<br />Erlian Hot&nbsp;<br />P.R. of China&nbsp;<br />Tel: (+86-479) 7521538&nbsp;<br />Fax: (+86-479) 7522194</td>
</tr>
</tbody>
</table>',
        ),
        'mongolian-trains' => array(
            'title' => 'Mongolian trains',
            'body' => '<p>The train time table from Ulaanbaatar to other destination</p>
<table border="1" cellspacing="5" cellpadding="2">
<tbody>
<tr>
<td>&nbsp;</td>
<td>Destination&nbsp;</td>
<td>Train #</td>
<td>Departure time</td>
<td>&nbsp;Arrival time&nbsp;</td>
</tr>
<tr>
<td>1</td>
<td>
<p>Ulaanbaatar to Beijing</p>
</td>
<td>MR-24</td>
<td>Thursday 07:15</td>
<td>Friday 14:04&nbsp;</td>
</tr>
<tr>
<td>2</td>
<td>
<p>Ulaanbaatar to Beijing (Additional train)</p>
</td>
<td>CR-24</td>
<td>Friday 07:15&nbsp;</td>
<td>Saturday 14:04</td>
</tr>
<tr>
<td>3</td>
<td>Moscow-UB-Beijing</td>
<td>CR-4</td>
<td>Sunday 07:15</td>
<td>Monday 14:04&nbsp;</td>
</tr>
<tr>
<td>4</td>
<td>Ulaanbaatar to Moscow</td>
<td>RR-5</td>
<td>Tuesday 13:50</td>
<td>Saturday 14:28</td>
</tr>
<tr>
<td>5</td>
<td>Ulaanbaatar to Moscow</td>
<td>MR-5&nbsp;</td>
<td>Friday 13:50</td>
<td>Tuesday 14:28</td>
</tr>
<tr>
<td>6</td>
<td>Beijing- UB-Moscow</td>
<td>CR -3</td>
<td>Thursday 13:50</td>
<td>Monday 14:28</td>
</tr>
<tr>
<td>7</td>
<td>Ulaanbaatar to Irkutsk</td>
<td>MR-263</td>
<td>Everyday 21:10</td>
<td>Everyday 02:58&nbsp;</td>
</tr>
<tr>
<td>8</td>
<td>Ulaanbaatar to Erlian</td>
<td>MR- 22&nbsp;</td>
<td>Monday 20:00</td>
<td>Tuesday 10:25&nbsp;</td>
</tr>
<tr>
<td>9</td>
<td>Ulaanbaatar to Ulan&nbsp;Ude</td>
<td>MR-263</td>
<td>Everyday 21:10</td>
<td>Tuesday 22:05</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>CR- Chinese Railway, MR- Mongolian Railway, RR- Russian Railway</p>
<p>&middot; Early booking is recommended.<br />&middot; Passport number required<br />&middot; Please contact Mongolian embassy in your home country to see if you need a visa to enter Mongolia.<br />&middot; The train leaves from Ulaanbaatar Railway Station.<br />&middot; Please be at the railway station at least 1 hour in advance.</p>
<p><span style="font-size: medium;"><br /></span></p>',
        ),
        'terms-and-conditions' => array(
            'title' => 'Terms and conditions',
            'body' => "<h4>Insurance</h4>
<p>You are embarking on an outdoor adventure tour and your personal safety is a top priority to us. However, Travel All Mongolia cannot be held accountable for circumstances beyond our control. We strongly recommend purchasing a comprehensive travel insurance plan prior to your departure.</p>
<br/><h4>Responsibilities to the Travelers </h4>
<p>As with any outdoor adventure tour, there are risks and hazards. Your tour guide will be working diligently to ensure the safety and welfare of the group. It is imperative that you follow the direction of your tour guide. However, you will be responsible for your own actions and personal safety. We reserve the right to ask anyone displaying improper behavior or risking the safety of the group to leave the tour with no right to a refund or compensation.</p>

<p>Any medical conditions and/or dietary concerns must be brought to our attention at the time of booking. We will not be responsible for circumstances or events that may have been avoided with proper notice of these important details.</p>
<br/><h4>Our responsibilities to the travelers </h4>
<p>Our responsibility to you, the traveler, begins from the time you meet your tour guide in Ulaanbaatar until your departure. We will not assume any responsibility for late arrivals or failure to arrive at the designated place and time. Nor will be responsible for happenings beyond our control such as terrorist attacks, political unrest's, natural disasters, or airline/train delays or cancellations.</p>
<br/><h4>Booking & Payments</h4>
<p>When you are ready to confirm your space on a tour, please complete the following booking form and submit a minimum deposit totaling 30% of the land cost. Once we receive the booking form and deposit, will we make the necessary reservations and send you a confirmation along with payment details.</p>

<p>Payments are accepted by bank transfer, or international money transfer services. Travel All Mongolia Co., Ltd. Will not be held responsible for payments sent by postal service.</p>

<p>The trip balance, which is 70% of the total land cost, is due 60 days prior to your departure date. If payment is not received by the due date, your reservation may be subject to cancellation and cancellation fees may apply. Bookings made within 60 days of the departure date will require full payment.</p>
<br/><h4>Cancellation & Refund</h4>
<p>Notice of cancellation and refund request must be received in written form.
Cancellation Fees: <br/>
- 25% cancellation charge for all tours cancelled within 30-60 days of arrival. <br/>
- 50% cancellation charge for all tours cancelled within 15-30 days of arrival. <br/>
- 100% cancellation charge for all tours cancelled within 15 days of arrival. </p>

<p>We reserve the right to cancel any trip prior to departure for any reason whatsoever, including insufficient signup or logistical problems that may impede trip operations. If a trip is canceled due to force majeure (acts of God, war, labor strikes, earthquake, flooding, government rules etc.), we will promptly refund the portion of the trip cost not already advanced to suppliers and use its best efforts to recover and refund the balance as promptly as possible. However, we do not guarantee recovery of any or all of the advance payments made, and our use of best efforts to recover these payments will not include the institution of any legal proceedings in foreign jurisdictions. We are not responsible for expenses incurred by trip members in preparing for a canceled trip (e.g., non refundable advance purchase air tickets, visa fees, inoculations, equipment, etc.) or for any additional arrangements should the trip member have embarked prior to the scheduled group departure date.</p>

<p>Travel insurance fee, visa fee, and visa handling fee are non-refundable. Since most airline tickets are discounted in our tour packages, refund may be subject to penalty from supplier/airline, may not be in full face value, and may require prepayment of processing fee to Travel All Mongolia. </p>",
        ),
        'frequently-asked-questions' => array(
            'title' => 'Frequenty Asked Questions',
            'body' => '<p><strong>Climate</strong></p>
<p>The ideal Mongolia travel season starts in May and hits its highest peak in July, during the Naadam holiday, and in August when the weather is most favorable for traveling. This is the best time if you like the culture and can bear the crowds of other tourists. It is not a good time if you want to get away from your busy lifestyle because you will experience traffic, busy schedules, waiting in lines, etc. Temperature throughout the year in Mongolia can be quite extreme. Mongolia\'s tourism season is from May to October because of the difficult climate at other times of the year. In the summer, the weather can range from freezing rain and snow to temperatures above 100 F/39 C, with a possibility of fog, drizzle and torrential storms. Take note that the mean monthly temperature in Ulaanbaatar is -17 F/-27 C in January and 64 F/18 C in July. Clothing that you can layer is highly recommended.</p>
<p>September is also a very good time to visit, and October is not too late to travel to Mongolia. It is still warm during the days but a bit chilly during the nights. In the autumn, Mongolia is not very crowded, and this is time for late-comers and last-minute, unplanned trips. You will get to sightsee, enjoy the culture, and taste mare\'s milk, a bitter and at first somewhat unpleasant drink, throughout the country.</p>
<p><strong>How to get Mongolia</strong></p>
<p>You can travel to Mongolia by rail on the Trans-Siberian Express, from Beijing, People\'s Republic of China (PRC), or fly in to Ulaanbaatar on China Airlines from Beijing PRC, MIAT Mongolian Airlines, Korean Air from Seoul, South Korea, or directly on Mongolian Airlines from Beijing, China, PRC or Berlin, Germany.</p>
<p><strong>Transportation</strong></p>
<p>All transportation is included in our tours and provided via private car and guides. Travel by motor coach will be by modern air-conditioned deluxe coaches for large groups. We provide Japanese minivan, Toyota Land Cruiser and Russian minivan for our clients’ travel in Mongolia.</p>
<p>Very limited public transportation services throughout the entire territory of Mongolia. Trains go from north to south connecting Altanbulag-Ulaanbaatar-Zamyn-Uud. Other than that public transportation is basically non-existent in most parts of Mongolia, except the capital city, and privately run tracks, buses, cars connect major tourist destinations on a random basis.</p>
<p><strong>Tipping</strong></p>
<p>Tipping is not customary except at restaurants in Ulan Bator, where waiters expect a tip, especially from tourists. On tours with private sightseeing, gratuities of $15-$20 for travel guides, $10-$15 for drivers per person per day is customary.</p>
<p><strong>Bargaining -</strong>&nbsp;Most of the shops and markets in town have fixed prices which are often displayed on the goods. Do not try to bargain here. At the black market, tourists are unlikely to be charged very much more than the locals, unless they are buying antiques, jewelry and other cultural items. By all means try and get a price down but be reasonable. For example, as a guide, don\'t try for less than 60-70% of the asking price. And only start bargaining if you\'re seriously interested in buying.</p>
<p><strong>Time Difference</strong></p>
<p>Mongolia Standard Time is 7 hours ahead of Greenwich Mean Time and 12 hours ahead of Eastern Standard Time.</p>
<p><strong>Currency</strong></p>
<p>Tukrig is the national currency of Mongolia. The exchange rate is approximately 1400 Tukrig for USD $1.</p>
<p>Most banks and the larger hotels in Ulaanbaatar will be able to change the major currencies, although US Dollars are the most widely accepted. It is also possible to change travelers cheques and get cash advances on your credit card. American Express, VISA and Mastercard are the most widely accepted in major tourists centers. In the Aimag centers, you\'ll certainly find at least one bank, but they will not be able to accept credit cards or traveler\'s cheques. They may be able to change US Dollars but the exchange rate will be a lot lower than that available in the capital.</p>
<p>In Ulaanbaatar, one of the most centrally located banks for both traveler\'s cheque cashing and credit card advances is the Trade and Development Bank.</p>
<p>Many shops and restaurants only accept local currency, be sure to exchange your money upon arrival.</p>
<p><strong>What kind of food will I have?</strong></p>
<p>As a rising capital city of the Mongolia, there are many modern Italian, Chinese, Korean, Russian, Japanese, Latin American and Mongolian restaurants in Ulaanbaatar, where is available to be served western and eastern standard meals or Mongolian traditional cuisines. Most of the old style restaurants serve Russian food, and this type of food is common in the tourist camps in countryside. Small local restaurants and cafes serve Mongolian food such as buuz and khuushuur (steamed and fried beef, mutton dumpling) and others.</p>
<p>The main components of Mongolian meals are beef, mutton and milk products. The most popular drink is milk-tea, which is bit a salty and served every time. Also you will be offered with many kinds of milk products such as airag mare\'s fermented milk, yogurt, and milk cream butter etc in Mongolian family in countryside.</p>
<p><strong>Communications</strong></p>
<p>The Mongolian telephone system is in the process of being modernized but still lacks many of the services we rely on elsewhere. Dialing Mongolia is relatively simple although may take several attempts. Mongolia\'s national code is \'976\'. Making international telephone calls from Ulaanbaatar is relatively easy. Most hotels have International Direct Dial Facilities. Alternatively, calls can be made from various telephone exchanges around the city. The \'Central Post\' Building located on the southwest corner of Sukhbaatar Square is the largest telephone exchange.</p>
<p>Cheaper calls are available if calling from other telephones in the city, i.e. offices &amp; hotels, especially between 22.00 and 07.00 weekdays, 17.00 and 07.00 Saturdays and all day Sunday. The large telephone exchange on Sukhbaatar Square has the facilities for you to send faxes and emails. The cost for faxing depends on where the fax is being sent to. As a guide, a fax taking one minute to the United Kingdom would cost approximately MNT 3000.</p>
<p><strong>Baggage</strong></p>
<p>On Domestic flights, passengers are allowed 20kg of luggage per person. On International flights, passengers are allowed two pieces of checked luggage. Excess luggage fees will be charged if you check more than the stated allowances, and these charges are your responsibility.&nbsp; At most major airports, baggage carts are available for your luggage, usually for a small additional fee.</p>
<p><strong>Tourist ger camp</strong></p>
<p>Tourist GER camps are the best accommodation closely located to attraction sites through the country, where visitors can experience and feel nomadic way of life. It is a portable round felt house perfectly suited to the Mongolian nomadic lifestyle. The GER consists of a wooden frame carrying a felt cover. Traditionally furnished with beautifully painted wood-framed beds and furniture, the lodge is built in a traditional architectural style.</p>
<p><img src="http://sphotos-c.ak.fbcdn.net/hphotos-ak-ash4/229989_425022897556663_180227311_n.jpg" alt="" width="200" />&nbsp;<img src="http://sphotos-d.ak.fbcdn.net/hphotos-ak-snc6/229989_425022904223329_1081983011_n.jpg" alt="" width="200" />&nbsp;<img src="http://sphotos-f.ak.fbcdn.net/hphotos-ak-snc6/229989_425022907556662_1291164234_n.jpg" alt="" width="200" /></p>
<p><img src="http://sphotos-a.ak.fbcdn.net/hphotos-ak-ash4/229989_425022910889995_1559719975_n.jpg" alt="" width="200" />&nbsp;<img src="http://sphotos-g.ak.fbcdn.net/hphotos-ak-snc6/229989_425022914223328_1960380003_n.jpg" alt="" width="200" />&nbsp;<img src="http://sphotos-e.ak.fbcdn.net/hphotos-ak-snc7/488012_425023004223319_1801809366_n.jpg" alt="" width="200" /></p>
<p><strong>Clothes and equipments</strong></p>
<ul>
<li>Shoes suitable walking and riding with thick socks</li>
<li>Lightweight shoes</li>
<li>Warm jacket and pillowed</li>
<li>Trousers suitable for riding</li>
<li>Long sleeved shirt</li>
<li>T-shirt</li>
<li>Shorts</li>
<li>Gloves</li>
<li>Waterproof clothing: trousers, top</li>
<li>Woolen hat</li>
<li>Sun hat</li>
<li>Sun glasses</li>
<li>Camera and share film batteries</li>
<li>Torch and batteries for camping head</li>
<li>Water bottles</li>
<li>Matches</li>
<li>Plastic bags in order to protect your items from moisture</li>
<li>Photocopy of your passport and other important documents</li>
<li>Four season sleeping bag, liner</li>
<li>Mosquito cream</li>
<li>Common antibiotics</li>
<li>Lip balm</li>
<li>Tissues</li>
<li>Pills for anti-diarrhea, constipation, stomach upset, headache and other like sunburn, skin irritation.</li>
</ul>',
        ),
        'about-us' => array(
            'title' => 'About Us',
            'body' => '<div style="font-size: 18px !important;">
<p>Have you ever fantasized about riding a horse in the Mongolia like Genghis Khan did?  For over 10 years, we at Travel All Mongolia have turned those dreams into reality. With skills and expertise, unique travel experiences can be crafted to fit individual needs,  interests and physical abilities. Clients from around the world have given us raves.</p>
<p>Travel All Mongolia fashions individual luxury packages for couples, families and  corporate incentive programs groups.  Some of our wide range of high quality services comprise of horse and camel-back riding, Gobi Desert exploration, research and study tours, trekking adventures and overland jeep tours across Mongolia. Trans-Siberian Railway tours and train ticket reservations and kayaking are also available. All meals, professional drivers, knowledgeable tour guides and local domestic flights are part of our package. Luxury accommodations include five-star luxury hotels, lodges,  and yurts with en-suite bathroom. Book your international flights to and from Ulaanbaatar, Mongolia,  let us know your arrival and departure dates and we will do the rest.</p>
<p>Travel All Mongolia Team</p>
</div>',
        ),
        'why-travel-with-us' => array(
            'title' => 'Why Travel With Us',
            'body' => '<div style="font-size: 18px !important;">
<p>✓ Travel All Mongolia will tailor a trip in accordance to your travel desires. A private tour allows you the freedom to choose your own departure dates and the flexibility to follow your own itinerary to match your travel style. Stay in the best hotels and dine in the finest restaurants in Mongolia.</p>
<p>✓ Your satisfaction is our top priority. Travel All Mongolia takes pride in our packages to the Gobi Desert and beyond. We are the company capable of offering you the best experience and will work hard to ensure that Mongolia meets your expectations. Our hope is to make lifelong friends. We already have because many new clients come to us because of recommendations from our former travelers.</p>
<p>✓ Want to select your own arrival and departure dates and have a customized itinerary? Do you prefer traveling in a helicopter or private jet? No problem. We can create a tour to meet your desires, needs and abilities. Just let us know what you want and we will make it happen.</p>
<p>✓ Our professional Guides are all selected based on language skills, knowledge, personality, past travel experiences and guiding expertise. These skills ensure a high level of competence for maximizing your level of comfort and security for an experience of a lifetime.</p>
<p>✓ You have traveled a long way to get to Mongolia so you want everything to be just right,  We strive toward this goal whether you are traveling by yourself, as a couple, family, group or are part of a corporate incentive program.</p>
<p>✓ We will show you sites far beyond the reaches of ordinary tourism and show you areas less traveled. You’ll meet the nomadic people, make new friends and experience a deep appreciation for our culture. This trip will enrich you. This is a trip of lasting memories.</p>
</div>',
        ),
        'experience-luxury-in-mongolia' => array(
            'title' => 'Experience luxury in Mongolia',
            'body' => '
<p>Many people may not consider this unfamiliar territory as a luxurious destination. However, with modern infrastructure and a variety of high-class hotels and other alternative forms of accommodations, Mongolia is a country that should be on everyone’s bucket list.</p>
<p>Accommodations include a variety of luxury hotel, but to truly experience the Mongolian Nomadic heritage, you’ll have the great pleasure of staying in a “Ger”, the traditional portable home of the nomads. Experience the nomadic heritage as they have for hundreds of years. A “Ger”, also known as a “yurt”, is a large, round felt tent lined with beds along the walls and cooking equipment set up in the middle. Many Ger camps offer a high standard of accommodations that can be just as comfortable and luxurious as those offered by a high-end hotel. Some camps even offer attached en-suite toilet facilities for those who would like that rustic experience but with the comfort of modern conveniences.</p>
<p>We invite you to join us this summer for an unforgettable experience to Mongolia, a remote and beautiful destination that is just waiting to be discovered. The stunning landscapes will amaze you – from the majestic Altai Mountains, to the clear blue lakes and from the hot, arid Gobi Desert to the rolling hills of open grasslands. Its abundance of natural habitat, fantastic scenery, and unique cultures including the intriguing nomadic herdsman, makes Mongolia one of the most fascinating countries in the world. </p>
<p>Mongolia is ideal for exploring and learning without the overwhelming crowds, particularly outside of Ulaanbaatar, due to the low number of visitors it receives.</p>

<h2>The Great Mongolian Empire</h2>
<p>Mongolia is a very large land mass covered in vast rolling steppes where nomadic traditions still flourish, herds of wild horses roam freely in national parks and the sand dunes of the immense Gobi Desert “sing” in the wind. </p>
<p>You’ll discover ancient Buddhist monasteries and learn of Genghis Khan’s empire to see how his heroic legacy has given Mongolia its identity. Whether searching for dinosaur fossils in the Gobi, or sipping on fermented mare’s milk in a traditional nomadic camp, this an experience sure to thrill travelers seeking that unusual adventure. </p>
<p>A few of the highlights you may experience is a visit to Hustai National Park in search of the wild Przewalski’s horses; 4x4 vehicle excursions through the mystical Gobi Desert and Hongorlin Els (Singing Sands), vast sand dunes that rise from the desert like mountains; exploring the pristine alpine scenery of Gorkhi-Terelj National Park; and a visit to the Flaming Cliffs, an area in the barren Gobi Desert known for its collection of dinosaur fossils and perhaps the most intriguing destination of all.</p>
<br/>
<img src="http://www.mongolianluxurytours.com/img/exp1.jpg" width="940"/>
<br/>
<img src="http://www.mongolianluxurytours.com/img/exp2.jpg" width="940" style="margin-top:10px;"/>',
        ),
        'travel-accommodations' => array(
            'title' => 'Travel Accommodations',
            'body' => '',
            'content' => 'travel-accomodations.html'

        ),
        'trip-calendar-2015' => array(
            'title' => 'JOIN OUR GROUP TRAVEL 2015',
            'body' => '',
            'content' => 'trip_calendar.html',),
        'privacy-policy' => array(
            'title' => 'PRIVACY POLICY',
            'body' => '',
            'content' => 'privacy-policy.html',),
        'sitemap' => array(
            'title' => 'Sitemap',
            'body' => '',
            'content' => 'sitemap.html',),
        'testimonials' => array(
            'title' => 'Testimonials',
            'body' => '',
            'content' => 'testimonials.html',),
    );

    /**
     * @param $key
     * @return array
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function getPageInfo($key)
    {
        if (!array_key_exists($key, $this->pages))
            throw new NotFoundHttpException;

        return $this->pages[$key];
    }
} 