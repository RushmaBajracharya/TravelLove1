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
        <div class="parallaxdubai">
            <div class="content">
                <h1>DUBAI</h1>
                <p>Rs. 120000</p>
                <p>4NIGHTS/5DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    Dubai is famous for contemporary sightseeing attractions such as the Burj Khalifa (the world's tallest building) and shopping malls that come complete with mammoth aquariums and indoor ski slopes. But this city has many cultural highlights and things to do, as well as all the glamorous modern add-ons
                </p>

                <form action="" method="post">
                  <input type="button" value="Make An Enquiry" class="enquiry">
                </form>
            </div>

            <div class="box2">
              <h2> ITINERARY	</h2>
              <h3><i class="arrow right"></i> DAY 01: Kathmandu to Dubai  </h3>
              <p>You will be flying from Kathmandu to Dubai, our representative will pick up you from airport and transfer to hotel(Overnight at Hotel in Dubai)</p>
             <h3><i class="arrow right"></i> DAY 02: Dubai City tour  +  Dhow Cruise Dinner 	</h3>
              <p>After breakfast today you’ll get an opportunity to get acquainted with the city.
                Depart from the hotel and drive through the scenic route of Dubai for photo stops at Burj Al Arab (Dubai’s 7-star luxury hotel) which stands on an artificial island jutting out to the sea at Jumeirah beach. We will also be visiting the Jumeirah Mosque (the only Mosque allowing non-Muslims to enter), the Burj Khalifa (standing at 828 m is the world’s tallest man-made structure) as well as the Sheikh’s Palace (a stunning palace with peacocks welcoming you). Next, we will visit the Dubai Museum  and return to hotel, after some refreshment, we will go for the Dhow Cruise with the dinner.</p>
              <h3><i class="arrow right"></i> DAY 03: Desert Safari with Barbeque Dinner </h3>
              <p>Free day till your program of Desert Safari, we will depart from the hotel and drive up to the deflation point, for deflating tires before entering the desert where the off-road adventure starts. This comprises of Dune bashing (a roller coaster ride in the sand dunes) and 2 Photo stops (at a camel farm and one capturing the stunning desert sunset). Experience a warm Arabian welcome with refreshing towel, dates, and Arabic coffee on arrival at the North Tours desert camp. At the camp utilize the facilities and entertainment provided; (camel riding, sheesha smoking, photo shoot in Arabic costumes, Henna painting & BBQ buffet dinner). We will end the evening with an exotic belly-dance performance. Lastly, we will arrive at the inflation point and inflate tires for the drive back to the hotel.
                (Overnight at Hotel in Dubai)</p>
              <h3><i class="arrow right"></i> DAY 04: Burj Khalifa (optional) or Go for shopping.</h3>
              <p>Today visit to Burj khalifa, world tallest building (Optional) (not included in package) Or go for the shopping.</p>
              <h3><i class="arrow right"></i> DAY 05: Transfer to airport for your flight</h3>
              <p>After enjoying breakfast at the hotel, you can go for some last-minute shopping (as per your flight schedule). Check-out and take a transfer to the airport for your return flight.</p>
            </div>
        </div>
    </section>
</body>
</html>
