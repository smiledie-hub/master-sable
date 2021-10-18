<div class="sets">
    <div class="sets__container container">
        <h2 class="sets__title">{{ $title }}</h2>

        <div class="sets__slider">
            <div class="sets-items swiper">

                <div class="swiper-wrapper">
                    @foreach($items as $item)
                        <article class="catalog-item swiper-slide">
                            <a href="{{ $item['link'] }}" class="catalog-item__link"></a>
                            <div class="catalog-item__cover">
                                <picture>
                                    <img class="catalog-item__image" loading="lazy"
                                         src="{{ $item['image'] }}" alt="cover">
                                </picture>
                            </div>
                            <h3 class="catalog-item__title">{{ $item['title'] }}</h3>
                            <p class="catalog-item__text">{{ $item['text'] }}</p>
                            <p class="catalog-item__price">{{ $item['price'] }}</p>
                        </article>
                    @endforeach
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