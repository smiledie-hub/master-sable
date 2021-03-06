<div class="modal" id="contact-form">
    <div class="modal__backdrop modal__close"></div>
    <div class="modal__wrapper">
        <section class="contact-form">
            <div class="modal__container contact-form__container container">
                <div class="modal__close modal__cross">
                    <span class="close close--no-border">
                        <span class="close__line"></span>
                        <span class="close__line"></span>
                    </span>
                </div>
                <div class="modal__form-wrapper contact-form__wrapper cells">
                    <div class="contact-form__cell cell">
                        <h2 class="contact-form__title">Покупайте шубу из соболя только после знакомства с натуральной
                            продукцией от
                            компании Мастер Соболь. <span>Консультация бесплатна.</span></h2>
                    </div>
                    <div class="contact-form__cell cell">
                        <form class="form">
                            <label class="contact-form__field">
                                <input type="text" placeholder="Имя *" required>
                            </label>
                            <label class="contact-form__field">
                                <input type="tel" placeholder="Тел *" required>
                            </label>

                            <button type="submit" class="contact-form__btn btn btn--main">Отправить <span
                                        class="btn__icon icon-long-arrow"></span></button>

                            <p class="contact-form__caption">Нажимая кнопку «Отправить», вы соглашаетесь предоставить
                                вашу
                                информацию компании «Мастер Соболь»,
                                которая обязуется использовать ее в соответствии со своей <a
                                        href="{{ get_privacy_policy_url() }}" target="_blank">политикой
                                    конфиденциальности</a>.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<footer class="footer">
    <div class="container container--full">
        <div class="footer__wrapper">
            <div class="footer__start">
                <div class="footer__logotype logotype">
                    <a href="{{ home_url() }}" class="link link--default"><span class="icon-logotype-icon"></span></a>
                </div>
                <div>
                    <p class="footer__text">© Copyright {{ date('Y') }} Master Sobol</p>
                    <a class="footer__privacy link" href="{{ get_privacy_policy_url() }}" target="_blank">Политика
                        конфиденциальности</a>
                    <div class="footer__cult cult">
                        <a href="#" class="link-default"><span class="cult__icon icon-cult"></span></a>
                        <p class="cult__text">Сделано Культом</p>
                    </div>
                </div>
            </div>
            <div class="footer__navs">
                <div class="footer__section">
                    <div class="footer__section-item">
                        <p class="footer__title">О КОМПАНИИ</p>

                        <nav class="footer__nav">
                            <a href="/brand">О бренде</a>
                            <a href="/our-production">Наша продукция</a>
                            <a href="/our-partners">Наши партнеры</a>
                            <a href="/blog">Блог</a>
                            <a href="/contacts">Контакты</a>
                        </nav>
                    </div>
                    <div class="footer__section-item">
                        <a href="#" class="footer__title link link--default">ПОСТАВЩИКАМ <span
                                    class="link__icon icon-long-arrow"></span></a>
                        <p class="footer__title">ШУБНЫЕ НАБОРЫ</p>

                        <nav class="footer__nav">
                            <a href="/catalog?type=fur_kits&subtype=sable">Соболь</a>
                            <a href="/catalog?type=fur_kits&subtype=marten">Куница</a>
                            <a href="/catalog?type=fur_kits&subtype=lynx">Рысь</a>
                            <a href="/catalog?type=fur_kits&subtype=other_furs">Другие меха</a>
                        </nav>
                    </div>
                    <div class="footer__section-item">
                        <p class="footer__title">ТКАНИ</p>

                        <nav class="footer__nav">
                            <a href="/catalog?type=fabrics&subtype=cashmere">Кашемир</a>
                            <a href="/catalog?type=fabrics&subtype=wool">Шерсть</a>
                            <a href="/catalog?type=fabrics&subtype=silk">Шелк</a>
                            <a href="/catalog?type=fabrics&subtype=batiste">Батист</a>
                        </nav>
                    </div>
                </div>
                <div class="footer__section">
                    <div class="footer__section-item">
                        <p class="footer__title">ПАРТНЕРАМ</p>

                        <nav class="footer__nav">
                            <a href="/catalog">Дизайнеры</a>
                            <a href="/catalog">Ателье</a>
                            <a href="/catalog">Производства</a>
                            <a href="/catalog">Магазины</a>
                        </nav>
                    </div>
                    <div class="footer__section-item">
                        <p class="footer__title">КОЖА</p>

                        <nav class="footer__nav">
                            <a href="/catalog?type=leather&subtype=leather_suede">Кожа и замша</a>
                            <a href="/catalog?type=leather&subtype=exotic_leather">Экзотическая кожа</a>
                        </nav>
                    </div>
                    <div class="footer__section-item">
                        <p class="footer__title">ДРУГОЕ</p>

                        <nav class="footer__nav">
                            <a href="/catalog?type=accessories&subtype=all_fittings">Фурнитура</a>
                            <a href="/catalog?type=other&subtype=gifts_accessories">Подарки и аксесcуары</a>
                            <a href="/catalog?type=other&subtype=interior">Интерьер</a>
                            <a href="/catalog?type=other&subtype=seal_engraving">Гравировка по нерпе</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="footer__end">
                <div class="footer__adressess">
                    <p class="footer__title">ПОДПИШИТЕСЬ НА РАССЫЛКУ *</p>

                    <form class="mailing">
                        <label class="mailing__field">
                            <input class="mailing__input" type="email" placeholder="Ваш e-mail"/>
                            <button class="mailing__send" type="submit">
                                <span class="icon-long-arrow"></span>
                            </button>
                        </label>
                        <p class="mailing__caption">* Уникальные акции и интересные статьи только для подписчиков
                            рассылки</p>
                    </form>

                    <div class="footer__socials socials">
                        <a class="socials__item link link--default " href="#" target="_blank"><span
                                    class="icon-instagram"></span></a>
                        <a class="socials__item link link--default" href="#" target="_blank"><span
                                    class="icon-facebook"></span></a>
                    </div>

                    <p class="footer__adress"><span class="footer__adress-icon icon-pin"></span><span>Екатеринбург ул. Хохрякова, 48 (КД Тихвин 4 очередь)</span></p>
                    <p class="footer__adress"><span class="footer__adress-icon icon-pin"></span><span>Москва, ул. Докукина, 17 стр. 3, офис 15 (пункт выдачи)</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>