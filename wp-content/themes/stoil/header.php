<!DOCTYPE html>
<html lang="ru">
    
    <head>
        <meta charset="utf-8">
        <meta content='true' name='HandheldFriendly'/>
        <meta content='width' name='MobileOptimized'/>
        <meta content='yes' name='apple-mobile-web-app-capable'/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <? wp_head(); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    </head>

    <body class="<?php if ( is_front_page() ): ?>home
                <?php elseif ( is_page('about') ): ?>about
                <?php elseif ( is_archive() ): ?>archive-page
                <?php elseif ( is_single() == 'catalog' ): ?>single-page
                <?php elseif ( is_page('service') ): ?>services
                <?php elseif ( is_page('to-buyers') ): ?>buyers
                <?php elseif ( is_page('contacts') ): ?>contacts
                <?php elseif ( is_page('basket') ): ?>basket
                <?php elseif ( is_404() ): ?>error-404
                <?php else: ?>inner-page<?php endif; ?>">

        <header>
            <div class="header-header" id="headerActive">
                <div class="container">
                    <div class="header__desktop">
                        <div class="header__top">
                            <div class="header__logo">
                                <a href="/" rel="noindex nofollow">
                                    <img src="<?=get_template_directory_uri();?>/assets/images/logo.svg" alt="<?=bloginfo('name');?>" width="127" height="63">
                                </a>
                            </div>
                            <div class="header__cart">
                                <div class="basket__all"></div>
                                <a href="/basket/">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 1H5.34725L7.11493 4.88891M7.11493 4.88891L12.6389 17.0417H28.1946L35.0002 4.88891H7.11493Z" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M12.6389 17.0412L8.75 24.819H33.0557" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                                        <circle cx="12.6389" cy="32.111" r="2.88891" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                                        <circle cx="27.2209" cy="32.111" r="2.88891" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="header__bottom">
                            <nav>
                                <? wp_nav_menu('menu=2'); ?>
                            </nav>
                            <div class="header__btn-wrap btn-wrap">
                                <div class="btn btn-outline btn-small open-popup__diller">
                                    <span>Стать дилером</span>
                                </div>
                                <a href="<?php the_permalink(522); ?>" class="btn btn-outline btn-small">
                                    <span>Подобрать масло</span>
                                </a>
                                <div class="btn btn-default open-popup__application">
                                    <span>Заказать</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__mobile" id="headerMobile">
                        <a class="mobile__logo" href="/">
                            <img src="<?=get_template_directory_uri();?>/assets/images/logo.svg">
                        </a>
                        <a class="mobile__logo-active" href="/">
                            <img src="<?=get_template_directory_uri();?>/assets/images/logo--footer.svg">
                        </a>
                        <div class="mobile__content">
                            <a class="content__order open-popup__application">Заказать</a>
                            <a class="content__basket" href="/basket">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 1H3.5139L4.67553 3.55557M4.67553 3.55557L8.30559 11.5417H18.5279L23.0001 3.55557H4.67553Z" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                                    <path d="M8.30557 11.541L5.75 16.6521H21.7223" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                                    <circle cx="8.30557" cy="21.4442" r="1.55557" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                                    <circle cx="17.8878" cy="21.4442" r="1.55557" stroke="black" stroke-width="2" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a class="content__burger" id="hamburger-icon" href="#">
                                <span class="line line-1"></span>
                                <span class="line line-2"></span>
                                <span class="line line-3"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu" id="headerMenu">
                <div class="container">
                    <div class="menu__orders">
                        <a class="orders__diller open-popup__diller" href="#">Стать дилером</a>
                        <a class="orders__oil" href="<?php the_permalink(522); ?>">Подобрать масло</a>
                    </div>
                    <div class="menu__nav">
                        <?php wp_nav_menu('menu=2'); ?>
                    </div>
                    <div class="menu__contacts">
                        <div class="contacts__questions">
                            <span>Остались вопросы?</span><br>Спросите у нашего эксперта!
                        </div>
                        <div class="contacts__socials">
                            <a class="socials__whatsapp" href="#">
                                <p>WhatsApp</p>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.806641" width="20" height="20" rx="10" fill="white"/>
                                    <path d="M14.7701 6.03125C13.7822 5.04687 12.4652 4.5 11.0749 4.5C8.18469 4.5 5.84323 6.83333 5.84323 9.71354C5.84323 10.625 6.09932 11.5365 6.53835 12.3021L5.80664 15L8.58713 14.2708C9.35542 14.6719 10.1969 14.8906 11.0749 14.8906C13.9652 14.8906 16.3066 12.5573 16.3066 9.67708C16.2701 8.32813 15.7579 7.01562 14.7701 6.03125ZM13.5993 11.5729C13.4896 11.8646 12.9774 12.1562 12.7213 12.1927C12.5018 12.2292 12.2091 12.2292 11.9164 12.1562C11.7335 12.0833 11.4774 12.0104 11.1847 11.8646C9.86762 11.3177 9.02615 10.0052 8.95298 9.89583C8.87981 9.82292 8.4042 9.20312 8.4042 8.54687C8.4042 7.89062 8.73347 7.59896 8.84323 7.45312C8.95298 7.30729 9.09932 7.30729 9.20908 7.30729C9.28225 7.30729 9.392 7.30729 9.46518 7.30729C9.53835 7.30729 9.6481 7.27083 9.75786 7.52604C9.86762 7.78125 10.1237 8.4375 10.1603 8.47396C10.1969 8.54688 10.1969 8.61979 10.1603 8.69271C10.1237 8.76562 10.0871 8.83854 10.014 8.91146C9.94079 8.98437 9.86761 9.09375 9.83103 9.13021C9.75786 9.20312 9.68469 9.27604 9.75786 9.38542C9.83103 9.53125 10.0871 9.93229 10.4896 10.2969C11.0018 10.7344 11.4042 10.8802 11.5505 10.9531C11.6969 11.026 11.7701 10.9896 11.8432 10.9167C11.9164 10.8437 12.1725 10.5521 12.2457 10.4063C12.3188 10.2604 12.4286 10.2969 12.5383 10.3333C12.6481 10.3698 13.3066 10.6979 13.4164 10.7708C13.5627 10.8438 13.6359 10.8802 13.6725 10.9167C13.7091 11.026 13.7091 11.2812 13.5993 11.5729Z" fill="#7AB92F"/>
                                </svg>
                            </a>
                            <a class="socials__telegram" href="#">
                                <p>Telegram</p>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.580078" width="20" height="20" rx="10" fill="white"/>
                                    <path d="M14.5801 6.30111L13.0774 14.1461C13.0774 14.1461 12.8671 14.6901 12.2895 14.4292L8.82237 11.6763L8.80629 11.6682C9.27462 11.2327 12.9063 7.85133 13.065 7.69806C13.3107 7.46068 13.1582 7.31936 12.8729 7.49868L7.50847 11.0265L5.4389 10.3054C5.4389 10.3054 5.11321 10.1854 5.08187 9.92455C5.05013 9.66327 5.44962 9.52195 5.44962 9.52195L13.8866 6.09447C13.8866 6.09447 14.5801 5.77896 14.5801 6.30111Z" fill="#7AB92F"/>
                                </svg>
                            </a>
                        </div>
                        <a class="contacts__phone" href="tel:+74212464232">+7 (4212) 46-42-32</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="popup__application popup-application mfp-hide mfp-with-anim">
            <div class="application__closed mfp-close">
                <svg class="mfp-close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="mfp-close" d="M15 1L8 8M8 8L1 15M8 8L1 1M8 8L15 15" stroke="black" stroke-width="2"/>
                </svg>
            </div>
            <div class="application__info">
                <div class="info__title">Оставить заявку</div>
                <div class="info__form"><?php echo do_shortcode('[contact-form-7 id="315" title="Оставить заявку"]')?></div>
            </div>
        </div>

        <div class="popup__diller popup-diller mfp-hide mfp-with-anim">
            <div class="diller__closed mfp-close">
                <svg class="mfp-close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="mfp-close" d="M15 1L8 8M8 8L1 15M8 8L1 1M8 8L15 15" stroke="black" stroke-width="2"/>
                </svg>
            </div>
            <div class="diller__info">
                <div class="info__title">Стать дилером</div>
                <div class="info__form"><?php echo do_shortcode('[contact-form-7 id="314" title="Стать дилером"]')?></div>
            </div>
        </div>

        <div class="popup__sent mfp-hide mfp-with-anim">
            <div class="sent__closed mfp-close">
                <svg class="mfp-close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="mfp-close" d="M15 1L8 8M8 8L1 15M8 8L1 1M8 8L15 15" stroke="black" stroke-width="2"/>
                </svg>
            </div>
            <div class="sent__info">
                <div class="info__icon">
                    <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="65" cy="65" r="65" fill="#7AB92F"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.9925 72.965L88.9575 38L102 51.0425L53.9925 99.05L28 73.0575L41.0425 60.015L53.9925 72.965ZM93.2667 51.0425L88.95 46.7259L53.985 81.6909L41.035 68.7409L36.7183 73.0575L53.985 90.3242L93.2667 51.0425Z" fill="white"/>
                    </svg>
                </div>
                <p class="info__top">Заявка отправлена</p>
                <p class="info__bottom">Наш специалист свяжется<br>с вами в ближайшее время!</p>
            </div>
        </div>

        <div class="popup__failed mfp-hide mfp-with-anim">
            <div class="sent__closed mfp-close">
                <svg class="mfp-close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="mfp-close" d="M15 1L8 8M8 8L1 15M8 8L1 1M8 8L15 15" stroke="black" stroke-width="2"/>
                </svg>
            </div>
            <div class="sent__info">
                <div class="info__icon">
                    <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="65" cy="65" r="65" fill="#F03E3E"/>
                        <path d="M85.822 36L65 56.822L44.178 36L36 44.178L56.822 65L36 85.822L44.178 94L65 73.178L85.822 94L94 85.822L73.178 65L94 44.178L85.822 36Z" fill="white"/>
                    </svg>
                </div>
                <p class="info__top">Что-то пошло не так</p>
                <p class="info__bottom">Попробуйте еще раз<br>или свяжитесь с нами по телефону</p>
                <a class="info__phone" href="tel:+74212464232">+7 (4212) 46-42-32</a>
            </div>
        </div>
