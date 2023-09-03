<?php
$post_type = 'catalog';
$taxonomy = 'catalog-category';
$object = get_queried_object();

if ($args['term']) {
    $term = $args['term'];
} else {
    $term = false;
}
?>
<?php
$args = array(
    'post_type' => $post_type,
    'post_status' => 'publish',
    $taxonomy => $term,
    'posts_per_page' => -1,
);

$ruler = [
    'field_name' => 'filter-ruler',
];
$viscosity = [
    'field_name' => 'filter-viscosity',
];
$classification = [
    'field_name' => 'filter-classification',
];

$viscosity_iso = [
    'field_name' => 'filter-viscosity_iso',
];

$classification_din = [
    'field_name' => 'filter-classification_din',
];

$viscosity_nkgi = [
    'field_name' => 'filter-viscosity_nkgi',
];

$query = new WP_Query($args);
$i = 0;

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        $product_ruler_selected_option = get_field('filter-ruler');
        if ($product_ruler_selected_option) :
            if (isset($ruler['values']) && is_array($ruler['values'])) {
                if (!in_array($product_ruler_selected_option['label'], array_column($ruler['values'], 'label'))) {
                    $ruler['values'][$i]['label'] = esc_html($product_ruler_selected_option['label']);
                }
                if (!in_array($product_ruler_selected_option['value'], array_column($ruler['values'], 'value'))) {
                    $ruler['values'][$i]['value'] = esc_html($product_ruler_selected_option['value']);
                }
            } else {
                $ruler['values'][$i]['label'] = esc_html($product_ruler_selected_option['label']);
                $ruler['values'][$i]['value'] = esc_html($product_ruler_selected_option['value']);
            }
        endif;


        $product_viscosity_selected_option = get_field('filter-viscosity');
        if ($product_viscosity_selected_option) :
            if (isset($viscosity['values']) && is_array($viscosity['values'])) {
                if (!in_array($product_viscosity_selected_option['label'], array_column($viscosity['values'], 'label'))) {
                    $viscosity['values'][$i]['label'] = esc_html($product_viscosity_selected_option['label']);
                }
                if (!in_array($product_viscosity_selected_option['value'], array_column($viscosity['values'], 'value'))) {
                    $viscosity['values'][$i]['value'] = esc_html($product_viscosity_selected_option['value']);
                }
            } else {
                $viscosity['values'][$i]['label'] = esc_html($product_viscosity_selected_option['label']);
                $viscosity['values'][$i]['value'] = esc_html($product_viscosity_selected_option['value']);
            }
        endif;

        $product_classification_selected_option = get_field('filter-classification');
        if ($product_classification_selected_option) :
            if (isset($classification['values']) && is_array($classification['values'])) {
                if (!in_array($product_classification_selected_option['label'], array_column($classification['values'], 'label'))) {
                    $classification['values'][$i]['label'] = esc_html($product_classification_selected_option['label']);
                }
                if (!in_array($product_classification_selected_option['value'], array_column($classification['values'], 'value'))) {
                    $classification['values'][$i]['value'] = esc_html($product_classification_selected_option['value']);
                }
            } else {
                $classification['values'][$i]['label'] = esc_html($product_classification_selected_option['label']);
                $classification['values'][$i]['value'] = esc_html($product_classification_selected_option['value']);
            }
        endif;

        $product_viscosity_iso_selected_option = get_field('filter-viscosity_iso');
        if ($product_viscosity_iso_selected_option) :
            if (isset($viscosity_iso['values']) && is_array($viscosity_iso['values'])) {
                if (!in_array($product_viscosity_iso_selected_option['label'], array_column($viscosity_iso['values'], 'label'))) {
                    $viscosity_iso['values'][$i]['label'] = esc_html($product_viscosity_iso_selected_option['label']);
                }
                if (!in_array($product_viscosity_iso_selected_option['value'], array_column($viscosity_iso['values'], 'value'))) {
                    $viscosity_iso['values'][$i]['value'] = esc_html($product_viscosity_iso_selected_option['value']);
                }
            } else {
                $viscosity_iso['values'][$i]['label'] = esc_html($product_viscosity_iso_selected_option['label']);
                $viscosity_iso['values'][$i]['value'] = esc_html($product_viscosity_iso_selected_option['value']);
            }
        endif;

        $product_classification_din_selected_option = get_field('filter-classification_din');
        if ($product_classification_din_selected_option) :
            if (isset($classification_din['values']) && is_array($classification_din['values'])) {
                if (!in_array($product_classification_din_selected_option['label'], array_column($classification_din['values'], 'label'))) {
                    $classification_din['values'][$i]['label'] = esc_html($product_classification_din_selected_option['label']);
                }
                if (!in_array($product_classification_din_selected_option['value'], array_column($classification_din['values'], 'value'))) {
                    $classification_din['values'][$i]['value'] = esc_html($product_classification_din_selected_option['value']);
                }
            } else {
                $classification_din['values'][$i]['label'] = esc_html($product_classification_din_selected_option['label']);
                $classification_din['values'][$i]['value'] = esc_html($product_classification_din_selected_option['value']);
            }
        endif;

        $product_viscosity_din_selected_option = get_field('filter-viscosity_din');
        if ($product_viscosity_din_selected_option) :
            if (isset($viscosity_din['values']) && is_array($viscosity_din['values'])) {
                if (!in_array($product_viscosity_din_selected_option['label'], array_column($viscosity_din['values'], 'label'))) {
                    $viscosity_din['values'][$i]['label'] = esc_html($product_viscosity_din_selected_option['label']);
                }
                if (!in_array($product_viscosity_din_selected_option['value'], array_column($viscosity_din['values'], 'value'))) {
                    $viscosity_din['values'][$i]['value'] = esc_html($product_viscosity_din_selected_option['value']);
                }
            } else {
                $viscosity_din['values'][$i]['label'] = esc_html($product_viscosity_din_selected_option['label']);
                $viscosity_din['values'][$i]['value'] = esc_html($product_viscosity_din_selected_option['value']);
            }
        endif;

        $product_viscosity_nkgi_selected_option = get_field('filter-viscosity_nkgi');
        if ($product_viscosity_nkgi_selected_option) :
            if (isset($viscosity_nkgi['values']) && is_array($viscosity_nkgi['values'])) {
                if (!in_array($product_viscosity_nkgi_selected_option['label'], array_column($viscosity_nkgi['values'], 'label'))) {
                    $viscosity_nkgi['values'][$i]['label'] = esc_html($product_viscosity_nkgi_selected_option['label']);
                }
                if (!in_array($product_viscosity_nkgi_selected_option['value'], array_column($viscosity_nkgi['values'], 'value'))) {
                    $viscosity_nkgi['values'][$i]['value'] = esc_html($product_viscosity_nkgi_selected_option['value']);
                }
            } else {
                $viscosity_nkgi['values'][$i]['label'] = esc_html($product_viscosity_nkgi_selected_option['label']);
                $viscosity_nkgi['values'][$i]['value'] = esc_html($product_viscosity_nkgi_selected_option['value']);
            }
        endif;

        $i++;
    }
}

