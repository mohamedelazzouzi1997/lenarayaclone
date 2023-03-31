@extends('layouts.app')

@section('title')
    Home | LE Naraya
@endsection

@section('befor-style')
@endsection
@section('styles')
    <style>
        .text-fuchsia-900 {
            color: #6E0949 !important;
        }
    </style>
@endsection

@section('content')
    @php
        $img = 'Rectangle-13-copie-1.png';
    @endphp
    <div id="reservation"
        class="px-5 flex bg-no-repeat bg-cover justify-center items-center relative md:px-48 md:h-[600px] bg-bottom"
        style="background-image: url('{{ asset('images/home.jpg') }}')">
        <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-50">

        </div>

    </div>
    <div class="px-3 md:hidden text-center text-white mt-8 fw-caviar text-lg">
        La réouverture après la fin du Ramadan
    </div>
    <div class="px-6 md:px-40  mt-8 grid grid-cols-1 md:grid-cols- gap-y-10">
        <div class="text-center">
            <div class="md:hidden">
                <h3 data-aos="fade-up" class="text-center uppercase text-2xl my-6 font-semibold text-fuchsia-900 fw-sans">

                    welcome
                </h3>
                <img class="mx-auto my-3 w-[25%] " src="{{ asset('images/line2.png') }}" alt="">
                <h3 data-aos="fade-up" class="text-center uppercase text-5xl my-3 font-semibold text-white font-sans">

                    DRINK
                </h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 items-center ">
                <img data-aos="fade-right" class="h-full w-full" src="{{ asset('images/111-1.jpg') }}" class=""
                    alt="image2">
                <div data-aos="fade-left" class="text-center">
                    <div class="hidden md:block">

                        <h3 data-aos="fade-up"
                            class="text-center uppercase text-2xl my-6 font-semibold text-fuchsia-900  fw-sans">

                            welcome
                        </h3>
                        <img class="mx-auto mb-6 w-[15%] " src="{{ asset('images/line2.png') }}" alt="">
                        <h3 data-aos="fade-up"
                            class="text-center uppercase text-5xl my-1 font-semibold text-white font-sans">

                            DRINK
                        </h3>
                    </div>
                    <div data-aos="fade-down"
                        class="text-lg text-center leading-10 my-5 px-3 fw-caviar text-white  font-semibold">
                        Avis aux amateurs de mixologie, et de design, le barman vous concocte avec expertise des
                        Cocktails et rafraîchissements en tout genre.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md:px-40 bg-no-repeat bg-cover  grid grid-cols-1 md:grid-cols- gap-y-10"
        style="background-image: url('{{ asset('images/Rectangle-13-copie-1.png') }}')">
        <div class="text-center">
            <div class="grid grid-cols-1 md:grid-cols-2  items-center">

                <div data-aos="fade-left" class="text-center">
                    <div data-aos="fade-down"
                        class="hidden md:block text-lg text-center leading-10 my-2 fw-caviar text-white  font-semibold">
                        En cuisine le Chef, c’est l’allié de vos papilles : ce qu’il vous prépare, c’est savoureux, des
                        Tapas à tomber !
                    </div>
                    <div class="">
                        <img class="hidden md:block mx-auto mb-2 text-white w-[15%]" src="{{ asset('images/line2.png') }}"
                            alt="">
                        <h3 data-aos="fade-up"
                            class="text-center tracking-widest text-4xl my-2 font-semibold text-white fw-sans">
                            FOOD</h3>
                        <img class="md:hidden mx-auto mb-2 text-white w-[15%]" src="{{ asset('images/line2.png') }}"
                            alt="">
                    </div>
                    <img data-aos="fade-right" class="h-full mx-auto md:hidden" src="{{ asset('images/food.jpg') }}"
                        alt="image2">
                    <div data-aos="fade-down"
                        class=" md:hidden text-2xl py-8 text-center leading-10 my-2  fw-caviar px-10 text-white  font-semibold">
                        En cuisine le Chef, c’est l’allié de vos papilles : ce qu’il vous prépare, c’est savoureux, des
                        Tapas à tomber !
                    </div>

                </div>
                <img data-aos="fade-right" class="h-full w-full mx-auto hidden md:block"
                    src="{{ asset('images/food.jpg') }}" alt="image2">
            </div>
        </div>
    </div>
    <div class="px-6 md:px-40  grid grid-cols-1 md:grid-cols- gap-y-10">
        <div class="text-center">
            <div class="md:hidden">
                <h3 data-aos="fade-up" class="text-center uppercase text-2xl my-6 font-semibold text-fuchsia-900  fw-sans">

                    welcome
                </h3>
                <img class="mx-auto mb-5 w-[25%] " src="{{ asset('images/line2.png') }}" alt="">
                <h3 data-aos="fade-up" class="text-center uppercase text-5xl my-1 font-semibold text-white font-sans">

                    dj résident
                </h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 items-center ">
                <img data-aos="fade-right" class="h-full w-full rounded-lg" src="{{ asset('images/333-1.jpg') }}"
                    class="" alt="image2">
                <div data-aos="fade-left" class="text-center">
                    <div class="hidden md:block">

                        <img class="mx-auto mb-3 w-[15%] " src="{{ asset('images/line2.png') }}" alt="">
                        <h3 data-aos="fade-up"
                            class="text-center uppercase text-2xl my-3 font-semibold text-fuchsia-900  fw-sans">

                            welcome
                        </h3>
                        <h3 data-aos="fade-up"
                            class="text-center uppercase text-5xl my-1 font-semibold text-white font-sans">
                            dj résident
                        </h3>
                    </div>
                    <div data-aos="fade-down"
                        class="text-lg text-center px-3 leading-10 my-5 fw-caviar text-white  font-semibold">
                        Passez la soirée à danser et a siroter mojito sur mojito au rythme des sons électro présentés
                        par notre DJ résident.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.upfooter', ['img' => $img])
@endsection

@section('scripts')
@endsection
