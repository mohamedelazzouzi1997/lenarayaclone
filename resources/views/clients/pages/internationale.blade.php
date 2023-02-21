@extends('layouts.app')


@section('title')
    Internationale | LE BLOKK
@endsection

@section('styles')
@endsection

@section('content')
    <div id="topdiv"
        class="px-5 slide_photo flex bg-fixed bg-no-repeat justify-center items-center relative md:px-48 h-[400px] md:h-screen bg-cover bg-center "
        style="background-image: url('{{ asset('images/cuisine-internationale-1.jpg') }}')">
        <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-40">

        </div>
        <div data-aos="fade-down" class=" text-white z-10 my-5">
            <h1 class="text-2xl md:text-7xl uppercase text-center font-extrabold">un restaurant à expérience UNIque </h1>
            <p class="text-xl md:text-3xl font-extrabold text-center"> l’ambiance feutrée de nos spectacles </p>
        </div>
    </div>
    <div class="px-6 md:px-40 my-16 text-white">
        <div class="mx-auto text-center">
            <h1 class="text-center  italic fw-dancing text-2xl">
                Goûtez la différence
            </h1>
            <h2 class="text-center text-5xl my-6 font-extrabold text-orange-300">MENU 285 DHS</h2>
            <img class="mx-auto" src="{{ asset('images/line2.png') }}" alt="line">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
            <div class="text-center">
                <img class="mx-auto rounded" src="{{ asset('images/Calque-100.png') }}" alt="Calque-100">
            </div>
            <div class="text-white">
                <div class="my-3">
                    <h3 class="text-center text-4xl font-extrabold">ENTRÉES 105 DHS</h3>
                    <h4 class="text-center font-extrabold text-2xl">
                        (Entrée, plat, dessert)
                    </h4>
                </div>
                <div class="space-y-5">
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Blokk bowl au poulet
                        </p>
                        <p class="text-white text-lg">
                            riz vinaigré, légumes du jour, pommes, avocat, fruit secs, sauce soja
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Carpaccio d'artichauts et poulpe mariné
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Mozzarella panée
                        </p>
                        <p class="text-white text-lg">
                            sur jeunes pousses sauce sweet chili
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            œuf poché croustillant
                        </p>
                        <p class="text-white text-lg">
                            petits pois et jeunes pousses
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
            <div class="text-center md:hidden">
                <img class="mx-auto rounded" src="{{ asset('images/Supreme-de-volaille-caramelise.jpg') }}"
                    alt="Supreme-de-volaille-caramelise">
            </div>
            <div class="text-white">
                <div class="my-3">
                    <h3 class="text-center text-4xl font-extrabold">
                        PLAT 140 DHS
                    </h3>
                </div>
                <div class="space-y-5">
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Suprême de volaille caramélisé
                        </p>
                        <p class="text-white text-lg">
                            pomme de terre écrasée
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Filet de saint-pierre
                        </p>
                        <p class="text-white text-lg">
                            rôti, petits légumes glacés
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Riz sauté façons thai
                        </p>
                        <p class="text-white text-lg">
                            au paulet et légumes grillés au vegan
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center hidden md:block">
                <img class="mx-auto rounded" src="{{ asset('images/Supreme-de-volaille-caramelise.jpg') }}"
                    alt="Supreme-de-volaille-caramelise">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
            <div class="text-center">
                <img class="mx-auto rounded" src="{{ asset('images/Creme-brulee.jpg') }}" alt="Creme-brulee">
            </div>

            <div class="text-white md:py-20">
                <div class="my-3">
                    <h3 class="text-center text-4xl font-extrabold">
                        DESSERTS MAISON 75 DHS
                    </h3>
                </div>
                <div class="space-y-5">
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Pavlova aux fruits de saison
                        </p>
                    </div>
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Crémé brûlée
                        </p>
                    </div>
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Délice de mangue glacé
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="px-6 md:px-40 my-16 text-white">
        <div class="mx-auto text-center">
            <h1 class="text-center  italic fw-dancing text-2xl">
                Goûtez la différence
            </h1>
            <h2 class="text-center text-5xl my-6 font-extrabold text-orange-300">MENU 375 DHS</h2>
            <img class="mx-auto mb-6" src="{{ asset('images/line2.png') }}" alt="line">
            <h4 class="text-center font-extrabold text-2xl">
                (Entrée, plat, dessert)
            </h4>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
            <div class="text-center">
                <img class="mx-auto rounded" src="{{ asset('images/Tartare-de-saumon.jpg') }}" alt="Tartare-de-saumon">
            </div>
            <div class="text-white md:py-10">
                <div class="my-3">
                    <h3 class="text-center text-4xl font-extrabold">ENTRÉES 140 DHS</h3>
                </div>
                <div class="space-y-5">
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Tartare d'été aux tomates caramélisées
                        </p>
                        <p class="text-white text-lg">
                            tepenade d'olives noires
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Burrate
                        </p>
                        <p class="text-white text-lg">
                            à la fleur de sel, sorbet tomate basilic
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Tartare de saumon
                        </p>
                        <p class="text-white text-lg">
                            au gingembre frais
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
            <div class="text-center md:hidden">
                <img class="mx-auto rounded" src="{{ asset('images/filet-de-boeuf-1.jpg') }}" alt="filet-de-boeuf-1">

            </div>
            <div class="text-white">
                <div class="my-3">
                    <h3 class="text-center text-4xl font-extrabold">
                        PLAT 180 DHS
                    </h3>
                </div>
                <div class="space-y-5">
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            émincé de bœuf
                        </p>
                        <p class="text-white text-lg">
                            sauce aux cèpes, risetti crémeux
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Souris d'agneau confite
                        </p>
                        <p class="text-white text-lg">
                            purée de carottes au cumin
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Pavé de saumon rôti
                        </p>
                        <p class="text-white text-lg">
                            zaalouk au citron confit
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center hidden md:block">
                <img class="mx-auto rounded" src="{{ asset('images/filet-de-boeuf-1.jpg') }}" alt="filet-de-boeuf-1">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
            <div class="text-center">
                <img class="mx-auto rounded h-full" src="{{ asset('images/Moelleux-chocolat-glace-vanille.jpg') }}"
                    alt="Moelleux-chocolat-glace-vanille">
            </div>

            <div class="text-white">
                <div class="my-3">
                    <h3 class="text-center text-4xl font-extrabold">
                        DESSERTS MAISON 90 DHS
                    </h3>
                </div>
                <div class="space-y-5">
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Tarte citron meringuée (revisitée)
                        </p>
                    </div>
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Sphère chocolat, glace vanille
                        </p>
                    </div>
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Crumble de fruits secs
                        </p>
                    </div>
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            caramel chaud
                        </p>
                    </div>
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Notre Macaron aux framboises
                        </p>
                        <p class="text-white text-lg">
                            parfumé à la rose
                        </p>
                    </div>
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Moelleux chocolat
                        </p>
                        <p class="text-white text-lg">
                            glace vanille
                        </p>
                    </div>
                </div>
            </div>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
            <div class="text-center md:hidden">

                <img class="mx-auto rounded" src="{{ asset('images/istockphoto-1073666236-612x612-1.jpg') }}"
                    alt="istockphoto-1073666236-612x612-1">
            </div>
            <div class="text-white flex justify-start items-center">
                <div class="space-y-5">
                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Filet de bœuf .............................. 210 DH
                        </p>
                        <p class="text-white text-lg">
                            jus corsé petit gratin dauphinois
                        </p>
                    </div>

                    <div class="">
                        <p class="uppercase text-orange-300 text-2xl">
                            Langouste de l'atlantique
                            260 DH
                        </p>
                        <p class="text-white text-lg">
                            grillé, beurre citronné, riz parfumé
                        </p>
                        <p class="text-white text-lg">
                            (300/400grs)
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center hidden md:block">
                <img class="mx-auto rounded" src="{{ asset('images/istockphoto-1073666236-612x612-1.jpg') }}"
                    alt="istockphoto-1073666236-612x612-1">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
