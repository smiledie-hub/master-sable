<section class="product-card">
    <div class="container">
        <a href="/catalog" class="product-card__back"><span class="product-card__back-icon icon-long-arrow"></span>Вернуться</a>
    </div>
    <div class="product-card__container container container--full">
        <div class="product-card__cells cells">
            <div class="product-card__cell cell">
                <div class="product-card__images">
                    <div class="product-card__cover">
                        <img class="product-card__image zoom" loading="lazy"
                             data-magnify-src="{{ get_template_directory_uri().'/assets/images/product/img1x2.jpg' }}"
                             src="{{ get_template_directory_uri().'/assets/images/product/img1.jpg' }}" alt="cover">
                    </div>

                    <div class="product-card__cover">
                        <img class="product-card__image zoom"
                             loading="lazy"
                             data-magnify-src="{{ get_template_directory_uri().'/assets/images/product/img2x2.png' }}"
                             src="{{ get_template_directory_uri().'/assets/images/product/img2.png' }}" alt="cover">
                    </div>

                    <div class="product-card__cover">
                        <img class="product-card__image zoom"
                             loading="lazy"
                             data-magnify-src="{{ get_template_directory_uri().'/assets/images/product/img3x2.jpg' }}"
                             src="{{ get_template_directory_uri().'/assets/images/product/img3.jpg' }}" alt="cover">
                    </div>
                </div>
            </div>
            <div class="product-card__cell cell">
                <div class="product-card__wrapper">
                    <div class="product-card__header">
                        <h2 class="product-card__title">@php the_title() @endphp</h2>
                        @if(get_field("code", get_the_ID()))
                            <p class="product-card__code">Код товара: {{ get_field("code", get_the_ID()) }}</p>
                        @endif
                        <p class="product-card__price">{{ get_field("price", get_the_ID()) }} ₽ </p>
                        @if(get_field("opt_price", get_the_ID()))
                            <p class="product-card__price-opt">{{ get_field("opt_price", get_the_ID()) }} ₽
                                <span>оптовая цена</span></p>
                        @endif
                    </div>

                    <div class="product-card__specifications">
                        <p class="product-card__caption">Характеристики</p>
                        <div class="specifications">
                            @php
                                $attrs = get_field("attr", get_the_ID())
                            @endphp

                            @if($attrs['quality'])
                                <div class="specification">
                                    <div class="specification__header">
                                        <p class="specification__title">Качество: </p>
                                    </div>

                                    <div class="specification__footer">
                                        <p class="specification__text">{{ $attrs['quality'] }}</p>
                                        <div class="question">
                                            <div class="question__header">
                                                <span class="question__icon icon-question"></span>
                                            </div>
                                            <div class="question__main">
                                                <span class="question__text">
                                                    @if($attrs['quality'] === "PURE")
                                                        Расширенная гарантия на 2 года. Пожизненное обслуживание изделий.
                                                    @elseif($attrs['quality'] === "FINE")
                                                        Расширенная гарантия на 1 год. Пожизненное обслуживание изделий.
                                                    @elseif($attrs['quality'] === "GOOD")
                                                        Расширенная гарантия на 1 год. Пожизненное обслуживание изделий.
                                                    @elseif($attrs['quality'] === "FIRE")
                                                        Расширенная гарантия на 1 год. Пожизненное обслуживание изделий.
                                                    @elseif($attrs['quality'] === "TRASH")
                                                        Гарантия на 0 лет. Изделия из данного полуфабриката не обслуживаются, смотрите описание категории качества TRASH
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($attrs['colour'])
                                <div class="specification">
                                    <div class="specification__header">
                                        <p class="specification__title">Цвет: </p>
                                    </div>

                                    <div class="specification__footer">
                                        <p class="specification__text">{{ $attrs['colour'] }}</p>
                                    </div>
                                </div>
                            @endif

                            @if($attrs['gray_hair'])
                                <div class="specification">
                                    <div class="specification__header">
                                        <p class="specification__title">Седина: </p>
                                    </div>

                                    <div class="specification__footer">
                                        <p class="specification__text">{{ $attrs['gray_hair'] }}</p>
                                    </div>
                                </div>
                            @endif

                            @if($attrs['number_skins'])
                                <div class="specification">
                                    <div class="specification__header">
                                        <p class="specification__title">Количество шкурок: </p>
                                    </div>

                                    <div class="specification__footer">
                                        <p class="specification__text">{{ $attrs['number_skins'] }}</p>
                                    </div>
                                </div>
                            @endif

                            @if($attrs['size'])
                                <div class="specification">
                                    <div class="specification__header">
                                        <p class="specification__title">Размер: </p>
                                    </div>

                                    <div class="specification__footer">
                                        <p class="specification__text">@php echo $attrs['size']; @endphp</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <p class="product-card__caption">Вариант изделия:</p>
                        <div class="specifications">
                            @php
                                $options = get_field("product_option", get_the_ID())
                            @endphp

                            @if($options['fabric'])
                                <div class="specification">
                                    <div class="specification__header">
                                        <p class="specification__title">Изделие: </p>
                                    </div>

                                    <div class="specification__footer">
                                        <p class="specification__text">{{ $attrs['fabric'] }}</p>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>

                    <div class="product-card__order">
                        <div>
                            <a href="#" data-modal="contact-form" class="modal-open btn btn--main">Заказать <span
                                        class="btn__icon icon-long-arrow"></span></a>
                        </div>
                        <div>
                            <a href="#" class="product-card__link link link--default">Нужна помощь? Свяжитесь с нами</a>
                        </div>
                    </div>
                </div>

                <div class="product-card__slider ">
                    <p class="may-need__title">Вам может понадобиться</p>

                    <div class="may-need">
                        <div class="may-need__slider swiper">
                            <div class="swiper-wrapper">
                                <div class="may-need__item swiper-slide">
                                    <picture>
                                        <img class="may-need__cover"
                                             loading="lazy"
                                             src="{{ get_template_directory_uri().'/assets/images/product/item1.jpg' }}"
                                             alt="cover">
                                    </picture>
                                    <p class="may-need__caption">ПОДКЛАДОЧНАЯ ТКАНЬ</p>
                                </div>
                                <div class="may-need__item swiper-slide">
                                    <picture>
                                        <img class="may-need__cover"
                                             loading="lazy"
                                             src="{{ get_template_directory_uri().'/assets/images/product/item2.jpg' }}"
                                             alt="cover">
                                    </picture>
                                    <p class="may-need__caption">ПОДКЛАДОЧНАЯ ТКАНЬ</p>
                                </div>

                                <div class="may-need__item swiper-slide">
                                    <picture>
                                        <img class="may-need__cover"
                                             loading="lazy"
                                             src="{{ get_template_directory_uri().'/assets/images/product/item1.jpg' }}"
                                             alt="cover">
                                    </picture>
                                    <p class="may-need__caption">ПОДКЛАДОЧНАЯ ТКАНЬ</p>
                                </div>
                                <div class="may-need__item swiper-slide">
                                    <picture>
                                        <img class="may-need__cover"
                                             loading="lazy"
                                             src="{{ get_template_directory_uri().'/assets/images/product/item2.jpg' }}"
                                             alt="cover">
                                    </picture>
                                    <p class="may-need__caption">ПОДКЛАДОЧНАЯ ТКАНЬ</p>
                                </div>
                            </div>
                        </div>

                        <div class="may-need__prev swiper-button-prev">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="may-need__next swiper-button-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(() => {
        if (window.innerWidth <= 772) {
            const block = jQuery(".product-card__images")
            const el = jQuery('.product-card__slider')
            block.append(el)
        }
    });
</script>