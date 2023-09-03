document.addEventListener( 'DOMContentLoaded', function () {
	let getCoords = ( elem ) => {
			let box = elem.getBoundingClientRect();
			return {
				top:box.top + window.scrollY,
				right:box.right + window.scrollX,
				bottom:box.bottom + window.scrollY,
				left:box.left + window.scrollX,
				height:box.height,
			};
		},
		isOnScreen = ( elem ) => {
			let coefficient;
			window.innerWidth <= 768 ? coefficient = .75 : coefficient = .9;
			return window.scrollY > (getCoords( elem ).top - window.innerHeight / coefficient);
		},
		isMobile = () => {
			return window.outerWidth <= 767;
		},
		isExist = ( selector ) => {
			return document.querySelector( selector );
		}

	//МЕНЮ ХЭДЕРА НА ЭКРАНАХ МЕНЬШЕ 1024px
	if ( window.outerWidth <= 1024 ) {
		let hamburgerIcon = document.querySelector( '#hamburger-icon' ),
			headerActive = document.querySelector( '#headerActive' ),
			headerMenu = document.querySelector( '#headerMenu' );

		//АКТИВАЦИЯ МЕНЮ
		hamburgerIcon.onclick = function ( e ) {
			e.preventDefault();
			hamburgerIcon.classList.toggle( 'active' );
			headerActive.classList.toggle( 'active' );
			headerMenu.classList.toggle( 'active' );
			document.documentElement.classList.toggle( 'no-scroll' );
			if ( headerMenu.classList.contains( 'active' ) ) {
				headerMenu.style.top = window.scrollY + 100 + "px";
			} else {
				headerMenu.style.top = -1000 + "px";
			}
		};

		//ФУНКЦИОНАЛ ХЭДЕРА ПРИ СКРОЛЛЕ
		window.addEventListener( 'scroll', function () {
			let currentScrollPos = window.scrollY;

			if ( window.scrollY <= 2 ) {
				headerActive.classList.remove( 'hide' );
				headerActive.classList.remove( 'no-hide' );
			} else if ( prevScrollpos > currentScrollPos ) {
				headerActive.classList.add( 'no-hide' );
				headerActive.classList.remove( 'hide' );
			} else {
				headerActive.classList.add( 'hide' );
				headerActive.classList.remove( 'no-hide' );
			}
			prevScrollpos = currentScrollPos;
		} );

	}
	if ( isExist( '.home' ) ) { //ГЛАВНАЯ СТРАНИЦА
		//СЛАЙДЕР БЭКГРАУНДА
		const homeSliderBackground = new Swiper( '.home__slider-background', {
			slidesPerView:1,
			spaceBetween:0,
			loop:true,
			autoplay:{
				delay:5000,
			},
			allowTouchMove:false,
			effect:'fade',
			fadeEffect:{
				crossFade:true
			},
			navigation:{
				nextEl:'.home__slider-btn.next',
				prevEl:'.home__slider-btn.prev',
			},
		} );

		//СЛАЙДЕР ТОВАРА НА БЭКГРАУНДЕ
		const homeSliderCaption = new Swiper( '.home__slider-caption', {
			slidesPerView:1,
			spaceBetween:0,
			autoplay:{
				delay:5000,
			},
			loop:true,
			allowTouchMove:false,
			navigation:{
				nextEl:'.home__slider-btn.next',
				prevEl:'.home__slider-btn.prev',
			},
			on:{
				init:function () {
					document.querySelector( '.home__slider-btns__caption' ).innerHTML = document.querySelector( '.home__slider-caption .swiper-slide-active .home__slider-caption--caption' ).innerHTML;
				},
			},
		} );

		homeSliderCaption.on( 'slideChangeTransitionEnd', function () {
			document.querySelector( '.home__slider-btns__caption' ).innerHTML = document.querySelector( '.swiper-slide-active .home__slider-caption--caption' ).innerHTML;
		} );

		//ТАБЫ БЛОКА КАТАЛОГА
		function delayOpacity ( id ) {
			document.querySelector( '[data-content-id="' + id + '"' ).style.opacity = 1;
		}

		if ( document.querySelector( '#home__catalog' ) ) {
			let tabs = document.querySelectorAll( '[data-tab-id]' ),
				contents = document.querySelectorAll( '[data-content-id]' );

			tabs.forEach( ( e ) => {
				e.querySelector( 'span' ).onclick = function () {
					contents.forEach( ( el ) => {
						el.style.display = 'none';
						el.style.opacity = 0;
					} )
					tabs.forEach( ( el ) => {
						el.classList.remove( 'active' );
					} )
					let id = e.dataset.tabId;
					e.classList.add( 'active' );
					document.querySelector( '[data-content-id="' + id + '"' ).style.display = 'block';

					setTimeout( delayOpacity, 100, id );
				}
			} )
		}

		//ТАБЫ В ТАБАХ
		function delayNoticeOpacity ( id ) {
			document.querySelector( '[data-notice-content-id="' + id + '"' ).style.opacity = 1;
		}

		if ( document.querySelector( '#home__catalog' ) ) {
			let notice = document.querySelectorAll( '[data-notice-id]' ),
				noticeContents = document.querySelectorAll( '[data-notice-content-id]' );

			notice.forEach( ( e ) => {
				e.querySelector( 'span' ).onclick = function () {
					noticeContents.forEach( ( el ) => {
						el.style.display = 'none';
						el.style.opacity = 0;
					} )
					notice.forEach( ( el ) => {
						el.classList.remove( 'active' );
					} )
					let id = e.dataset.noticeId;
					e.classList.add( 'active' );
					document.querySelector( '[data-notice-content-id="' + id + '"' ).style.display = 'block';

					setTimeout( delayNoticeOpacity, 100, id );
				}
			} )
		}

		//СЛАЙДЕР ОПЫТ ПРИМЕНЕНИЯ
		const experienceSlider = new Swiper( '.experience__slider', {
			slidesPerView:'auto',
			spaceBetween:30,
			loop:true,
			navigation:{
				nextEl:'.experience__slider-btn.next',
				prevEl:'.experience__slider-btn.prev',
			},
			pagination:{
				el:'.swiper-pagination',
				type:'custom',
				renderCustom:function ( swiper, current, total ) {
					function formatIndex ( index ) {
						return ('0' + index).slice( -2 );
					}

					return ('<span class="swiper-pagination-current">' + formatIndex( current ) + '</span>' +
						'<span class="swiper-pagination-separator">/</span>' +
						'<span class="swiper-pagination-total">' + total + '</span>');
				},
			},
		} );

		//ВЫЗОВ ПОПАПА ОТЗЫВОВ
		$( '[data-popup]' ).each( function () {
			if ( !$( this ).data( 'id-review' ) ) { // исключаем попап отзывов

				$( this ).magnificPopup( {
					type:'inline',
					// removalDelay: 500,
					midClick:true,
					items:{
						src:'.' + $( this ).data( 'popup' ) + '-popup',
					},
					callbacks:{
						open:function () {
							document.querySelector( 'html' ).style.overflow = 'hidden';
						},
						close:function () {
							document.querySelector( 'html' ).style.overflow = 'auto';
						},
					},
				} );

			}
		} )

	} else if ( isExist( '.catalog-body' ) ) { //СТРАНИЦА КАТАЛОГА
		//ПРОВЕРКА ССЫЛКА ДЛЯ АКТИВНОГО МЕНЮ
		let currentUrl = window.location.href,
			headerItem = document.getElementById( "menu-item-10" ),
			footerItem = document.getElementById( "menu-item-16" );

		if ( currentUrl.includes( "catalog-category" ) || currentUrl.includes( "catalog" ) ) {
			headerItem.classList.add( "current-menu-item" );
			footerItem.classList.add( "current-menu-item" );
		}

		//ПОПАП ФИЛЬТРА
		if ( window.outerWidth <= 834 ) {
			$( '.open__products-filter' ).magnificPopup( {
				type:'inline',
				callbacks:{
					beforeOpen:function () {
						this.st.mainClass = this.st.el.attr( 'data-effect' );

						const acceptButton = document.querySelector( '.filters__accept' );

						acceptButton.addEventListener( 'click', function () {
							$.magnificPopup.close();
						} );
					},
					beforeClose:function () {

					},
					open:function () {
						document.querySelector( 'html' ).style.overflow = 'auto';
						document.querySelector( 'html' ).style.marginRight = 'unset';
					},
					close:function () {
						document.querySelector( 'html' ).style.overflow = 'auto';
					},
				},
				fixedContentPos:true,
				overflowY:'auto',
				midClick:true,
				items:{
					src:'.popup__products-filter',
				},
			} );


		} else {
			//РАСЧЕТ ВЫСОТЫ КАЖДОЙ КАТЕГОРИЙ ФИЛЬТРА
			let filterItems = document.getElementsByClassName( 'filter__items' );

			for ( let i = 0; i < filterItems.length; i++ ) {
				let items = filterItems[i].getElementsByClassName( 'items__item' ),
					totalHeight = 0;
				for ( let j = 0; j < items.length; j++ ) {
					totalHeight += items[j].offsetHeight;
				}
				filterItems[i].style.maxHeight = totalHeight + 'px';
			}
		}

		//СКРЫТИЕ КАЖДОЙ КАТЕГОРИИ ФИЛЬТРА
		var filterNames = document.getElementsByClassName( 'filter__name' );

		for ( var i = 0; i < filterNames.length; i++ ) {
			filterNames[i].addEventListener( 'click', function ( e ) {
				e.preventDefault();
				var filterItems = this.nextElementSibling;
				var svg = this.querySelector( 'svg' );

				filterItems.classList.toggle( 'active' );
				svg.classList.toggle( 'active' );
			} );
		}

		//КНОПКА ОЧИСТИТЬ КАТЕГОРИИ ФИЛЬТРА
		var buttons = document.querySelectorAll( ".filters__button" );

		buttons.forEach( function ( button ) {
			button.addEventListener( "click", function ( e ) {
				e.preventDefault();
				var checkboxes = document.querySelectorAll( ".items__item input:checked" );
				checkboxes.forEach( function ( checkbox ) {
					checkbox.click();
				} );
			} );
		} );

		//АЯКС ФИЛЬТР
		let globalQueryResult;

		function updateProductList () {
			const checkedInputs = Array.from( document.querySelectorAll( '.items__item input[type="checkbox"]:checked' ) );
			const args = checkedInputs.reduce( ( accum, item, index ) => {
				accum[index] = JSON.parse( item.dataset.query );
				return accum;
			}, {} );
			const hasCategory = checkedInputs.some( item => item.hasAttribute( 'data-category' ) && item.getAttribute( 'data-category' ) !== '' );
			let cat = false;
			if ( checkedInputs.length > 0 ) {
				if ( hasCategory ) {
					cat = checkedInputs.find( item => item.hasAttribute( 'data-category' ) && item.getAttribute( 'data-category' ) !== '' ).dataset.category;
				}
			} else {
				const firstCheckbox = document.querySelector( '.items__item input[type="checkbox"]' );
				if ( firstCheckbox && firstCheckbox.dataset.category ) {
					cat = firstCheckbox.dataset.category;
				}
			}
			const formData = new FormData();
			formData.append( 'action', "products_filter" );
			formData.append( 'query', JSON.stringify( args ) );
			formData.append( 'category', cat );

			fetch( '/wp-admin/admin-ajax.php', {
				method:'POST',
				body:formData
			} ).then( ( response ) => {
				if ( !response.ok ) {
					alert( 'Ошибка запроса!' );
				} else {
					document.querySelector( '.product__items' ).classList.add( 'loading' );
				}
				return response;
			} ).then( async ( result ) => {
				let element = await result.text(),
					queryResult = element.slice( element.indexOf( '-----' ) + 5, element.indexOf( '|||||' ) ),
					queryCount = element.slice( element.indexOf( '|||||' ) + 5 );
				element = element.replace( /-----[\s\S]*/, '' );
				element = element.replace( /|||||[\s\S]*/, '' );
				document.querySelector( '.product__items' ).classList.add( 'loading' );
				document.querySelector( '.product__items' ).innerHTML = element;
				document.querySelector( '.product__items' ).classList.remove( 'loading' );

				console.log( queryCount );
				if ( queryCount > 1 ) {
					document.querySelector( '#more-products' ).style.display = 'flex';
					document.querySelector( '#more-products' ).setAttribute( 'data-current-page', '1' );
					document.querySelector( '#more-products' ).setAttribute( 'data-max-pages', queryCount );
				} else {
					document.querySelector( '#more-products' ).style.display = 'none';
				}

				globalQueryResult = queryResult;
				document.querySelector( '#more-products' ).setAttribute( 'data-query', queryResult );
			} );
		}

		// Обработчик клика на чекбоксы
		const checkboxes = document.querySelectorAll( '.items__item input[type="checkbox"]' );
		checkboxes.forEach( ( el ) => {
			el.onclick = function () {
				setTimeout( updateProductList, 1000 );
			};
		} );

		// ПОКАЗАТЬ ЕЩЕ ТОВАРЫ
		jQuery( '#more-products' ).on( "click", function ( e ) {
			e.preventDefault();
			let loadMore = jQuery( this ),
				currentPage = loadMore.attr( 'data-current-page' ),
				query;
			loadMore.text( 'Загрузка...' );

			if ( globalQueryResult ) {
				query = globalQueryResult;
			} else {
				query = JSON.stringify( loadMore.data( "query" ) );
			}

			const data = {
				"action":"load_more-products",
				"query":query,
				"page":currentPage,
			}

			jQuery.ajax( {
				url:"/wp-admin/admin-ajax.php",
				data:data,
				type:"POST",
				success:
					function ( data ) {
						if ( data ) {
							loadMore.html( "Загрузить ещё" );
							loadMore.prev().append( data );

							currentPage++;
							loadMore.attr( 'data-current-page', currentPage.toString() );

							if ( currentPage === parseInt( loadMore.attr( "data-max-pages" ) ) ) {
								loadMore.hide();
							}
						} else {
							loadMore.hide();
						}
					},
				error:function ( jqXHR, status, error ) {
					console.log( jqXHR + '; ' + status + '; ' + error );
				}
			} );
		} );
	} else if ( isExist( '.single-catalog__body' ) ) { //ВНУТРЕННЯЯ СТРАНИЦА ТОВАРА
		//ПРОВЕРКА ССЫЛКА ДЛЯ АКТИВНОГО МЕНЮ
		let currentUrl = window.location.href,
			headerItem = document.getElementById( "menu-item-10" ),
			footerItem = document.getElementById( "menu-item-16" );

		if ( currentUrl.includes( "catalog-category" ) || currentUrl.includes( "catalog" ) ) {
			headerItem.classList.add( "current-menu-item" );
			footerItem.classList.add( "current-menu-item" );
		}

		//СМЕНА ИЗОБРАЖЕНИЯ ВЗАВИСИМОСТИ ОТ ОБЪЕМА
		let volumeButtons = document.querySelectorAll( '.volumes__volume' ),
			volumeImages = document.querySelectorAll( 'img[data-volume]' );

		volumeButtons.forEach( button => {
			button.addEventListener( 'click', function ( event ) {
				event.preventDefault();

				volumeButtons.forEach( btn => {
					btn.classList.remove( 'active' );
				} );
				volumeImages.forEach( image => {
					image.classList.remove( 'active' );
				} );

				const volume = this.getAttribute( 'data-volume' );

				this.classList.add( 'active' );
				volumeImages.forEach( image => {
					if ( image.getAttribute( 'data-volume' ) === volume ) {
						image.classList.add( 'active' );
					}
				} );
			} );
		} );

		//СКРЫТИЕ И РАСКРЫТИЕ ИНФОРМАЦИИ ПРИМЕНЕНИЯ
		let moreBtn = document.getElementById( 'moreBtn' ),
			infoElement = document.querySelector( '.main-info__application .application__info' ),
			moreElement = document.querySelector( '.application__more' );

		if ( infoElement.offsetHeight <= 80 ) {
			moreBtn.classList.add( 'hidden' );
		}

		if ( infoElement.offsetHeight > 80 ) {
			infoElement.style.maxHeight = '80px';
		}

		moreBtn.addEventListener( 'click', function ( e ) {
			e.preventDefault();
			if ( infoElement.classList.contains( 'active' ) ) {
				infoElement.classList.remove( 'active' );
				moreElement.classList.remove( 'active' );
				infoElement.style.maxHeight = '80px';
			} else {
				infoElement.classList.add( 'active' );
				moreElement.classList.add( 'active' );
				let infoHeight = infoElement.scrollHeight;
				infoElement.style.maxHeight = infoHeight + 'px';
			}
		} );

		//СКРЫТИЕ ИНФОРМАЦИИ
		let infoHides = document.querySelectorAll( '.howHeightButtons' );

		infoHides.forEach( function ( infoHide ) {
			infoHide.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				let parent = this.closest( '.howHeightContents' );
				let bodyElement = parent.querySelector( '.howHeightContent' );
				bodyElement.classList.toggle( 'hide' );
				let svgElement = this.querySelector( 'svg' );
				svgElement.classList.toggle( 'active' );
			} );
		} );

		//ДОБАВЛЕНИЕ ТОВАРА В КОРЗИНУ ПУТЕМ ДОБАВЛЕНИЯ В КУКИ САЙТА
		$( "#addToBasket" ).click( function ( e ) {
			e.preventDefault();
			let dataId = $( ".single-catalog__body" ).data( "id" ),
				mass = $( ".volumes__volume.active span" ).text(),
				measurement = $( ".volumes__volume.active" ).data( "measurement" );

			let cookieKey = "quantity_" + dataId + "_" + mass + "_" + measurement;

			let quantity = $.cookie( cookieKey );
			// Если количество не определено, устанавливаем 1
			if ( !quantity ) {
				quantity = 1;
			} else {
				// Увеличиваем количество на 1
				quantity = parseInt( quantity ) + 1;
			}
			// Сохраняем новое количество в cookie
			$.cookie( cookieKey, quantity, { expires:31, path:'/' } );
			// Выводим результат
			updateBasketTotal();
		} );
	} else if ( isExist( '.about' ) ) {

		var swiper = new Swiper( ".swiper-application", {
			slidesPerView:1,
			grid:{
				rows:2,
				fill:'row',
			},
			spaceBetween:55,
			navigation:{
				nextEl:".management__next",
				prevEl:".management__prev",
			},
			breakpoints:{
				767:{
					slidesPerView:2,
					grid:{
						rows:2,
						fill:'row',
					},
					spaceBetween:40,
				}
			}
		} );

		const closedInfoElements = document.querySelectorAll( '.closedInfo' );

		closedInfoElements.forEach( closedInfo => {
			closedInfo.addEventListener( 'click', () => {
				const closedCounter = closedInfo.getAttribute( 'data-counter' );
				const openInfos = document.querySelectorAll( '.openInfo' );

				closedInfoElements.forEach( item => {
					item.classList.remove( 'active' );
				} );

				openInfos.forEach( openInfo => {
					const openCounter = openInfo.getAttribute( 'data-counter' );

					openInfo.classList.remove( 'active' );

					if ( closedCounter === openCounter ) {
						closedInfo.classList.add( 'active' );
						openInfo.classList.add( 'active' );
					}
				} );
			} );
		} );


	} else if ( isExist( '.news-body' ) ) { //СТРАНИЦА НОВОСТЕЙ
		// ПОКАЗАТЬ ЕЩЕ НОВОСТИ
		jQuery( '#more-news' ).on( "click", function ( e ) {
			e.preventDefault();
			let loadMore = jQuery( this ),
				currentPage = loadMore.attr( 'data-current-page' );
			loadMore.text( 'Загрузка...' );

			const data = {
				"action":"load_more-news",
				"query":JSON.stringify( loadMore.data( "query" ) ),
				"page":currentPage,
			}

			jQuery.ajax( {
				url:"/wp-admin/admin-ajax.php",
				data:data,
				type:"POST",
				success:
					function ( data ) {
						if ( data ) {
							loadMore.html( "Загрузить ещё" );
							loadMore.prev().append( data );

							currentPage++;
							loadMore.attr( 'data-current-page', currentPage.toString() );

							if ( currentPage === parseInt( loadMore.attr( "data-max-pages" ) ) ) {
								loadMore.remove();
							}
						} else {
							loadMore.remove();
						}
					},
				error:function ( jqXHR, status, error ) {
					console.log( jqXHR + '; ' + status + '; ' + error );
				}
			} );
		} );
	} else if ( isExist( '.basket__content' ) ) { //СТРАНИЦА КОРЗИНЫ
		//ОБРАБОТЧИК УМЕНЬШЕНИЯ ТОВАРА
		$( ".quantity__minus" ).click( function ( e ) {
			e.preventDefault();
			// Получаем родительский элемент
			let parentElement = $( this ).parent(),
				// Получаем элемент с количеством товара
				quantityElement = parentElement.find( ".quantity__value" ),
				// Получаем текущее значение количества товара
				quantity = parseInt( quantityElement.text() );
			// Если количество больше 1, уменьшаем на 1
			if ( quantity > 1 ) {
				quantity--;
				// Обновляем значение количества
				quantityElement.text( quantity );
				// Обновляем куки с новым значением
				updateCookie( parentElement );
			}
		} );

		//ОБРАБОТЧИК УВЕЛИЧЕНИЯ ТОВАРА
		$( ".quantity__plus" ).click( function ( e ) {
			e.preventDefault();
			// Получаем родительский элемент
			let parentElement = $( this ).parent(),
				// Получаем элемент с количеством товара
				quantityElement = parentElement.find( ".quantity__value" ),
				// Получаем текущее значение количества товара
				quantity = parseInt( quantityElement.text() );
			// Увеличиваем на 1
			quantity++;
			// Обновляем значение количества
			quantityElement.text( quantity );
			// Обновляем куки с новым значением
			updateCookie( parentElement );
		} );

		// ОБРАБОТЧИК УДАЛЕНИЯ ТОВАРА
		$( ".info__delete" ).click( function ( e ) {
			e.preventDefault();

			let parentItem = $( this ).closest( ".body__item" ),
				dataId = parentItem.find( ".more-info__quantity" ).data( "id" ),
				mass = parentItem.find( ".more-info__volume" ).data( "mass" ),
				measurement = parentItem.find( ".more-info__volume" ).data( "measurement" );

			let cookiePrefix = "quantity_" + dataId + "_" + mass + "_" + measurement;

			$.removeCookie( cookiePrefix, { path:'/' } );

			// Переменная для проверки наличия кук
			let hasQuantityCookies = false;

			// Перебираем все куки
			for ( let cookie in $.cookie() ) {
				// Проверяем, начинается ли имя куки с префикса "quantity_"
				if ( cookie.startsWith( "quantity_" ) ) {
					hasQuantityCookies = true;
					break;
				}
			}

			// Удаляем верстку товара из DOM-дерева
			parentItem.remove();

			// Обновляем счетчик
			updateBasketTotal();

			// Проверяем наличие кук с префиксом "quantity_" и выполняем соответствующие действия
			if ( !hasQuantityCookies ) {
				$( '.content__basket.container-basket, .content__form.container-basket' ).parent().empty().append( `
                    <div class="content__none">
                        <div class="none__title">Заказ</div>
                        <div class="none__body">
                            <div class="body__top">В вашем заказе ничего нет</div>
                            <div class="body__middle">Сначала добавьте что-нибудь из каталога</div>
                            <a class="body__bottom" href="/catalog/">В каталог</a>
                        </div>
                    </div>
                ` );
			}
		} );

		// ФУНКЦИЯ ОБНОВЛЕНИЯ КОЛИЧЕСТВА ТОВАРА
		function updateCookie ( parentElement ) {

			let dataId = parentElement.data( "id" ),
				mass = parentElement.data( "mass" ),
				measurement = parentElement.data( "measurement" ),
				cookieKey = "quantity_" + dataId + "_" + mass + "_" + measurement,
				quantity = parseInt( parentElement.find( ".quantity__value" ).text() );
			console.log( cookieKey )
			// Сохраняем новое количество в куки
			$.cookie( cookieKey, quantity, { expires:31, path:'/' } );
			//Обновляем счетчик
			updateBasketTotal();
		}

		//УДАЛЯЕТ КУКИ ТОВАРОВ, ОБНОВЛЯЕМ СЧЕТЧИК И МЕНЯЕМ ВЕРСТКУ ПРИ УСПЕШНОЙ ОТПРАВКЕ
		let formBasket = document.querySelector( '.form__body .wpcf7 .wpcf7-form' );
		formBasket.addEventListener( 'wpcf7mailsent', function () {
			$( ".body__item" ).each( function () {
				var parentItem = $( this );
				var dataId = parentItem.find( ".more-info__quantity" ).data( "id" );
				var mass = parentItem.find( ".more-info__volume" ).data( "mass" );
				var measurement = parentItem.find( ".more-info__volume" ).data( "measurement" );
				var cookieKey = `quantity_${ dataId }_${ mass }_${ measurement }`;

				$.removeCookie( cookieKey, { path:'/' } );
				parentItem.remove();
			} );

			updateBasketTotal();

			$( '.content__basket.container-basket, .content__form.container-basket' ).parent().empty().append( `
                <div class="content__none">
                    <div class="none__title">Заказ</div>
                    <div class="none__body">
                        <div class="body__top">В вашем заказе ничего нет</div>
                        <div class="body__middle">Сначала добавьте что-нибудь из каталога</div>
                        <a class="body__bottom" href="/catalog/">В каталог</a>
                    </div>
                </div>
            ` );
		} );

		//ОТПРАВКА ИНФОРМАЦИИ О ТОВАРОВ В ФОРМУ
		$( 'body' ).on( 'click', '.wpcf7-submit', function () {
			let products = [];

			$( '.body__item' ).each( function () {
				let productName = $( this ).data( 'name' ),
					productCode = $( this ).data( 'code' ),
					productMass = $( this ).find( '.more-info__volume' ).data( 'mass' ),
					measurement = $( this ).find( '.more-info__volume' ).data( 'measurement' ),
					quantity = $( this ).find( '.quantity__value' ).text();

				let productInfo = `Название продукта: ${ productName },
                Код продукта: ${ productCode },
                Масса продукта: ${ productMass }${ measurement === 1 ? ' кг.' : measurement === 2 ? ' л.' : '?' },
                Количество продукта: ${ quantity } шт`;
				products.push( productInfo );
			} );

			let textareaValue = products.join( '\n' );
			$( '.wpcf7-textarea.hidden__hidden' ).val( textareaValue );
		} );
	} else if ( isExist( '.buyers' ) ) {

		//ГОРОД ОПРЕДЕЛЕН ВЕРНО
		var btnAccept = document.querySelector( ".btns__btn-accept" );
		var popupCity = document.querySelector( ".popup__city" );

		btnAccept.addEventListener( "click", function ( e ) {
			e.preventDefault()
			popupCity.style.display = "none";
		} );

		const infoBtn = document.querySelector( '.info__btn' );

		infoBtn.addEventListener( 'click', function () {
			popupCity.style.display = "none";

			$.magnificPopup.close( '.btns__btn-city' );

			setTimeout( function () {
				$.magnificPopup.open( {
					items:{
						src:'.popup-application'
					},
					type:'inline'
				} );
			}, 1 );
		} );

		//ПОПАП ВЫБОРА ГОРОДА
		$( '.btns__btn-city' ).magnificPopup( {
			type:'inline',
			callbacks:{
				beforeOpen:function () {
					this.st.mainClass = this.st.el.attr( 'data-effect' );
					document.querySelector( 'html' ).style.overflow = 'auto';
					document.querySelector( 'html' ).style.marginRight = 'unset';
				},
				beforeClose:function () {
					document.querySelector( 'html' ).style.overflow = 'auto';
				},
			},
			fixedContentPos:true,
			overflowY:'auto',
			midClick:true,
			items:{
				src:'.open__btn-city',
			},
		} );

		//ВЫБОР ГОРОДА
		const choices = new Choices( '.select__city', {
			shouldSort:false,
			position: 'bottom',
		} );

		//СОБЫТИЕ ПРИ КЛИКЕ НА СЕЛЕКТ
		const select = document.querySelector( '.select__city' );

		select.addEventListener( 'choice', function ( event ) {
			const selectedValue = event.detail.choice.value; // Значение выбранного элемента

			if ( selectedValue === 'Выбрать город' ) {
				const activeChecks = document.getElementsByClassName( 'active-check' );
				for ( let j = 0; j < activeChecks.length; j++ ) {
					const activeCheckItem = activeChecks[j];
					activeCheckItem.classList.remove( 'active' );
				}

				const unactiveChecks = document.getElementsByClassName( 'unactive-check' );
				for ( let j = 0; j < unactiveChecks.length; j++ ) {
					const unactiveCheckItem = unactiveChecks[j];
					unactiveCheckItem.classList.remove( 'unactive' );
				}

				const territories = document.getElementsByClassName( 'territory' );
				for ( let k = 0; k < territories.length; k++ ) {
					const territoryItem = territories[k];
					territoryItem.classList.remove( 'active' );
				}

				const popupItems = document.getElementsByClassName( 'popup__item' );
				for ( let i = 0; i < popupItems.length; i++ ) {
					const popupItem = popupItems[i];
					popupItem.classList.remove( 'active' );
				}
			} else {
				const popupItems = document.getElementsByClassName( 'popup__item' );

				for ( let element of popupItems ) {
					const popupValue = element.getAttribute( 'data-value' );
					for ( let el of popupItems ) {
						el.classList.remove( 'active' );
					}
					setTimeout( function () {
						if ( selectedValue === popupValue ) {
							element.classList.add( 'active' );
						}
					}, 100 );

				}

				const unactiveChecks = document.getElementsByClassName( 'unactive-check' );

				for ( let i = 0; i < unactiveChecks.length; i++ ) {
					const unactiveCheck = unactiveChecks[i];
					const unactiveValue = unactiveCheck.getAttribute( 'data-value' );


					if ( selectedValue === unactiveValue ) {
						const clickEvent = new Event( 'click', { bubbles:true } );
						unactiveCheck.dispatchEvent( clickEvent );
						break;
					}
				}
			}
		}, false );

		// НАЖАТИЕ ПО ЧЕКПОИНТАМ НА КАРТЕ
		const unactiveChecks = document.getElementsByClassName( 'unactive-check' );

		for ( let i = 0; i < unactiveChecks.length; i++ ) {
			const unactiveCheck = unactiveChecks[i];

			unactiveCheck.addEventListener( 'click', function ( e ) {
				e.preventDefault();

				// НАХОДИМ ЭЛЕМЕНТЫ ПО DATA АТРИБУТАМ
				const dataId = unactiveCheck.getAttribute( 'data-id' ) || unactiveCheck.getAttribute( 'data-id2' );

				const dataValue = unactiveCheck.getAttribute( 'data-value' );

				const activeCheck = document.querySelector( `.active-check[data-id="${ dataId }"]` );

				const territory = document.querySelector( `.territory[data-id="${ dataId }"], .territory[data-id2="${ dataId }"]` );

				// УДАЛЯЕМ КЛАССЫ ДЛЯ НЕВЫДЕЛЕННЫХ РАЙОНОВ
				const activeChecks = document.getElementsByClassName( 'active-check' );
				for ( let j = 0; j < activeChecks.length; j++ ) {
					const activeCheckItem = activeChecks[j];
					activeCheckItem.classList.remove( 'active' );
				}

				const unactiveChecks = document.getElementsByClassName( 'unactive-check' );
				for ( let j = 0; j < unactiveChecks.length; j++ ) {
					const unactiveCheckItem = unactiveChecks[j];
					unactiveCheckItem.classList.remove( 'unactive' );
				}

				const territories = document.getElementsByClassName( 'territory' );
				for ( let k = 0; k < territories.length; k++ ) {
					const territoryItem = territories[k];
					territoryItem.classList.remove( 'active' );
				}

				// ДОБАВЛЯЕМ КЛАССЫ ДЛЯ ВЫДЕЛЕННОГО РАЙОНА
				if ( activeCheck ) {
					activeCheck.classList.add( 'active' );
				}

				if ( territory ) {
					territory.classList.add( 'active' );
				}

				unactiveCheck.classList.add( 'unactive' );

				choices.setChoiceByValue( dataValue );

				const popupItems = document.getElementsByClassName( 'popup__item' );

				for ( let element of popupItems ) {
					const popupValue = element.getAttribute( 'data-value' );
					for ( let el of popupItems ) {
						el.classList.remove( 'active' );
					}
					setTimeout( function () {
						if ( dataValue === popupValue ) {
							element.classList.add( 'active' );
						}
					}, 100 );

				}
			} );
		}

		let wpcf7 = document.querySelector( '.left-content__form .wpcf7' );

		wpcf7.addEventListener( 'wpcf7mailfailed', function () {
			var form = this.querySelector( 'form' );
			if ( form ) {
				form.reset();
			}
		} );

	} else if ( isExist( '.inner-page__body' ) ) { //СТАНДАРТНАЯ СТРАНИЦА
		// ОБОРАЧИВАЕМ БЛОК ГАЛЛЕРЕИ-3 В ТЕГ A
		let galItem = document.querySelectorAll( '.wp-block-gallery.columns-default .wp-block-image' );
		galItem.forEach( e => {
			src = e.querySelector( 'img' ).getAttribute( 'data-src-webp' );
			org_html = e.innerHTML;
			new_html = "<a href='" + src + "'>" + org_html + "</a>";
			e.innerHTML = new_html;
		} );

		// ДЕЛАЕМ ПОПАП ГАЛЛЕРЕИ-3
		$( '.wp-block-gallery.columns-default' ).each( function () {
			$( this ).magnificPopup( {
				delegate:'a',
				type:'image',
				gallery:{
					enabled:true
				},
				fixedContentPos:true,
				overflowY:'auto',
				callbacks:{
					open:function () {
						document.querySelector( 'html' ).style.overflow = 'auto';
						document.querySelector( 'html' ).style.marginRight = 'unset';
					},
					close:function () {
						document.querySelector( 'html' ).style.overflow = 'auto';
					},
				},
			} );
		} );

		//ОБОРАЧИВАЕМ БЛОК ГАЛЛЕРЕИ-1 В СВАЙПЕР
		let galleryElements = document.querySelectorAll( '.wp-block-gallery.columns-1' );
		galleryElements.forEach( function ( element ) {
			element.classList.add( 'swiper', 'swiper-default' );
		} );

		let imageElements = document.querySelectorAll( '.wp-block-gallery.columns-1 .wp-block-image' );
		imageElements.forEach( function ( element ) {
			element.classList.add( 'swiper-slide' );
		} );

		let wrapperElement = document.createElement( 'div' );
		wrapperElement.classList.add( 'swiper-wrapper' );

		let slideElements = document.querySelectorAll( '.swiper-slide' );
		slideElements.forEach( function ( element ) {
			wrapperElement.appendChild( element );
		} );

		let firstGalleryElement = document.querySelector( '.wp-block-gallery.columns-1' );
		firstGalleryElement.appendChild( wrapperElement );

		let navBtnElement = document.createElement( 'div' );
		navBtnElement.classList.add( 'swiper-nav' );

		let prevBtnElement = document.createElement( 'div' );
		prevBtnElement.classList.add( 'nav-prev' );
		prevBtnElement.innerHTML = '<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 1.5L1.25 9L8.75 16.5" stroke="#7AB92F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

		let nextBtnElement = document.createElement( 'div' );
		nextBtnElement.classList.add( 'nav-next' );
		nextBtnElement.innerHTML = '<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.25 16.5L8.75 9L1.25 1.5" stroke="#7AB92F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

		navBtnElement.appendChild( prevBtnElement );
		navBtnElement.appendChild( nextBtnElement );

		firstGalleryElement.insertBefore( navBtnElement, wrapperElement.nextSibling );

		let swiper = new Swiper( ".swiper-default", {
			navigation:{
				nextEl:".nav-next",
				prevEl:".nav-prev",
			},
		} );
	}

	window.addEventListener( 'load', function () {
		document.querySelectorAll( 'input[name=your-name]' ).forEach( function ( input ) {
			input.addEventListener( 'input', function () {
				this.value = this.value.replace( /[^a-zA-Zа-яА-Я\s]/g, '' );
			} );
		} );

		document.querySelectorAll( 'input[name=your-company]' ).forEach( function ( input ) {
			input.addEventListener( 'input', function () {
				this.value = this.value.replace( /[^a-zA-Zа-яА-Я\s]/g, '' );
			} );
		} );

		document.querySelectorAll( 'input[name=your-city]' ).forEach( function ( input ) {
			input.addEventListener( 'input', function () {
				this.value = this.value.replace( /[^a-zA-Zа-яА-Я\s]/g, '' );
			} );
		} );

		document.querySelectorAll( 'input[name=your-phone]' ).forEach( function ( input ) {
			input.addEventListener( 'input', function () {
				this.value = this.value.replace( /[^\d()+-]/g, '' );
			} );
		} );

		//ВЫВОД ПОПАПА ОСТАВИТЬ ЗАЯВКУ
		$( '.open-popup__application' ).magnificPopup( {
			type:'inline',
			callbacks:{
				beforeOpen:function () {
					this.st.mainClass = this.st.el.attr( 'data-effect' );
				},
				beforeClose:function () {
					var form = this.content.find( 'form' );
					if ( form.length ) {
						form[0].reset();
					}
				},
			},
			fixedContentPos:true,
			overflowY:'auto',
			midClick:true,
			items:{
				src:'.popup-application',
			},
			callbacks:{
				open:function () {
					document.querySelector( 'html' ).style.overflow = 'auto';
					document.querySelector( 'html' ).style.marginRight = 'unset';
				},
				close:function () {
					document.querySelector( 'html' ).style.overflow = 'auto';
				},
			},
		} );

		//ВЫВОД ПОПАПА СТАТЬ ДИЛЛЕРОМ
		$( '.open-popup__diller' ).magnificPopup( {
			type:'inline',
			callbacks:{
				beforeOpen:function () {
					this.st.mainClass = this.st.el.attr( 'data-effect' );
				},
				beforeClose:function () {
					var form = this.content.find( 'form' );
					if ( form.length ) {
						form[0].reset();
					}
				},
			},
			fixedContentPos:true,
			overflowY:'auto',
			midClick:true,
			items:{
				src:'.popup-diller',
			},
			callbacks:{
				open:function () {
					document.querySelector( 'html' ).style.overflow = 'auto';
					document.querySelector( 'html' ).style.marginRight = 'unset';
				},
				close:function () {
					document.querySelector( 'html' ).style.overflow = 'auto';
				},
			},
		} );

		//ВЫВОД ПОПАПА УСПЕШНОЙ ОТПРАВКИ ИЛИ ОШИБКИ
		let wpcf7 = document.querySelectorAll( '.wpcf7' );
		for ( let form of wpcf7 ) {
			form.addEventListener( 'wpcf7mailsent', function () {
				$.magnificPopup.close();
				$.magnificPopup.open( {
					type:'inline',
					items:{
						src:'.popup__sent',
					},
					fixedContentPos:true,
					overflowY:'auto',
					callbacks:{
						open:function () {
							document.querySelector( 'html' ).style.overflow = 'auto';
							document.querySelector( 'html' ).style.marginRight = 'unset';
						},
						close:function () {
							document.querySelector( 'html' ).style.overflow = 'auto';
						},
					},
				} );
			} );
			form.addEventListener( 'wpcf7mailfailed', function () {
				$.magnificPopup.close();
				$.magnificPopup.open( {
					type:'inline',
					items:{
						src:'.popup__failed',
					},
					fixedContentPos:true,
					overflowY:'auto',
					callbacks:{
						open:function () {
							document.querySelector( 'html' ).style.overflow = 'auto';
							document.querySelector( 'html' ).style.marginRight = 'unset';
						},
						close:function () {
							document.querySelector( 'html' ).style.overflow = 'auto';
						},
					},
				} );
			} );
		}
	} );

	//ФУНКЦИЯ ОБНОВЛЕНИЯ СЧЕТЧИКА
	function updateBasketTotal () {
		let totalQuantity = 0,
			// Перебираем все куки
			cookies = document.cookie.split( ';' );
		for ( let i = 0; i < cookies.length; i++ ) {
			let cookie = cookies[i].trim();
			// Проверяем, является ли текущая кука куки с количеством товара
			if ( cookie.startsWith( "quantity_" ) ) {
				let cookieParts = cookie.split( '=' ),
					cookieKey = cookieParts[0],
					quantity = parseInt( cookieParts[1] );
				// Суммируем количество товаров из всех кук
				totalQuantity += quantity;
			}
		}
		//ПРОВЕРЯЕМ ЕСТЬ ЛИ ТОВАРЫ
		if ( totalQuantity === 0 ) {
			$( ".basket__all" ).css( "display", "none" );
		} else {
			$( ".basket__all" ).css( "display", "flex" );
			$( ".basket__all" ).text( totalQuantity );
		}
	}

	// Обработка выбора вариантов select в подборе технических жидкостей по аналогам
	if ( isExist( '.selection-page' ) ) {
		const manufacturersSelect = document.querySelector( 'select.manufacturer' );
		const typesSelect = document.querySelector( 'select.type' );
		const analogsSelect = document.querySelector( 'select.analog' );

		// Инициализируем choices
		const manufacturersChoices = new Choices( manufacturersSelect, {
			shouldSort:false,
			itemSelectText:'',
			position: 'bottom',
		} );

		const typesChoices = new Choices( typesSelect, {
			shouldSort:false,
			itemSelectText:'',
			position: 'bottom',
		} );

		const analogsChoices = new Choices( analogsSelect, {
			shouldSort:false,
			itemSelectText:'',
			position: 'bottom',
		} );

		// На случай, если нужно будет добавить зелёные рамки к селектам
		// const manufacturersBorderDiv = manufacturersSelect.closest('.choices__inner');
		// const typesBorderDiv = manufacturersSelect.closest('.choices__inner');
		// const analogsBorderDiv = manufacturersSelect.closest('.choices__inner');

		analogsChoices.disable();
		typesChoices.disable();

		manufacturersSelect.addEventListener( 'change', function () {
			const selectedOption = manufacturersSelect.options[manufacturersSelect.selectedIndex];
			if ( selectedOption && selectedOption.value !== 'default' ) {
				typesChoices.enable();
			}
		} );

		// Выбираем select-ы "Производитель" и "Тип (Применение)"
		const manufacturerAndTypeSelects = document.querySelectorAll( 'select.manufacturer, select.type' );

		manufacturerAndTypeSelects.forEach( el => {
			el.addEventListener( 'change', function () {
				let allSelected = true;
				manufacturerAndTypeSelects.forEach( element => {
					const selectedOption = element.options[element.selectedIndex];
					if ( !selectedOption || selectedOption.value === 'default' ) {
						allSelected = false;
					}
				} );
				if ( allSelected ) {
					analogsChoices.enable();

					// Если все необходимые select-ы выбраны - собираем значения и формируем ajax запрос
					let manufacturersSelect = document.querySelector( 'select.manufacturer' ),
						typesSelect = document.querySelector( 'select.type' );
					const manufacturersSelectedOption = manufacturersSelect.options[manufacturersSelect.selectedIndex];
					const typesSelectedOption = typesSelect.options[typesSelect.selectedIndex];

					const args = {
						post_type:'other_manuf_products',
						post_status:'publish',
						orderby:'id',
						tax_query:{
							relation:'AND',
							0:{
								taxonomy:'catalog-category',
								field:'slug',
								terms:typesSelectedOption.value
							},
							1:{
								taxonomy:'proizvoditeli',
								field:'slug',
								terms:manufacturersSelectedOption.value
							}
						}
					};
					const data = {
						"action":"load_analogs",
						"args":JSON.stringify( args ),
					}
					jQuery.ajax( {
						url:"/wp-admin/admin-ajax.php",
						data:data,
						type:"POST",
						success:
							function ( data ) {
								if ( typeof data === 'string' ) {
									try {
										data = JSON.parse( data );
									} catch ( error ) {
										console.warn( 'Не получилось парсить JSON: ' + data );
									} finally {
										analogsChoices.clearChoices();
										analogsChoices.setChoices( [ {
											value:"default", label:"Аналог", disabled:true,
										} ] ).init();
										if ( data && data !== 'Аналогов нет' ) {
											data.forEach( el => {
												analogsChoices.setValue( [ { value:el[0], label:el[1] } ] );
											} );
											showAnalogs();
										} else {
											const resultBlock = document.querySelector( '.result-block' );
											resultBlock.innerHTML = '';
										}
									}
								}
							},
						error:function ( jqXHR, status, error ) {
							console.error( jqXHR + '; ' + status + '; ' + error );
						}
					} );
				} else {
					analogsChoices.disable();
				}
			} );
		} );

		analogsSelect.addEventListener( 'change', function () {
			showAnalogs();
		} );

		function showAnalogs () {
			const selectedOption = analogsSelect.options[analogsSelect.selectedIndex];
			const data = {
				"action":"load_stoil_products_from_analogs",
				"id":selectedOption.value,
			}
			jQuery.ajax( {
				url:"/wp-admin/admin-ajax.php",
				data:data,
				type:"POST",
				success:
					function ( data ) {
						const resultBlock = document.querySelector( '.result-block' );
						resultBlock.innerHTML = data;
					},
				error:function ( jqXHR, status, error ) {
					console.error( jqXHR + '; ' + status + '; ' + error );
				}
			} );
		}

	}

	//ВЫЗОВ ФУНКЦИИ ОБНОВЛЕНИЯ СЧЕТЧИКА
	$( document ).ready( function () {
		updateBasketTotal();
	} );
} )


