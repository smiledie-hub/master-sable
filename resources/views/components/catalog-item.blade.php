<article class="catalog-item swiper-slide">
    <a href="{{ $link }}" class="catalog-item__link"></a>

    <div class="catalog-item__cover">
        <div class="catalog-item__offscreen {{ $going || $ended?'catalog-item__offscreen--blur':'' }}">
            <div class="catalog-item__offscreen__header">
                @if($exlusive)
                    <div class="exclusive">
                        <span class="exclusive__icon icon icon-exclusive"></span>
                        <span class="exclusive__text">EXCLUSIVE</span>
                    </div>
                @elseif($going)
                    <span class="icon-collect"></span>
                @elseif($ended)
                    <span class="icon-sold"></span>
                @endif
            </div>
            <div class="catalog-item__offscreen__footer">
                @if($going)
                    <p class="catalog-item__offscreen__title">Набор собирается</p>
                    <p class="catalog-item__offscreen__text">Предположительное время выхода к сезону
                        2020-2021 г.</p>
                @elseif($ended)
                    <p class="catalog-item__offscreen__title">Набор продан</p>
                    <p class="catalog-item__offscreen__text">Собираем следующий</p>
                @endif
            </div>
        </div>

        <img class="catalog-item__image" loading="lazy"
             src="{{ $image }}"
             alt="product">

        @if($image_hover)
            <img class="catalog-item__image-hover" loading="lazy"
                 src="{{ $image_hover }}"
                 alt="product">
        @endif
    </div>
    <h3 class="catalog-item__title">{{ $title }}</h3>
    <p class="catalog-item__text">{{ $text }}</p>
    @if($price)
        <p class="catalog-item__price">
            <span>{{ $price }} ₽</span>

            @if($price_opt)
                <span class="catalog-item__price-opt">{{ $price_opt }} ₽  ОПТ</span>
            @endif
        </p>
    @endif
</article>