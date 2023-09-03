<?php
/* Template name: Сервис */
get_header();
?>

    <section class="services-service">
        <div class="services-service__contents container">
            <div class="contents__info">
                <div class="info__left-content">
                    <div class="left-content__title">Сервис</div>
                    <div class="left-content__text"><?php the_field( 'service-info' ); ?></div>
                </div>
                <div class="info__right-content">
                    <img src="<?php the_field( 'service-image' ); ?>">
                </div>
            </div>
            <div class="contents__advantages">
                <?php if ( have_rows( 'service-advantages' ) ) : ?>
                    <?php while ( have_rows( 'service-advantages' ) ) : the_row(); ?>
                        <div class="advantages__advantage">
                            <div class="advantage__title"><?php the_sub_field( 'advantages-title' ); ?></div>
                            <div class="advantage__texts">
                                <?php if ( have_rows( 'advantages-advantage' ) ) : ?>
                                    <?php while ( have_rows( 'advantages-advantage' ) ) : the_row(); ?>
                                        <div class="texts__text">
                                            <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2" r="2" fill="#7AB92F"/>
                                            </svg>
                                            <p><?php the_sub_field( 'advantages-advantage' ); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