wp_reset_postdata(); ?>

<?php $notEmpty = false;
$arrayFilters = [is_array($ruler['values']),
    is_array($viscosity['values']),
    is_array($viscosity_iso['values']),
    is_array($viscosity_nkgi['values']),
    is_array($classification['values']),
    is_array($classification_din['values']),
    ];
foreach ($arrayFilters as $childArray) {

    if ($childArray === true) {
        $notEmpty = true;
        break;
    }
} ?>

<?php if ($notEmpty == true) { ?>
    <?php if (isset($ruler['values']) && is_array($ruler['values'])) { ?>
        <div class="filters__filter">
            <a class="filter__name" href="#" id="moreFilter">
                <p>Линейки</p>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                </svg>
            </a>
            <div class="filter__items" for="moreFilter">
                <?php foreach ($ruler['values'] as $item) {
                    $product_category = '';
                    if (isset($object) && isset($object->slug)) {
                        $product_category = $object->slug;
                    }
                    $args = [
                        'key' => $ruler['field_name'],
                        'value' => $item['value'],
                    ]; ?>
                    <div class="items__item">
                        <input id="<?= $item['value']; ?>" type="checkbox"
                               data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                        <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                    </div> <?php
                } ?>
            </div>
        </div>
    <?php } ?>
    <?php if (isset($viscosity['values']) && is_array($viscosity['values'])) { ?>
        <div class="filters__filter">
            <a class="filter__name" href="#" id="moreFilter">
                <p>Вязкость SAE</p>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                </svg>
            </a>
            <div class="filter__items" for="moreFilter">
                <?php foreach ($viscosity['values'] as $item) {
                    $product_category = '';
                    if (isset($object) && isset($object->slug)) {
                        $product_category = $object->slug;
                    }
                    $args = [
                        'key' => $viscosity['field_name'],
                        'value' => $item['value'],
                    ]; ?>
                    <div class="items__item">
                        <input id="<?= $item['value']; ?>" type="checkbox"
                               data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                        <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                    </div> <?php
                } ?>
            </div>
        </div>
    <?php } ?>
    <?php if (isset($viscosity_iso['values']) && is_array($viscosity_iso['values'])) { ?>
        <div class="filters__filter">
            <a class="filter__name" href="#" id="moreFilter">
                <p>Вязкость ISO</p>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                </svg>
            </a>
            <div class="filter__items" for="moreFilter">
                <?php foreach ($viscosity_iso['values'] as $item) {
                    $product_category = '';
                    if (isset($object) && isset($object->slug)) {
                        $product_category = $object->slug;
                    }
                    $args = [
                        'key' => $viscosity_iso['field_name'],
                        'value' => $item['value'],
                    ]; ?>
                    <div class="items__item">
                        <input id="<?= $item['value']; ?>" type="checkbox"
                               data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                        <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                    </div> <?php
                } ?>
            </div>
        </div>
    <?php } ?>
    <?php if (isset($viscosity_nkgi['values']) && is_array($viscosity_nkgi['values'])) { ?>
        <div class="filters__filter">
            <a class="filter__name" href="#" id="moreFilter">
                <p>Вязкость NKGI</p>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                </svg>
            </a>
            <div class="filter__items" for="moreFilter">
                <?php foreach ($viscosity_nkgi['values'] as $item) {
                    $product_category = '';
                    if (isset($object) && isset($object->slug)) {
                        $product_category = $object->slug;
                    }
                    $args = [
                        'key' => $viscosity_nkgi['field_name'],
                        'value' => $item['value'],
                    ]; ?>
                    <div class="items__item">
                        <input id="<?= $item['value']; ?>" type="checkbox"
                               data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                        <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                    </div> <?php
                } ?>
            </div>
        </div>
    <?php } ?>
    <?php if (isset($classification['values']) && is_array($classification['values'])) { ?>
        <div class="filters__filter">
            <a class="filter__name" href="#" id="moreFilter">
                <p>Классификация API</p>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                </svg>
            </a>
            <div class="filter__items" for="moreFilter">
                <?php foreach ($classification['values'] as $item) {
                    $product_category = '';
                    if (isset($object) && isset($object->slug)) {
                        $product_category = $object->slug;
                    }
                    $args = [
                        'key' => $classification['field_name'],
                        'value' => $item['value'],
                    ]; ?>
                    <a class="items__item" href="#">
                        <input id="<?= $item['value']; ?>" type="checkbox"
                               data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                        <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                    </a> <?php
                } ?>
            </div>
        </div>
    <?php } ?>
    <?php if (isset($classification_din['values']) && is_array($classification_din['values'])) { ?>
        <div class="filters__filter">
            <a class="filter__name" href="#" id="moreFilter">
                <p>Классификация DIN</p>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                </svg>
            </a>
            <div class="filter__items" for="moreFilter">
                <?php foreach ($classification_din['values'] as $item) {
                    $product_category = '';
                    if (isset($object) && isset($object->slug)) {
                        $product_category = $object->slug;
                    }
                    $args = [
                        'key' => $classification_din['field_name'],
                        'value' => $item['value'],
                    ]; ?>
                    <a class="items__item" href="#">
                        <input id="<?= $item['value']; ?>" type="checkbox"
                               data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                        <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                    </a> <?php
                } ?>
            </div>
        </div>
    <?php } ?>

    <a class="filters__button" href="#">Очистить</a>
<?php } else { ?>
    <div class="filters__empty">В данной категории нет элементов фильтрации</div>
<?php } ?>

