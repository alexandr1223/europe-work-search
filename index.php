<?php
/*
Template Name: Головна
*/

get_header() ?>

<body>
    <div class="preloader">
        <div class="preloader__row">
          <div class="preloader__item">
              <img src="<?php bloginfo('template_url');?>/src/img/icon/logo.png" alt="">
          </div>
        </div>
    </div>
    <section class="header">
        <div class="header__cover">
            <div class="menu">
                <div class="container menu__container">
                    <a href="#" class="menu__logo"><img src="<?php bloginfo('template_url');?>/src/img/logo.png" alt="logo"></a> 
                    <div class="menu__humburger">
                        <img src="<?php bloginfo('template_url');?>/src/img/icon/square.svg" alt="menu" class="img-svg">
                    </div>
                    <ul class="menu__list">
                        <li class="menu__item"><a href="#">Вакансії</a></li>
                        <li class="menu__item"><a href="#">Гарантії</a></li>
                        <li class="menu__item"><a href="#">Відгуки</a></li>
                        <li class="menu__item"><a href="#">Контакти</a></li>
                        <li class="menu__item"><a href="#">Партнерам</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu__mobile">
                <div class="menu__mobile--block">
                    <div class="menu__mobile--close">
                        <img src="<?php bloginfo('template_url');?>/src/img/icon/close.svg" alt="close" class="img-svg">
                    </div>
                    <ul class="menu__list menu__list--mobile">
                        <li class="menu__item"><a href="#">Вакансії</a></li>
                        <li class="menu__item"><a href="#">Гарантії</a></li>
                        <li class="menu__item"><a href="#">Відгуки</a></li>
                        <li class="menu__item"><a href="#">Контакти</a></li>
                        <li class="menu__item"><a href="#">Партнерам</a></li>
                    </ul>
                    <div class="menu__social">
                        <ul class="menu__num">
                            <li><a href="tel:+333333333">+38 (098) 25-37-125</a></li>
                            <li><a href="tel:+333333333">+38 (098) 25-37-125</a></li>
                            <li><a href="tel:+333333333">+38 (098) 25-37-125</a></li>
                        </ul>
                        <ul class="menu__links">
                            <li><a href="<?php the_field('link_viber'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/icon/viber.svg" alt="viber" class="img-svg"></a></li>
                            <li><a href="<?php the_field('link_telegram'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/icon/telegram.svg" alt="telegram" class="img-svg"></a></li>
                            <li><a href="<?php the_field('link_instagram'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/icon/instagram.svg" alt="instagram" class="img-svg"></a></li>
                            <li><a href="<?php the_field('link_whatsapp'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/icon/whtasup.svg" alt="whatsup" class="img-svg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container header__container">
                <div class="header__block">
                    <h1 class="title header__title"><?php the_field('title header__title') ?></h1>
                    <h2 class="subtitle header__subtitle"><?php the_field('subtitle header__subtitle'); ?></h2>
                    <ul class="header__social">
                        <li><a href="<?php the_field('link_viber'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/icon/viber.svg" alt="viber" class="img-svg"></a></li>
                        <li><a href="<?php the_field('link_telegram'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/icon/telegram.svg" alt="telegram" class="img-svg"></a></li>
                        <li><a href="<?php the_field('link_instagram'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/icon/instagram.svg" alt="instagram" class="img-svg"></a></li>
                        <li><a href="<?php the_field('link_whatsapp'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/icon/whtasup.svg" alt="whatsup" class="img-svg"></a></li>
                    </ul>
                </div>
                <form action="" class="first-form" method="POST">
                    <h3 class="first-form__title">
                        Залишити заявку
                    </h3>
                    <label for="name">Ім'я:</label>
                    <input class="first-form__input" type="text" name="name" id="name">
                    <label for="phone">Телефон:</label>
                    <input class="first-form__input" type="text" name="phone" id="phone">
                    <button class="btn first-form__btn" type="submit">Надіслати</button>
    
                    <p class="first-form__term">
                        Нажимая на кнопку, вы даете согласие на обработку <a href="#" class="first-form__span">персональных данных</a>
                    </p>
                </form>
            </div>
            <a href="" class="scroll-down">
                <img src="<?php bloginfo('template_url');?>/src/img/icon/arrow.svg" class="img-svg" alt="">
            </a>
        </div>
    </section>

    <section class="services">
        <div class="container services__container">
            <h2 class="title">
                Послуги
            </h2>
            <h3 class="subtitle services__subtitle">
                <?php the_field('subtitle services__subtitle'); ?>
            </h3>
            <div class="services__block">
                <div class="services__item">
                    <div class="services__wrapper">
                        <div class="services__title">
                        <?php the_field('services__title_first'); ?>
                        </div>
                        <div class="services__number">
                            <img src="<?php bloginfo('template_url');?>/src/img/icon/one.svg" alt="" class="img-svg">
                        </div>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__wrapper">
                        <div class="services__title">
                        <?php the_field('services__title_second'); ?>
                        </div>
                        <div class="services__number">
                            <img src="<?php bloginfo('template_url');?>/src/img/icon/two.svg" alt="" class="img-svg">
                        </div>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__wrapper">
                        <div class="services__title">
                        <?php the_field('services__title_third'); ?>
                        </div>
                        <div class="services__number">
                            <img src="<?php bloginfo('template_url');?>/src/img/icon/three.svg" alt="" class="img-svg">
                        </div>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__wrapper">
                        <div class="services__title">
                        <?php the_field('services__title_four'); ?>
                        </div>
                        <div class="services__number">
                            <img src="<?php bloginfo('template_url');?>/src/img/icon/four.svg" alt="" class="img-svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advant">
        <div class="container">
            <h2 class="title advant__title">
                Переваги роботи з нами
            </h2>
            <div class="advant__block">
                <div class="advant__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/contract.svg" alt="contract" class="img-svg">
                    <h3 class="advant__text"><?php the_field('advant__text_first'); ?></h3>
                </div>
                <div class="advant__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/visa.svg" alt="visa" class="img-svg">
                    <h3 class="advant__text"><?php the_field('advant__text_second'); ?></h3>
                </div>
                <div class="advant__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/prescription.svg" alt="" class="img-svg">
                    <h3 class="advant__text"><?php the_field('advant__text_third'); ?></h3>
                </div>
                <div class="advant__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/bribe.svg" alt="bribe" class="img-svg">
                    <h3 class="advant__text"><?php the_field('advant__text_four'); ?></h3>
                </div>
                <div class="advant__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/week.svg" alt="week.svg" class="img-svg">
                    <h3 class="advant__text"><?php the_field('advant__text_fifth'); ?></h3>
                </div>
                <div class="advant__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/worldwide.svg" alt="worldwide" class="img-svg">
                    <h3 class="advant__text"><?php the_field('advant__text_sixth'); ?></h3>
                </div>
            </div>
        </div>
    </section>
    
    <section class="vacancies">
        <div class="container">
            <h2 class="title">
                Вакансії
            </h2>
            <h3 class="subtitle">
                Переходь за посиланням та обирай вакансію 
            </h3>
            <div class="vacancies__block">
                <a href="#" class="vacancies__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/sweden.jpg" alt="">
                    <div class="vacancies__wrapper"></div>
                    <div class="vacancies__text">
                        Швеція
                    </div>
                </a>
                <a href="#" class="vacancies__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/england.jpg" alt="">
                    <div class="vacancies__wrapper"></div>
                    <div class="vacancies__text">
                        Англія
                    </div>
                </a>
                <a href="#" class="vacancies__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/germany.jpg" alt="">
                    <div class="vacancies__wrapper"></div>
                    <div class="vacancies__text">
                        Німеччина
                    </div>
                </a>
                <a href="#" class="vacancies__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/belgium.jpg" alt="">
                    <div class="vacancies__wrapper"></div>
                    <div class="vacancies__text">
                        Бельгія
                    </div>
                </a>
                <a href="#" class="vacancies__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/finland.jpg" alt="">
                    <div class="vacancies__wrapper"></div>
                    <div class="vacancies__text">
                        Фінлядндія
                    </div>
                </a>
                <a href="#" class="vacancies__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/netherland.jpg" alt="">
                    <div class="vacancies__wrapper"></div>
                    <div class="vacancies__text">
                        Нідерланди
                    </div>
                </a>
            </div>
            <a href="#" class="btn vacancies__btn">
                Всі вакансії
            </a>
        </div>
    </section>
    
    <section class="consult">
        <div class="consult__wrapper"></div>
        <div class="container consult__container">
            <h2 class="title consult__title">
                Потрібна консультація з працевлаштування
            </h2>
            <h3 class="subtitle consult__subtitle">
                Залиште заявку та наш оператор зв’яжеться з вами протягом 15 хвилин
            </h3>
            <form action="" method="POST" class="consult-form">
                <div class="consult-form__block">
                    <label for="consult-name">Ім'я:</label>
                    <input type="text" name="name" id="consult-name" class="consult-form__input">
                </div>
                <div class="consult-form__block">
                    <label for="consult-phone">Телефон:</label>
                    <input type="text" name="phone" id="consult-phone" class="consult-form__input">
                </div>
                <button type="submit" class="btn consult-form__btn">
                    Надіслати
                </button>
            </form>
        </div>
    </section>

    <section class="new">
        <div class="container">
            <div class="new__title title">
                Хочете ознайомитись з
                новими вакансіями?
            </div>
            <div class="new__subtitle subtitle">
                Наші  соціальні мережі з вакансіями
            </div>
            <div class="new__block">
                <div class="new__item">
                    <div class="new__text">
                        Щодня ми ведемо пошук нових вакансій, перевіряємо якість та умови наданої роботи,  допомагаємо великій кількості людей знайти високооплачувану роботу в країнах Європи
                    </div>
                    <div class="new__social">
                        <a href="<?php the_field('link_viber'); ?>"><img class="img-svg" src="<?php bloginfo('template_url');?>/src/img/icon/viber-new.svg" alt=""></a>
                        <a href="<?php the_field('link_telegram'); ?>"><img class="img-svg" src="<?php bloginfo('template_url');?>/src/img/icon/telegram-new.svg" alt=""></a>
                        <a href="<?php the_field('link_whatsapp'); ?>"><img class="img-svg" src="<?php bloginfo('template_url');?>/src/img/icon/whatsup-new.svg" alt=""></a>
                    </div>
                    <div class="new__social--bottom">
                        <a href="<?php the_field('link_workua'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/workua.jpg" alt=""></a>
                        <a href="<?php the_field('link_olx'); ?>"><img src="<?php bloginfo('template_url');?>/src/img/olx.jpg" alt=""></a>
                    </div>
                </div>
                <div class="new__item new__item--hide">
                    <img src="<?php bloginfo('template_url');?>/src/img/newimg.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="work">
        <div class="container">
            <h2 class="title work__title">
                Як ми працюємо?
            </h2>
            <div class="work__block">
                <div class="work__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/one.svg" alt="1" class="img-svg">
                    <span class="title">Зв'язуємося особисто</span>
                </div>
                <div class="work__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/two.svg" alt="2" class="img-svg">
                    <span class="title">Зустрічаємося у нас в офісі</span>
                </div>
                <div class="work__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/three.svg" alt="3" class="img-svg">
                    <span class="title">Вибираємо актуальні вакансії</span>
                </div>
                <div class="work__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/four.svg" alt="4" class="img-svg">
                    <span class="title">Укладаємо юридичний договір</span>
                </div>
                <div class="work__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/five.svg" alt="5" class="img-svg">
                    <span class="title">Готуємо всі необхідні документи</span>
                </div>
                <div class="work__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/six.svg" alt="6" class="img-svg">
                    <span class="title">Призначаємо дату виїзду на вакансію</span>
                </div>
            </div>
        </div>
    </section>

    <section class="review">
        <div class="container">
            <h2 class="review-title title">
                Відгуки
            </h2>
            <div class="review__slider">
                <img src="<?php bloginfo('template_url');?>/src/img/review.jpg" alt="" class="review__item">
                <img src="<?php bloginfo('template_url');?>/src/img/review.jpg" alt="" class="review__item">
                <img src="<?php bloginfo('template_url');?>/src/img/review.jpg" alt="" class="review__item">
                <img src="<?php bloginfo('template_url');?>/src/img/review.jpg" alt="" class="review__item">
            </div>
        </div>
    </section>
    <section class="warranty">
        <div class="container">
            <h2 class="warranty__title title">
                Гарантії
            </h2>
            <div class="warranty__block">
                <div class="warranty__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/licensing.svg" alt="license" class="img-svg">
                    <h3 class="warranty__block--title">
                        Ліцензія
                    </h3>
                    <h4 class="warranty__block--subtitle">
                        Працюємо згідно ліцензії # 666, все офіційно та легально.
                    </h4>
                </div>
                <div class="warranty__item">
                    <img src="<?php bloginfo('template_url');?>/src/img/icon/contract-warranty.svg" alt="contact" class="img-svg">
                    <h3 class="warranty__block--title">
                        Договір
                    </h3>
                    <h4 class="warranty__block--subtitle">
                        Всі відносини між особами закріплюються юридичним договором.
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>