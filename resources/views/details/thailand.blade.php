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
        <div class="parallaxthailand">
            <div class="content">
                <h1>THAILAND</h1>
                <p>Rs. 150000</p>
                <p>7NIGHTS/8DAYS</p>

            </div>
        </div>
        <div class="container">
            <div class="box1">
                <h1>OVERVIEW</h1>
                <p>
                    Thailand is not just famous for its tropical beaches. The country is also famed for its amazing rural locations that cater extremely well for tourists despite seemingly being in the middle of nowhere. Whether you are looking for somewhere quiet to stay or a rural adventure, you can easily find accommodation and tours The country boasts the world's most postcard-perfect beaches, ornate temples, a rich culture, food to die for and all at a very affordable price.
                </p>

                <form action="{{route('thailandenquirypackage')}}" method="post">
                    @csrf
                    <button type="submit" class="enquiry">Make An Enquiry</button>
                    <input type="hidden" value="chitwan" name="chitwan">
                </form>
            </div>

            <div class="box2">
              <h2> ITINERARY	</h2>
              <h3><i class="arrow right"></i> DAY 01: Flight to Bangkok and transfer to Pattaya </h3>
              <p>Fly from Kathmandu to Bangkok and upon arrival, welcome and transfer to your hotel at Pattaya and quarantine for 1 night.</p>
             <h3><i class="arrow right"></i> DAY 02: Coral Island tour with lunch</h3>
              <p>Morning Breakfast at the hotel. Today you will be picked up for a speedboat ride to the Coral Island. Enjoy diffrent activities like 'Parasailing', 'Snorkling', 'Ocean walk', 'Jet Ski' on coral island (Optional). After delicious Indian lunch you will be transferred to the hotel. The rest of the day is free for you to simply laze on the sandy beaches or take a look on night life of pattaya. Overnight at the hotel in Pattaya.</p>
              <h3><i class="arrow right"></i> DAY 03: Flight to Phuket</h3>
              <p>After breakfast transfer to airport for your flight to Phuket. After arriving ing in Phuket our representative will welcome you and then be transferred to hotel Check in at the Hotel. Overnight at your hotel in Phuket. </p>
              <h3><i class="arrow right"></i> DAY 04: Phi Phi Island tour with lunch</h3>
              <p>Morning Breakfast at the hotel. Today you will be picked up for a Phi Phi island tour in Phuket. Phi Phi Island is Thailand's island-superstar. It's been in the movies. It's the topic of conversation for travelers all over Thailand. For some, it's the only reason to touchdown in Phuket. Even with all the hype, it doesn't disappoint.
                Phi Phi's beauty is a large chunk of the allure. The islands, when approached by boat, rise from the sea like a fortress. Sheer cliffs tower overhead, and then give way to beach-fronted jungle. It's love at first sight. Enjoy Phuket Fantasea show with dinner in the evening and overnight at hotel</p>
              <h3><i class="arrow right"></i> DAY 05: Flight from Phuket To Bangkok</h3>
              <p>After breakfast, transfer to airport for flight to Bangkok and over night in Bangkok hotel. </p>
              <h3><i class="arrow right"></i> DAY 06: City tour</h3>
              <p>After breakfast at the hotel, we will pick up you from the hotel and transfer to Bangkok. Today enjoy Half Day City & Temple tour of Bangkok. Thailand has over 26,000 temples or Wats. We will drive across the city where old & new, classic & modern, match & contrast one another. This tour will bring you to three of the most distinguished temples in Bangkok. Wat Trimitr, the temple of the Golden Buddha. The statue is made from solid Gold weighing 5.5tons. Passing through China town your next stop is Wat Benchamabopit or the marble temple. This magnificent monastery was built with white Italian marble from Carrara. Overnight at your hotel in Bangkok.</p>
              <h3><i class="arrow right"></i> DAY 07: Free day or Optional Acitivity</h3>
              <p>Enjoy breakfast at the hotel. The rest of the day is for shopping / optional tours.</p>
              <h3><i class="arrow right"></i> DAY 08: Transfer to airport for your flight</h3>
              <p>After breakfast transfer to airport for your flight.</p>
            </div>
        </div>
    </section>
</body>
</html>
