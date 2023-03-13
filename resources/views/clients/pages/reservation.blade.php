@extends('layouts.app')

@section('title')
    Réservation | Le Naraya
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('toaster/toaster.css') }}">
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
        class="px-5 slide_photo hidden md:flex bg-fixed bg-no-repeat justify-center items-center relative md:px-48 h-[400px] md:h-[600px] bg-contain bg-top "
        style="background-image: url('{{ asset('images/photo-reservation-2.jpg') }}')">
    </div>
    <div class="px-6 md:px-40 my-16">
        <div class="text-center">
            <h2 class=" my-4 text-5xl font-semibold font-sans text-orange-300">
                RESERVATION
            </h2>
            <p class="text-center fw-caviar font-thin tracking-wider mb-4 leading-10 text-xl md:w-1/2 mx-auto text-white">
                Vous
                souhaitez réserver
                une
                table au LE
                NARAYA ?
                Vous pouvez directement réserver via le formulaire ci-dessous !
                Nous sommes ouverts tous les soirs de 19h30 à 02h sauf Lundi.</p>
            <div class="text-white text-center mx-auto">
                <h2 class="uppercase my-3 mt-3 text-start text-4xl font-sans font-semibold text-orange-300">
                    CONTACT
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <form action="{{ route('reservation.store') }}" method="post" class="space-y-5 font-sans">

                        @csrf
                        <input type="hidden" name="origin" value="{{ $origin }}">

                        @if (Session::has('success'))
                            <div class="text-green-500 text-center bg-black px-3 py-2">
                                <i class="fa-regular fa-circle-check"></i> {{ Session::get('success') }}
                            </div>
                        @endif
                        @error('name')
                            <span class="text-red-500 mt-2 float-left">{{ $message }}</span>
                        @enderror
                        <input name="name" placeholder="Nom Complete(*)"
                            class="bg-black w-full border border-orange-300 px-3 py-3 text-white" type="text">
                        @error('email')
                            <span class="text-red-500 mt-2 float-left">{{ $message }}</span>
                        @enderror
                        <input name="email" placeholder="Email(*)"
                            class="bg-black w-full border border-orange-300 px-3 py-3 text-white" type="text">
                        @error('phone')
                            <span class="text-red-500 mt-2 float-left">{{ $message }}</span>
                        @enderror
                        <input name="phone" placeholder="Téléphone(*)"
                            class="bg-black w-full border border-orange-300 px-3 py-3 text-white" type="text">
                        <h2 class="uppercase my-1 mt-3 text-start font-semibold text-4xl font-sans text-orange-300">
                            RÉSERVEZ UNE TABLE
                        </h2>
                        @error('date')
                            <span class="text-red-500 mt-2 float-left">{{ $message }}</span>
                        @enderror
                        <input name="date" value="{{ old('date') }}"
                            class="bg-black w-full border border-orange-300 px-3 py-3 text-white" type="date">
                        @error('number_of_persons')
                            <span class="text-red-500 mt-2 float-left">{{ $message }}</span>
                        @enderror
                        <select name="number_of_persons"
                            class="bg-black w-full border border-orange-300 px-3 py-3 text-white" id="">

                            @for ($i = 1; $i <= 20; $i++)
                                <option value="{{ $i }}">{{ $i }} Personne</option>
                            @endfor
                        </select>
                        <h2 class="uppercase font-semibold my-1 mt-3 text-start text-4xl font-sans text-orange-300">
                            Message
                        </h2>
                        <textarea class="bg-black w-full border border-orange-300 px-3 py-3 text-white w-full" name="message" id=""
                            cols="30" rows="10" placeholder="Message"></textarea>
                        <button type="submit"
                            class="border border-orange-300 text-white bg-gray-700 hover:text-black py-2 px-5 float-left rounded">ENVOYER</button>
                    </form>

                    <div class="text-center space-y-10 md:text-2xl mb-5">
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
    @include('layouts.upfooter', ['img' => $img])
@endsection

@section('scripts')
    <script src="{{ asset('toaster/toaster.js') }}"></script>
    <script>
        const ToasterOptions = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
            toastr.options = ToasterOptions;
        </script>
    @endif
@endsection
