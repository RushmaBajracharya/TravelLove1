<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travellove</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ticketenquiry.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>

<body>
    <!-- navbar -->
    @include('navbar')
    <!-- <div class="empty"></div> -->
    <h1 class="title">ENQUIRY FORM</h1>
    <div class="container">
        <form action="{{ route('signup.store') }}" method="POST">
            @csrf
            <div class="box one">
                <center>
                <div>
                    <label>Last name:</label><br />
                    <input type="text" name="lname" placeholder="Enter your last name" class="input" required/>

                </div>
                <div>
                    <label>First name:</label> <br />
                    <input type="text" name="fname" placeholder="Enter your first name" class="input" required/>

                </div>
                <div>
                    <label> Phone:</label><br />
                    <input type="text" name="phone" placeholder="Enter your phone number" class="input" required>

                </div>
                <div>
                    Name of Airlines:<br />
                    <select name="Airlines" class="input" required>
                        <option value="Buddha Air">Buddha Air</option>
                        <option value="Nepal Airlines">Nepal Airlines</option>
                        <option value="Yeti Airlines">Yeti Airlines</option>
                    </select>
                </div>
                <div>
                    Number of Ticket:<br />
                    <input type="number" name="tickets" placeholder="How many tickets?" class="input" required>

                </div>
            </center>
            </div>
            <div class="box two">
                <center>
                    <div>
                        Number of Adults:<br />
                        <input type="number" name="adults" placeholder="How many Adults?" class="input" required>
                    </div>
                    <div>
                        Number of Children:<br />
                        <input type="number" name="Children" placeholder="How many Children?" class="input" required>
                    </div>
                    <div>
                        Number of Infant:<br />
                        <input type="number" name="infant" placeholder="How many Infant?" class="input" required>
                    </div>

                    <div>Passport Number:<br />
                        <input type="number" name="Passport" placeholder="Enter your passport number" class="input" required>
                    </div>

                    <div>Passport Validity:<br />
                        <input type="number" name="Passport Validity" placeholder="Enter your passport validaty" class="input" required>
                    </div>
                </center>
            </div>
            <div class="submit">
                <input type="submit" value="Submit" class="button" />
            </div>
        </form>
    </div>
    <!-- <div class="none"></div> -->
    @include('footer')
</body>

</html>
