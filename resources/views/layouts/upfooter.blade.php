    <div class="relative px-6 md:px-48 py-5 bg-fixed bg-center bg-cover flex justify-center items-center"
        style="background-image: url('{{ asset('images/' . $img) }}')">
        {{-- <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-60">

        </div> --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 z-10">
            <div class="text-center md:px-16">
                <img width="250px" class="mx-auto" src="{{ asset('images/logo.png') }}" alt="logo">
                <div data-aos="fade-down" id="about"
                    class="text-lg text-center md:text-justify text-white font-semibold">
                    Electro House dans les oreilles, cocktail dans les mains, des tapas à tomber !<br>
                    Passez une soirée satisfaisante !
                </div>
                <div class="text-center mx-auto">
                    <p data-aos="fade-down" class="text-white font-semibold text-3xl text-start my-4 fw-JOSEF">
                        INFOLINE
                    </p>
                    <ul data-aos="fade-down" class="text-start text-white">
                        <li class="text-2xl font-semibold"><i class="fa-solid text-white fa-phone mr-1 md:mr-5 "></i><a
                                href="tel:+212669334334">+212 669 33 43 34</a></li>
                        <li class="text-2xl font-semibold"><i
                                class="fa-solid text-white fa-at mr-1 md:mr-5 "></i>booking@lenaraya.com
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <iframe class="w-full md:hidden"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1740.5926524141705!2d-7.991725911754402!3d31.68317732857919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafed918fc3d9b7%3A0x24260ac7b8ddecf5!2sLe%20Naraya!5e1!3m2!1sen!2sma!4v1678099119354!5m2!1sen!2sma"
                    width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <iframe class="w-full hidden md:block"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1740.5926524141705!2d-7.991725911754402!3d31.68317732857919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafed918fc3d9b7%3A0x24260ac7b8ddecf5!2sLe%20Naraya!5e1!3m2!1sen!2sma!4v1678099119354!5m2!1sen!2sma"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="text-lg font-semibold text-white text-center mt-5">
                    <i class="fa-solid fa-location-dot text-orange-300"></i> Route des Jardins de la Palmeraie,
                    Marrakech, Maroc.
                </p>
            </div>
        </div>
    </div>
