<?php
$counter = 1;
if (!wp_is_mobile()) {
    $maxPosts = 10;
} else {
    $maxPosts = 5;
}


$post_type = 'catalog';
$taxonomy = 'catalog-category';

if ($args['term']) {
    $term = $args['term'];
} else {
    $term = false;
}

?>

<div class="product__items">
    <?php $args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => $maxPosts,
        $taxonomy  => $term
    );

    $query = new WP_Query($args); ?>
    <?php if ($query->have_posts()) {
        while ($query->have_posts() && (($counter % $maxPosts) !== 0)) {
            $query->the_post();

            $params = [
                'reviews_id' => get_the_ID()
            ];
            get_template_part('parts/catalog', 'product', $params);
            $counter++;

            ?>
            <?php
        }
    } wp_reset_postdata(); ?>
</div>

<? $query = array(
    'post_type' => $post_type,
    'post_status' => 'publish',
    'post_per_page' => $maxPosts,
    $taxonomy  => $term
);
$posts = new WP_Query($query);
$allPostsCounter = $posts->found_posts;
$maxPosts--;
$maxPages = ceil($allPostsCounter / $maxPosts);
if ($maxPages > 1) { ?>
    <a href="#" class="product__more"
       id="more-products"
       data-current-page="1"
       data-query='<?= json_encode($posts->query_vars); ?>'
       data-max-pages="<?= $maxPages; ?>">Показать еще
    </a>
    <? } wp_reset_postdata(); ?>

