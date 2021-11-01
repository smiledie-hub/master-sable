<section class="catalog-headline">
    <div class="catalog-headline__container container">
        <div class="catalog-headline__cells cells">
            <div class="catalog-headline__cell cell"></div>
            <div class="catalog-headline__cell cell">
                <h2 class="catalog-headline__title">{{ get_field("title", get_the_ID()) }}</h2>
            </div>
        </div>
        <div class="catalog-headline__cells cells">
            <div class="catalog-headline__cell cell">
                <p class="catalog-headline__caption"><span class="catalog-headline__caption-icon"><cpan class="icon-recomended"></cpan></span>{{ get_field("caption", get_the_ID()) }}</p>
            </div>
            <div class="catalog-headline__cell cell">
                <p class="catalog-headline__text">{{ get_field("subtitle", get_the_ID()) }}</p>

                <a href="#" data-modal="contact-form" class="modal-open catalog-headline__link link link--default link--weight">Заказать <span
                            class="link__icon icon-long-arrow"></span></a>
            </div>
        </div>
    </div>
</section>