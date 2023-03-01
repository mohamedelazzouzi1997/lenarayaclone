        <nav id="navbar-header" class="navbar border-b border-orange-300 bg-dark navbar-expand-lg z-50">
            <div class="container">
                <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile"
                    href="{{ route('home.index') }}">
                    <img class="h-[60px]" src="{{ asset('images/logo.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"><i class="fa-solid fa-bars text-white"></i></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between " id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-between">
                        <li class="nav-item only-desktop">
                            <a class="nav-link" id="side-nav-open" href="#">
                                <span class="lnr lnr-menu"></span>
                            </a>
                        </li>
                        <div class="d-flex flex-lg-row flex-column md:space-x-40 text-xl uppercase">
                            <li class="nav-item active">
                                <a class="nav-link link-hover text-white" href="/">LE BLOKK <span
                                        class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link link-hover text-white dropdown-toggle" href="#"
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    MENUS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item link-hover text-white"
                                        href="{{ route('internationale') }}">Cuisine
                                        Internationale</a>
                                    <a class="dropdown-item link-hover text-white"
                                        href="{{ route('cuisine-japonais') }}">Cuisine
                                        Japonaise</a>
                                </div>
                            </li>
                        </div>
                    </ul>

                    <a class="navbar-brand  navbar-brand-center d-flex align-items-center only-desktop mt-16 bg-black md:rounded-b-full"
                        href="{{ route('home.index') }}">
                        <img class=" md:h-[160px]" src="{{ asset('images/logo.png') }}" alt="logo">
                    </a>
                    <ul class="navbar-nav d-flex justify-content-between">
                        <div class="d-flex flex-lg-row flex-column md:space-x-40 text-xl uppercase">
                            <li class="nav-item active">
                                <a class="nav-link link-hover text-white hover:text-orange-300"
                                    href="https://dash.leblokk.com/agence/login">Agence</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-hover text-white hover:text-orange-300"
                                    href="https://dash.leblokk.com/partenaire/login">Partenaire</a>
                            </li>
                        </div>
                        <li class="nav-item">
                            <a id="side-search-open" class="nav-link text-white" href="#">
                                <span class="lnr lnr-magnifier"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
