@extends('/adminside/layouts.main')
@section('title', 'ticket')
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
                <form action="{{ route('editOnewayoutbound', ['onewayoutbound' => $onewayoutbound->id]) }}" method="post">
                    @csrf
                    <div class="items">
                        <label>Last name:</label>
                        <input type="text" name="lastname" value="{{ $onewayoutbound->lastname }}">
                    </div>
                    <div class="items">
                        <label>First name:</label>
                        <input type="text" name="firstname" value="{{ $onewayoutbound->firstname }}">
                    </div>
                    <div class="items">
                        <label>Going From:</label>
                        <input type="text" name="goingfrom" value="{{ $onewayoutbound->going_from }}">
                    </div>
                    <div class="items">
                        <label>Going To:</label>
                        <input type="text" name="goingto" value="{{ $onewayoutbound->going_to }}">
                    </div>
                    <div class="items">
                        <label>Phone:</label>
                        <input type="text" name="phone" value="{{ $onewayoutbound->phone }}">
                    </div>
                    <div class="items">
                        <label>Departure Date:</label>
                        <input type="text" name="departure" value="{{ $onewayoutbound->departure_day }}">
                    </div>
                    <div class="items">
                        <label>Passport_number:</label>
                        <input type="text" name="passnum" value="{{ $onewayoutbound->passport_number }}">
                    </div>
                    <div class="items">
                        <label>Passport_Validity:</label>
                        <input type="text" name="passval" value="{{ $onewayoutbound->passport_validity }}">
                    </div>
                    <div class="items">
                        <label>STATUS:</label>
                        <input type="text" name="status" value="{{ $onewayoutbound->status }}">
                    </div>

                    <button type="submit">Submit</button>
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
    </script>
@endsection
@endsection
