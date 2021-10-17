<div class="offer">
    <div class="container">
        <div class="cells">
            <div class="cell">
                <h2 class="offer__title">{{ $title }}</h2>
                <p class="offer__text">{{ $text }}</p>

                @if($partner)
                    <div class="offer__links links">
                        <p class="links__title">партнерские условия для:</p>
                        <ul class="links__list">
                            <li class="links__item"><a href="#" class="link link--default">Дизайнеров <span
                                            class="link__icon icon-long-arrow"></span></a></li>
                            <li class="links__item"><a href="#" class="link link--default">Производств <span
                                            class="link__icon icon-long-arrow"></span></a></li>
                            <li class="links__item"><a href="#" class="link link--default">Ателье <span
                                            class="link__icon icon-long-arrow"></span></a></li>
                            <li class="links__item"><a href="#" class="link link--default">Магазинов <span
                                            class="link__icon icon-long-arrow"></span></a></li>
                        </ul>
                    </div>
                @endif

                <div class="card-image">
                    <div class="card-image__header">
                        <picture>
                            <img class="card-image__cover"
                                 loading="lazy"
                                 src="{{ get_template_directory_uri().'/assets/images/offer/img1.jpg' }}" alt="cover">
                        </picture>
                    </div>
                    <div class="card-image__main">
                        <h3 class="card-image__title">ПОДКЛАДОЧНАЯ ТКАНЬ</h3>
                        <p class="card-image__caption">состав комплекта</p>
                    </div>
                </div>
            </div>
            <div class="cell">
                <div class="card-image">
                    <div class="card-image__header">
                        <picture>
                            <img class="card-image__cover"
                                 loading="lazy"
                                 src="{{ get_template_directory_uri().'/assets/images/offer/img2.jpg' }}" alt="cover">
                        </picture>
                    </div>
                    <div class="card-image__main">
                        <h3 class="card-image__title">Качественно собранный шубный набор</h3>
                        <p class="card-image__caption">состав комплекта</p>
                    </div>
                </div>
                <div class="card-image card-image--screen">
                    <div class="card-image__header">
                        <div class="offer__slider">
                            <div class="image-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="image-slider__item swiper-slide">
                                        <picture>
                                            <img class="card-image__cover"
                                                 loading="lazy"
                                                 src="{{ get_template_directory_uri().'/assets/images/offer/img3.jpg' }}"
                                                 alt="cover">
                                        </picture>
                                    </div>
                                    <div class="image-slider__item swiper-slide">
                                        <picture>
                                            <img class="card-image__cover"
                                                 loading="lazy"
                                                 src="{{ get_template_directory_uri().'/assets/images/offer/img3.jpg' }}"
                                                 alt="cover">
                                        </picture>
                                    </div>
                                </div>
                            </div>

                            <div class="offer__prev swiper-button-prev">
                                <span class="icon-arrow-left"></span>
                            </div>
                            <div class="offer__next swiper-button-next">
                                <span class="icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-image__main">
                        <h3 class="card-image__title">ПРОКЛАДОЧНЫЙ МАТЕРИАЛ</h3>
                        <p class="card-image__caption">состав комплекта</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>