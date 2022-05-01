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
        <div class="parallaxsingapore">
            <div class="content">
                <h1>SINGAPORE</h1>
                <p>Rs. 100000</p>
                <p>3NIGHTS/4DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    Singapore is known for its glitz and glamour. Often described as oneof the cleanest and most orderly cities in the world, the island city-state is also undoubtedly one of the world’s most popular visitor destinations. From shopping frenzy, delectable culinary delights, awe-inspiring museums, adventurous theme parks, exotic gardens – Singapore has something for everyone.

                </p>

                <form action="{{route('singaporeenquirypackage')}}" method="post">
                    @csrf
                    <button type="submit" class="enquiry">Make An Enquiry</button>
                    <input type="hidden" value="chitwan" name="chitwan">
                </form>
            </div>

            <div class="box2">
              <h2> ITINERARY	</h2>
              <h3><i class="arrow right"></i> DAY 01: Kathmandu to Singapore</h3>
              <p>Take flight from Kathmandu to Singapore. On arrival, our representative will welcome you and transfer to your hotel.</p>
             <h3><i class="arrow right"></i> DAY 02: Singapore city tour and Sentosa Island tour FULL DAY SIGHTSEEING.	</h3>
              <p>Enjoy the morning breakfast at the hotel. After breakfast proceed to half day city tour of Singapore which included important monument and sites in Singapore. In afternoon Sentosa Island tour begins with panoramic views from a cable car as your swoop over the water from Mt Faber to the Sentosa island resort. On the south coast, Palawan Beach is lined with food stalls and bars, and has a suspension bridge to a small offshore island. Palm-lined, crescent-shaped Tanjong Beach is more tranquil. Overnight at the Hotel.</p>
              <h3><i class="arrow right"></i> DAY 03: Free Day (Opional tour)</h3>
              <p>After breakfast, you can enjoy by your own.</p>
              <h3><i class="arrow right"></i> DAY 04: Back to Kathmandu</h3>
              <p>After breakfast we will pick up you from the hotel and transfer airport for your flight back to Kahmandu.</p>
            </div>
        </div>
    </section>
</body>
</html>
