<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travellove</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;800&family=Quicksand&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


</head>

<body>
    {{-- navbar --}}
    @include('navbar')

    <section class = "header">
        <video autoplay loop muted plays-inline class = "head">
            <source src = "images/head.mp4" type = "video/mp4">
        </video>
        <div class="tagline-box">
            <h1>Discover Your Favorite Place With Us</h1>
        </div>
    </section>

    {{-- <!---Course--> --}}
    <section class="activity">
        <h1><a name="home">Why us?</a></h1>
        <p class="white">“Travel is the only thing you buy that makes you richer”. We completely swear by this and believe in
            fulfilling travel dreams that make you invariably rich by the day.</p>
        <div class="row">
            <div class="activity-col">
                <h3>Travel</h3>
                <p>Wherever you want to go, however you want to get there, whatever you want to do-we have the ideal
                    package match just for you.</p>
            </div>
            <div class="activity-col">
                <h3>Relax</h3>
                <p>Sometimes the most productive thing that you can do is to step outside and do nothing... relax and
                    enjoy nature </p>
            </div>
            <div class="activity-col">
                <h3>Experience</h3>
                <p>Do everything or do nothing. Either way, your holiday will be nothing less than extraordinary</p>
            </div>
        </div>
    </section>

    <!----Services---->
    <section class="service">
        <h1>Services We Provide</h1>
        <p></p>
        <div class="row">
            <div class="service-col">
                <img src="images/flight.jpg">
                <div class="layer">
                    <h3>Flight Booking</h3>

                </div>
            </div>
            <div class="service-col">
                <img src="images/package.jpg">
                <div class="layer">
                    <h3>Tour Packages</h3>

                </div>
            </div>
        </div>
    </section>

    <!----Reviews---->
    <section class="reviews">
        <h1>What Our Clients Say</h1>

        <div class="row">
            <div class="reviews-col">
                <img src="images/client1.jpg">
                <div>
                    <p>
                        This was a great company to deal with.
                        Everything was very simple, professional and we were given all the information we required.
                        Thank you for the great service
                    </p>
                    <h3>Kristin KC</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
            </div>
            <div class="reviews-col">
                <img src="images/client2.webp">
                <div>
                    <p>
                        This was a great company to deal with.
                        Everything was very simple, professional and we were given all the information we required.
                        Thank you for the great service
                    </p>
                    <h3>Aakash Maharjan</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
        </div>

    </section>
    @include('footer')



</body>

</html>
