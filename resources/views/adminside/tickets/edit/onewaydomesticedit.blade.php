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
                        <a href="#">One way</a>
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
            <form action="{{ route('editOnewaydomestic', ['onewaydomestic' => $tickets->id]) }}" method="post">
                    @csrf
                    <div class="items">
                        <label>Last name:</label>
                        <input type="text" name="lastname" value="{{ $tickets->lastname }}">
                    </div>
                    <div class="items">
                        <label>First name:</label>
                        <input type="text" name="firstname" value="{{ $tickets->firstname }}">
                    </div>
                    <div class="items">
                        <label>Lastname:</label>
                        <input type="text" name="lastname" value="{{ $tickets->lastname }}">
                    </div>
                    <div class="items">
                        <label>Phone:</label>
                        <input type="text" name="phone" value="{{ $tickets->phone }}">
                    </div>
                    <div class="items">
                        <label>Email:</label>
                        <input type="text" name="email" value="{{ $tickets->email }}">
                    </div>
                    <div class="items">
                        <label>Departure Date:</label>
                        <input type="text" name="departure" value="{{ $tickets->departure_day }}">
                    </div>
                    <div class="items">
                        <label>STATUS:</label>
                        <input type="text" name="status" value="{{ $tickets->status }}">
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
