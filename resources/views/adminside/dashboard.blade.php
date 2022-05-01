@extends('/adminside/layouts.main')
@section('title', 'ticket')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/adminside/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminside/dashboard.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
@endsection
@section('body')
        <div class="main_content">
            @include('/adminside/layouts.nav')
            <div class="info">
                <div class="box one">
                    <div class="item aa">
                        <i class="fa fa-plane"> TICKET</i>
                        <h4>One Way Domestic</h4>

                    </div>
                    <div class="item bb">
                        <i class="fa fa-plane"> TICKET</i>
                        <h4>Two Way Domestic</h4>
                    </div>
                    <div class="item cc">
                        <i class="fa fa-plane"> TICKET</i>
                        <h4>One Way Outbound</h4>
                    </div>
                    <div class="item dd">
                        <i class="fa fa-plane"> TICKET</i>
                        <h4>Two Way Outbound</h4>
                    </div>
                </div>
                <div class="box two">
                    <div class="item ee">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>CHITWAN</h4>
                    </div>
                    <div class="item ff">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>LUMBINI</h4>

                    </div>
                    <div class="item gg">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>POKHARA</h4>

                    </div>
                    <div class="item hh">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>MUSTANG</h4>

                    </div>
                </div>
                <div class="box three">
                    <div class="item ii">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>JANAKPUR</h4>

                    </div>
                    <div class="item jj">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>ILLAM</h4>

                    </div>
                    <div class="item kk">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>SINGAPORE</h4>

                    </div>
                    <div class="item ll">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>DUBAI</h4>

                    </div>
                </div>
                <div class="box four">
                    <div class="item mm">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>INDONESIA</h4>

                    </div>
                    <div class="item nn">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>MALAYSIA</h4>

                    </div>
                    <div class="item oo">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>THAILAND</h4>

                    </div>
                    <div class="item pp">
                        <i class="fa fa-suitcase"> PACKAGE </i>
                        <h4>MALDIVES</h4>

                    </div>
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
