<section class="catalog">
    <div class="catalog__container container container--full">
        <div class="catalog__wrapper">
            <div class="catalog-filter">

                <div class="catalog-filter__item catalog-filter-radio">
                    <div class="catalog-filter-radio__header">
                        <p class="catalog-filter-radio__title">Мех</p>
                    </div>

                    <label class="catalog-radio">
                        <input class="catalog-radio__input" type="radio" name="fur" checked/>
                        <span class="catalog-radio__caption">Cоболь</span>
                    </label>

                    <label class="catalog-radio">
                        <input class="catalog-radio__input" type="radio" name="fur"/>
                        <span class="catalog-radio__caption">Куница</span>
                    </label>

                    <label class="catalog-radio">
                        <input class="catalog-radio__input" type="radio" name="fur"/>
                        <span class="catalog-radio__caption">Рысь</span>
                    </label>

                    <label class="catalog-radio">
                        <input class="catalog-radio__input" type="radio" name="fur"/>
                        <span class="catalog-radio__caption">Другие меха</span>
                    </label>
                </div>

                <div class="catalog-filter__item catalog-filter-select catalog-filter__item--active catalog-filter__item--no-empty">
                    <div class="catalog-filter-select__header">
                        <div class="catalog-filter-select__header-block">
                            <p class="catalog-filter-select__title">КАЧЕСТВО</p>
                            <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                        </div>
                        <span class="catalog-filter__clear">сбросить фильтр</span>
                    </div>

                    <div class="catalog-filter-select__content">
                        <label class="catalog-checkbox">
                            <input class="catalog-checkbox__input" type="checkbox" name="Pure" checked/>
                            <span class="catalog-checkbox__caption">Pure</span>
                        </label>
                        <label class="catalog-checkbox">
                            <input class="catalog-checkbox__input" type="checkbox" name="Premium"/>
                            <span class="catalog-checkbox__caption">Premium</span>
                        </label>
                        <label class="catalog-checkbox">
                            <input class="catalog-checkbox__input" type="checkbox" name="Middle"/>
                            <span class="catalog-checkbox__caption">Middle</span>
                        </label>
                        <label class="catalog-checkbox">
                            <input class="catalog-checkbox__input" type="checkbox" name="Mass"/>
                            <span class="catalog-checkbox__caption">Mass</span>
                        </label>
                        <label class="catalog-checkbox">
                            <input class="catalog-checkbox__input" type="checkbox" name="Trash"/>
                            <span class="catalog-checkbox__caption">Trash</span>
                        </label>
                    </div>
                </div>
                <div class="catalog-filter__item catalog-filter-select">
                    <div class="catalog-filter-select__header">
                        <div class="catalog-filter-select__header-block">
                            <p class="catalog-filter-select__title">ЦВЕТ</p>
                            <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                        </div>
                        <span class="catalog-filter__clear">сбросить фильтр</span>
                    </div>

                    <div class="catalog-filter-select__content">

                    </div>
                </div>
                <div class="catalog-filter__item catalog-filter-select">
                    <div class="catalog-filter-select__header">
                        <div class="catalog-filter-select__header-block">
                            <p class="catalog-filter-select__title">СЕДИНА</p>
                            <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                        </div>
                        <span class="catalog-filter__clear">сбросить фильтр</span>
                    </div>

                    <div class="catalog-filter-select__content">

                    </div>
                </div>
                <div class="catalog-filter__item catalog-filter-select">
                    <div class="catalog-filter-select__header">
                        <div class="catalog-filter-select__header-block">
                            <p class="catalog-filter-select__title">РАЗМЕРНЫЙ РЯД</p>
                            <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                        </div>
                        <span class="catalog-filter__clear">сбросить фильтр</span>
                    </div>

                    <div class="catalog-filter-select__content">

                    </div>
                </div>
                <div class="catalog-filter__item catalog-filter-select">
                    <div class="catalog-filter-select__header">
                        <div class="catalog-filter-select__header-block">
                            <p class="catalog-filter-select__title">ДЛИНА ИЗДЕЛИЯ</p>
                            <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                        </div>
                        <span class="catalog-filter__clear">сбросить фильтр</span>
                    </div>

                    <div class="catalog-filter-select__content">

                    </div>
                </div>
                <div class="catalog-filter__item catalog-filter-select">
                    <div class="catalog-filter-select__header">
                        <div class="catalog-filter-select__header-block">
                            <p class="catalog-filter-select__title">ДЛИНА РУКАВА</p>
                            <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                        </div>
                        <span class="catalog-filter__clear">сбросить фильтр</span>
                    </div>

                    <div class="catalog-filter-select__content">

                    </div>
                </div>
                <div class="catalog-filter__item catalog-filter-select">
                    <div class="catalog-filter-select__header">
                        <div class="catalog-filter-select__header-block">
                            <p class="catalog-filter-select__title">КРОЙ ШКУРОК</p>
                            <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                        </div>
                        <span class="catalog-filter__clear">сбросить фильтр</span>
                    </div>

                    <div class="catalog-filter-select__content">

                    </div>
                </div>
            </div>
            <div class="catalog-products">
                <div class="catalog-products__items">

                    <article class="catalog-item swiper-slide">
                        <a href="/product" class="catalog-item__link"></a>

                        <div class="catalog-item__cover">
                            <div class="catalog-item__offscreen catalog-item__offscreen--blur">
                                <div class="catalog-item__offscreen__header">

                                </div>
                               <div class="catalog-item__offscreen__footer">
                                   <p class="catalog-item__offscreen__title">Набор собирается</p>
                                   <p class="catalog-item__offscreen__text">Предположительное время выхода к сезону 2020-2021 г.</p>
                               </div>
                            </div>

                            <picture>
                                <img class="catalog-item__image" loading="lazy"
                                     src="{{ get_template_directory_uri().'/assets/images/catalog/img1.jpg' }}" alt="product">
                            </picture>
                        </div>
                        <h3 class="catalog-item__title">СОБОЛЬ КРЯЖ</h3>
                        <p class="catalog-item__text">PREMIUM / 2 цвет  / 1 седина / 60 шкурок / XL</p>
                        <p class="catalog-item__price">
                            <span>100 000 ₽</span>
                            <span class="catalog-item__price-opt">2 300 000 ₽  ОПТ</span>
                        </p>
                    </article>
                    <article class="catalog-item swiper-slide">
                        <a href="/product" class="catalog-item__link"></a>
                        <div class="catalog-item__cover">
                            <div class="catalog-item__offscreen catalog-item__offscreen">
                                <div class="catalog-item__offscreen__header">
                                    <div class="exclusive">
                                        <span class="exclusive__icon icon icon-exclusive"></span>
                                        <span class="exclusive__text">EXCLUSIVE</span>
                                    </div>
                                </div>
                            </div>
                            <picture>
                                <img class="catalog-item__image" loading="lazy"
                                     src="{{ get_template_directory_uri().'/assets/images/catalog/img1.jpg' }}" alt="product">
                            </picture>
                        </div>
                        <h3 class="catalog-item__title">СОБОЛЬ КРЯЖ</h3>
                        <p class="catalog-item__text">PREMIUM / 2 цвет  / 1 седина / 60 шкурок / XL</p>
                        <p class="catalog-item__price">
                            <span>100 000 ₽</span>
                            <span class="catalog-item__price-opt">2 300 000 ₽  ОПТ</span>
                        </p>
                    </article>
                    <article class="catalog-item swiper-slide">
                        <a href="/product" class="catalog-item__link"></a>

                        <div class="catalog-item__cover">
                            <div class="catalog-item__offscreen catalog-item__offscreen--blur">
                                <div class="catalog-item__offscreen__header">

                                </div>
                                <div class="catalog-item__offscreen__footer">
                                    <p class="catalog-item__offscreen__title">Набор продан</p>
                                    <p class="catalog-item__offscreen__text">Собираем следующий</p>
                                </div>
                            </div>

                            <picture>
                                <img class="catalog-item__image" loading="lazy"
                                     src="{{ get_template_directory_uri().'/assets/images/catalog/img1.jpg' }}" alt="product">
                            </picture>
                        </div>
                        <h3 class="catalog-item__title">СОБОЛЬ КРЯЖ</h3>
                        <p class="catalog-item__text">PREMIUM / 2 цвет  / 1 седина / 60 шкурок / XL</p>
                        <p class="catalog-item__price">
                            <span>100 000 ₽</span>
                            <span class="catalog-item__price-opt">2 300 000 ₽  ОПТ</span>
                        </p>
                    </article>
                    <article class="catalog-item swiper-slide">
                        <a href="/product" class="catalog-item__link"></a>
                        <div class="catalog-item__cover">
                            <picture>
                                <img class="catalog-item__image" loading="lazy"
                                     src="{{ get_template_directory_uri().'/assets/images/catalog/img1.jpg' }}" alt="product">
                            </picture>
                        </div>
                        <h3 class="catalog-item__title">СОБОЛЬ КРЯЖ</h3>
                        <p class="catalog-item__text">PREMIUM / 2 цвет  / 1 седина / 60 шкурок / XL</p>
                        <p class="catalog-item__price">
                            <span>100 000 ₽</span>
                            <span class="catalog-item__price-opt">2 300 000 ₽  ОПТ</span>
                        </p>
                    </article>
                    <article class="catalog-item swiper-slide">
                        <a href="/product" class="catalog-item__link"></a>
                        <div class="catalog-item__cover">
                            <picture>
                                <img class="catalog-item__image" loading="lazy"
                                     src="{{ get_template_directory_uri().'/assets/images/catalog/img1.jpg' }}" alt="product">
                            </picture>
                        </div>
                        <h3 class="catalog-item__title">СОБОЛЬ КРЯЖ</h3>
                        <p class="catalog-item__text">PREMIUM / 2 цвет  / 1 седина / 60 шкурок / XL</p>
                        <p class="catalog-item__price">
                            <span>100 000 ₽</span>
                            <span class="catalog-item__price-opt">2 300 000 ₽  ОПТ</span>
                        </p>
                    </article>
                    <article class="catalog-item swiper-slide">
                        <a href="/product" class="catalog-item__link"></a>
                        <div class="catalog-item__cover">
                            <picture>
                                <img class="catalog-item__image" loading="lazy"
                                     src="{{ get_template_directory_uri().'/assets/images/catalog/img1.jpg' }}" alt="product">
                            </picture>
                        </div>
                        <h3 class="catalog-item__title">СОБОЛЬ КРЯЖ</h3>
                        <p class="catalog-item__text">PREMIUM / 2 цвет  / 1 седина / 60 шкурок / XL</p>
                        <p class="catalog-item__price">
                            <span>100 000 ₽</span>
                            <span class="catalog-item__price-opt">2 300 000 ₽  ОПТ</span>
                        </p>
                    </article>
                    <article class="catalog-item swiper-slide">
                        <a href="/product" class="catalog-item__link"></a>
                        <div class="catalog-item__cover">
                            <picture>
                                <img class="catalog-item__image" loading="lazy"
                                     src="{{ get_template_directory_uri().'/assets/images/catalog/img1.jpg' }}" alt="product">
                            </picture>
                        </div>
                        <h3 class="catalog-item__title">СОБОЛЬ КРЯЖ</h3>
                        <p class="catalog-item__text">PREMIUM / 2 цвет  / 1 седина / 60 шкурок / XL</p>
                        <p class="catalog-item__price">
                            <span>100 000 ₽</span>
                            <span class="catalog-item__price-opt">2 300 000 ₽  ОПТ</span>
                        </p>
                    </article>
                    <article class="catalog-item swiper-slide">
                        <a href="/product" class="catalog-item__link"></a>
                        <div class="catalog-item__cover">
                            <picture>
                                <img class="catalog-item__image" loading="lazy"
                                     src="{{ get_template_directory_uri().'/assets/images/catalog/img1.jpg' }}" alt="product">
                            </picture>
                        </div>
                        <h3 class="catalog-item__title">СОБОЛЬ КРЯЖ</h3>
                        <p class="catalog-item__text">PREMIUM / 2 цвет  / 1 седина / 60 шкурок / XL</p>
                        <p class="catalog-item__price">
                            <span>100 000 ₽</span>
                            <span class="catalog-item__price-opt">2 300 000 ₽  ОПТ</span>
                        </p>
                    </article>

                </div>

                <div class="catalog-products__footer">
                    <div></div>
                    <div>
                        <a href="#" class="btn btn--main">Показать еще <span class="btn__number">42</span></a>
                    </div>
                    <div>
                        <div class="show-by">
                            <span class="show-by__caption">Показывать по:</span>
                            <a href="#" class="show-by__link show-by__link--select">8</a>
                            <a href="#" class="show-by__link">16</a>
                            <a href="#" class="show-by__link">все</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>