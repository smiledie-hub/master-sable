<div class="cap">
    <div class="container container--full">
        <div class="cap__wrapper">
            <div class="cap__logotype logotype">
                <div class="cap__hamburger hamburger">
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                </div>

                <a href="{{ home_url() }}" class="link link--default"><span
                            class="cap__logotype-icon icon-logotype"></span></a>
            </div>
            <nav class="cap__nav nav">
                <ul>
                    <li class="{{($route_name === "brand" || $route_name === "our-production" || $route_name === "our-partners")?'current':''}} nav__li">
                        <a href="#" class="nav__link">О компании</a>

                        <div class="nav__content">
                            <div class="container container--full">
                                <div class="nav__wrapper">
                                    <button class="nav__close close">
                                        <span class="close__line"></span>
                                        <span class="close__line"></span>
                                    </button>

                                    <div class="nav__submenu">
                                        <ul>
                                            <li class="nav__li"><a href="/brand" class="nav__link">О бренде</a></li>
                                            <li class="nav__li"><a href="/our-production" class="nav__link">Наша
                                                    продукция</a></li>
                                            <li class="nav__li"><a href="/our-partners" class="nav__link">Наши
                                                    партнеры</a></li>
                                        </ul>
                                    </div>

                                    <img src="{{ get_template_directory_uri().'/assets/images/nav/img2.jpg' }}" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="{{$route_name === "catalog"?'current':''}} nav__li">
                        <a href="#" class="nav__link">Каталог</a>

                        <div class="nav__content">
                            <div class="container container--full">
                                <div class="nav__wrapper">
                                    <button class="nav__close close">
                                        <span class="close__line"></span>
                                        <span class="close__line"></span>
                                    </button>

                                    <div class="nav__submenu-items">
                                        <div class="nav__submenu">
                                            <p class="nav__title">ШУБНЫЕ НАБОРЫ</p>
                                            <ul>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Соболь</a></li>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Куница</a></li>
                                                <li class="nav__li"><a href="/catalog#" class="nav__link">Рысь</a></li>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Другие меха</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="nav__submenu">
                                            <p class="nav__title">ТКАНИ</p>
                                            <ul>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Кашемир</a>
                                                </li>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Шерсть</a></li>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Шелк</a></li>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Батист</a></li>
                                            </ul>
                                        </div>

                                        <div class="nav__submenu">
                                            <p class="nav__title">ФУРНИТУРА</p>
                                            <ul>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Вся
                                                        фурнитура</a></li>
                                            </ul>
                                        </div>

                                        <div class="nav__submenu">
                                            <p class="nav__title">КОЖА</p>
                                            <ul>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Кожа и
                                                        замша</a></li>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Экзотическая
                                                        кожа</a></li>
                                            </ul>
                                        </div>

                                        <div class="nav__submenu">
                                            <p class="nav__title">ДРУГОЕ</p>
                                            <ul>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Подарки и
                                                        акссесуары</a></li>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Интерьер</a>
                                                </li>
                                                <li class="nav__li"><a href="/catalog" class="nav__link">Гравировка по
                                                        нерпе</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="{{$route_name === "partners"?'current':''}} nav__li">
                        <a href="#" class="nav__link">Партнерам</a>

                        <div class="nav__content">
                            <div class="container container--full">
                                <div class="nav__wrapper">
                                    <button class="nav__close close">
                                        <span class="close__line"></span>
                                        <span class="close__line"></span>
                                    </button>

                                    <div class="nav__submenu">
                                        <ul>
                                            <li class="nav__li"><a href="#" class="nav__link">Дизайнерам</a></li>
                                            <li class="nav__li"><a href="#" class="nav__link">Ателье</a></li>
                                            <li class="nav__li"><a href="#" class="nav__link">Фабрикам</a></li>
                                            <li class="nav__li"><a href="#" class="nav__link">Магазинам</a></li>
                                        </ul>
                                    </div>

                                    <img src="{{ get_template_directory_uri().'/assets/images/nav/img1.jpg' }}" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="{{$route_name === "suppliers"?'current':''}} nav__li">
                        <a href="/suppliers" class="nav__link">Поставщикам</a>
                    </li>
                    <li class="{{$route_name === "contacts"?'current':''}} nav__li">
                        <a href="/contacts" class="nav__link">Контакты</a>
                    </li>
                    <li class="{{$route_name === "blog"?'current':''}} nav__li">
                        <a href="/blog" class="nav__link">Блог</a>
                    </li>
                </ul>
            </nav>
            <div class="cap__info">
                <button class="cap__lang">EN</button>
                <a class="cap__phone" href="tel:+79568338683"><span class="cap__phone-icon icon-phone"></span> +7 956 83
                    38 683</a>
            </div>
        </div>
    </div>
</div>
<a href="/contacts" data-modal="contact-form" class="modal-open submit-application btn btn-gray">Оставить заявку</a>