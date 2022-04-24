<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travellove</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/package.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>

<body>
    @include('navbar')
    <div class="outcontent">
    <div class="button">
        <button><a href="{{route('domesticpackage')}}"> DOMESTIC</a></button>
        <button><a href="{{route('outboundpackage')}}" class="active"> OUTBOUND</a> </button>
    </div>

    <div class="container">
        <div class="items">
            <div class="ui-card">
                <img src="/images/singapore.jpg" />
                <div class="description">
                    <h3>SINGAPORE</h3>
                    <p>3nights/4days</p>
                    <a href="{{route('singapore')}}">View Details</a>
                </div>
            </div>
            <div class="text">
                <p>SINGAPORE TOUR</p>
            </div>
        </div>
        <div class="items">
            <div class="ui-card">
                <img src="/images/dubai'.jfif" />
                <div class="description">
                    <h3>DUBAI</h3>
                    <p>4nights/5days</p>
                    <a href="{{route('dubai')}}">View Details</a>
                </div>
            </div>
            <div class="text">
                <p>DUBAI TOUR</p>
            </div>
        </div>

        <div class="items">
            <div class="ui-card">
                <img src="/images/indonesia.jpg" />
                <div class="description">
                    <h3>INDONESIA</h3>
                    <p>4nights/5days</p>
                    <a href="{{route('indonesia')}}">View Details</a>
                </div>
            </div>
            <div class="text">
                <p>INDONESIA TOUR</p>
            </div>
        </div>
        <div class="items">
            <div class="ui-card">
                <img src="/images/mayalsia.jfif" />
                <div class="description">
                    <h3>MAYALSIA</h3>
                    <p>4nights/5days</p>
                    <a href="{{route('malaysia')}}">View Details</a>
                </div>
            </div>
            <div class="text">
                <p>MALAYSIA TOUR</p>
            </div>
        </div>

        <div class="items">
            <div class="ui-card">
                <img src="/images/thailand.jpeg" />
                <div class="description">
                    <h3>THAILAND</h3>
                    <p>7nights/8days</p>
                    <a href="{{route('thailand')}}">View Details</a>
                </div>
            </div>
            <div class="text">
                <p>THAILAND TOUR</p>
            </div>
        </div>
        <div class="items">
            <div class="ui-card">
                <img src="/images/maldives.webp" />
                <div class="description">
                    <h3>MALDIVES</h3>
                    <p>4nights/5days</p>
                    <a href="{{route('maldives')}}">View Details</a>
                </div>
            </div>
            <div class="text">
                <p>MALDIVES TOUR</p>
            </div>
        </div>
    </div>
</div>
        @include('footer')
</body>

</html>
