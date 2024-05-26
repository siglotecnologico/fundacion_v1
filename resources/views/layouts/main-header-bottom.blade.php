<div class="main-header-one__bottom">
    <div class="main-header-one__bottom-inner">
        <nav class="main-menu main-menu-one">
            <div class="main-menu__wrapper clearfix">
                <div class="container">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-header-one__bottom-left">
                            <div class="main-menu-box">
                                <a href="#" class="mobile-nav__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>

                                <ul class="main-menu__list">
                                    <li class="current">
                                        <a href="{{ route('inicio') }}"> Inicio</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('about') }}">Sobre Nosotros</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('donaciones') }}">Donaciones</a>
                                    </li>

                                  {{--   <li class="dropdown">
                                        <a href="#">Donaciones</a>
                                        <ul>
                                            <li><a href="#">Donación</a></li>
                                            <li><a href="#">Lista de Donaciones</a>
                                            </li>
                                            <li><a href="#">Detalles de Donación</a>
                                            </li>
                                        </ul>
                                    </li> --}}



                                    <li class="dropdown">
                                        {{--<a href="#">Blog</a>--}}
                                    <li>
                                        <a href="{{ route('contactos') }}"  >Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="main-header-one__bottom-right">
                            <div class="btn-box1">
                                <a href="#">Únete </a>
                            </div>

                            <div class="btn-box2">
                                <a href="#">Voluntario</a>
                            </div>

                            <div class="header-search-box">
                                <a href="#" class="main-menu__search search-toggler icon-search">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
