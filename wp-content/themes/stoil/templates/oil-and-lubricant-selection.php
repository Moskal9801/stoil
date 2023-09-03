<?php
	get_header();
	/* Template name: Подбор масла и смазочных материалов */
?>


    <div class="selection-page">
        <div class="container">
            <div class="contents__title"><?php the_title(); ?></div>
            <div class="hint">Выберите <span>производителя</span> вашего масла, его <span>тип</span> и мы подберем соответствующий аналог от ST Oil.</div>
            <div class="buttons-wrapper">
                <a href="#" class="button analogs active">По аналогу</a>
                <a href="#" class="button marks">По марке авто</a>
            </div>
            <div class="selects-wrapper">
                <select class="manufacturer">
                    <option value="default" disabled selected>Производитель</option>
					<?php
						$taxonomy = 'proizvoditeli';
						$terms    = get_terms( $taxonomy );

						if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
							foreach ( $terms as $term ) {
								echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
							}
						}
					?>
                </select>
                <select class="type">
                    <option value="default" disabled selected>Тип</option>
					<?php
						$taxonomy = 'catalog-category';
						$terms    = get_terms( $taxonomy );

						if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
							foreach ( $terms as $term ) {
								echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
							}
						}
					?>
                </select>
                <select class="analog">
                    <option value="default" disabled selected>Аналог</option>
                </select>
            </div>
            <div class="result-block">

            </div>
        </div>
    </div>


<?php get_footer();
