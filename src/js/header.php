<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(  );?>
    <title>Робота в Європі</title>
</head>
<body>
    <div class="preloader">
        <div class="preloader__row">
          <div class="preloader__item">
              <img class="preloader__img" src="<?php bloginfo( 'template_url' ) ?>/src/img/logo.png" alt="">
          </div>
        </div>
    </div>
    <section class="header <?php if( is_front_page() ) : ?>header--other<?php elseif( is_page( 92 ) ) : ?>header--thanks<?php endif; ?>">
        <div class="header__cover header__cover--other">
            <div class="menu">
                <div class="container menu__container">
                    <a href="/" class="menu__logo"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/logo.png" alt="logo"></a> 
                    <ul class="menu__num">
                        <div class="menu__num--block">
                            <li class="menu__num--active menu__num--first"><img class="img-svg" src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/call.svg" alt=""><a href="tel:333333333">+38 (098) 25-37-125</a></li>
                            <li><img class="img-svg" src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/call.svg" alt=""><a href="tel:333333333">+38 (098) 25-37-125</a></li>
                            <li><img class="img-svg" src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/call.svg" alt=""><a href="tel:380982537125">+38 (098) 25-37-125</a></li>
                        </div>
                        <div class="menu__num--tr">
                            <img class="img-svg" src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/bleach.svg" alt="">
                        </div>
                    </ul>
                    <div class="menu__humburger">
                        <img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/square.svg" alt="menu" class="img-svg">
                    </div>
                    <?php if( is_front_page() ) : ?>
					<ul class="menu__list">
                        <li class="menu__item"><a href="#visa">Візи</a></li>
                        <li class="menu__item"><a href="#vacancies">Вакансії</a></li>
                        <li class="menu__item"><a href="#garant">Гарантії</a></li>
                        <li class="menu__item"><a href="#review">Відгуки</a></li>
                        <li class="menu__item"><a href="#news">Статті</a></li>
                        <li class="menu__item"><a href="#partnership">Partnership</a></li>
                        <li class="menu__item"><a href="#about">Про нас</a></li>
                        <li class="menu__item"><a href="#contact">Контакти</a></li>
                    </ul>
					<?php else : ?>
						<ul class="menu__list">
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#visa">Візи</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#vacancies">Вакансії</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#garant">Гарантії</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#review">Відгуки</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#news">Статті</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#partnership">Partnership</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#about">Про нас</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#contact">Контакти</a></li>
                    </ul>
					<?php endif; ?>
                </div>
            </div>
            <div class="menu__mobile">
                <div class="menu__mobile--block">
                    <div class="menu__mobile--close">
                        <img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/close.svg" alt="close" class="img-svg">
                    </div>
					<?php if( is_front_page() ) : ?>
					<ul class="menu__list menu__list--mobile">
                        <li class="menu__item"><a href="#visa">Візи</a></li>
                        <li class="menu__item"><a href="#vacancies">Вакансії</a></li>
                        <li class="menu__item"><a href="#garant">Гарантії</a></li>
                        <li class="menu__item"><a href="#review">Відгуки</a></li>
                        <li class="menu__item"><a href="#news">Статті</a></li>
                        <li class="menu__item"><a href="#partnership">Partnership</a></li>
                        <li class="menu__item"><a href="#about">Про нас</a></li>
                        <li class="menu__item"><a href="#contact">Контакти</a></li>
                    </ul>
					<?php else : ?>
					<ul class="menu__list menu__list--mobile">
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#visa">Візи</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#vacancies">Вакансії</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#garant">Гарантії</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#review">Відгуки</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#news">Статті</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#partnership">Partnership</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#about">Про нас</a></li>
                        <li class="menu__item"><a href="<?php echo get_home_url(); ?>#contact">Контакти</a></li>
                    </ul>
					<?php endif; ?>
                    <div class="menu__social">
                        <ul class="menu__links">
                            <li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/viber.svg" alt="viber" class="img-svg"></a></li>
                            <li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/telegram.svg" alt="telegram" class="img-svg"></a></li>
                            <li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/instagram.svg" alt="instagram" class="img-svg"></a></li>
                            <li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/whtasup.svg" alt="whatsup" class="img-svg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<?php if( is_page( 92 ) ) : ?>
			 <div class="container header__container">
                <div class="header__block header__block--thanks">
                    <h1 class="title header__title header__title--thanks">Дякуємо за <br> вашу заявку</h1>
                    <h2 class="subtitle header__subtitle header__subtitle--thanks">наш менеджер зв’яжеться з вами в найближчий час</h2>
                    <ul class="header__social header__social--thanks">
                        <li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/viber.svg" alt="viber" class="img-svg"></a></li>
                        <li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/telegram.svg" alt="telegram" class="img-svg"></a></li>
                        <li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/instagram.svg" alt="instagram" class="img-svg"></a></li>
                        <li><a href="#"><img src="<?php bloginfo( 'template_url' ) ?>/src/img/icon/whtasup.svg" alt="whatsup" class="img-svg"></a></li>
                    </ul>
                </div>
            </div>
			<?php endif; ?>
        </div>
    </section>