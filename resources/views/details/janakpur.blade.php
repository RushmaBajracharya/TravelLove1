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
        <div class="parallaxjanakpur">
            <div class="content">
                <h1>LUMBINI</h1>
                <p>Rs. 30000</p>
                <p>2NIGHTS/3DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    A vital part of Hindu mythology and religious heritage site.Janaki Mandir is one of the popular tourist spot that is the biggest temple in Nepal  A number of temples in the city are devoted to these deities and celebrate their union with immense festivities each year.
                </p>

                <form action="{{route('janakpurenquirypackage')}}" method="post">
                    @csrf
                    <button type="submit" class="enquiry">Make An Enquiry</button>
                    <input type="hidden" value="chitwan" name="chitwan">
                </form>
            </div>

            <div class="box2">
              <h2> ITINERARY	</h2>
              <h3><i class="arrow right"></i> DAY 01: KATHMANDU-JANAKPUR</h3>
              <p>Departure to Janakpur,(by Air ) check in Hotel, evening free time for individual activities,
                Overnight.</p>
             <h3><i class="arrow right"></i> DAY 02: FULL DAY SIGHTSEEING.	</h3>
              <p>Visit to Janaki Temple, Bibaha Mandap, Ram Mandir, Jaleswor Mahadev Temple & Many more places, evening leisure & overnight.</p>
              <h3><i class="arrow right"></i> DAY 03: JANAKPUR-KATHMANDU</h3>
              <p>After breakfast drive /fly back to Katmandu, arrive in Kathmandu, Transfer to Hotel, evening Leisure, Ovenight.</p>

            </div>
        </div>
    </section>
</body>
</html>
