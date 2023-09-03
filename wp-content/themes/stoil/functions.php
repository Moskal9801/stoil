<?
	add_action( 'wp_enqueue_scripts', function () {
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );
		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/main.js' );
	} );
	add_action( 'wp_head', function () {
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	} );
	add_filter( 'excerpt_length', function () {
		return 20;
	} );
	add_filter( 'excerpt_more', function ( $more ) {
		return '...';
	} );
	add_theme_support( 'post-thumbnails' );

	add_action( 'admin_head', function () {
		wp_enqueue_script( 'cat-script', get_template_directory_uri() . '/cat.js' );
	} );

	add_filter( 'login_headerurl', function () {
		return 'https://01cat.ru';
	} );

	add_action( 'login_header', function () { ?>
        <style>
			#login h1 a {
				background: url("logo.png") center top no-repeat !important;
				width:      111px !important;
				height:     180px !important;
			}
        </style>
	<? } );
	add_filter( 'admin_footer_text', function () {
		return '<b>Сделано:</b>
			<a href="https://01cat.ru/" target="_blank">Двоичный кот</a>
			<br>
			<b>Техническая поддержка:</b> тел. <a href="tel:+79145416354">+7 (914) 541-63-54</a>, email: <a href="mailto:hello@01cat.ru">hello@01cat.ru</a>';
	} );

	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page( [
			'page_title' => 'Контактные данные',
			'menu_title' => 'Контактные данные',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'icon_url'   => 'dashicons-location-alt',
			'redirect'   => false
		] );
	}

	// format phone
	function clearPhone( $phone ) {
		$to_replace = [
			' ',
			'-',
			'(',
			')'
		];
		return str_replace( $to_replace, '', $phone );
	}

	function wpds_validate_bot( $result, $tags ) {
		if ( !empty( $_POST[ 'your-check-bot' ] ) ) {
			return false;
		}
		return $result;
	}

	add_filter( 'wpcf7_validate', 'wpds_validate_bot', 10, 2 );

	register_nav_menus( [
		'top'    => 'Меню в шапке',
		'footer' => 'Меню в подвале',
	] );

	//ФИЛЬТРАЦИЯ ФОРМЫ
	add_filter( 'wpcf7_validate', 'my_form_validate', 10, 2 );
	function my_form_validate( $result, $tags ) {
		// Получим данные об отправляемой форме
		$form = WPCF7_Submission::get_instance();

		// Получаем данные полей
		$name    = $form->get_posted_data( 'your-name' );
		$company = $form->get_posted_data( 'your-company' );
		$city    = $form->get_posted_data( 'your-city' );
		$phone   = $form->get_posted_data( 'your-phone' );
		$email   = $form->get_posted_data( 'your-mail' );

		// Если оба поля не заполонены - выдать ошибку
		if ( empty( $name ) ) {
			$result->invalidate( 'your-name', '' );
		}

		if ( empty( $company ) ) {
			$result->invalidate( 'your-company', '' );
		}

		if ( empty( $city ) ) {
			$result->invalidate( 'your-city', '' );
		}

		if ( empty( $phone ) ) {
			$result->invalidate( 'your-phone', '' );
		}

		if ( empty( $email ) ) {
			$result->invalidate( 'your-mail', '' );
		}

		if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
			$result->invalidate( 'your-mail', '' );
		}

		return $result;
	}


	//ФИЛЬТР ТОВАРОВ
	add_action( "wp_ajax_products_filter", "products_filter" );
	add_action( "wp_ajax_nopriv_products_filter", "products_filter" );

	function products_filter() {
		$meta_query = json_decode( stripslashes( $_POST[ "query" ] ), true );
		if ( !wp_is_mobile() ) {
			$maxPosts = 10;
		} else {
			$maxPosts = 5;
		}


		$meta_arr = [
			'relation' => 'OR',
		];

		foreach ( $meta_query as $item ) {
			$meta_arr[] = $item;
		}

		if ( $_POST[ "category" ] !== 'false' ) {
			$category = $_POST[ "category" ];
			$args     = [
				'post_type'  => 'catalog',
				'tax_query'  => [
					[
						'taxonomy' => 'catalog-category',
						'field'    => 'slug',
						'terms'    => $category,
					],
				],
				'meta_query' => $meta_arr,
			];
		} else {
			$args = [
				'post_type'  => 'catalog',
				'meta_query' => [
					$meta_arr,
				],
			];
		}

		$count           = new WP_Query( $args );
		$allPostsCounter = $count->found_posts;
		$maxPosts--;
		$maxPages = ceil( $allPostsCounter / $maxPosts );

		wp_reset_postdata();

		$args[ "paged" ] = $_POST[ "page" ] + 1;
		if ( !wp_is_mobile() ) {
			$args[ "posts_per_page" ] = 9;
		} else {
			$args[ "posts_per_page" ] = 4;
		}

		$posts = new WP_Query( $args );
		$html  = '';

		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) {
				$posts->the_post();
				$html .= get_template_part( "parts/catalog", 'product' );
			}
		} else {
			echo 'По данному запросу товаров не найдено';
		}

		$html .= '-----' . json_encode( $posts->query_vars ) . '|||||' . $maxPages;

		wp_reset_postdata();
		die( $html );
	}

	//ЗАГРУЩИТЬ ЕЩЕ ТОВАРЫ
	add_action( "wp_ajax_load_more-products", "load_products" );
	add_action( "wp_ajax_nopriv_load_more-products", "load_products" );

	function load_products() {
		$args            = json_decode( stripslashes( $_POST[ "query" ] ), true );
		$args[ "paged" ] = $_POST[ "page" ] + 1;
		if ( !wp_is_mobile() ) {
			$args[ "posts_per_page" ] = 9;
		} else {
			$args[ "posts_per_page" ] = 4;
		}

		$posts = new WP_Query( $args );
		$html  = '';

		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) {
				$posts->the_post();
				$html .= get_template_part( "parts/catalog", 'product', [ 'product_id' => get_the_ID() ] );
			}
		} else {
			echo 'Больше нет постов';
		}

		wp_reset_postdata();
		die( $html );
	}

	//ЗАГРУЩИТЬ ЕЩЕ НОВОСТИ
	add_action( "wp_ajax_load_more-news", "load_news" );
	add_action( "wp_ajax_nopriv_load_more-news", "load_news" );

	function load_news() {
		$args            = json_decode( stripslashes( $_POST[ "query" ] ), true );
		$args[ "paged" ] = $_POST[ "page" ] + 1;
		if ( !wp_is_mobile() ) {
			$args[ "posts_per_page" ] = 9;
		} else {
			$args[ "posts_per_page" ] = 3;
		}


		$posts = new WP_Query( $args );
		$html  = '';

		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) {
				$posts->the_post();
				$html .= get_template_part( "parts/news", 'items' );
			}
		} else {
			echo 'Больше нет постов';
		}

		wp_reset_postdata();
		die( $html );
	}

	// Загружаем аналоги технических жидкостей по выбранному фильтру
	add_action( "wp_ajax_load_analogs", "load_analogs" );
	add_action( "wp_ajax_nopriv_load_analogs", "load_analogs" );
	function load_analogs() {
		$args = json_decode( stripslashes( $_POST[ "args" ] ), true );

		$output = [];

		$analogs = new WP_Query( $args );

		if ( $analogs->have_posts() ) {
			while ( $analogs->have_posts() ) {
				$analogs->the_post();
				$output[] = [
					get_the_ID(),
					get_the_title()
				];
			}
			echo json_encode( $output );
		} else {
			echo 'Аналогов нет';
		}
		die();
	}


	add_action( "wp_ajax_load_stoil_products_from_analogs", "load_stoil_products_from_analogs" );
	add_action( "wp_ajax_nopriv_load_stoil_products_from_analogs", "load_stoil_products_from_analogs" );

	function load_stoil_products_from_analogs() {
		$id               = $_POST[ "id" ];
		$postsWithAnalogs = [];
		$output           = '';

		$relatedCatalogPosts = new WP_Query( [
			'post_type'  => 'catalog',
            'posts_per_page' => -1,
			'meta_query' => [
				[
					'key'     => 'catalog-analogs',
					'value'   => '',
					'compare' => '!=',
				]
			]
		] );

		if ( $relatedCatalogPosts->have_posts() ) {
			while ( $relatedCatalogPosts->have_posts() ) {
				$relatedCatalogPosts->the_post();
				$analogs = get_field( 'catalog-analogs' ); // Получаем значения поля "catalog-analogs" текущего поста

				// Проверяем, содержит ли массив $analogs пост с переданным ID аналога
				foreach ( $analogs as $analog ) {
					if ( $analog[ "analogs-analogue" ]->ID == $id ) {
						$postsWithAnalogs[] = get_the_ID();
						break;
					}
				}
			}

			$posts = new WP_Query( [
				'post_type' => 'catalog',
				'post__in'  => $postsWithAnalogs,
			] );

            while ( $posts->have_posts() ) {
                $posts->the_post();
                $output .= get_template_part( 'parts/catalog', 'product' );
            }



		} else {
			$output = "Нет записей типа 'catalog' с заполненным полем 'catalog-analogs'.";
		}

		die( $output );
	}