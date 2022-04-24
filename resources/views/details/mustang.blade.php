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
        <div class="parallaxmustang">
            <div class="content">
                <h1>MUSTANG</h1>
                <p>Rs. 50000</p>
                <p>3NIGHTS/4DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    Mustang is well-known for natural scenery while upper Mustang is famous for its trekking and hiking trails, monasteries, caves and local tribes. This destination is rich in vegetation with a range of rhododendron plantations, apple fields and is strong with Buddhist culture.
                </p>

                <form action="" method="post">
                  <input type="button" value="Make An Enquiry" class="enquiry">
                </form>
            </div>

            <div class="box2">
              <h2> ITINERARY	</h2>
              <h3><i class="arrow right"></i> DAY 01: Flight to Pokhara and city tour.</h3>
              <p>KTM – PKR by flight. Pick up from Airport and half day local sightseeing of fewa lake, Bindhabasini temple. (Stay in Hotel)</p>
             <h3><i class="arrow right"></i> DAY 02: Flight to Jomsom, Muktinath Visit </h3>
              <p>Early morning breakfast and transfer to the airport for flight to Jomsom. Upon arrival at Jomsom airport, welcome and directly drive to Muktinath for Puja and return Jomsom for overnight stay. (Stay in hotel)</p>
              <h3><i class="arrow right"></i> DAY 03:  Flight back to Pokhara and Peace Pagoda Sightseeing. </h3>
              <p>Early morning breakfast and transfer to the airport for flight to Pokhar, Upon arrival transfer to hotel and after sometime, we will drive to Peace Pagoda, from where you can view the magnificent himalaya with backdrop of Fewa lake, Return to hotel and overnight stay at Hotel. </p>
              <h3><i class="arrow right"></i> DAY 04:  Transfer to airport for your flight to Kathmandu </h3>
              <p>After Breakfast transfer to airport for your flight to Kathmandu, Arrival in Kathmandu and transfer to your place </p>
            </div>
        </div>
    </section>
</body>
</html>
