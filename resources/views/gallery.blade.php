@extends('layouts.web')

@section('content')
    {{--<h1 align="center">Dokumentasi Trip <span class="sr-only">Harmoni Karimunjawa</span></h1>--}}
    <!-- The expanding image container -->
    <div class="row">
        <div id="expandedCont" class="py-5 my-5">
            <!-- Close the image -->
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

            <!-- Expanded image -->
            <img id="expandedImg" style="width:100%">

            <!-- Image text -->
            <h3 id="imgtext"></h3>
        </div>
    </div>

    <!-- Photo Grid -->
    <div class="py-5 my-5">
        <div class="row">
            <div class="column">
                <img src="{{ asset('img/LogoLicious_20180609_195651.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180608_145311.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180608_145941.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_195514.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_205541.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_202020.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_195841.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_200056.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_200204.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
            </div>
            <div class="column">
                <img src="{{ asset('img/LogoLicious_20180609_200252.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_200353.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_205447.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_200440.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_200559.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_200643.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_210403.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_200938.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_210317.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_210501.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
            </div>
            <div class="column">
                <img src="{{ asset('img/LogoLicious_20180609_200731.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_200827.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_210604.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_201022.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_210234.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_201104.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_201156.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_201245.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_201713.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_205814.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
            </div>
            <div class="column">
                <img src="{{ asset('img/LogoLicious_20180609_201806.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_201922.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_202113.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_202523.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_205240.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_205950.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_210127.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_195551.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
                <img src="{{ asset('img/LogoLicious_20180609_205355.png') }}" id="collapsedImg" onclick="openImg(this);" alt="&copy; Harmoni Karimunjawa" style="width:100%">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="application/javascript">
        $(document).ready(function () {
            $('head').append('<link href="{{ asset('css/gallery.css')}}" rel="stylesheet">');
        });

        function openImg(imgs) {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");
            // Get the image text
            var imgText = document.getElementById("imgtext");
            // Use the same src in the expanded image as the image being clicked on from the grid
            expandImg.src = imgs.src;
            // Use the value of the alt attribute of the clickable image as text inside the expanded image
            imgText.innerHTML = imgs.alt;

            // Scroll to Top
            $('body,html').animate({
                scrollTop: 100
            }, 1000);
            // document.body.scrollTop = 0; // For Safari
            // document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";

            $('#expandedImg').hide().fadeIn(3000);
        }
    </script>
@endsection