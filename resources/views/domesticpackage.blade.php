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
    <!-- navbar -->
    @include('navbar')

    <div class="domesticcontent" >

        <div class="button">
            <button><a href="{{ route('domesticpackage') }}" class="active"> DOMESTIC</a></button>
            <button><a href="{{ route('outboundpackage') }}"> OUTBOUND</a> </button>
        </div>

        <div class="container">
            <div class="items">
                <div class="ui-card">
                    <img src="/images/chitwan.jpg" />
                    <div class="description">
                        <h3>CHITWAN</h3>
                        <p>3nights/4days</p>
                        <a href="{{ route('chitwan') }}">View Details</a>
                    </div>
                </div>
                <div class="text">
                    <p>CHITWAN TOUR</p>
                </div>
            </div>
            <div class="items">
                <div class="ui-card">
                    <img src="/images/lumbini.jpg" />
                    <div class="description">
                        <h3>LUMBINI</h3>
                        <p>3nights/4days</p>
                        <a href="{{ route('lumbini') }}">View Details</a>
                    </div>
                </div>
                <div class="text">
                    <p>LUMBINI TOUR</p>
                </div>
            </div>

            <div class="items">
                <div class="ui-card">
                    <img src="/images/pokhara.jpg" />
                    <div class="description">
                        <h3>POKHARA</h3>
                        <p>2nights/3days</p>
                        <a href="{{ route('pokhara') }}">View Details</a>
                    </div>
                </div>
                <div class="text">
                    <p>POKHARA TOUR</p>
                </div>
            </div>
            <div class="items">
                <div class="ui-card">
                    <img src="/images/mustang.jpg" />
                    <div class="description">
                        <h3>MUSTANG</h3>
                        <p>3nights/4days</p>
                        <a href="{{ route('mustang') }}">View Details</a>
                    </div>
                </div>
                <div class="text">
                    <p>MUSTANG TOUR</p>
                </div>
            </div>

            <div class="items">
                <div class="ui-card">
                    <img src="/images/janakpur.jfif" />
                    <div class="description">
                        <h3>JANAKPUR</h3>
                        <p>2nights/3days</p>
                        <a href="{{ route('janakpur') }}">View Details</a>
                    </div>
                </div>
                <div class="text">
                    <p>JANAKPUR TOUR</p>
                </div>
            </div>
            <div class="items">
                <div class="ui-card">
                    <img src="/images/illam.jpg" />
                    <div class="description">
                        <h3>ILLAM</h3>
                        <p>5nights/6days</p>
                        <a href="{{ route('illam') }}">View Details</a>
                    </div>
                </div>
                <div class="text">
                    <p>ILLAM TOUR</p>
                </div>
            </div>
        </div>

    </div>
        @include('footer')
</body>

</html>
