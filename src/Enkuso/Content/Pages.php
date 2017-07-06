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
            'body' => '',
            'content' => 'about-mongolia.html'
        ),
        'nomadic-experience' => array(
            'title' => 'Being Mongolia (lifestyle of Mongolian nomads)',
            'body' => '',
            'content' => 'explore-way-of-nomadic-lifestyle.html',
        ),
        'tourist-events' => array(
            'title' => 'Tourist events',
            'body' => '',
            'content' => 'tourist-events.html'
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


<br/><h4>Cancellation and refund </h4>
<p>Notice of cancellation and refund request must be received in written form.
Cancellation Fees: <br/>
- 25% cancellation charge for all tours cancelled within 30-60 days of arrival. <br/>
- 50% cancellation charge for all tours cancelled within 15-30 days of arrival. <br/>
- 100% cancellation charge for all tours cancelled within 15 days of arrival. </p>

<p>We reserve the right to change any itinerary prior to departure for less than three passengers.  With a minimum of two passengers, all tours will depart.  If a trip is canceled due to force majeure (acts of God, war, labor strikes, earthquake, flooding, government rules etc.), we will promptly refund the portion of the trip cost not already advanced to suppliers and use OUR best efforts to recover and refund the balance as promptly as possible. However, we do not guarantee recovery of any or all of the advance payments made, and our use of best efforts to recover these payments will not include the institution of any legal proceedings in foreign jurisdictions. We are not responsible for expenses incurred by trip members in preparing for a canceled trip (e.g., non refundable advance purchase air tickets, visa fees, inoculations, equipment, etc.) or for any additional arrangements should the trip member have embarked prior to the scheduled group departure date. Travel insurance fee, visa fee, and visa handling fee are non-refundable. Since most airline tickets are discounted in our tour packages, refund may be subject to penalty from supplier/airline, may not be in full face value, and may require prepayment of processing fee to Travel All Mongolia. Travel insurance is optional and strongly suggested for all international travel.</p>

",
        ),
        'frequently-asked-questions' => array(
            'title' => 'Frequenty Asked Questions',
            'body' => '',
            'content' => 'faq.html',
        ),
        'about-us' => array(
            'title' => 'About Us',
            'body' => '<div style="font-size: 18px !important;">

                <p>Travel All Mongolia invites you to join us this coming summer for an experience of lifetime in the awesome landscapes of Mongolian, from mountains, to lakes, to hot dry desert, to rolling hills of open grassland. A land of undiscovered nature and a unique culture of unforgettable experiences of nomadic herdsman heritage that spans thousands of years since antiquity.</p>
                <p>We offer you a variety of trips throughout Mongolia including but not limited to, horse rides across the landscape, camel rides, visits to the Gobi desert for tours, research, and study, trekking adventures across Mongolia,Trans-Siberian tours, train ticket booking, horse and camel tours, kayak tours, andjeep tours by road. All you need to do is book your flight to Ulaanbaatar, the capital of Mongolia and inform us of your arrival and departure dates, along with what you are interested in doing in Mongolia on your tour here. We will custom plan your stay for you.</p>
                <p>From the moment of your arrival, until your departure, leave the planning to us and just enjoy your adventure. All of our trips include your meals, professional drivers and tour guides who are experts in showing you around our beautiful countryside.</p>
                <p>You can travel to Mongolia by rail on the Trans-Siberian Express, from Beijing, People\'s Republic of China (PRC), or fly in to Ulaanbaatar on China Airlines from Beijing PRC, MIAT Mongolian Airlines, Aeroflot from Moscow, Korean Air from Seoul, South Korea, or directly on Mongolian Airlines from Beijing, China, PRC or Berlin, Germany.</p>
                <p>Yours sincerely <br/>
                    Travel All Mongolia Team</p>
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
        'trip-calendar-2018' => array(
            'title' => 'JOIN OUR SMALL GROUP TRAVEL 2018',
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
        'mongolian-arts-and-culture' => array(
            'title' => 'Mongolian Arts and Culture',
            'body' => '',
            'content' => 'mongolian-arts-and-culture.html',),
        'our-lodge' => array(
            'title' => 'Our Lodge',
            'body' => '',
            'content' => 'our-lodge.html',),
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