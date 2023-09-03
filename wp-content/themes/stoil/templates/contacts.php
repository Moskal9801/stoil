<?php
/* Template name: Контакты */
get_header();
?>

    <section class="contacts-contact">
        <div class="contacts-contact__contents container">
            <div class="contents__title">Контакты</div>
            <div class="contents__content">
                <div class="content__image"><img src="<?php the_field( 'contacts-image' ); ?>"></div>
                <div class="content__info">
                    <div class="info__name"><?php the_field( 'contacts-name' ); ?></div>
                    <div class="info__position"><?php the_field( 'contacts-post' ); ?></div>
                    <div class="info__contacts">
                        <a class="contacts__phone" href="tel:<?php echo clearPhone(get_field( 'contacts-phone' ))?>"><?php the_field( 'contacts-phone' ); ?></a>
                        <a class="contacts__mail" href="mailto:<?php the_field( 'contacts-mail' ); ?>"><?php the_field( 'contacts-mail' ); ?></a>
                    </div>
                    <div class="info__adress"><?php the_field( 'contacts-adress' ); ?></div>
                    <a class="info__button open-popup__application" href="#">Задать вопрос</a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>