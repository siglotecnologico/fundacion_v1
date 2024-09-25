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
                                    <li class="{{ request()->routeIs('inicio') ? 'current' : '' }}">
                                        <a href="{{ route('inicio') }}">Inicio</a>
                                    </li>
                                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}">
                                        <a href="{{ route('about') }}">Sobre Nosotros</a>
                                    </li>
                                    <li class="{{ request()->routeIs('donaciones') ? 'current' : '' }}">
                                        <a href="{{ route('donaciones') }}">Donaciones</a>
                                    </li>
                                    <li class="{{ request()->routeIs('contactos') ? 'current' : '' }}">
                                        <a href="{{ route('contactos') }}">Contacto</a>
                                    </li>
                                    <li class="{{ request()->routeIs('faq') ? 'current' : '' }}">
                                        <a href="{{ route('faq') }}">Preguntas Frecuentes</a>
                                    </li>


                                </ul>
                            </div>
                        </div>

                        <div class="main-header-one__bottom-right">
                            <div class="btn-box1">
                                <a href="{{  route('donations.create') }}">Contribuir </a>
                            </div>

                            <div class="btn-box2">
                                <a href="{{ route('unirse') }}">Voluntario</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
