<a href="<?php the_permalink(); ?>" class="items__item">
    <div class="item__image">
        <?php
        $first_image = '';

        if ( have_rows( 'catalog-volumes' ) ) :
            while ( have_rows( 'catalog-volumes' ) ) : the_row();
                if ( get_sub_field( 'volumes-image' ) ) {
                    $first_image = get_sub_field( 'volumes-image' );
                    break;
                }
            endwhile;
        endif;

        if ( $first_image ) {
            echo '<img src="' . $first_image . '">';
        } else {
            echo '<img src="/wp-content/themes/stoil/assets/images/catalog-page/catalog-plug.png">';
        }
        ?>
    </div>
    <div class="item__base">
        <?php if ( have_rows( 'catalog-info' ) ) : ?>
            <?php while ( have_rows( 'catalog-info' ) ) : the_row(); ?>
                <?php if ( get_sub_field( 'info-name' ) === 'Основа' ) { ?>
                    <?php the_sub_field( 'info-description' ); ?>
                    <?php break; // Прерываем цикл после вывода первой найденной записи ?>
                <?php } ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="item__name"><?php the_title(); ?></div>
    <div class="item__code"><?php the_field( 'catalog-code' ); ?></div>
</a>