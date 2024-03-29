@extends('layouts.app')

@section('title')
    Menu | Le Naraya
@endsection
@section('styles')
    <style>
        .text-fuchsia-900 {
            color: #6E0949 !important;
        }

        .text-orange-300 {
            color: #FC7CDA !important
        }

        .border-orange-300 {
            border-color: #AA409C !important;
        }

        .bg-orange-300 {
            background-color: #AA409C !important;
        }

        button:hover {
            background-color: #AA409C !important;

        }
    </style>
@endsection
@section('content')
    @php
        $img = 'Rectangle-13-copie-1.png';
    @endphp
    <div id="topdiv"
        class="px-5 slide_photo flex  bg-no-repeat justify-center items-center relative md:px-48 h-[350px] md:h-[650px]  bg-cover bg-bottom "
        style="background-image: url('{{ asset('images/img-menu-2.jpg') }}')">

    </div>
    <div class="px-6 md:px-80 my-16 text-white">
        <div class="mx-auto text-center">
            <h2 class="text-center  text-2xl my-6 font-semibold text-fuchsia-900 fw-sans">BIENVENUE
            </h2>
            <img class="mx-auto" src="{{ asset('images/line2.png') }}" alt="line">
            <h3 data-aos="fade-up"
                class="text-center uppercase font-semibold tracking-widest text-3xl my-4 text-white font-sans">

                DRINK
            </h3>
        </div>
        <h3 data-aos="fade-up" class="text-center tracking-widest fw-caviar text-3xl my-3 text-white">
            Cocktails Classics
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-8 my-16">
            <div class="md:hidden text-center flex justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/Kir-Royale-3-768x838.png') }}" alt="Calque-100">
            </div>

            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>Spritz</span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Aperol, prosecco eau gazeuse, rondelle d'orange
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Mojito (Fruits Rouges / Passion)
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Rhum blanc, menthe fraîche, jus de citron, Soda, sucre de canne
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Sex On The Beach
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Vodka,liqueur de pêche, jus d'orange, Jus de cranberry
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Caipiroska
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Vodka, citron vert, sucre de canne
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Caipirinha
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Cachaça, citron, sucre de canne
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Pina Colada
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Rhum blanc, rhum brun, créme de coco, Jus d'ananas
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Margarita
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Tequila, jus de citron, triple sec, Sucre de canne
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex hidden text-center justify-center items-center">
                <img class="mx-auto rounded" src="{{ asset('images/Kir-Royale-3-768x838.png') }}" alt="Calque-100">
            </div>
        </div>
        <h3 data-aos="fade-up" class="text-center tracking-widest fw-caviar text-3xl my-3 text-white">
            Cocktails Naraya signatures
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class=" fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Le Blossom
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                Vodka infusée à la rose, sirop de rose, Extrait de myrtille, jus de citron vert
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Pop star Martini
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                Vodka, fruit de la passion, liqueur fruit de La passion, sirop de vanille, Jus de citron,
                                prosecco
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Summer wind
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                Gin infusé au romarin, concombre, Purée de kiwi, jus de citron vert
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    What Else
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                whisky infusé aux clous de girofle, cannelle, anis, liqueur de café, liqueur de caramel,
                                nescafé
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center flex justify-center items-center">
                <div class="text-center">
                    <img class="mx-auto block rounded" src="{{ asset('images/unnamed-file-825x1024.jpg') }}"
                        alt="Calque-100">
                    <div class="text-start fw-caviar mt-3 hidden md:block">
                        <p class="uppercase text-orange-300 text-lg  font-semibold">
                            <span>
                                Orient Blues
                            </span><span class="float-right">120</span>
                        </p>
                        <p class="text-white text-md leading-8">
                            Vodka, fleur d'orangé, curacao bleu, Miel, banane
                        </p>
                    </div>

                </div>
            </div>

            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="fw-caviar">
                        <div class=" md:hidden">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Orient Blues
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                Vodka, fleur d'orangé, curacao bleu, Miel, banane
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    La Vie En Rose
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                Vodka, purée de framboise, jus de citron, Triple sec, sprite
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Orient Blues
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                Vodka, fleur d'orangé, curacao bleu, Miel, banane
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    The Forest
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                Gin infusé à la lavande, crème de pêche, Sirop de litchi, jus de cranberry, Jus de citron
                                vert
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    L'Enchanteresse
                                </span><span class="float-right">120</span>
                            </p>
                            <p class="text-white text-md leading-8">
                                Rhum, vodka, gin, liqueur parfait amour, Framboise, jus de citron vert
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 data-aos="fade-up" class="text-center tracking-widest fw-caviar text-3xl my-3 text-white">
            Bieres
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="md:hidden text-center flex justify-center items-center">
                <img class="mx-auto rounded "
                    src="{{ asset('images/Cerveja-Heineken-Bares-Social-Media-PSD-Editavel-610x610.jpg') }}"
                    alt="Calque-100">
            </div>

            <div class="text-white md:col-span-2  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>Corona</span><span class="float-right">70</span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Casablanca / Heineken
                                </span><span class="float-right">65</span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Bière pression 33cl
                                </span><span class="float-right">50</span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex hidden text-center justify-center items-center">
                <img class="mx-auto rounded"
                    src="{{ asset('images/Cerveja-Heineken-Bares-Social-Media-PSD-Editavel-610x610.jpg') }}"
                    alt="Calque-100">
            </div>
        </div>
        <h3 data-aos="fade-up" class="text-center tracking-widest fw-caviar text-3xl my-3 text-white">
            Vodka
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="text-center flex justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/Aperol-Spritz_-el-trago-de-temporada-2.jpg') }}"
                    alt="Aperol-Spritz_-el-trago-de-temporada-2">
            </div>

            <div class="text-white md:col-span-2  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>Belvedere</span><span class="float-right">105 / 1200</span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Grey Goose
                                </span><span class="float-right">105 / 1200</span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Absolut (citron)
                                </span><span class="float-right">90 / 1100</span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 data-aos="fade-up" class="text-center tracking-widest fw-caviar text-3xl my-3 text-white">
            Gin
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="md:hidden text-center flex justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/Gin-Bombay-Sapphire-750Ml.jpg') }}" alt="Calque-100">
            </div>

            <div class="text-white md:col-span-2  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>Bombay Gin</span><span class="float-right">105 / 1300 </span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Hendrick's
                                </span><span class="float-right">105 / 1300 </span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Gin Gordon's
                                </span><span class="float-right">90 / 110 </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex hidden text-center justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/Gin-Bombay-Sapphire-750Ml.jpg') }}" alt="Calque-100">
            </div>
        </div>
        <h3 data-aos="fade-up" class="text-center tracking-widest fw-caviar text-3xl my-3 text-white">
            Rhum
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="text-center flex justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/Aperol-Spritz_-el-trago-de-temporada-1.jpg') }}"
                    alt="Aperol-Spritz_-el-trago-de-temporada-1">
            </div>

            <div class="text-white md:col-span-2  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Havana Gold
                                </span><span class="float-right">105 / 1200</span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Bacardi Oro
                                </span><span class="float-right">105 / 1200</span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 data-aos="fade-up" class="text-center fw-caviar text-3xl my-3 text-white">
            Whisky
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="text-white  md:flex md:justify-start md:items-center md:pt-16">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Glenfiddich 18 ans
                                </span><span class="float-right">120 /1500 </span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Double black
                                </span><span class="float-right">120 /1500</span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Chivas 18ans
                                </span><span class="float-right">120 /1500</span>
                            </p>

                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Jack Honey
                                </span><span class="float-right">120 /1400</span>
                            </p>
                        </div>
                        <div class=" md:hidden">
                            <p class="uppercase text-orange-300 mb-3 text-lg  font-semibold">
                                <span>

                                    Red label

                                </span><span class="float-right">90 /1100 </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center flex justify-center items-center">
                <div class="text-center">
                    <div class="text-start fw-caviar mt-3 md:block hidden">
                        <p class="uppercase text-orange-300 mb-3 text-lg  font-semibold">
                            <span>

                                Red label

                            </span><span class="float-right">90 /1100 </span>
                        </p>
                    </div>
                    <img class="mx-auto block rounded "
                        src="{{ asset('images/telechargement-_1_-e1666696239635-610x610.jpg') }}" alt="Calque-100">
                </div>
            </div>

            <div class="text-white  md:flex md:justify-start md:items-center md:pt-16">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Black label
                                </span><span class="float-right">105 /1400 </span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Chivas 12ans
                                </span><span class="float-right">105 /1300 </span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Jack daniel
                                </span><span class="float-right">105 /1300 </span>
                            </p>

                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    JB
                                </span><span class="float-right"> 90 /1100 </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 data-aos="fade-up" class="text-center md:mt-16 tracking-widest fw-caviar text-3xl text-white">
            Digestifs / Liqueurs
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="md:hidden text-center flex justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/MoodBoardMix-440x618.jpg') }}" alt="Calque-100">
            </div>

            <div class="text-white md:col-span-2  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 md:text-lg text-sm  font-semibold">
                                <span>

                                    Marie Brizard / Amaretto

                                </span><span class="float-right"> 90 /900 </span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 md:text-lg text-sm  font-semibold">
                                <span>
                                    Disaronno / Poire Williams /Get 27
                                </span><span class="float-right">90 /900 </span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 md:text-lg text-sm  font-semibold">
                                <span>
                                    Sambuca / Fernet Branca
                                </span><span class="float-right">90 /900 </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex hidden text-center justify-center items-center">
                <img class="mx-auto rounded" src="{{ asset('images/MoodBoardMix-440x618.jpg') }}" alt="Calque-100">
            </div>
        </div>
        <h3 data-aos="fade-up" class="text-center tracking-widest fw-caviar text-3xl my-3 text-white">
            Cocktails sans alcool
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="text-center flex justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/anonyme-fk-ordi.jpg') }}" alt="anonyme-fk">
            </div>

            <div class="text-white md:col-span-2  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Cocktail framboise
                                </span><span class="float-right">80</span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Virgin Mojito Fruits Rouges
                                </span><span class="float-right">80</span>
                            </p>

                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Cocktail de Fruits
                                </span><span class="float-right">80</span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 data-aos="fade-up" class="text-center fw-caviar text-3xl my-3 text-white">
            Sushis (8pcs)
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-8 my-16">
            <div class="md:hidden text-center flex justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/pic-menu-1.png') }}" alt="Calque-100">
            </div>

            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-8 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Special California Roll
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Surimi, avocat, philadelphia, saumon
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Incredible Roll

                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Tempura, crevette, avocat, saumon, Oignon rouge
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Bomba Ball

                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Riz épicé, saumon cheese, mayonnaise, Sésame
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Crunchy Crevette

                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Gambas panées cheese tanuki
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Volcano
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                Saumon, cheese, tobiko, sesame grillé
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex hidden text-center justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/pic-menu-1.png') }}" alt="Calque-100">
            </div>
        </div>

        <h3 data-aos="fade-up" class="text-center fw-caviar text-3xl my-3 text-white">
            Composez Votre Assiette
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-8 my-16">
            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    California saumon cuit (3pcs)
                                </span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Maki avocat (3pcs)
                                </span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Sushi saumon (3pcs)
                                </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center flex justify-center items-center">
                <div class="text-center">

                    <img class="mx-auto block rounded " src="{{ asset('images/Calque-108.png') }}" alt="Calque-100">
                </div>
            </div>

            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    California saumon épicé (3pcs)
                                </span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Maki saumon (6pcs)
                                </span>
                            <p class="text-white text-md">
                                Cream cheese
                            </p>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Sushi ebi crevette (3pcs)
                                </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-20 fw-caviar">
                <p class="uppercase text-orange-300 text-lg  font-semibold">
                    <span>
                        Sakai Naraya (12pcs)
                    </span><span class="float-right">125</span>
                </p>
                <p class="uppercase text-orange-300 text-lg  font-semibold">
                    <span>
                        Osaka Naraya (15pcs)
                    </span><span class="float-right">155</span>
                </p>
                <p class="uppercase text-orange-300 text-lg  font-semibold">
                    <span>
                        Tokyo Naraya (18pcs)
                    </span><span class="float-right">185</span>
                </p>
                <p class="uppercase text-orange-300 text-lg  font-semibold">
                    <span>
                        Miyoshi Naraya (24pcs)
                    </span><span class="float-right">240</span>
                </p>
            </div>
        </div>
        <div class="mx-auto text-center">
            <h2 class="text-center  text-xl my-6 font-medium text-fuchsia-900 fw-caviar">BIENVENUE
            </h2>
            <img class="mx-auto" src="{{ asset('images/line2.png') }}" alt="line">
            <h3 data-aos="fade-up"
                class="text-center uppercase tracking-widest font-semibold text-3xl my-4 text-white font-caviar">

                FOOD
            </h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 md:my-8 my-16">
            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-6 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Rice Pearl au Fromage Pané
                                </span><span class="float-right">75</span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>

                                    Chirashi saumon mangue
                                </span><span class="float-right">140</span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Fingers food
                                </span><span class="float-right">80</span>
                            </p>
                            <p class="text-white text-md">
                                mozzarella sticks, chili cheese, onions rings, Chicken sweet and sour chicken dips
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Chèvre chaud braisé
                                </span><span class="float-right">105</span>
                            </p>
                            <p class="text-white text-md">
                                sauce teriyaki
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Assiette de saumon fumé
                                </span><span class="float-right">145</span>
                            </p>
                            <p class="text-white text-md">
                                Crème fouettée </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>

                                    Burrata tomates cerises
                                </span><span class="float-right">130</span>
                            </p>
                            <p class="text-white text-md">
                                sauce balsamique
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Nems au Poulet
                                </span><span class="float-right">85</span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-5 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Foie gras aux fruits secs
                                </span><span class="float-right">160</span>
                            </p>

                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>

                                    Naraya Shrimp Spicy
                                </span><span class="float-right">95</span>
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>

                                    Général TAO
                                </span><span class="float-right">95</span>
                            </p>
                            <p class="text-white text-md">
                                Chicken sweet and sour
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>

                                    Carpaccio de saumon

                                </span><span class="float-right">130</span>
                            </p>
                            <p class="text-white text-md">
                                façon tataki
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Briwates aux Fromages
                                </span><span class="float-right">95</span>
                            </p>

                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>

                                    Duo tartare de saumon, avocat
                                </span><span class="float-right">135</span>
                            </p>

                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Wok de boeuf et légumes
                                </span><span class="float-right">150</span>
                            </p>
                            <p class="text-white text-md">
                                croquants
                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 text-sm md:text-lg  font-semibold">
                                <span>
                                    Poke bowl au poulet
                                </span><span class="float-right">110</span>
                            </p>
                            <p class="text-white text-md">
                                croquants
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 data-aos="fade-up" class="text-center fw-caviar text-3xl my-3 text-white">
            Desserts
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-8 my-16">
            <div class="md:hidden text-center flex justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/Calque-86-e1666695365981.png') }}" alt="Calque-100">
            </div>

            <div class="text-white  md:flex md:justify-start md:items-center">
                <div class="md:w-full">

                    <div class="space-y-10 fw-caviar">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>Cheesecake</span><span class="float-right">75</span>
                            </p>
                            <p class="text-white text-md">
                                Glace ricotta, bisquit, sauce fruits rouges
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Chocolat Noisette
                                </span><span class="float-right">75</span>
                            </p>
                            <p class="text-white text-md">
                                Glace chocolat noisette, morceaux de chocolat, Grains de noisette
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>
                                    Tiramisu </span><span class="float-right">75</span>
                            </p>
                            <p class="text-white text-md">
                                Glace mascarpone, savoiardi et café, cacao et chocolat
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg  font-semibold">
                                <span>

                                    Bianco Art

                                </span><span class="float-right">75</span>
                            </p>
                            <p class="text-white text-md">
                                Glace Chocolat Blanc, glace noisette, dulce de leche, Chocolat fondant </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:flex hidden text-center justify-center items-center">
                <img class="mx-auto rounded " src="{{ asset('images/Calque-86-e1666695365981.png') }}" alt="Calque-100">
            </div>
        </div>
    </div>
    @include('layouts.upfooter', ['img' => $img])
@endsection

@section('scripts')
@endsection
