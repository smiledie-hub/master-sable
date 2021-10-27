<section class="contact-form">
    <div class="contact-form__container container">
        <div class="contact-form__feather">
            <span class="icon-feather"></span>
        </div>
        <div class="contact-form__wrapper cells">
            <div class="contact-form__cell cell">
                <h2 class="contact-form__title">Покупайте шубу из соболя только после знакомства с натуральной
                    продукцией от
                    компании Мастер Соболь. <span>Консультация бесплатна.</span></h2>

                <a href="#" class="contact-form__link link link--default">Нужна помощь? Свяжитесь с нами</a>
            </div>
            <div class="contact-form__cell cell">
                <form class="form">
                    <label class="contact-form__field">
                        <input type="text" placeholder="Имя *" required>
                    </label>
                    <label class="contact-form__field">
                        <input class="phone-mask" type="text" placeholder="Тел *" required>
                    </label>

                    <button type="submit" class="contact-form__btn btn btn--main">Отправить <span
                                class="btn__icon icon-long-arrow"></span></button>

                    <div class="output"></div>

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