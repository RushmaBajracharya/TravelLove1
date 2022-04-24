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
        <div class="parallaxlumbini">
            <div class="content">
                <h1>LUMBINI</h1>
                <p>Rs. 30000</p>
                <p>3NIGHTS/4DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    Lumbini is an important pilgrimage destination among Buddhists. It is the place, where Queen Maya Devi gave birth to Price Siddharth, who then became Lord Buddha and founded Buddhism. Apart from this, It is one of the four main pilgrimage sites of Buddhism in the world.
                </p>

                <form action="" method="post">
                  <input type="button" value="Make An Enquiry" class="enquiry">
                </form>
            </div>

            <div class="box2">
              <h2> ITINERARY	</h2>
              <h3><i class="arrow right"></i> DAY 01: ARRIVAL.</h3>
              <p>We leave Kathmandu early in the morning for the 8-9-hour drive to Lumbini. Upon arrival you will check into the hotel. In the evening, feel free to walk around among the Buddhist shrines. (Overnight at the hotel)</p>
             <h3><i class="arrow right"></i> DAY 02: FULL DAY SIGHTSEEING.	</h3>
              <p>The next morning we will visit the temple at Lumbini garden and you will also visit famous monasteries and shrines of Lumbini. (Overnight at the hotel)</p>
              <h3><i class="arrow right"></i> DAY 03: FULL DAY SIGHTSEEING.</h3>
              <p>The next morning we will visit the temple at Lumbini garden and you will also visit famous monasteries and shrines of Lumbini. (Overnight at the hotel)</p>
              <h3><i class="arrow right"></i> DAY 04: CHECK OUT.</h3>
              <p>Breakfast at the hotel.Check out and your stay ends here.</p>
            </div>
        </div>
    </section>
</body>
</html>
