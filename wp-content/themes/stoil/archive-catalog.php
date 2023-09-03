<?php
get_header();
$term = get_queried_object();
$taxonomy = 'catalog-category';
?>

    <section class="catalog-body">
        <div class="catalog-body__contents container">
            <div class="contents__title">Каталог</div>
            <div class="contents__content">
                <div class="content__filters">
                    <?php get_template_part( 'parts/catalog', 'filter'); ?>
                </div>
                <div class="content__products">
                    <div class="products__categories">
                        <a class="categories__category active" data-category="category-0" href="/catalog">Все категории</a>
                        <?php $terms = get_terms([
                            'taxonomy' => $taxonomy,
                            'hide_empty' => false,
                            'parent' => 0
                        ]); ?>

                        <?php if ($terms && !is_wp_error($terms)): ?>
                            <?php foreach ($terms as $term) : ?>
                                <a class="categories__category" href="<?= get_term_link($term->term_id, $term->taxonomy); ?>"><?= esc_html($term->name); ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <a class="products__filter open__products-filter" href="#">
                        <p>Фильтр</p>
                        <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.1765 1.94408C15.811 2.41918 17 3.85774 17 5.55575C17 7.2546 15.8107 8.69236 14.1765 9.16705V18.8888C14.1765 19.5025 13.6498 20 13 20C12.3502 20 11.8235 19.5025 11.8235 18.8888V9.16705C10.189 8.69194 9 7.25338 9 5.55575C9 3.8569 10.1897 2.41914 11.8235 1.94408V1.11117C11.8235 0.497482 12.3502 0 13 0C13.6498 0 14.1765 0.497473 14.1765 1.11117V1.94408ZM11.3531 5.55575C11.3531 6.41285 12.0917 7.1112 13 7.1112C13.9079 7.1112 14.6473 6.41356 14.6473 5.55575C14.6473 4.69828 13.9087 3.99993 13 3.99993C12.0925 3.99993 11.3531 4.69793 11.3531 5.55575Z" fill="#7AB92F"/>
                            <path d="M5.17653 11.7216C6.81105 12.1968 8 13.6353 8 15.3333C8 17.0324 6.80986 18.4706 5.17494 18.945C5.14389 19.5326 4.62996 20 4 20C3.37041 20 2.85606 19.5326 2.82506 18.945C1.18974 18.4706 0 17.0317 0 15.3333C0 13.6345 1.18975 12.1967 2.82347 11.7216V1.11116C2.82347 0.49748 3.35021 0 4 0C4.64978 0 5.17653 0.49747 5.17653 1.11116V11.7216ZM2.35306 15.3333C2.35306 16.1904 3.09173 16.8887 4 16.8887C4.9079 16.8887 5.64694 16.1911 5.64694 15.3333C5.64694 14.4758 4.90827 13.7775 4 13.7775C3.09248 13.7775 2.35306 14.4755 2.35306 15.3333Z" fill="#7AB92F"/>
                            <path d="M22.1763 8.61083C23.8107 9.08593 25 10.5245 25 12.2221C25 13.9209 23.8103 15.3586 22.1763 15.8337V18.8889C22.1763 19.5025 21.6496 20 21.0002 20C20.3504 20 19.8237 19.5025 19.8237 18.8889V15.8337C18.1893 15.3586 17 13.92 17 12.2221C17 10.5232 18.1897 9.08551 19.8237 8.61083V1.11115C19.8237 0.497473 20.3504 0 21.0002 0C21.6496 0 22.1763 0.497464 22.1763 1.11115V8.61083ZM19.3529 12.2221C19.3529 13.0795 20.0916 13.7775 21.0002 13.7775C21.9077 13.7775 22.6471 13.0799 22.6471 12.2221C22.6471 11.365 21.9084 10.6666 21.0002 10.6666C20.0923 10.6666 19.3529 11.3643 19.3529 12.2221Z" fill="#7AB92F"/>
                        </svg>
                    </a>
                    <div class="products__product">
                        <?php get_template_part( 'parts/catalog', 'allproducts'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>

