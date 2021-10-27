<section class="catalog">
    <div class="catalog__container container container--full">
        <div class="catalog__wrapper">
            <div class="catalog-filter">

                <div class="catalog-filter__item catalog-filter-radio">
                    <div class="catalog-filter-radio__header">
                        <p class="catalog-filter-radio__title">Мех</p>
                    </div>

                    <label class="catalog-radio custom-radio">
                        <input class="custom-radio__input" type="radio" name="fur" checked/>
                        <span class="custom-radio__circle"></span>
                        <span class="catalog-radio__caption">Cоболь</span>
                    </label>

                    <label class="catalog-radio custom-radio">
                        <input class="custom-radio__input" type="radio" name="fur"/>
                        <span class="custom-radio__circle"></span>
                        <span class="catalog-radio__caption">Куница</span>
                    </label>

                    <label class="catalog-radio custom-radio">
                        <input class="custom-radio__input" type="radio" name="fur"/>
                        <span class="custom-radio__circle"></span>
                        <span class="catalog-radio__caption">Рысь</span>
                    </label>

                    <label class="catalog-radio custom-radio">
                        <input class="custom-radio__input" type="radio" name="fur"/>
                        <span class="custom-radio__circle"></span>
                        <span class="catalog-radio__caption">Другие меха</span>
                    </label>
                </div>

                <div class="catalog-filter__item catalog-filter-select catalog-filter__item--active catalog-filter__item--no-empty">
                    <div class="catalog-filter-select__header">
                        <div class="catalog-filter-select__header-block">
                            <p class="catalog-filter-select__title">КАЧЕСТВО</p>
                            <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                        </div>
                        <span class="catalog-filter__clear">сбросить <span>фильтр</span></span>
                    </div>

                    <div class="catalog-filter-select__content">
                        <label class="custom-checkbox catalog-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" name="Pure" checked/>
                            <span class="custom-checkbox__box"></span>
                            <span class="catalog-checkbox__caption">Pure</span>
                        </label>

                        <label class="custom-checkbox catalog-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" name="Premium"/>
                            <span class="custom-checkbox__box"></span>
                            <span class="catalog-checkbox__caption">Premium</span>
                        </label>

                        <label class="custom-checkbox catalog-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" name="Middle"/>
                            <span class="custom-checkbox__box"></span>
                            <span class="catalog-checkbox__caption">Middle</span>
                        </label>

                        <label class="custom-checkbox catalog-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" name="Mass"/>
                            <span class="custom-checkbox__box"></span>
                            <span class="catalog-checkbox__caption">Mass</span>
                        </label>

                        <label class="custom-checkbox catalog-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" name="Trash"/>
                            <span class="custom-checkbox__box"></span>
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
                    @for ($i = 0; $i < 3; $i++)
                        @include('components/catalog-item', [
                            'title' => 'СОБОЛЬ КРЯЖ',
                            'text' => 'PREMIUM / 2 цвет / 1 седина / 60 шкурок / XL',
                            'price' => '100 000',
                            'price_opt' => '2 300 000',
                            'link' => '/product',
                            'image' => get_template_directory_uri().'/assets/images/catalog/img1.jpg',
                            'image_hover' => get_template_directory_uri().'/assets/images/catalog/img2.jpg',
                            'exlusive' => $i === 1,
                            'ended' => $i === 2,
                            'going' => $i === 3,
                        ])
                    @endfor
                    @for ($i = 0; $i < 3; $i++)
                        @include('components/catalog-item', [
                            'title' => 'СОБОЛЬ КРЯЖ',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi deleniti dignissimos earum eos facilis quae qui repellendus suscipit vel?',
                            'price' => '100 000',
                            'price_opt' => '2 300 000',
                            'link' => '/product',
                            'image' => get_template_directory_uri().'/assets/images/catalog/img1.jpg',
                            'image_hover' => get_template_directory_uri().'/assets/images/catalog/img2.jpg',
                            'exlusive' => $i === 0,
                            'ended' => $i === 1,
                            'going' => $i === 2,
                        ])
                    @endfor

                        @for ($i = 0; $i < 2; $i++)
                            @include('components/catalog-item', [
                                'title' => 'СОБОЛЬ КРЯЖ',
                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi deleniti dignissimos earum eos facilis quae qui repellendus suscipit vel? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab commodi deleniti dignissimos earum eos facilis quae qui repellendus suscipit vel?',
                                'price' => '100 000',
                                'price_opt' => '2 300 000',
                                'link' => '/product',
                                'image' => get_template_directory_uri().'/assets/images/catalog/img1.jpg',
                                'image_hover' => get_template_directory_uri().'/assets/images/catalog/img2.jpg'
                            ])
                        @endfor
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