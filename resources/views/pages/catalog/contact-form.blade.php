<section class="catalog-contact-form contact-form">
    <div class="contact-form__container container">
        <div class="contact-form__feather">
            <span class="icon-feather"></span>
        </div>
        <div class="contact-form__wrapper cells">
            <div class="contact-form__cell cell">
                <div>
                    <h2 class="contact-form__title catalog-contact-form__title">Оставьте заявку на шубный набор</h2>
                    <p class="contact-form__text">Наши наборы – гарантия лучшего качества и вашей индивидуальности. Мы
                        уверены в своих материалах и готовы подтвердить их достоинства сертификатами и расширенной
                        гарантией.</p>

                    <a href="#" class="catalog-contact-form__link link link--default link--weight">О продукции и
                        гарантиях <span class="link__icon icon-long-arrow"></span></a>
                </div>
            </div>
            <div class="contact-form__cell cell">
                <form class="form">
                    <label class="contact-form__field">
                        <input type="text" placeholder="Имя *" required>
                    </label>
                    <label class="contact-form__field">
                        <input class="phone-mask" type="text" placeholder="Телефон *" required>
                    </label>
                    <label class="contact-form__field">
                        <input type="text" placeholder="Артикул набора *" required>
                    </label>

                    <button type="submit" class="contact-form__btn btn btn--main">Отправить <span
                                class="btn__icon icon-long-arrow"></span></button>

                    <p class="contact-form__caption">Нажимая кнопку «Отправить», вы соглашаетесь предоставить вашу
                        информацию компании «Мастер Соболь»,
                        которая обязуется использовать ее в соответствии со своей <a
                                href="{{ get_privacy_policy_url() }}" target="_blank">политикой конфиденциальности</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>