<section class="palette">
    <div class="palette__container container">
        <div class="cells">
            <div class="cell"></div>
            <div class="cell">
                <h2 class="palette__title">Палитра соболя</h2>
            </div>
        </div>

        <div class="pallette-block">
            <div class="pallette-block__colors">
                <span class="pallette-block__caption">Цвет</span>

                <div class="pallette-block__colors-list">
                    <button data-target="pallete-2" class="pallette-block__color pallette-block__color--select">2
                    </button>
                    <button data-target="pallete-3" class="pallette-block__color">3</button>
                    <button data-target="pallete-4" class="pallette-block__color">4</button>
                    <button data-target="pallete-5" class="pallette-block__color">5</button>
                    <button data-target="pallete-6" class="pallette-block__color">6</button>
                    <button data-target="pallete-7" class="pallette-block__color">7</button>
                </div>
            </div>

            <div id="pallete-2" class="pallette-block__items pallette-block__items--select">
                <div class="pallette-block__slider swiper">
                    <div class="pallette-block__wrapper swiper-wrapper">
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">1 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img1.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">2 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img2.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">3 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img3.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">4 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img4.jpg' }}" alt="">
                        </div>
                    </div>
                    <div class="pallette-block__controlls">
                        <div class="pallette-block__prev swiper-button-prev">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="pallette-block__next swiper-button-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pallete-3" class="pallette-block__items">
                <div class="pallette-block__slider swiper">
                    <div class="pallette-block__wrapper swiper-wrapper">
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">1 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img1.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">2 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img2.jpg' }}" alt="">
                        </div>
                    </div>
                    <div class="pallette-block__controlls">
                        <div class="pallette-block__prev swiper-button-prev">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="pallette-block__next swiper-button-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pallete-4" class="pallette-block__items">
                <div class="pallette-block__slider swiper">
                    <div class="pallette-block__wrapper swiper-wrapper">
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">1 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img1.jpg' }}" alt="">
                        </div>
                    </div>
                    <div class="pallette-block__controlls">
                        <div class="pallette-block__prev swiper-button-prev">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="pallette-block__next swiper-button-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pallete-5" class="pallette-block__items">
                <div class="pallette-block__slider swiper">
                    <div class="pallette-block__wrapper swiper-wrapper">
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">1 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img1.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">2 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img2.jpg' }}" alt="">
                        </div>
                    </div>
                    <div class="pallette-block__controlls">
                        <div class="pallette-block__prev swiper-button-prev">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="pallette-block__next swiper-button-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pallete-6" class="pallette-block__items">
                <div class="pallette-block__slider swiper">
                    <div class="pallette-block__wrapper swiper-wrapper">
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">1 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img1.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">2 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img2.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">4 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img4.jpg' }}" alt="">
                        </div>
                    </div>
                    <div class="pallette-block__controlls">
                        <div class="pallette-block__prev swiper-button-prev">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="pallette-block__next swiper-button-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pallete-7" class="pallette-block__items">
                <div class="pallette-block__slider swiper">
                    <div class="pallette-block__wrapper swiper-wrapper">
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">1 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img1.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">2 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img2.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">3 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img3.jpg' }}" alt="">
                        </div>
                        <div class="pallette-slide swiper-slide">
                            <span class="pallette-slide__caption">4 седина</span>
                            <img loading="lazy" class="pallette-slide__image"
                                 src="{{ get_template_directory_uri().'/assets/images/palette/img4.jpg' }}" alt="">
                        </div>
                    </div>
                    <div class="pallette-block__controlls">
                        <div class="pallette-block__prev swiper-button-prev">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="pallette-block__next swiper-button-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="cells">
            <div class="cell"></div>
            <div class="cell">
                <p class="palette__text">Наш продукт экологичен! Мы не применяем химикаты, которые используются при
                    тонировке</p>
            </div>
        </div>
    </div>
</section>