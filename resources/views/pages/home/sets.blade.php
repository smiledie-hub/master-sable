<div class="sets">
    <div class="sets__container container">
        <h2 class="sets__title">{{ $title }}</h2>

        <div class="sets__slider">
            <div class="sets-items swiper">

                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 6; $i++)
                        @include('components/catalog-item', [
                            'title' => 'СОБОЛЬ КРЯЖ',
                            'text' => 'PREMIUM / 2 цвет / 1 седина / 60 шкурок / XL',
                            'price' => '100 000',
                            'price_opt' => '2 300 000',
                            'link' => '/product',
                            'image' => get_template_directory_uri().'/assets/images/catalog/img1.jpg',
                            'image_hover' => get_template_directory_uri().'/assets/images/catalog/img2.jpg'
                        ])
                    @endfor
                </div>
            </div>

            <div class="sets__prev swiper-button-prev">
                <span class="icon-arrow-left"></span>
            </div>
            <div class="sets__next swiper-button-next">
                <span class="icon-arrow-right"></span>
            </div>
        </div>

        <div class="sets__btns">
            <a href="#" class="btn btn--main">Перейти в каталог <span class="btn__icon icon-long-arrow"></span></a>
        </div>
    </div>
</div>