<section class="catalog">
    <div class="catalog__container container container--full">
        <div class="catalog__wrapper">
            <div class="catalog-filter__title">Фильтр <span class="icon-arrow-down"></span></div>
            <div class="catalog-filter">
                @if($_GET['type'] === 'fur_kits')
                    <div class="catalog-filter__item catalog-filter-radio catalog-filter-radio--type">
                        <div class="catalog-filter-radio__header">
                            <p class="catalog-filter-radio__title">Мех</p>
                        </div>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".sable" checked/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Cоболь</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".marten"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Куница</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".lynx"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Рысь</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".other_furs"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Другие меха</span>
                        </label>
                    </div>
                @endif
                @if($_GET['type'] === 'fabrics')
                    <div class="catalog-filter__item catalog-filter-radio catalog-filter-radio--type">
                        <div class="catalog-filter-radio__header">
                            <p class="catalog-filter-radio__title">Ткани</p>
                        </div>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".cashmere" checked/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Кашемир</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".wool"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Шерсть</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".silk"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Шелк</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".batiste"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Батист</span>
                        </label>
                    </div>
                @endif
                @if($_GET['type'] === 'accessories')
                    <div class="catalog-filter__item catalog-filter-radio catalog-filter-radio--type">
                        <div class="catalog-filter-radio__header">
                            <p class="catalog-filter-radio__title">Фурнитура</p>
                        </div>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".all_fittings" checked/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Вся фурнитура</span>
                        </label>
                    </div>
                @endif
                @if($_GET['type'] === 'leather')
                    <div class="catalog-filter__item catalog-filter-radio catalog-filter-radio--type">
                        <div class="catalog-filter-radio__header">
                            <p class="catalog-filter-radio__title">Кожа</p>
                        </div>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".leather_suede" checked/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Кожа и замша</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".exotic_leather"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Экзотическая кожа</span>
                        </label>
                    </div>
                @endif
                @if($_GET['type'] === 'other')
                    <div class="catalog-filter__item catalog-filter-radio catalog-filter-radio--type">
                        <div class="catalog-filter-radio__header">
                            <p class="catalog-filter-radio__title">Другое</p>
                        </div>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".gifts_accessories" checked/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Подарки и аксеcсуары</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".interior"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Интерьер</span>
                        </label>

                        <label class="catalog-radio custom-radio">
                            <input class="custom-radio__input custom-radio__input--type" type="radio" name="type"
                                   value=".seal_engraving"/>
                            <span class="custom-radio__circle"></span>
                            <span class="catalog-radio__caption">Гравировка по нерпе</span>
                        </label>
                    </div>
                @endif

                @if($_GET['type'] === 'fur_kits')
                    <div class="catalog-filter__item catalog-filter-select filter-group" data-filter-block="quality">
                        <div class="catalog-filter-select__header">
                            <div class="catalog-filter-select__header-block">
                                <p class="catalog-filter-select__title">КАЧЕСТВО</p>
                                <p class="catalog-filter-select__icon"><span class="icon-arrow-down"></span></p>
                            </div>
                            <span class="catalog-filter__clear filter-group__clear">сбросить <span>фильтр</span></span>
                        </div>

                        <div class="catalog-filter-select__content">
                            <label class="custom-checkbox catalog-checkbox">
                                <input class="custom-checkbox__input filter-group__item custom-checkbox__input--quality"
                                       type="checkbox" name=".PURE"/>
                                <span class="custom-checkbox__box"></span>
                                <span class="catalog-checkbox__caption">Pure</span>
                            </label>

                            <label class="custom-checkbox catalog-checkbox">
                                <input class="custom-checkbox__input filter-group__item custom-checkbox__input--quality"
                                       type="checkbox" name=".FINE"/>
                                <span class="custom-checkbox__box"></span>
                                <span class="catalog-checkbox__caption">Premium</span>
                            </label>

                            <label class="custom-checkbox catalog-checkbox">
                                <input class="custom-checkbox__input filter-group__item custom-checkbox__input--quality"
                                       type="checkbox" name=".GOOD"/>
                                <span class="custom-checkbox__box"></span>
                                <span class="catalog-checkbox__caption">Middle</span>
                            </label>

                            <label class="custom-checkbox catalog-checkbox">
                                <input class="custom-checkbox__input filter-group__item custom-checkbox__input--quality"
                                       type="checkbox" name=".FIRE"/>
                                <span class="custom-checkbox__box"></span>
                                <span class="catalog-checkbox__caption">Mass</span>
                            </label>

                            <label class="custom-checkbox catalog-checkbox">
                                <input class="custom-checkbox__input filter-group__item custom-checkbox__input--quality"
                                       type="checkbox" name=".TRASH"/>
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
                @endif
            </div>
            <div class="catalog-products">
                <div class="catalog-products__items">
                    @php
                        $posts = get_posts(array(
                            'numberposts' => -1,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'products',
                            'suppress_filters' => true,
                        ));
                    @endphp

                    @foreach($posts as $post)
                        @include('components/catalog-item', [
                            'ID' => $post->ID,
                            'title' => $post->post_title,
                            'text' => get_field("text", $post->ID),
                            'price' => get_field("price", $post->ID),
                            'price_opt' => get_field("opt_price", $post->ID),
                            'link' => '/products/'.$post->post_name,
                            'image' => get_template_directory_uri().'/assets/images/catalog/img1.jpg',
                            'image_hover' => get_template_directory_uri().'/assets/images/catalog/img2.jpg',
                            'exlusive' => get_field("exlusive", $post->ID),
                            'ended' => get_field("ended", $post->ID),
                            'going' => get_field("going", $post->ID),
                        ])
                    @endforeach
                </div>

                <div class="catalog-products__footer">
                    <div></div>
                    <div>
                        <a id="show_more" href="#" class="btn btn--main">Показать еще <span class="btn__number">8</span></a>
                    </div>
                    <div>
                        <div class="show-by">
                            <span class="show-by__caption">Показывать по:</span>
                            <a data-count="8" href="#" class="show-by__link show-by__link--select">8</a>
                            <a data-count="16" href="#" class="show-by__link">16</a>
                            <a data-count="all" href="#" class="show-by__link">все</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>