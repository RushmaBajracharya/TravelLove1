<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travellove</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/packageenquiry.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>

<body>
    <!-- navbar -->
    @include('navbar')
    <!-- <div class="empty"></div> -->
    <h1 class="title">ENQUIRY FORM</h1>
    <div class="container">
        <form action="{{route('lumbinienquired')}}" method="POST">
            @csrf
            <div class="box one">
                <center>
                    <div>
                        <label>Last name:</label><br />
                        <input type="text" name="lastname" placeholder="Enter your last name" class="input"
                            required />

                    </div>
                    <div>
                        <label>First name:</label> <br />
                        <input type="text" name="firstname" placeholder="Enter your first name" class="input"
                            required />

                    </div>
                    <div>
                        <label> Phone:</label><br />
                        <input type="text" name="phone" placeholder="Enter your phone number" class="input"
                            required>

                    </div>
                    <div>
                        Email:<br />
                        <input type="text" name="email" placeholder="Enter your email" class="input" required>
                    </div>
                    <div>
                        Departure Date:<br />
                        <input type="date" name="departure_day" placeholder="Choose your departure date"
                            class="input" required>
                    </div>
                </center>
            </div>
            <div class="submit">
                <input type="submit" value="Submit" class="button" />
            </div>
        </form>
    </div>

    @include('footer')
</body>

</html>
