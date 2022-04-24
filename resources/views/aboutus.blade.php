<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travellove</title>
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet"> --}}

</head>

<body>
    @include('navbar')
    <div class="aboutus">
        <div class="container">
            <div class="content-section">

                <h4>About Us</h4>

                <div class="content">
                    <p>We are dedicated to making travel simple. We make sure to provide travel-related services in the
                        best prices possible.
                        In providing this full range of travel activities, we continue to
                        promote responsible tourism, sustainable development of the country and preservation of local
                        cultures and traditions. As always, we
                        continue to place a significant priority on the continual improvement of our services in order
                        to maintain the highest level of customer
                        satisfaction. </p>

                    <p><b>Vision:</b> To perform and deliver excellent quality service to our clients </p>
                    <p><b>Mission:</b> Through travel, we connect people to positive experiences enabling them to see
                        the world differently </p>
                    <p><b>Core Values:</b>
                    <ul>
                        <li>
                            <i class="fa fa-chevron-right"></i> Delivering Quality
                        </li>
                        <li>
                            <i class="fa fa-chevron-right"></i> Integrity/Ethics
                        </li>
                        <li>
                            <i class="fa fa-chevron-right"></i> Customer Satisfaction
                        </li>
                        <li>
                            <i class="fa fa-chevron-right"></i> Fair Price
                        </li>

                    </ul>
                    </p>
                </div>
            </div>
            <div class="image-section">
                <img src="/images/aboutus.jpg">
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>
