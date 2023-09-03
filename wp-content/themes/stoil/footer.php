        <footer>
            <div class="container" data-sal="slide-up" data-sal-duration="1750">
                <div class="footer__rows">
                    <div class="footer__top">
                        <div class="footer__text">
                            <p><span>Остались вопросы?</span><br>Спросите у нашего эксперта!</p>
                        </div>
                        <div class="footer__contacts">
                            <div class="footer__contacts-btn btn-wrap">
                                <a class="btn btn-default btn-small" href="https://wa.me/<?php echo clearPhone(get_field( 'contacts-phone', 'option' ))?>">
                                    <span>WhatsApp</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="white"/>
                                        <path d="M13.9634 6.03125C12.9756 5.04687 11.6585 4.5 10.2683 4.5C7.37805 4.5 5.03658 6.83333 5.03658 9.71354C5.03658 10.625 5.29268 11.5365 5.73171 12.3021L5 15L7.78049 14.2708C8.54878 14.6719 9.39024 14.8906 10.2683 14.8906C13.1585 14.8906 15.5 12.5573 15.5 9.67708C15.4634 8.32813 14.9512 7.01562 13.9634 6.03125ZM12.7927 11.5729C12.6829 11.8646 12.1707 12.1562 11.9146 12.1927C11.6951 12.2292 11.4024 12.2292 11.1098 12.1562C10.9268 12.0833 10.6707 12.0104 10.378 11.8646C9.06098 11.3177 8.21951 10.0052 8.14634 9.89583C8.07317 9.82292 7.59756 9.20312 7.59756 8.54687C7.59756 7.89062 7.92683 7.59896 8.03658 7.45312C8.14634 7.30729 8.29268 7.30729 8.40244 7.30729C8.47561 7.30729 8.58536 7.30729 8.65854 7.30729C8.73171 7.30729 8.84146 7.27083 8.95122 7.52604C9.06098 7.78125 9.31707 8.4375 9.35366 8.47396C9.39024 8.54688 9.39024 8.61979 9.35366 8.69271C9.31707 8.76562 9.28049 8.83854 9.20732 8.91146C9.13414 8.98437 9.06097 9.09375 9.02439 9.13021C8.95122 9.20312 8.87805 9.27604 8.95122 9.38542C9.02439 9.53125 9.28049 9.93229 9.68293 10.2969C10.1951 10.7344 10.5976 10.8802 10.7439 10.9531C10.8902 11.026 10.9634 10.9896 11.0366 10.9167C11.1098 10.8437 11.3659 10.5521 11.439 10.4063C11.5122 10.2604 11.622 10.2969 11.7317 10.3333C11.8415 10.3698 12.5 10.6979 12.6098 10.7708C12.7561 10.8438 12.8293 10.8802 12.8659 10.9167C12.9024 11.026 12.9024 11.2812 12.7927 11.5729Z" fill="#7AB92F"/>
                                    </svg>
                                </a>
                                <a class="btn btn-default btn-small" href="https://t.me/<?php echo clearPhone(get_field( 'contacts-phone', 'option' ))?>">
                                    <span>Telegram</span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="white"/>
                                        <path d="M14 6.30111L12.4973 14.1461C12.4973 14.1461 12.287 14.6901 11.7094 14.4292L8.24229 11.6763L8.22621 11.6682C8.69454 11.2327 12.3262 7.85133 12.4849 7.69806C12.7306 7.46068 12.5781 7.31936 12.2928 7.49868L6.9284 11.0265L4.85882 10.3054C4.85882 10.3054 4.53313 10.1854 4.5018 9.92455C4.47005 9.66327 4.86954 9.52195 4.86954 9.52195L13.3066 6.09447C13.3066 6.09447 14 5.77896 14 6.30111Z" fill="#7AB92F"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="footer__contacts-phones">
                                <a href="tel:<?php echo clearPhone(get_field( 'contacts-phone', 'option' ))?>"><?php the_field( 'contacts-phone', 'option' ); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bottom">
                        <div class="footer__logo">
                            <a href="/" rel="nofollow noindex">
                                <img src="<?=get_template_directory_uri();?>/assets/images/logo--footer.svg" alt="<?=bloginfo('name');?>" width="140" height="69">
                            </a>
                        </div>
                        <nav class="footer__nav">
                            <? wp_nav_menu('menu=3'); ?>
                        </nav>
                    </div>
                    <div class="footer__copyrights">
                        <div class="footer__left">
                            <p>2019-<?= date("Y") ?> &copy ST Oil</p>
                        </div>
                        <div class="footer__center">
                            <p><a class="" href="/privacy-policy">Пользовательское соглашение</a></p>
                        </div>
                        <div class="footer__right">
                            <p>Сайт сделал: <a class="catlink" href="https://01cat.ru/" target="_blank" rel="nofollow">Двоичный кот</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            if (window.innerWidth > 768) {
                sal({
                    threshold: .2,
                });
            }
        </script>
    </body>
    <? wp_footer(); ?>
</html>