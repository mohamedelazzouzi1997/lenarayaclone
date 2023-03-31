        <nav id="navbar-header"
            class="navbar navbar-expand-lg md:fixed md:top-0 md:right-0 md:left-0 bg-dark md:flex z-40 border-b border-orange-300 md:border-none">
            <div class="container justify-content-center opacity-100 pr-4">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"><i class="fa-solid fa-bars text-4xl text-orange-300"></i></span>
                </button>
                <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile"
                    href="{{ route('home.index') }}">
                    <img class="h-[180px] mx-auto" src="{{ asset('images/logo.png') }}" alt="logo">
                </a>

                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-center w-100">
                        <li class="nav-item only-desktop">
                            <a class="nav-link" id="side-nav-open" href="#">
                                <span class="lnr lnr-menu"></span>
                            </a>
                        </li>
                        <div
                            class="d-flex w-full opacity-100 justify-content-center flex-lg-row flex-column md:space-x-20 font-semibold text-xl uppercase">
                            <li class="nav-item active">
                                <a class="nav-link link-hover text-white @if (request()->route()->getName() == 'home.index') text-orange-300 @endif "
                                    href="/">LE NARAYA <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link link-hover text-white  @if (request()->route()->getName() == 'menu') text-orange-300 @endif hover:text-orange-300"
                                    href="{{ route('menu') }}">MENUS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-hover text-white  @if (request()->route()->getName() == 'reservation') text-orange-300 @endif hover:text-orange-300"
                                    href="{{ route('reservation') }}">RESERVATION</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link link-hover  @if (request()->route()->getName() == 'contact') text-orange-300 @endif text-white"
                                    href="{{ route('contact') }}">CONTACTEZ-NOUS<span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link link-hover text-white hover:text-orange-300"
                                    href="https://dash.lenaraya.com/partenaire/login">Partenaire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-hover text-white hover:text-orange-300"
                                    href="https://dash.lenaraya.com/agence/login">Agence</a>
                            </li>

                        </div>
                    </ul>

                </div>
            </div>
        </nav>
