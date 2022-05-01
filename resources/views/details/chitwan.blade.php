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
        <div class="parallaxchitwan">
            <div class="content">
                <h1>CHITWAN</h1>
                <p>Rs. 24000</p>
                <p>3NIGHTS/4DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    Chitwan is the perfect and famous place for nature lovers. The crown jewel of the region and main
                    draw is Chitwan National Park. But there is more than just nature to enjoy in Chitwan, including a
                    rich culture and history.
                </p>

                <form action="{{route('chitwanenquirypackage')}}" method="post">
                    @csrf
                    <button type="submit" class="enquiry">Make An Enquiry</button>
                    <input type="hidden" value="chitwan" name="chitwan">
                </form>
            </div>

            <div class="box2">
                <h2> ITINERARY </h2>
                <h3><i class="arrow right"></i> DAY 01: ARRIVAL.</h3>
                <p>Welcome to the property.Check in to the hotel.Today you will be visiting the Sunset View point,
                    visitors’ center for the mesmerizing sunset.Lter on you will be served Dinner along with the & Tharu
                    Cultural dance. (DINNER) </p>
                <h3><i class="arrow right"></i> DAY 02: FULL DAY SIGHTSEEING. </h3>
                <p>Breakfast at the hotel.Today you will be doing Elephant Safari or Jeep Safari as per your preference
                    on sharing basis.Later Canoeing and Visit to elephant breeding farm and bird watching.Overnight at
                    the hotel. (BREAKFAST , LUNCH , DINNER) </p>
                <h3><i class="arrow right"></i> DAY 03: FULL DAY SIGHTSEEING.</h3>
                <p>Breakfast at the hotel.Today you will visit to Kasara museum en routes 20 thousand lakes. Overnight
                    at the hotel. (BREAKFAST , LUNCH , DINNER)</p>
                <h3><i class="arrow right"></i> DAY 04: CHECK OUT.</h3>
                <p>Breakfast at the hotel.Check out and your stay ends here.</p>
            </div>
        </div>
    </section>
</body>

</html>
