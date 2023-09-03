<?php
get_header();

$counter  = 1;
if (!wp_is_mobile()) {
    $maxPosts = 10;
} else {
    $maxPosts = 4;
}


$post_type = 'post';
?>

<div class="news-body">
    <div class="news-body__contents container">
        <div class="contents__title">Новости</div>
        <div class="contents__content">
            <div class="content__items" id="cardСontainer">
                <?php $args = array(
                    'post_type'      => $post_type,
                    'post_status'    => 'publish',
                    'posts_per_page' => $maxPosts,
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() && (($counter % $maxPosts) !== 0) ) {
                        $query->the_post();

                        $params = [
                            'reviews_id' => get_the_ID()
                        ];
                        get_template_part('parts/news', 'items', $params);
                        $counter++;
                    }
                } wp_reset_postdata(); ?>
            </div>
            <?php $query = array (
                'post_type'      => $post_type,
                'post_status'    => 'publish',
                'post_per_page' => $maxPosts,
            );
            $posts = new WP_Query( $query );
            $allPostsCounter = 0;
            while ( $posts->have_posts() ) {
                $posts->the_post();
                $allPostsCounter++;
            }
            $maxPosts--;
            $maxPages = ceil( $allPostsCounter / $maxPosts );
            if ( $maxPages > 1 ) { ?>
                <a href="#" class="content__more"
                   id="more-news"
                   data-current-page="1"
                   data-query='<?= json_encode( $posts->query_vars ); ?>'
                   data-max-pages="<?= $maxPages; ?>">Показать еще
                </a>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
