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
    <section>
        <div class="parallaxmalaysia">
            <div class="content">
                <h1>MALAYSIA</h1>
                <p>Rs. 180000</p>
                <p>4NIGHTS/5DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    What makes Malaysia so fascinating is its diversity. In the same country, you can explore thriving,
                    modern cities, explore colonial architecture, relax on some of the most beautiful beaches on the
                    planet and hike through lush green jungles. The country of Malaysia, located in Southeast Asia, is
                    an incredible mixing pot of cultures.
                </p>
                <form action="{{route('malaysiaenquirypackage')}}" method="post">
                    @csrf
                    <button type="submit" class="enquiry">Make An Enquiry</button>
                    <input type="hidden" value="chitwan" name="chitwan">
                </form>
            </div>

            <div class="box2">
                <h2> ITINERARY </h2>
                <h3><i class="arrow right"></i> DAY 01: Kuala Lumpur</h3>
                <p>Begin your journey by visiting the modern heart of the city, KLCC – Kuala Lumpur City Centre – where
                    you can find the iconic Petronas Twin Towers. Buy a ticket to the top of the viewing platform for
                    incredible vistas over the city’s skyline. Explore the modern malls and in the evening head to Jalan
                    Alor, one of the city’s most bustling night markets where you can enjoy a taste of Malaysian food.
                </p>
                <h3><i class="arrow right"></i> DAY 02: Kuala Lumpur</h3>
                <p>Spend your second day in Kuala Lumpur, this time exploring the city’s heritage rather than its modern
                    attractions. Begin with a visit to the National Museum, then walk through the busy streets of
                    Chinatown, shop at the stalls in the Central Market and then take a look at the colonial
                    architecture of Merdeka Square.

                    In the afternoon, catch a train from KL Sentral out of the city center and towards the Batu Caves.
                    Hundreds of colorful steps lead to the cavernous entrance to this deep cave complex that while
                    beautiful in itself, is made even more intriguing by the Hindu shrines and statues that have turned
                    this into a place of worship too. </p>
                <h3><i class="arrow right"></i> DAY 03: Malacca</h3>
                <p>On day 3, make the two-hour journey to the coastal city of Malacca. This is one of Malaysia’s most
                    historic cities, and here you can trace the evolution of Malacca from a small fishing village, to a
                    Portuguese, Dutch, then British trading port. Explore the old ruined churches and forts before
                    spending the afternoon wandering through the UNESCO World Heritage Site that covers many of the old
                    streets of the city, including the famous Jonker Street.

                    Spend the evening along the river, take a cruise and then sit back at one of the many restaurants
                    overlooking the water to enjoy some of the local Malaccan specialties.</p>
                <h3><i class="arrow right"></i> DAY 04-05: Cameron Highlands</h3>
                <p>Early on your 4th day in Malaysia, make the journey north towards the Cameron Highlands. This is a
                    stunning area of natural beauty that, due to its higher elevation, is always much cooler than the
                    coast. It makes for a wonderful escape from the humidity and gives you the chance to see the unique
                    mixture of colonial British and authentic Malay culture that’s found here.

                    Spend the next two days hiking through the jungle, climbing mountains and visiting tea plantations
                    and strawberry farms.</p>
                <h3><i class="arrow right"></i> DAY 06-07: Penang</h3>
                <p>On day 6, travel from the Cameron Highlands to the island of Penang. This is one of the most diverse
                    and interesting destinations in Malaysia, with a mix of Malay, Chinese, Indian and Western cultures
                    merging beautifully to create a unique and historical location.

                    The diversity of Penang is best represented by the UNESCO World Heritage Site that encompasses the
                    old streets of Georgetown. Spend your first day walking through ramshackled lanes, chasing down the
                    numerous murals and colorfully designed pieces of street art and gorging on the seemingly endless
                    variety of street food that’s waiting around every corner. Visit the Clan Jetties to see the
                    authentic Chinese culture firsthand and to learn more about the multicultural influences that made
                    Penang the place it is today.</p>
            </div>
        </div>
    </section>
</body>

</html>
