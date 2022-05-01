@extends('/adminside/layouts.main')
@section('title', 'package')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/adminside/style.css') }}">
@endsection
@section('body')
    <div class="wrapper">
        <div class="sidebar leftCol">
            <i class="fa fa-suitcase" aria-hidden="true" id="travel"> TRAVELLOVE</i>
            <ul>
                <li class="category"><a href="#">Domestic</a></li>
                <ul style="margin-left: 2ch">
                    <li>
                        <a href="#">{{-- comment --}} Pokhara</a>
                    </li>
                    <li>
                        <a href="#">Lumbini</a>
                    </li>
                    <li>
                        <a href="#">Chitwan</a>
                    </li>
                    <li>
                        <a href="#">Mustang</a>
                    </li>
                    <li>
                        <a href="#">Illam</a>
                    </li>
                    <li>
                        <a href="#">Janakpur</a>
                    </li>
                </ul>
                <li  class="category"><a href="#">Outbound</a></li>
                <ul style="margin-left: 2ch">
                    <li>
                        <a href="#">Dubai</a>
                    </li>
                    <li>
                        <a href="#">Thailand</a>
                    </li>
                    <li>
                        <a href="#">Indonesia</a>
                    </li>
                    <li>
                        <a href="#">Singapore</a>
                    </li>
                    <li>
                        <a href="#">Malyasia</a>
                    </li>
                    <li>
                        <a href="#">Maldives</a>
                    </li>
                </ul>
            </ul>
        </div>
        <div class="main_content">
            @include('/adminside/layouts.nav')
            <div class="info">
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus
                    sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat
                    illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam
                    ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam
                    possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus
                    harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum
                    consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos
                    perferendis eos? Consequuntur!</div>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus
                    sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat
                    illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam
                    ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam
                    possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus
                    harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum
                    consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos
                    perferendis eos? Consequuntur!</div>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus
                    sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat
                    illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam
                    ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam
                    possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus
                    harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum
                    consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos
                    perferendis eos? Consequuntur!</div>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus
                    sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat
                    illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam
                    ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam
                    possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus
                    harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum
                    consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos
                    perferendis eos? Consequuntur!</div>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus
                    sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat
                    illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam
                    ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam
                    possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus
                    harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum
                    consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos
                    perferendis eos? Consequuntur!</div>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus
                    sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat
                    illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam
                    ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam
                    possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus
                    harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum
                    consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos
                    perferendis eos? Consequuntur!</div>
                <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sed nobis ut exercitationem atque accusamus
                    sit natus officiis totam blanditiis at eum nemo, nulla et quae eius culpa eveniet voluptatibus repellat
                    illum tenetur, facilis porro. Quae fuga odio perferendis itaque alias sint, beatae non maiores magnam
                    ad, veniam tenetur atque ea exercitationem earum eveniet totam ipsam magni tempora aliquid ullam
                    possimus? Tempora nobis facere porro, praesentium magnam provident accusamus temporibus! Repellendus
                    harum veritatis itaque molestias repudiandae ea corporis maiores non obcaecati libero, unde ipsum
                    consequuntur aut consectetur culpa magni omnis vero odio suscipit vitae dolor quod dignissimos
                    perferendis eos? Consequuntur!</div>
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
