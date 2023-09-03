<?php
/* Template name: Корзина */
get_header();
?>

<section class="basket__content container">
    <?php
    // Проверяем наличие кук товаров
    $hasCookies = false;
    foreach ($_COOKIE as $name => $value) {
        if (strpos($name, 'quantity_') === 0) {
            $hasCookies = true;
            break;
        }
    }

    // Если есть куки товаров, отображаем блоки content__basket и content__form
    if ($hasCookies) { ?>
        <div class="content__basket container-basket">
            <div class="basket__title">Заказ</div>
            <div class="basket__body">
                <?php
                // Получаем все куки
                $cookies = $_COOKIE;

                // Обходим каждую куку
                foreach ($cookies as $name => $value) {
                    // Проверяем, является ли кука кукой товара
                    if (strpos($name, 'quantity_') === 0) {
                        // Разделяем название куки и получаем идентификатор товара и массу
                        $cookieParts = explode('_', $name);
                        $dataId = $cookieParts[1];
                        $mass = $cookieParts[2];
                        $measurement = $cookieParts[3];

                        // Получаем количество из значения куки
                        $quantity = intval($value);

                        // Получаем информацию о посте на основе идентификатора
                        $post = get_post($dataId);

                        if ($post) {
                            $postTitle = $post->post_title;

                            $image = '';
                            if (have_rows('catalog-volumes', $dataId)) {
                                while (have_rows('catalog-volumes', $dataId)) {
                                    the_row();
                                    $volume = get_sub_field('volumes-volume');
                                    if ($volume === $mass) {
                                        $image = get_sub_field('volumes-image');
                                        break;
                                    }
                                }
                            }

                            $catalogCode = get_field('catalog-code', $dataId);
                            ?> <div class="body__item" data-name="<?php echo $postTitle ?>" data-code="<?php echo $catalogCode ?>">
                                <div class="item__image">
                                    <?php if (!$image): ?>
                                        <img src="/wp-content/themes/stoil/assets/images/catalog-page/catalog-plug.png">
                                    <?php else: ?>
                                        <img src="<?php echo $image ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="item__item">
                                    <div class="item__info">
                                        <div class="info__name"><?php echo $postTitle ?></div>
                                        <div class="info__code"><?php echo $catalogCode ?></div>
                                    </div>
                                    <div class="item__more-info">
                                        <div class="more-info__volume"
                                             data-mass="<?php echo $mass ?>"
                                             data-measurement="<?php if ($measurement == 0) { ?>0<?php } else if ($measurement == 1) { ?>1<?php } else if ($measurement == 2) { ?>2<?php } ?>"
                                        >
                                            <span><?php echo $mass ?></span>
                                            <?php if ($measurement == 0) { ?>
                                                ?
                                            <?php } else if ($measurement == 1) { ?>
                                                кг.
                                            <?php } else if ($measurement == 2) { ?>
                                                л.
                                            <?php } ?>
                                        </div>
                                        <div class="more-info__quantity" data-id="<?php echo $dataId?>" data-mass="<?php echo $mass ?>" data-measurement="<?php if ($measurement == 0) { ?>0<?php } else if ($measurement == 1) { ?>1<?php } else if ($measurement == 2) { ?>2<?php } ?>">
                                            <a class="quantity__minus" id="minusValue" href="#">-</a>
                                            <div class="quantity__value"><?php echo $quantity ?></div>
                                            <a class="quantity__plus" id="plusValue" href="#">+</a>
                                        </div>
                                    </div>
                                </div>
                                <a class="info__delete" id="deleteBtn" href="#">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 1L8 8M8 8L1 15M8 8L1 1M8 8L15 15" stroke="black" stroke-width="2"/>
                                    </svg>
                                </a>
                            </div> <?php
                        }
                    }
                } ?>
            </div>
        </div>
        <div class="content__form container-basket">
            <div class="form__title">Контактные данные</div>
            <div class="form__body">
                <?php echo do_shortcode('[contact-form-7 id="291" title="Заказ из корзины"]') ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="content__none">
            <div class="none__title">Заказ</div>
            <div class="none__body">
                <div class="body__top">В вашем заказе ничего нет</div>
                <div class="body__middle">Сначала добавьте что-нибудь из каталога</div>
                <a class="body__bottom" href="/catalog/">В каталог</a>
            </div>
        </div>
    <?php } ?>
</section>

<?php
get_footer();
?>
