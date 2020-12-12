<footer class="footer">
        <div class="consult">
            <div class="consult__wrapper"></div>
            <div class="container consult__container">
                <h2 class="title consult__title">
                    Потрібна консультація з працевлаштування
                </h2>
                <h3 class="subtitle consult__subtitle">
                    Залиште заявку та наш оператор зв’яжеться з вами протягом 15 хвилин
                </h3>
                <form action="" method="POST" class="consult-form consult-form--footer">
                    <div class="consult-form__block">
                        <label for="footer-name">Ім'я:</label>
                        <input type="text" name="name" id="footer-name" class="consult-form__input">
                    </div>
                    <div class="consult-form__block">
                        <label for="footer-phone">Телефон:</label>
                        <input type="text" name="phone" id="footer-phone" class="consult-form__input">
                    </div>
                    <button type="submit" class="btn consult-form__btn">
                        Надіслати
                    </button>
                </form>

                <h2 class="title consult__title">
                    Наші контакти
                </h2>
                <div class="footer__block">
                    <div class="footer__item">
                        <span>
                            г. Киев, ул. Беломорская, 1, Арт-завод Платформа
                            (метро Лесная)
                        </span>
                    </div>
                    <div class="footer__item">
                        <a class="footer__logo" href="#"><img src="img/logo.png" alt="logo"></a>
                    </div>
                    <div class="footer__item">
                        <ul class="footer__num">
                            <li><a href="tel:+333333333">+38 (098) 25-37-125</a></li>
                            <li><a href="tel:+333333333">+38 (098) 25-37-125</a></li>
                            <li><a href="tel:+333333333">+38 (098) 25-37-125</a></li>
                        </ul>
                        <ul class="footer__social">
                            <li><a href="#"><img src="img/icon/viber.svg" alt="viber" class="img-svg"></a></li>
                            <li><a href="#"><img src="img/icon/telegram.svg" alt="telegram" class="img-svg"></a></li>
                            <li><a href="#"><img src="img/icon/instagram.svg" alt="instagram" class="img-svg"></a></li>
                            <li><a href="#"><img src="img/icon/whtasup.svg" alt="whatsup" class="img-svg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(  );?>
</body>
</html>