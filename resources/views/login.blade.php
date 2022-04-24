<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travellove</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>

<body>
    <!-- navbar -->
    @include('navbar')
      <!-- <div class="empty"></div> -->
        <div class="container">
            <form action="{{route('login.store')}}" method="POST">
                @csrf
                <div class="box">
                    <center>
                        <div>
                          <label>Last name:</label><br />
                          <input type="text" name="lname" placeholder="Enter your last name" /><br />

                        </div>
                        <div>
                          <label>First name:</label> <br />
                          <input type="text" name="fname" placeholder="Enter your first name" /><br />

                        </div>


                        <div>
                          <label> Phone:</label><br />
                          <input type="text" name="phone" placeholder="Enter your phone number">

                        </div>
                        <div>
                          <label>Source:</label> <br />
                          <input type="text" name="from" placeholder="Enter your Source">

                        </div>
                        <div>
                          <label>Destination:</label> <br />
                          <input type="text" name="to" placeholder="Enter your Destination">

                        </div>
                        <div>
                          <label>Departure</label><br />
                          <input type="date" name="date" placeholder="dd-mm-yyyy ">

                        </div>
                        <div>
                          Number of Ticket:
                          <input type="number" name="tickets" placeholder="How many tickets?">

                        </div>

                        <div>
                          Number of Adults:
                          <input type="number" name="adults" placeholder="How many Adults?">

                        </div>

                        <div>
                          Number of Children:
                          <input type="number" name="Children" placeholder="How many Children?">

                        </div>

                        <div>
                          Number of Infant:
                          <input type="number" name="infant" placeholder="How many Infant?">

                        </div>

                        <div>
                          Name of Airlines:<br />
                          <select name="Airlines">
                            <option value="Buddha Air">Buddha Air</option>
                            <option value="Nepal Airlines">"Nepal Airlines</option>
                            <option value="Yeti Airlines">Yeti Airlines</option>

                          </select>
                        </div>
                        <div>Passport Number:
                          <input type="number" name="Passport" placeholder="Enter your passport number">
                        </div>

                        <div>Passport Validity:
                          <input type="number" name="Passport Validity" placeholder="Enter your passport number">
                        </div>

                      </center>
                </center>
                </div>
                <div class="submit">
                    <input type="submit" value="Login" class="button" />
                    <button class="button"><a href="{{ route('signup') }}" class="login">Create New Account</a></button>
                </div>
            </form>
        </div>
        <!-- <div class="none"></div> -->
    @include('footer')
</body>

</html>
