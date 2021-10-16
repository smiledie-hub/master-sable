<div class="quality">
    <div class="container">
        <div class="quality__header">
            <picture class="quality__cover">
                <img loading="lazy"
                     src="{{ $image }}" alt="cover">
            </picture>
        </div>
        <div class="quality__main">
            <div class="quality__cells cells">
                <div class="quality__cell cell">
                    <div class="quality__container-title">
                        <h2 class="quality__title">{{ $title }}</h2>
                    </div>
                </div>
                <div class="quality__cell cell">
                    <div class="quality__container-text">
                        {!! $text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>