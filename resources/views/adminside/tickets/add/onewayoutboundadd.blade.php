@extends('/adminside/layouts.main')
@section('title', 'updatefrom')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/adminside/style.css') }}">
@endsection
@section('body')
    <div class="wrapper">
        <div class="sidebar leftCol">
            <i class="fa fa-suitcase" aria-hidden="true" id="travel"> TRAVELLOVE</i>

            <ul>
                <li  class="category"><a href="#" class="active">Domestic</a></li>
                <ul style="margin-left: 2ch">
                    <li>
                        <a href="{{route('onewaydomestic')}}">One way</a>
                    </li>
                    <li>
                        <a href="#">Two way</a>
                    </li>
                </ul>
                <li  class="category"><a href="#" class="active">Outbound</a></li>
                <ul style="margin-left: 2ch">
                    <li>
                        <a href="#">One way</a>
                    </li>
                    <li>
                        <a href="#">Two way</a>
                    </li>
                </ul>
            </ul>
        </div>
        <div class="main_content">
            @include('/adminside/layouts.nav')
            <div class="info">
                <form action="{{route('newonewayoutboundenquired')}}" method="POST">
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
                                <label>Going From:</label> <br />

                                <select name="going_from" id="" class="input" required>
                                    <option value="Kathmandu">Kathmandu</option>
                                    <option value="Pokhara">Pokhara</option>
                                    <option value="Chitwan">Chitwan</option>
                                    <option value="Illam">Illam</option>
                                    <option value="Bharatpur">Bharatpur</option>
                                </select>
                                <i class="fa fa-map-marker icon" aria-hidden="true" style="color:rgb(0, 0, 0);"></i>
                            </div>

                            <div >
                                <label>Going To:</label> <br />
                                <select name="going_to" id="" class="input" required>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Dubai">Dubai</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Thailand">Thailand</option>
                                </select>
                                <i class="fa fa-plane icon" aria-hidden="true" style="color:rgb(0, 0, 0);"></i>
                            </div>
                            <div>
                                Departure Date:<br />
                                <input type="date" name="departure_day" placeholder="Choose your departure date"
                                    class="input" required>
                            </div>
                            <div>
                                <label> Phone:</label><br />
                                <input type="text" name="phone" placeholder="Enter your phone number" class="input"
                                    required>
                            </div>
                            <div>
                                <label> Passport number:</label><br />
                                <input type="text" name="passnum" placeholder="Enter your password number" class="input"
                                    required>
                            </div>
                            <div>
                                <label> Passport Validity:</label><br />
                                <input type="text" name="passval" placeholder="Enter your password validity" class="input"
                                    required>
                            </div>



                            <div class="submit">
                                <input type="submit" value="Submit" class="button" />
                            </div>
                        </center>
                    </div>
                </form>


        </div>
    </div>
    </div>

@section('script')
    <script src="https://kit.fontawesome.com/b99e675b6e.js">
        window.onscroll = function() {
            scrollFunction()

        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-50px";
            }

        }


        //     if(status==){
        //     var profit=document.getElementById('result').value=(selling-cost).toFixed(2);
        //     document.getElementById('result').style.backgroundColor="lightgreen";
        //     }else{
        //    var loss= document.getElementById('result').value=(cost-selling).toFixed(2);
        //    document.getElementById('result').style.backgroundColor="red";
        //     }
    </script>
@endsection
@endsection
