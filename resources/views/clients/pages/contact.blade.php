@extends('layouts.app')

@section('title')
    Contact | Le Naraya
@endsection
@section('styles')
    <style>
        .text-orange-300 {
            color: #AA409C !important
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
        class="px-5 slide_photo hidden md:flex bg-no-repeat justify-center items-center relative md:px-48 h-[400px] md:h-[600px] bg-auto bg-top "
        style="background-image: url('{{ asset('images/slide-contact.jpg') }}')">

    </div>
    <div class="px-6 md:px-40 my-16">
        <div class="text-center">
            <h2 class=" my-4 text-5xl font-sans text-orange-300">
                Contactez Nous
            </h2>
            <div class="text-white text-center mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <form data-aos="fade-down" action="" class="space-y-2 font-sans">
                        <input placeholder="Nom Complete(*)"
                            class="bg-black w-full border border-orange-300 px-3 py-3 text-white" type="text">
                        <input placeholder="Email(*)" class="bg-black w-full border border-orange-300 px-3 py-3 text-white"
                            type="text">
                        <input placeholder="Téléphone(*)"
                            class="bg-black w-full border border-orange-300 px-3 py-3 text-white" type="text">
                        <h2 class="uppercase my-1 mt-3 text-start text-2xl font-sans text-orange-300">
                            Message
                        </h2>
                        <textarea class="bg-black border border-orange-300 px-3 py-3 text-white w-full" name="" id=""
                            cols="30" rows="10" placeholder="Message"></textarea>
                        <button
                            class="border border-orange-300 text-white bg-gray-700 hover:text-black py-2 px-5 float-left rounded">ENVOYER</button>
                    </form>
                    <div class="text-center md:text-2xl mb-5">
                        <iframe class="w-full"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1740.5926524141705!2d-7.991725911754402!3d31.68317732857919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafed918fc3d9b7%3A0x24260ac7b8ddecf5!2sLe%20Naraya!5e1!3m2!1sen!2sma!4v1678099119354!5m2!1sen!2sma"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div data-aos="fade-right" class="w-full md:block text-start"><i
                                class="fa-solid fa-location-dot mr-2 text-orange-300"></i>
                            Route des Jardins de la Palmeraie, Marrakech, Maroc.
                        </div>
                        <div data-aos="fade-right" class="w-full md:block text-start"><i
                                class="fa-solid fa-phone mr-2 text-orange-300"></i>
                            0669 33 43 34
                        </div>
                        <div data-aos="fade-right" class="w-full md:block text-start"><i
                                class="fa-solid fa-at mr-2 text-orange-300"></i>
                            contact@lenaraya.com
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
