<div class="contact">
    <div class="contact__container container">
        <div class="contact__cells cells">
            <div class="contact__cell cell">
                <div>
                    <a class="contact__phone" href="tel:{{ get_field("phone", get_the_ID()) }}" target="_blank">{{ get_field("phone", get_the_ID()) }}</a>
                    <p class="contact__caption">{{ get_field("subtitle", get_the_ID()) }}</p>
                    <h1 class="contact__address">{{ get_field("address", get_the_ID()) }}</h1>
                    <a class="contact__email" href="mailto:{{ get_field("mail", get_the_ID()) }}" target="_blank">{{ get_field("mail", get_the_ID()) }}</a>
                </div>
                <div>
                    <a class="contact__btn btn btn--main modal-open" data-modal="contact-form" href="#">Запишитесь на встречу с нами <span
                                class="btn__icon icon-long-arrow"></span></a>
                </div>
            </div>
            <div class="contact__cell cell">
                <div class="contact__box-icon box-icon">
                    <div class="box-icon__icon"><span class="icon-box"></span></div>
                    <div>
                        <p class="box-icon__title">Пункт выдачи заказов в Москве </p>
                        <p class="box-icon__text">{{ get_field("orders_in_moscow", get_the_ID()) }}</p>
                    </div>
                </div>
                <div class="contact__box-icon box-icon">
                    <div class="box-icon__icon"><span class="icon-instagram"></span></div>
                    <div>
                        <a class="box-icon__title" href="https://www.instagram.com/{{ get_field("instagram", get_the_ID()) }}" target="_blank">{{ '@'.get_field("instagram", get_the_ID()) }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>