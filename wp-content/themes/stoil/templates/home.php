<?php
	/* Template name: Главная */
	get_header();

    function noticeSVG () {
        return '
            <svg width="117" height="129" viewBox="0 0 117 129" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="58.104" cy="58.104" r="58.104" fill="#F6F6F6"/>
                <circle cx="57.5718" cy="57.5708" r="46.9097" fill="#7AB92F"/>
                <rect x="50.2549" y="31.0146" width="14.8537" height="35.1087" rx="7.42685" fill="#F6F6F6"/>
                <circle cx="57.6817" cy="76.252" r="7.42685" fill="#F6F6F6"/>
                <path d="M57.5709 129.001L75.1135 105.013H40.0283L57.5709 129.001Z" fill="#F6F6F6"/>
            </svg>
        ';
    }

    function activeTab () {
        return '
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1902_10492)">
                    <path d="M10.9997 14.6666L14.6663 10.9999M14.6663 10.9999L10.9997 7.33325M14.6663 10.9999H7.33301M20.1663 10.9999C20.1663 16.0625 16.0623 20.1666 10.9997 20.1666C5.93706 20.1666 1.83301 16.0625 1.83301 10.9999C1.83301 5.93731 5.93706 1.83325 10.9997 1.83325C16.0623 1.83325 20.1663 5.93731 20.1663 10.9999Z" stroke="#7AB92F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                    <clipPath id="clip0_1902_10492">
                        <rect width="22" height="22" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        ';
    }
