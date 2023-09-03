<?php
get_header();
?>

    <section class="single-catalog__body"  data-id="<?php echo get_the_ID() ?>">
        <div class="body__contents container">
            <div class="contents__left-content">
                <a class="left-content__back" href="/catalog/">← В каталог</a>
                <div class="left-content__images">
                    <?php if ( have_rows( 'catalog-volumes' ) ) : ?>
                        <?php $counter = 1; ?>
                        <?php while ( have_rows( 'catalog-volumes' ) ) : the_row(); ?>
                            <?php $volumeClass = ( $counter === 1 ) ? 'active' : ''; ?>
                                <?php if(get_sub_field( 'volumes-image' )) { ?>
                                    <img class="<?php echo $volumeClass; ?>" src="<?php the_sub_field( 'volumes-image' ); ?>" data-volume="volume-<?php echo $counter; ?>">
                                <?php } else { ?>
                                    <img class="<?php echo $volumeClass; ?>" src="/wp-content/themes/stoil/assets/images/catalog-page/catalog-plug.png" data-volume="volume-<?php echo $counter; ?>">
                                <?php } ?>
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="contents__right-content">
                <div class="right-content__main-info">
                    <div class="main-info__name"><?php the_title()?></div>
                    <div class="main-info__code"><?php the_field( 'catalog-code' ); ?></div>
                    <div class="main-info__application">
                        <div class="application__title">ПРИМЕНЕНИЕ</div>
                        <div class="application__info"><?php the_field( 'catalog-application' ); ?></div>
                        <a class="application__more" href="#" id="moreBtn">
                            <p>Развернуть</p>
                            <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.999839 1.00082L7 7.00098L13.0002 1.00082" stroke="black" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                    <div class="main-info__buttons">
                        <div class="buttons__volumes">
                            <?php if ( have_rows( 'catalog-volumes' ) ) : ?>
                                <?php $counter = 1; ?>
                                <?php while ( have_rows( 'catalog-volumes' ) ) : the_row(); ?>
                                    <?php $volumeClass = ( $counter === 1 ) ? 'active' : ''; ?>
                                        <?php if(get_sub_field( 'volumes-volume' )) { ?>
                                        <a class="volumes__volume <?php echo $volumeClass; ?>"
                                           href="#"
                                           data-volume="volume-<?php echo $counter; ?>"
                                           data-measurement="<?php if ( get_sub_field( 'volumes-measurement' ) == 1 ) : ?>1<?php else : ?>2<?php endif; ?>"
                                        >
                                            <span><?php the_sub_field( 'volumes-volume' ); ?></span>
                                            <?php if ( get_sub_field( 'volumes-measurement' ) == 1 ) : ?>
                                                <?php echo 'кг.'; ?>
                                            <?php else : ?>
                                                <?php echo 'л.'; ?>
                                            <?php endif; ?>
                                        </a>
                                        <?php } else { ?>
                                            <a class="volumes__volume <?php echo $volumeClass; ?>" href="#" data-volume="volume-<?php echo $counter; ?>" data-measurement="0">-</a>
                                        <?php } ?>
                                    <?php $counter++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <a id="addToBasket" class="buttons__basket" href="#">В корзину</a>
                    </div>
                </div>
                <div class="right-content__more-info howHeightContents">
                    <a class="more-info__title howHeightButtons" href="#">
                        <p>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</p>
                        <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 13L12 2L0.999999 13" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                    <div class="more-info__body howHeightContent">
                        <?php if ( have_rows( 'catalog-info' ) ) : ?>
                            <?php while ( have_rows( 'catalog-info' ) ) : the_row(); ?>
                                <div class="body__info">
                                    <div class="info__title"> <?php the_sub_field( 'info-name' ); ?></div>
                                    <div class="info__text"><?php the_sub_field( 'info-description' ); ?></div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ( have_rows( 'catalog-analogs' ) ) : ?>
                <div class="right-content__analogs-info howHeightContents">
                    <a class="analogs-info__title howHeightButtons" href="#">
                        <p>АНАЛОГИ</p>
                        <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 13L12 2L0.999999 13" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                    <div class="analogs-info__body howHeightContent">
                        <?php while ( have_rows( 'catalog-analogs' ) ) : the_row(); ?>
                            <?php $analogs_analogue = get_sub_field( 'analogs-analogue' ); ?>
                            <?php if ( $analogs_analogue ) : ?>
                                <?php $post = $analogs_analogue; ?>
                                <?php setup_postdata( $post ); ?>
                                <div class="body__item">
                                    <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2" cy="2" r="2" fill="#7AB92F"/>
                                    </svg>
                                    <p><?php the_title(); ?></p>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ( have_rows( 'catalog-documents' ) ) : ?>
                    <div class="right-content__documents-info howHeightContents">
                        <a class="documents-info__title howHeightButtons" href="#">
                            <p>ДОКУМЕНТ</p>
                            <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23 13L12 2L0.999999 13" stroke="black" stroke-width="2"/>
                            </svg>
                        </a>
                        <div class="documents-info__body howHeightContent">
                            <?php while ( have_rows( 'catalog-documents' ) ) : the_row(); ?>
                                <?php if ( get_sub_field( 'documents-document' ) ) : ?>
                                    <a href="<?php the_sub_field( 'documents-document' ); ?>"><?php the_sub_field( 'documents-name' ); ?></a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
