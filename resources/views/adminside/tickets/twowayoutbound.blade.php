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
            <div>
                    <button class="button"><a class="bt" href="{{route('newtwowayoutboundenquiry')}}"> ADD </a></button>

                </div>
            <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">LAST NAME</th>
                <th scope="col">FIRST NAME</th>
                <th scope="col">PHONE</th>
                <th scope="col">GOING FROM</th>
                <th scope="col">GOING TO</th>
                <th scope="col">DEPARTURE DAY</th>
                <th scope="col">RETURNING DAY</th>
                <th scope="col">STATUS</th>
                <th scope="col">PASSPORT NO</th>
                <th scope="col">PASSPORT VALIDITY</th>
                <th scope="col">OPERATION</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($twowayoutbound as $twowayout)
                <tr>
                    <th scope="row">{{ $twowayout->id }}</th>
                    <td>{{ $twowayout->lastname }}</td>
                    <td>{{ $twowayout->firstname }}</td>
                    <td>{{ $twowayout->phone }}</td>
                    <td>{{ $twowayout->going_from }}</td>
                    <td>{{ $twowayout->going_to }}</td>
                    <td>{{ $twowayout->departure_day }}</td>
                    <td>{{ $twowayout->returning_day }}</td>
                    <td>{{ $twowayout->status }}</td>
                    <td>{{ $twowayout->passport_number }}</td>
                    <td>{{ $twowayout->passport_validity }}</td>
                   
                    <td>
                    <a href="Update/{{$twowayout}}"></a>
                        <button class="btn"> <a class="bt" href="{{ route('updateTwowayoutbound', ['twowayoutbound' => $twowayout->id]) }}">Edit</a></button>
                        <a href="Delete/{{$twowayout}}"></a>
                        <button class="btn"> <a class="bt" href="{{ route('deleteTwowayoutbound', ['twowayoutbound' => $twowayout->id]) }}">Delete</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
