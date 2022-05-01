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
        <div class="parallaxmaldives">
            <div class="content">
                <h1>MALDIVES</h1>
                <p>Rs. 190000</p>
                <p>4NIGHTS/5DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    Maldives is famous for a number of reasons, including its vibrant culture, pristine beaches, sprawling greenery, and fascinating landmarks. Apart from the numerous enchanting landmarks, Maldives is also famous for water sports and other adventure activities.
                </p>

                <form action="{{route('maldivesenquirypackage')}}" method="post">
                    @csrf
                    <button type="submit" class="enquiry">Make An Enquiry</button>
                    <input type="hidden" value="chitwan" name="chitwan">
                </form>
            </div>

            <div class="box2">
              <h2> ITINERARY	</h2>
              <h3><i class="arrow right"></i> DAY 01: Kathmandu to Male Flight </h3>
              <p>We take flight from Kathmandu to Male. Arrive in Male and proceed to your island resort.
                Noted: there is several option to fly to Maldives, cheapest way is via india with srilanka transit. Also available flight from Qatar and other transit. Stay in resort and dinner at resort </p>
             <h3><i class="arrow right"></i> DAY 02: Full day at Resort </h3>
              <p>After breakfast, free time at resort island, spend day in resort with Beach facility, Pool facility, Lunch in resort, free wifi, Stay in resort island and Dinner at resort.</p>
              <h3><i class="arrow right"></i> DAY 03: Full day at Resort </h3>
              <p>After breakfast, free time at resort island, spend day in resort with Beach facility, Pool facility, Lunch in resort, free wifi, Stay in resort island and Dinner at resort.</p>
              <h3><i class="arrow right"></i> DAY 04: Full day at Resort </h3>
              <p>After breakfast, free time at resort island, spend day in resort with Beach facility, Pool facility, Lunch in resort, free wifi, Stay in resort island and Dinner at resort.</p>
              <h3><i class="arrow right"></i> DAY 05: Proceed to airport to fly back home  </h3>
              <p>After enjoying breakfast at the hotel, check-out and take a transfer to the airport for your return flight.</p>
            </div>
        </div>
    </section>
</body>
</html>
