@extends('layouts.app')


@section('title')
    Nos spectacles | LE BLOKK
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lg-video.css') }}">
@endsection

@section('content')
    @php
        $img = '48-1.jpg';
    @endphp

    <div id="topdiv"
        class="px-5 slide_photo flex bg-fixed bg-no-repeat justify-center items-center relative md:px-48 h-[400px] md:h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('images/48-1.jpg') }}')">
        <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-50">

        </div>
        <div data-aos="fade-down" class=" text-white z-10 my-5">
            <h1 class="text-2xl font-mono md:text-7xl uppercase text-center font-extrabold">un restaurant à expérience
                UNIque </h1>
            <p class="text-lg md:text-3xl font-extrabold text-center"> l’ambiance feutrée de nos spectacles </p>
        </div>
    </div>
    <div class="px-6 md:px-40 my-28 text-white">
        <div class="mx-auto text-center mb-10">
            <h1 class="text-center  italic fw-dancing text-2xl">
                La photo dans ce qu'elle a de plus beau
            </h1>
            <h2 class="text-center text-5xl my-6 font-extrabold text-orange-300 uppercase">nos spectacles</h2>
            <img class="mx-auto" src="{{ asset('images/line2.png') }}" alt="line">
        </div>
        <div id="lightgallery" class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a data-lg-size="1280-720" class="relative cursor-pointer video-section"
                data-video='{"source": [{"src":"https://leblokkmarrakech.com//wp-content//uploads//2022//03//WhatsApp-Video-2022-03-17-at-15.55.27.mp4", "type":"video/mp4"}], "tracks": [{"src": "{/videos/title.txt", "kind":"captions", "srclang": "en", "label": "English", "default": "true"}], "attributes": {"preload": true, "playsinline": true, "controls": true}}'
                data-poster="{{ asset('images/video1.jpg') }}">
                <img class="mx-auto  img-responsive" src="{{ asset('images/video1.jpg') }}" />

                <i class="fa-regular fa-circle-play absolute top-[42%] right-[42%] text-gray-300 text-7xl "></i>

            </a>
            <a data-lg-size="1280-720" class="relative cursor-pointer video-section"
                data-video='{"source": [{"src":"https:\/\/leblokkmarrakech.com\/wp-content\/uploads\/2022\/03\/WhatsApp-Video-2022-03-17-at-15.55.28.mp4", "type":"video/mp4"}], "tracks": [{"src": "{/videos/title.txt", "kind":"captions", "srclang": "en", "label": "English", "default": "true"}], "attributes": {"preload": true, "playsinline": true, "controls": true}}'
                data-poster="{{ asset('images/video2.jpg') }}">
                <img class="mx-auto img-responsive" src="{{ asset('images/video2.jpg') }}" />
                <i class="fa-regular fa-circle-play absolute top-[42%] right-[42%] text-gray-300 text-7xl"></i>

            </a>
            <a data-lg-size="1280-720" class="relative cursor-pointer video-section"
                data-video='{"source": [{"src":"https:\/\/leblokkmarrakech.com\/wp-content\/uploads\/2022\/03\/WhatsApp-Video-2022-03-30-at-14.31.06.mp4", "type":"video/mp4"}], "tracks": [{"src": "{/videos/title.txt", "kind":"captions", "srclang": "en", "label": "English", "default": "true"}], "attributes": {"preload": true, "playsinline": true, "controls": true}}'
                data-poster="{{ asset('images/video3.jpg') }}">
                <img class="mx-auto img-responsive" src="{{ asset('images/video3.jpg') }}" />
                <i class="fa-regular fa-circle-play absolute top-[42%] right-[42%] text-gray-300 text-7xl"></i>


            </a>
        </div>
    </div>


    @include('layouts.upfooter', ['img' => $img])
@endsection

@section('scripts')
    <script type="module">
        import lightGallery from "https://cdn.skypack.dev/lightgallery@2.3.0-beta.4";

        import lgVideo from "https://cdn.skypack.dev/lightgallery@2.3.0-beta.4/plugins/video";

        lightGallery(document.getElementById("lightgallery"), {
            speed: 500,
            plugins: [lgVideo],
        });
    </script>
@endsection