<div class="popup__products-filter mfp-hide mfp-with-anim">
    <div class="products-filter__top">
        <p>Фильтры</p>
        <svg class="mfp-close closePopup" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="mfp-close" d="M15 1L8 8M8 8L1 15M8 8L1 1M8 8L15 15" stroke="black" stroke-width="2"/>
        </svg>
    </div>
    <?php if ($notEmpty == true) { ?>
        <div class="products-filter__middle">
            <?php if (isset($ruler['values']) && is_array($ruler['values'])) { ?>
                <div class="filters__filter middle__filter">
                    <a class="filter__name" href="#" id="moreFilter">
                        <p>Линейки</p>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                    <div class="filter__items" for="moreFilter">
                        <?php foreach ($ruler['values'] as $item) {
                            $product_category = '';
                            if (isset($object) && isset($object->slug)) {
                                $product_category = $object->slug;
                            }
                            $args = [
                                'key' => $ruler['field_name'],
                                'value' => $item['value'],
                            ]; ?>
                            <div class="items__item">
                                <input id="<?= $item['value']; ?>" type="checkbox"
                                       data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                                <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                            </div> <?php
                        } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($viscosity['values']) && is_array($viscosity['values'])) { ?>
                <div class="filters__filter middle__filter">
                    <a class="filter__name" href="#" id="moreFilter">
                        <p>Вязкость SAE</p>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                    <div class="filter__items" for="moreFilter">
                        <?php foreach ($viscosity['values'] as $item) {
                            $product_category = '';
                            if (isset($object) && isset($object->slug)) {
                                $product_category = $object->slug;
                            }
                            $args = [
                                'key' => $viscosity['field_name'],
                                'value' => $item['value'],
                            ]; ?>
                            <div class="items__item">
                                <input id="<?= $item['value']; ?>" type="checkbox"
                                       data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                                <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                            </div> <?php
                        } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($viscosity_iso['values']) && is_array($viscosity_iso['values'])) { ?>
                <div class="filters__filter middle__filter">
                    <a class="filter__name" href="#" id="moreFilter">
                        <p>Вязкость ISO</p>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                    <div class="filter__items" for="moreFilter">
                        <?php foreach ($viscosity_iso['values'] as $item) {
                            $product_category = '';
                            if (isset($object) && isset($object->slug)) {
                                $product_category = $object->slug;
                            }
                            $args = [
                                'key' => $viscosity_iso['field_name'],
                                'value' => $item['value'],
                            ]; ?>
                            <div class="items__item">
                                <input id="<?= $item['value']; ?>" type="checkbox"
                                       data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                                <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                            </div> <?php
                        } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($viscosity_nkgi['values']) && is_array($viscosity_nkgi['values'])) { ?>
                <div class="filters__filter middle__filter">
                    <a class="filter__name" href="#" id="moreFilter">
                        <p>Вязкость NKGI</p>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                    <div class="filter__items" for="moreFilter">
                        <?php foreach ($viscosity_nkgi['values'] as $item) {
                            $product_category = '';
                            if (isset($object) && isset($object->slug)) {
                                $product_category = $object->slug;
                            }
                            $args = [
                                'key' => $viscosity_nkgi['field_name'],
                                'value' => $item['value'],
                            ]; ?>
                            <div class="items__item">
                                <input id="<?= $item['value']; ?>" type="checkbox"
                                       data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                                <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                            </div> <?php
                        } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($classification['values']) && is_array($classification['values'])) { ?>
                <div class="filters__filter middle__filter">
                    <a class="filter__name" href="#" id="moreFilter">
                        <p>Классификация API</p>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                    <div class="filter__items" for="moreFilter">
                        <?php foreach ($classification['values'] as $item) {
                            $product_category = '';
                            if (isset($object) && isset($object->slug)) {
                                $product_category = $object->slug;
                            }
                            $args = [
                                'key' => $classification['field_name'],
                                'value' => $item['value'],
                            ]; ?>
                            <a class="items__item" href="#">
                                <input id="<?= $item['value']; ?>" type="checkbox"
                                       data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                                <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                            </a> <?php
                        } ?>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($classification_din['values']) && is_array($classification_din['values'])) { ?>
                <div class="filters__filter middle__filter">
                    <a class="filter__name" href="#" id="moreFilter">
                        <p>Классификация DIN</p>
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0002 8.00016L7 2L0.999839 8.00016" stroke="black" stroke-width="2"/>
                        </svg>
                    </a>
                    <div class="filter__items" for="moreFilter">
                        <?php foreach ($classification_din['values'] as $item) {
                            $product_category = '';
                            if (isset($object) && isset($object->slug)) {
                                $product_category = $object->slug;
                            }
                            $args = [
                                'key' => $classification_din['field_name'],
                                'value' => $item['value'],
                            ]; ?>
                            <a class="items__item" href="#">
                                <input id="<?= $item['value']; ?>" type="checkbox"
                                       data-query='<?php echo json_encode($args); ?>' data-category='<?php echo $product_category ?>'>
                                <label for="<?= $item['value']; ?>"><?= $item['label']; ?></label>
                            </a> <?php
                        } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a class="products-filter__bottom filters__accept" href="#">Применить</a>
        <a class="products-filter__bottom filters__button" href="#">Очистить</a>
    <?php } else { ?>
        <div class="products-filter__empty">В данной категории нет элементов фильтрации</div>
        <a class="products-filter__bottom filters__accept" href="#">Применить</a>
    <?php } ?>
</div>
