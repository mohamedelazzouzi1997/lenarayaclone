@extends('layouts.app')

@section('title')
    Réservation | Le Naraya
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('toaster/toaster.css') }}">
    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">
    <style>
        .text-orange-300 {
            color: #AA409C !important
        }

        .border-orange-300 {
            border-color: #AA409C !important;
        }

        .border-red-600 {
            border-color: #fd1414 !important;
        }

        .bg-orange-300 {
            background-color: #AA409C;
        }

        button:hover {
            background-color: #AA409C !important;

        }

        .ui-timepicker-viewport {
            color: #AA409C !important;
        }

        .bg-orange-400 {
            background-color: #AA409C !important;
        }

        .bg-orange-400:hover {
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
        style="background-image: url('{{ asset('images/photo-reservation-2.jpg') }}')">
    </div>
    <div class="px-6 md:px-60 mb-16 ">
        <div class="text-center">
            <h2 class=" my-4 text-4xl font-medium tracking-widest font-sans text-orange-300">
                RESERVATION
            </h2>
            <p
                class="text-center fw-caviar font-thin tracking-wider text-lg mb-4 leading-10 md:text-sm md:w-1/2 mx-auto text-white">
                Vous
                souhaitez réserver
                une
                table au LE
                NARAYA ?</br>
                Vous pouvez directement réserver via le formulaire ci-dessous !</br>
                Nous sommes ouverts tous les soirs de 19h30 à 02h sauf Lundi.</p>
            <div class="text-white text-center mx-auto">
                <h2 class="uppercase text-start text-2xl font-sans mb-4 font-medium tracking-widest text-orange-300">
                    CONTACT
                </h2>
                <div class="">
                    @if (Session::has('success'))
                        <div class="text-green-500 text-center bg-black px-3 py-2">
                            <i class="fa-regular fa-circle-check"></i> {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('reservation.store') }}" method="post"
                        class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-4 font-sans">

                        @csrf
                        <input type="hidden" name="origin" value="{{ $origin }}">



                        <input name="name" placeholder="Nom Complet(*)" value="{{ old('name') }}"
                            class="bg-black w-full border border-orange-300 @error('name') border-red-600 @enderror  px-3 py-2 text-white"
                            type="text">

                        <div class="hidden md:block text-center space-y-1 md:text-lg md:row-span-6">
                            <iframe class="w-full md:h-[300px]"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1740.5926524141705!2d-7.991725911754402!3d31.68317732857919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafed918fc3d9b7%3A0x24260ac7b8ddecf5!2sLe%20Naraya!5e1!3m2!1sen!2sma!4v1678099119354!5m2!1sen!2sma"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            {{-- <p class="text-md font-semibold text-white text-start">
                                <i class="fa-solid fa-location-dot text-fuchsia-900"></i> Route des Jardins de la Palmeraie,
                                Marrakech, Maroc.
                            </p> --}}
                            <div class="text-center mx-auto">

                                <ul data-aos="fade-down" class="text-start text-white">
                                    <li class="text-lg font-semibold"> <i
                                            class="fa-solid fa-location-dot mr-1 text-fuchsia-900"></i> Route des Jardins de
                                        la
                                        Palmeraie,
                                        Marrakech, Maroc.</li>
                                    <li class="text-lg font-semibold"><i
                                            class="fa-solid text-fuchsia-900  fa-phone mr-1 "></i><a
                                            href="tel:+212669334334"> +212 669 33 43 34</a></li>
                                    <li class="text-lg font-semibold"><i class="fa-solid  fa-at mr-1 text-fuchsia-900 "></i>
                                        booking@lenaraya.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <input name="email" placeholder="Email(*)" value="{{ old('email') }}"
                            class="bg-black w-full border border-orange-300 @error('email') border-red-600 @enderror px-3 py-2 text-white"
                            type="text">

                        <input name="phone" placeholder="Téléphone(*)" value="{{ old('phone') }}"
                            class="bg-black w-full border border-orange-300 @error('phone') border-red-600 @enderror px-3 py-2 text-white"
                            type="text">

                        <h2
                            class="uppercase flex items-center  text-start font-medium tracking-widest text-2xl font-sans text-orange-300">
                            RÉSERVEZ UNE TABLE
                        </h2>

                        <input id="datepicker" name="date" value="{{ old('date') }}" placeholder="Date(*)"
                            class="bg-black w-full border border-orange-300 @error('date') border-red-600 @enderror px-3 py-2 text-white"
                            type="text">

                        <select name="number_of_persons"
                            class="bg-black w-full border border-orange-300 @error('number_of_persons') border-red-600 @enderror px-3 py-2 text-white"
                            id="">

                            @for ($i = 1; $i <= 20; $i++)
                                <option value="{{ $i }}">{{ $i }} Personne</option>
                            @endfor
                        </select>

                        <h2 class="uppercase font-medium tracking-widest text-start text-2xl font-sans text-orange-300">
                            Message
                        </h2>
                        <textarea class="bg-black md:col-span-2 w-full border border-orange-300 px-3 py-3 text-white " name="message"
                            id="" cols="30" rows="7" placeholder="Message"></textarea>
                        <button type="submit"
                            class="border text-center md:w-1/4 border-orange-300 text-white bg-gray-700 hover:text-black py-2 px-2 float-left rounded">ENVOYER</button>
                        <div class="md:hidden text-center space-y-1 md:text-lg md:row-span-6">
                            <iframe class="w-full md:h-[300px]"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1740.5926524141705!2d-7.991725911754402!3d31.68317732857919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafed918fc3d9b7%3A0x24260ac7b8ddecf5!2sLe%20Naraya!5e1!3m2!1sen!2sma!4v1678099119354!5m2!1sen!2sma"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p class="text-sm font-semibold text-white text-center">
                                <i class="fa-solid fa-location-dot text-fuchsia-900"></i> Route des Jardins de la Palmeraie,
                                Marrakech, Maroc.
                            </p>
                            <div class="text-center mx-auto">

                                <ul data-aos="fade-down" class="text-start text-white">
                                    <li class="text-sm font-semibold"><i
                                            class="fa-solid text-fuchsia-900  fa-phone mr-1 "></i><a
                                            href="tel:+212669334334">+212 669 33 43 34</a></li>
                                    <li class="text-sm font-semibold"><i
                                            class="fa-solid  fa-at mr-1 text-fuchsia-900 "></i>booking@lenaraya.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('layouts.upfooter', ['img' => $img]) --}}
@endsection

@section('scripts')
    <script src="{{ asset('toaster/toaster.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>

    <script>
        $(function() {
            $.datepicker.setDefaults({
                monthNames: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août",
                    "Septembre", "Octobre", "Novembre", "Décembre"
                ]
            });
            $("#datepicker").datepicker({
                minDate: 0,
                dateFormat: 'mm/dd/yy',
                inline: true,
                // numberOfMonths: [1],
                dayNamesMin: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
                beforeShowDay: function(date) {
                    var day = date.getDay();
                    return [(day != 1)];
                }
            });
        });
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
