<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/details/chitwan.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>
<body>
    @include('navbar')
    <section >
        <div class="parallaxindonesia">
            <div class="content">
                <h1>INDONESIA</h1>
                <p>Rs. 150000</p>
                <p>4NIGHTS/5DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    You will find that a lot of tourists love coming to Indonesia because of how beautiful and diverse this country is. Known to many as Wonderful Indonesia, it brings you the second largest tropical forests, many pristine beaches with great dive sites and surfing waves, amazing hikes to active volcanoes and wildlife
                </p>

                <form action="{{route('indonesiaenquirypackage')}}" method="post">
                    @csrf
                    <button type="submit" class="enquiry">Make An Enquiry</button>
                    <input type="hidden" value="chitwan" name="chitwan">
                </form>
            </div>

            <div class="box2">
              <h2> ITINERARY	</h2>
              <h3><i class="arrow right"></i> DAY 01: Highlights of Bali </h3>
              <p>You'll spend part of the next day exploring the Jatiluwih Rice Terraces. Move on to Ubud to visit museums and points of cultural interest. Get to bed early because day five brings an early wake-up call: you'll hike to Mount Batur in time to see the sunrise from the summit. Relax in the hot springs of Pura Batur. Then do some souvenir shopping at Sukawati Market before the trip ends.</p>
             <h3><i class="arrow right"></i> DAY 02: Bali & Lombok Family Adventure</h3>
              <p>You'll go snorkeling several times in the next few days. Travel by boat around the three Gili Islands, stopping at different points to get a close-up view of colorful sea life. You'll even have the chance to swim alongside sea turtles and view underwater statues off the shores of Gili Meno. Between snorkeling excursions, refreshments will be served on the boat. Ride a speedboat back to Bali on day six and spend the last evening of the trip in Sanur. </p>
              <h3><i class="arrow right"></i> DAY 03: Explore Flores & the Komodo Archipelago</h3>
              <p>In Mangarai, you'll meet a village chief and learn about indigenous traditions before sleeping in a traditional cone-shaped hut with a local family. You'll be on a boat for the last few days of the itinerary, enjoying wonderful views as you navigate through the Savu Sea and Komodo National Park. Spot Komodo dragons in the wild on the next day's guided hike — you're also likely to see lizards, wild pigs, and parrots. Relax on famed Pink Beach before the trip is over.</p>
              <h3><i class="arrow right"></i> DAY 04: North Sumatra Adventure</h3>
              <p>The next day brings a Jeep tour of the jungle followed by an overnight on a farm. On day four, you'll see orangutans in the wild in Bukit Lawang. Then catch the ferry to Samosir Island, spending the last part of the journey learning about indigenous ways of life as you tour historic villages and enjoy views of bright blue Lake Toba and majestic Sipiso-piso Waterfall in the highlands.</p>
              <h3><i class="arrow right"></i> DAY 05: Discover Borneo & Java</h3>
              <p>As the cruise continues, you'll enjoy several interesting stops along the way, including an orangutan rehabilitation center. Go on a guided jungle hike, then continue to the harbor of Kumai, where you'll transfer to the airport and catch a flight to Semarang. It's then on to Yogyakarta, Java's cultural capital. You'll visit historical sites around town including the sacred temple of Prambanan, erected in the 9th century, the ornate Sultan Palace, and the water palace of Taman Sari. Finish with a tour of Borobudur Temple, built between the 8th and 9th centuries — it's home to 504 Buddha statues. </p>
            </div>
        </div>
    </section>
</body>
</html>
