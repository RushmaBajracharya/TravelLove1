<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travellove</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>

<body>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
    <!-- navbar -->
   @include('navbar')

    <div class="content">

        <div class="button">
            <button><a href="{{ route('domesticticket') }}" class="active"> DOMESTIC</a></button>
            <button><a href="{{ route('outboundticket') }}"> OUTBOUND</a></button>
        </div>

        <div class="form">
            <div class="way twoway">
                <form action="{{route('twowaydomestic')}}" method="post" class="area">
                    @csrf
                    <h1>Two Way</h1>
                    <div class="inputContainer">
                        <select name="going_from" id="" class="location">
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Pokhara">Pokhara</option>
                            <option value="Chitwan">Chitwan</option>
                            <option value="Illam">Illam</option>
                            <option value="Bharatpur">Bharatpur</option>
                        </select>
                        <i class="fa fa-map-marker icon" aria-hidden="true" style="color:rgb(235, 225, 225);"></i>
                    </div>
                    <div class="inputContainer">
                        <select name="going_to" id="" class="location">
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Pokhara">Pokhara</option>
                            <option value="Chitwan">Chitwan</option>
                            <option value="Illam">Illam</option>
                            <option value="Bharatpur">Bharatpur</option>
                        </select>
                        <i class="fa fa-plane icon" aria-hidden="true" style="color:rgb(235, 225, 225);"></i>
                    </div>
                    <div class="inputContainer">
                        <input name="departure_day" class="Field" type="date" placeholder="Departing date" />
                    </div>
                    <div class="inputContainer">
                        <input name="returning_day" class="Field" type="date" placeholder="Returning date" />
                    </div>
                    <div class="location">
                        <input type="submit" value="Enquiry" class="enquiry" />
                    </div>
                </form>
            </div>

            <div class="way oneway">
                <form action="{{route('onewaydomestic')}}" method="post" class="area">
                    @csrf
                    <h1>One Way</h1>
                    <div class="inputContainer">
                        <select name="going_from" id="" class="location" required>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Pokhara">Pokhara</option>
                            <option value="Chitwan">Chitwan</option>
                            <option value="Illam">Illam</option>
                            <option value="Bharatpur">Bharatpur</option>
                        </select>
                        <i class="fa fa-map-marker icon" aria-hidden="true" style="color:rgb(235, 225, 225);"></i>
                    </div>

                    <div class="inputContainer">
                        <select name="going_to" id="" class="location" required>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Pokhara">Pokhara</option>
                            <option value="Chitwan">Chitwan</option>
                            <option value="Illam">Illam</option>
                            <option value="Bharatpur">Bharatpur</option>
                        </select>
                        <i class="fa fa-plane icon" aria-hidden="true" style="color:rgb(235, 225, 225);"></i>
                    </div>
                    <div class="inputContainer">
                        <input class="Field" type="date" placeholder="Departing date" name="departure_day" required/>
                    </div>
                    <div class="location">

                        <input type="submit" value="Enquiry" class="enquiry" />
                    </div>
                </form>
            </div>
        </div>


        @include('footer')

</body>

</html>
