    <div class="relative px-5 md:px-10 py-5 bg-fixed bg-center bg-cover flex justify-center items-center"
        style="background-image: url('{{ asset('images/' . $img) }}')">
        <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-40">

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 z-10">
            <div class="text-center">
                <img data-aos="fade-down" class="mx-auto" src="{{ asset('images/logo.png') }}" alt="logo">
                <div data-aos="fade-down" id="about" class="text-2xl fw-josef text-white text-start font-extrabold">
                    Le Blokk est un restaurant bar international, marocain et japonais à thème, musical Live show qui
                    vous
                    propose un dîner spectacle incontournable à la Palmeraie dans un cadre exceptionnel.
                </div>
                <div class="text-center mx-auto">
                    <p data-aos="fade-down" class="text-orange-300 font-extrabold text-3xl text-center my-5 fw-JOSEF">
                        INFOLINE
                    </p>
                    <ul data-aos="fade-down" class="text-start text-white">
                        <li class="text-2xl font-semibold"><i class="fa-solid fa-phone mr-5 text-orange-300"></i><a
                                href="tel:+212674334334">+212 674 334 334</a></li>
                        <li class="text-2xl font-semibold"><i
                                class="fa-solid fa-at mr-5 text-orange-300"></i>booking@leblokk.com</li>
                    </ul>
                </div>
            </div>
            <div class="">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.1908945983655!2d-7.992444085512597!3d31.68334894624762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafeda4f7d36457%3A0x310239a46feb13e7!2sLe%20Blokk%20(%20Restaurant%20)!5e0!3m2!1sen!2sma!4v1675164805505!5m2!1sen!2sma"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="text-2xl font-semibold text-white text-center mt-5">
                    <i class="fa-solid fa-location-dot text-orange-300"></i> Route des Jardins de la Palmeraie,
                    Marrakech,
                    Maroc
                </p>
            </div>
        </div>
    </div>