?>

	<section id="home__slider">
		<div class="home__slider-background swiper">
			<div class="swiper-wrapper">
                <?php if ( have_rows( 'banner-slider' ) ) : ?>
                    <?php while ( have_rows( 'banner-slider' ) ) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field( 'slider-banner' ); ?>">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
        <div class="home__slider--content">
            <div class="container">
                <div class="home__slider--content-wrap">
                    <div class="home__slider--fixed-text" data-sal="slide-up" data-sal-duration="1750">
                        <h1><?php the_field( 'banner-title' ); ?></h1>
                        <div class="fixed-text__bubble"><p><?php the_field( 'banner-text' ); ?></p></div>
                    </div>
                    <div class="home__slider-caption--wrap" data-sal="slide-up" data-sal-duration="1750">
                        <div class="home__slider-caption swiper">
                            <div class="swiper-wrapper">
                                <?php if ( have_rows( 'banner-slider' ) ) : ?>
                                    <?php while ( have_rows( 'banner-slider' ) ) : the_row(); ?>
                                        <div class="swiper-slide">
                                            <img src="<?php the_sub_field( 'slider-image' ); ?>">
                                            <div class="home__slider-caption--caption">
                                                <h3><?php the_sub_field( 'slider-title' ); ?></h3>
                                                <p><?php the_sub_field( 'slider-text' ); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="home__slider-btns">
                            <div class="home__slider-btns__wrap">
                                <div class="home__slider-btn prev">
                                    <svg width="7.5" height="15" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.75 1.5L1.25 9L8.75 16.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="home__slider-btn next">
                                    <svg width="7.5" height="15" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 16.5L8.75 9L1.25 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="home__slider-btns__caption"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>

	<section id="home__about">
        <div class="about__background">
            <img src="<?=get_template_directory_uri();?>/assets/images/about-backround.png" alt="О бренде ST OIL">
        </div>
		<div class="container">
            <div class="about__top">
                <div class="about__column">
                    <h2 data-sal="slide-up" data-sal-duration="1750">О бренде <span>ST OIL</span></h2>
                    <div class="about__description" data-sal="slide-up" data-sal-duration="1750"><p><?php the_field( 'brend-text' ); ?></p></div>
                    <div class="about__btn-wrap">
                        <a class="btn btn-default" href="/about" data-sal="slide-up" data-sal-duration="1750">
                            <span>Подробнее о бренде</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="about__bottom">
                <div class="about__bottom-imgs">
                    <img class="about__bottom-img--logo" src="<?=get_template_directory_uri();?>/assets/images/about--logo.svg" alt="О бренде ST OIL">
                    <img class="about__bottom-img" src="<?=get_template_directory_uri();?>/assets/images/about--img.png" alt="О бренде ST OIL">
                </div>
                <div class="about__column">
                    <h2 data-sal="slide-up" data-sal-duration="1750">Подберем <span>аналог</span></h2>
                    <div class="about__description" data-sal="slide-up" data-sal-duration="1750">
                        <p>Просто введите модель Вашей спецтехники или марку масла, которую Вы использовали, и мы подберем подходящие варианты.</p>
                    </div>
                    <div class="about__btn-wrap">
                        <a class="btn btn-default disabled" data-sal="slide-up" data-sal-duration="1750">
                            <span>По марке авто</span>
                        </a>
                        <a class="btn btn-outline disabled" data-sal="slide-up" data-sal-duration="1750">
                            <span>По марке масла</span>
                        </a>
                    </div>
                </div>
                <div class="about__bottom-imgsNotebook">
                    <img class="about__bottom-img" src="<?=get_template_directory_uri();?>/assets/images/about--img.png" alt="О бренде ST OIL">
                </div>
            </div>
		</div>
	</section>

	<section id="home__this">
        <div class="this__background">
            <img src="<?=get_template_directory_uri();?>/assets/images/this-backround.png" alt="ST OIL - это...">
        </div>
		<div class="container">
            <div class="home__title">
                <h2 data-sal="slide-up" data-sal-duration="1750"><span>ST OIL</span> — это...</h2>
            </div>
            <div class="this__list">
                <?php if ( have_rows( 'stoil-wrap' ) ) : ?>
                    <?php while ( have_rows( 'stoil-wrap' ) ) : the_row(); ?>
                        <div class="this__item" data-sal="slide-up" data-sal-duration="1750">
                            <div class="this__item-img">
                                <img class="about__bottom-img" src="<?php the_sub_field( 'wrap-image' ); ?>">
                            </div>
                            <div class="this__item-content">
                                <h3><?php the_sub_field( 'wrap-title' ); ?></h3>
                                <p><?php the_sub_field( 'wrap-text' ); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
		</div>
	</section>

	<section id="home__catalog">
		<div class="container">
            <div class="home__title">
                <h2 data-sal="slide-up" data-sal-duration="1750">Каталог <span>смазочных материалов</span></h2>
            </div>
            <div class="catalog__tabs">
                <div class="catalog__tabs-wrap">
                    <div class="catalog__tabs-left">
                        <div class="tabs__list">
                            <?php $terms = get_terms([
                                'taxonomy' => 'catalog-category',
                                'hide_empty' => false,
                                'parent' => 0
                            ]); ?>

                            <?php if ($terms && !is_wp_error($terms)): ?>
                                <?php $lastCounter = 1; ?>
                                <?php $counter = 1; ?>
                                <?php foreach ($terms as $term) : ?>
                                    <?php $activeClass = ( $counter === 1 ) ? 'active' : ''; ?>
                                    <div class="tabs__item <?php echo $activeClass; ?>" data-term="<?php echo $term->term_id; ?>" data-tab-id="tab-<?php echo $counter; ?>">
                                        <?= activeTab(); ?>
                                        <span><?= esc_html($term->name); ?></span>
                                    </div>
                                    <?php $terms_id[$counter] = $term->term_id; ?>
                                    <?php $counter++; ?>
                                    <?php $lastCounter = $counter; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="catalog__tabs-right">
                        <div class="tabs-content__list">
                            <?php for ($i = 1; $i < $lastCounter; $i++) : ?>
                                <div class="tabs-content__item" data-term="<?php echo $terms_id[$i]; ?>" data-content-id="tab-<?php echo $i; ?>" <?php if ($i > 1) echo 'style="display: none; opacity: 0;"'; ?>>
                                    <?php $taxonomy_prefix = 'catalog-category';
                                    $term_id = $terms_id[$i];
                                    $term_id_prefixed = $taxonomy_prefix .'_'. $term_id; ?>
                                    <div class="tabs-content__item-wrap">
                                        <div class="tabs-content__item-left">
                                            <div class="tabs-content__item-content">
                                                <?php $term = get_term_by('term_id', $term_id, 'catalog-category'); ?>
                                                <h3><?= esc_html($term->name); ?></h3>
                                                <p><?php the_field( 'category-description', $term_id_prefixed ); ?></p>
                                                <ul>
                                                    <?php if ( have_rows( 'category-subcategory', $term_id_prefixed ) ) : ?>
                                                        <?php $counter = 1; ?>
                                                        <?php while ( have_rows( 'category-subcategory', $term_id_prefixed ) ) : the_row(); ?>
                                                            <?php $activeClass = ( $counter === 1 ) ? 'active' : ''; ?>
                                                            <li data-notice-id="notice-<?php echo $counter; ?>" class="<?php echo $activeClass; ?>">
                                                                <span><?php the_sub_field( 'subcategory-title' ); ?></span>
                                                            </li>
                                                            <?php $counter++; ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                                <?php $term_link = get_term_link($term); ?>
                                                <a class="btn btn-default btn1" href="<?php echo esc_url($term_link); ?>"><span>В каталог</span></a>
                                            </div>
                                        </div>
                                        <?php if ( have_rows( 'category-subcategory', $term_id_prefixed ) ) : ?>
                                        <div class="tabs-content__item-right">
                                            <div class="tabs-content__items-notice">
                                                <?php $counter = 1; ?>
                                                <?php while ( have_rows( 'category-subcategory', $term_id_prefixed ) ) : the_row(); ?>
                                                    <?= noticeSVG(); ?>
                                                    <div class="items-notice__item" data-notice-content-id="notice-<?php echo $counter; ?>" <?php if ($counter > 1) echo 'style="display: none; opacity: 0;"'; ?>>
                                                        <p class="item__title"><?php the_sub_field( 'subcategory-title' ); ?></p>
                                                        <p class="item__info"><?php the_sub_field( 'subcategory-description' ); ?></p>
                                                    </div>
                                                    <?php $counter++; ?>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <a class="btn btn-default btn2" href="<?php echo esc_url($term_link); ?>"><span>В каталог</span></a>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>

	<section id="home__experience">
		<div class="container">
            <div class="home__title">
                <h2 data-sal="slide-up" data-sal-duration="1750">Опыт применения <span>ST OIL</span></h2>
                <div class="experience__slider-btn--wrap btn1">
                    <div class="experience__slider-btn prev">
                        <svg width="7.5" height="15" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.75 1.5L1.25 9L8.75 16.5" stroke="#7ab92f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="experience__slider-btn next">
                        <svg width="7.5" height="15" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.25 16.5L8.75 9L1.25 1.5" stroke="#7ab92f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="experience__slider-wrap">
                <div class="experience__slider swiper">
                    <div class="swiper-wrapper">
                        <?php if ( have_rows( 'experience' ) ) : ?>
                            <?php $counter = 1; ?>
                            <?php while ( have_rows( 'experience' ) ) : the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="experience__slide-content">
                                        <div class="experience__slide-col experience__slide-col--left">
                                            <h3><?php the_sub_field( 'experience-title' ); ?></h3>
                                            <?php if (get_sub_field( 'experience-client' )): ?>
                                                <div class="experience__slide-notice">
                                                    <p><?php the_sub_field( 'experience-client' ); ?></p>
                                                </div>
                                            <?php endif;?>
                                            <?php if (get_sub_field( 'experience-problems' )): ?>
                                                <div class="experience__slide-text hide-text">
                                                    <p><?php the_sub_field( 'experience-problems' ); ?></p>
                                                </div>
                                            <?php endif;?>
                                            <div class="btn btn-default btn1" data-popup="exp-<?php echo $counter; ?>">
                                                <span>Подробнее</span>
                                            </div>
                                        </div>
                                        <div class="experience__slide-col experience__slide-col--right">
                                            <img src="<?php the_sub_field( 'experience-image' ); ?>">
                                            <?php if (get_sub_field( 'experience-result' )): ?>
                                                <div class="experience__slide-text">
                                                    <p><?php the_sub_field( 'experience-result' ); ?></p>
                                                </div>
                                            <?php endif;?>
                                            <?php if (get_sub_field( 'experience-problems' )): ?>
                                                <div class="experience__slide-text hide-text">
                                                    <p><?php the_sub_field( 'experience-problems' ); ?></p>
                                                </div>
                                            <?php endif;?>
                                            <div class="btn btn-default btn2" data-popup="exp-<?php echo $counter; ?>">
                                                <span>Подробнее</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $counter++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="experience__managment">
                    <div class="experience__slider-btn--wrap btn2">
                        <div class="experience__slider-btn prev">
                            <svg width="7.5" height="15" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.75 1.5L1.25 9L8.75 16.5" stroke="#7ab92f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="experience__slider-btn next">
                            <svg width="7.5" height="15" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 16.5L8.75 9L1.25 1.5" stroke="#7ab92f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <?php if ( have_rows( 'experience' ) ) : ?>
                    <?php $counter = 1; ?>
                    <?php while ( have_rows( 'experience' ) ) : the_row(); ?>
                        <div class="mfp-hide popup popup-experience exp-<?php echo $counter; ?>-popup">
                            <div class="popup-experience__content">
                                <div class="popup-experience__row">
                                    <div class="popup-experience__column popup-experience__column-radius">
                                        <div class="popup-experience__title">
                                            <h3><?php the_sub_field( 'experience-title' ); ?></h3>
                                        </div>
                                    </div>
                                    <div class="popup-experience__column popup-experience__column-img">
                                        <div class="popup-experience__img">
                                            <img src="<?php the_sub_field( 'experience-image' ); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="popup-experience__row">
                                    <?php if (get_sub_field( 'experience-client' )): ?>
                                    <div class="popup-experience__column">
                                        <div class="popup-experience__block">
                                            <div class="popup-experience__block-title">
                                                <span>Клиент</span>
                                            </div>
                                            <div class="popup-experience__block-text">
                                                <p><?php the_sub_field( 'experience-client' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (get_sub_field( 'experience-problems' )): ?>
                                    <div class="popup-experience__column">
                                        <div class="popup-experience__block">
                                            <div class="popup-experience__block-title">
                                                <span>Проблема</span>
                                            </div>
                                            <div class="popup-experience__block-text">
                                                <p><?php the_sub_field( 'experience-problems' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="popup-experience__row">
                                    <?php if (get_sub_field( 'experience-decision' )): ?>
                                    <div class="popup-experience__column">
                                        <div class="popup-experience__block">
                                            <div class="popup-experience__block-title">
                                                <span>Решение</span>
                                            </div>
                                            <div class="popup-experience__block-text">
                                                <p><?php the_sub_field( 'experience-decision' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (get_sub_field( 'experience-result' )): ?>
                                    <div class="popup-experience__column">
                                        <div class="popup-experience__block">
                                            <div class="popup-experience__block-title">
                                                <span>Результат</span>
                                            </div>
                                            <div class="popup-experience__block-text">
                                                <p><?php the_sub_field( 'experience-result' ); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php if ( have_rows( 'experience-review' ) ) : ?>
                                    <?php while ( have_rows( 'experience-review' ) ) : the_row(); ?>
                                        <div class="popup-experience__review">
                                            <div class="popup-experience__review-wrap">
                                                <div class="popup-experience__review-column">
                                                    <?php if ( get_sub_field( 'review-image' ) ) : ?>
                                                        <img src="<?php the_sub_field( 'review-image' ); ?>" />
                                                    <?php else: ?>
                                                        <img src="<?=get_template_directory_uri();?>/assets/images/avatar.png">
                                                    <?php endif ?>
                                                </div>
                                                <div class="popup-experience__review-column">
                                                    <div class="popup-experience__review-subtitle">
                                                        <p>Отзыв компании</p>
                                                    </div>
                                                    <div class="popup-experience__review-title">
                                                        <p>«<?php the_sub_field( 'review-title' ); ?>»</p>
                                                    </div>
                                                    <div class="popup-experience__review-text">
                                                        <p><?php the_sub_field( 'review-text' ); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popup-experience__close">
                                                <a onclick="$.magnificPopup.close()">Закрыть</a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
		</div>
	</section>

<?php
	get_footer();