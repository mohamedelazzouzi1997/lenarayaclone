@extends('layouts.app')


@section('title')
    Internationale | LE BLOKK
@endsection

@section('styles')
@endsection

@section('content')
    @php
        $img = 'lots-of-various-types-of-sushi-rolls-topped-with-sesame-seeds-close-up-view-scaled.jpg';
    @endphp
    <div class="">

        <div id="topdiv"
            class="px-5 slide_photo flex bg-fixed bg-no-repeat justify-center items-center relative md:px-48 h-[400px] md:h-screen bg-cover bg-center "
            style="background-image: url('{{ asset('images/lots-of-various-types-of-sushi-rolls-topped-with-sesame-seeds-close-up-view-scaled.jpg') }}')">
            <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-40">

            </div>
            <div data-aos="fade-down" class=" text-white z-10 my-5">
                <h1 class="text-2xl font-mono md:text-7xl uppercase text-center font-extrabold">un restaurant à expérience
                    UNIque </h1>
                <p class="text-lg md:text-3xl font-extrabold text-center"> l’ambiance feutrée de nos spectacles </p>
            </div>
        </div>
        <div class="px-6 md:px-40 my-16 text-white">
            <div class="mx-auto text-center">
                <h1 class="text-center  italic fw-dancing text-2xl">
                    Goûtez la différence
                </h1>
                <h2 class="text-center text-5xl my-6 font-extrabold text-orange-300">MENU JAPONAIS</h2>
                <img class="mx-auto" src="{{ asset('images/line2.png') }}" alt="line">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-28">
                <div class="text-center flex justify-center items-center">
                    <img class="mx-auto rounded"
                        src="{{ asset('images/sushi-sushi-roll-set-black-stone-table-top-view-700x466.png') }}"
                        alt="sushi-sushi-roll-set-black-stone-table-top-view-700x466">
                </div>
                <div class="text-white">
                    <div class="my-3">
                        <h3 class="text-center text-4xl font-extrabold">
                            JAPONAIS 110 DHS (8 pièces)
                        </h3>

                    </div>
                    <div class="space-y-5">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">

                                Incredible Roll

                            </p>
                            <p class="text-white text-lg">
                                (Tempura, crevette, avocat, saumon, oignon rouge)
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">

                                Crunchy Crevettes

                            </p>
                            <p class="text-white text-lg">
                                (gambes panées cheese tanoki)
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Volcano
                            </p>
                            <p class="text-white text-lg">
                                (saumon, cheese, tobico, sesame grillé)
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Special California Roll
                            </p>
                            <p class="text-white text-lg">
                                (surimi, avocat, philadelphia, saumon)
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                BOMBA BALL
                            </p>
                            <p class="text-white text-lg">
                                (Riz épicé, saumon, Cheese, mayonnaise, sésame)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 md:px-40 my-16 text-white">
            <div class="mx-auto text-center">
                <h4 class="text-center font-extrabold font-mono text-3xl">
                    COMPOSEZ VOTRE ASSIETTE​
                </h4>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-20 my-28">
                <div class="text-white md:py-10">

                    <div class="space-y-5">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                California saumon cuit (3 pcs)
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Maki avocat (3 pcs)
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">

                                Maki saumon ( 6 pcs )

                            </p>
                            <p class="text-white text-lg">
                                créme cheese
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <img class="mx-auto rounded" src="{{ asset('images/Calque-104-2.png') }}" alt="Calque-104-2">
                </div>
                <div class="text-white md:py-10">

                    <div class="space-y-5">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Sushi saumon (3 pcs)
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Sushi eby crevette (3 pcs)
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                California saumon épicé (3 pcs)
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="text-white ">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:my-10 my-28">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Sakai Blokk (12 pcs) ............................................
                                125 DH
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Tokyo Blokk (18 pcs) ...............................................
                                185 DH
                            </p>

                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Osaka Blokk (15 pcs) ..........................................
                                155 DH
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl">
                                Miyoshi Blokk (24 pcs) ..........................................
                                240 DH
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.upfooter', ['img' => $img])
@endsection

@section('scripts')
@endsection
