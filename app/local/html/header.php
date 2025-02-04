<!DOCTYPE html>
<html lang="en" class="popup_opened">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Medar</title>
        <meta name="format-detection" content="telephone=no">
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/local/assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/local/assets/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/local/assets/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="/local/assets/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="/local/assets/img/favicon/safari-pinned-tab.svg" color="#787878">
        <link rel="shortcut icon" href="/local/assets/img/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-config" content="/local/assets/img/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="/local/assets/fonts/iconmoon/style.css">
        <link rel="stylesheet" href="/local/assets/css/main.min.css">

        <script src="/local/assets/libs/jquery.min.js"></script>
        <script src="/local/assets/js/all.js"></script>
        
        <!-- Preloader -->
        <style>
            .preloader {
            background: #333333;
            height: 100vh;
            width: 100vw;
            position: fixed;
            right: 0;
            left: 0;
            bottom: 0;
            top: 0;
            z-index: 999999;
            }
            .preloader__container {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            }
            .preloader__icon--1 {
            transition: all 1s;
            top: 0;
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translate(-50%);
            display: none;
            }
            .preloader__icon--1.active {
            opacity: 0;
            }
            .preloader__icon--2 {
            visibility: hidden;
            opacity: 0;
            transform: scale(0.7);
            transition: all 1s ease-in-out;
            transform-origin: 50% 50%;
            }
            .preloader__icon--2.active {
            transform: scale(1);
            visibility: visible;
            opacity: 1;
            }
            .preloader__dot_list {
            display: flex;
            justify-content: center;
            }
            .preloader__dot {
            border: 1px solid #FFFFFF;
            border-radius: 50%;
            width: 11px;
            height: 11px;
            margin: 0 6px;
            margin-top: 53px;
            position: relative;
            animation: dots 1.2s infinite ease-in-out;
            }
            .preloader__dot:nth-child(1) {
            animation-delay: 0;
            }
            .preloader__dot:nth-child(2) {
            animation-delay: .2s;
            }
            .preloader__dot:nth-child(3) {
            animation-delay: .4s;
            }
            .preloader__dot:nth-child(4) {
            animation-delay: .6s;
            }
            .preloader__dot:nth-child(5) {
            animation-delay: .8s;
            }
            .preloader__dot--accent {
            background: #54c5b0;
            border: none;
            }
            @keyframes dots {
            0% {
            top: 0;
            }
            20% {
            top: -14px;
            }
            40%, 100% {
            top: 0;
            }
            }
        </style>
    </head>
    <body>

    <script>
    var ourShops = [
                
            {
                point: [55.830296,49.085959],
                text: 'ул. Волгоградская, д.12',
                images: [
                                                                        '/upload/resize_cache/iblock/2ab/250_250_1/2ab8913dc828b1a9c5b90e43dacb5ec1.jpg',
                                                    '/upload/resize_cache/iblock/497/250_250_1/4972714884bf88f57693fa85de86578f.jpg',
                                                    '/upload/resize_cache/iblock/d50/250_250_1/d50ce58321314551f00b2faf2eff0f0e.jpeg',
                                                            ]
            },
        
                
            {
                point: [55.742559,49.211894],
                text: 'ул. Юлиуса Фучика, д.14',
                images: [
                                                                        '/upload/resize_cache/iblock/23c/250_250_1/23c27519d9562f765269d4d89c92691b.jpg',
                                                    '/upload/resize_cache/iblock/a35/250_250_1/a3585259095143b5660597849c7949d3.jpg',
                                                    '/upload/resize_cache/iblock/96d/250_250_1/96d361f995ecb81bb63918ca0366e839.jpg',
                                                            ]
            },
        
            ];
        </script>
         <!-- Preloader -->
<div class="preloader preloader--default">
	<div class="preloader__container">
		<svg class="preloader__icon preloader__icon--1" id="preloader_icon1" width="118" height="133" viewBox="0 0 118 133" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M117.197 39.9307V39.9308V93.0684C117.194 95.3297 116.6 97.5499 115.476 99.5057C114.352 101.461 112.738 103.084 110.797 104.209L110.796 104.21L65.2046 130.779C63.2677 131.907 61.0712 132.5 58.8356 132.5C56.6001 132.5 54.4036 131.907 52.4667 130.779L6.87558 104.21C6.87556 104.21 6.87554 104.21 6.87552 104.21C4.9387 103.081 3.32971 101.457 2.21046 99.5019C1.09118 97.5463 0.50118 95.3278 0.5 93.0692V39.9312C0.503791 37.6693 1.09824 35.4487 2.22316 33.4929C3.34812 31.537 4.96373 29.9154 6.90679 28.7909L6.90809 28.7901L52.4992 2.22102C52.4993 2.22098 52.4994 2.22094 52.4994 2.2209C54.4363 1.09338 56.6327 0.5 58.8682 0.5C61.1037 0.5 63.3001 1.09338 65.237 2.2209C65.237 2.22094 65.2371 2.22098 65.2372 2.22102L110.828 28.7901C112.765 29.9189 114.373 31.5425 115.491 33.4981C116.61 35.4537 117.198 37.6723 117.197 39.9307Z" stroke="white"/>
			<path d="M78.0512 39.0704L78.0512 39.0704L78.0484 39.0754L58.4578 73.9826L38.8673 39.0754L38.8673 39.0754L38.8645 39.0704C37.5198 36.7375 34.8788 34.5 31.9572 34.5C28.8802 34.5 25.501 36.752 25.501 41.1346V89.347C25.501 93.2558 28.7498 96.5 32.734 96.5C36.5625 96.5 39.7081 93.2387 39.7081 89.347V65.8593L52.4889 89.8357C53.772 92.3995 56.0034 93.8215 58.4578 93.8215C61.0044 93.8215 63.2316 92.3076 64.5116 89.8382C64.512 89.8376 64.5123 89.8369 64.5127 89.8362L77.2075 65.8704V89.347C77.2075 93.2474 80.4479 96.5 84.2679 96.5C88.2521 96.5 91.501 93.2558 91.501 89.347V41.1346C91.501 36.752 88.1217 34.5 85.0448 34.5C82.1289 34.5 79.3998 36.7306 78.0512 39.0704Z" stroke="white"/>
		</svg>
		<svg class="preloader__icon preloader__icon--2" width="118" height="133" viewBox="0 0 118 133" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M117.697 93.0692V39.9308C117.698 37.5855 117.087 35.2813 115.925 33.2499C114.764 31.2185 113.093 29.5313 111.08 28.3581L65.4887 1.78891C63.4756 0.616951 61.1923 0 58.8682 0C56.544 0 54.2608 0.616951 52.2477 1.78891L6.65634 28.3581C4.63687 29.5269 2.95831 31.2119 1.78974 33.2436C0.621169 35.2753 0.00386248 37.5818 0 39.9308L0 93.0692C0.00122588 95.4149 0.613892 97.719 1.77651 99.7503C2.93913 101.782 4.61081 103.469 6.62377 104.642L52.2151 131.211C54.2282 132.383 56.5115 133 58.8356 133C61.1598 133 63.443 132.383 65.4561 131.211L111.047 104.642C113.065 103.472 114.742 101.786 115.91 99.7548C117.077 97.7233 117.693 95.4175 117.697 93.0692Z" fill="white"/>
			<path d="M107.185 97.0071L62.0814 123.659C61.6911 123.885 61.2489 124.002 60.7994 124C60.3499 123.998 59.9089 123.875 59.5209 123.646C59.1329 123.416 58.8116 123.086 58.5893 122.691C58.3671 122.295 58.2517 121.847 58.2549 121.392V13.678C58.2546 13.2139 58.3734 12.7577 58.5997 12.3541C58.8261 11.9506 59.1522 11.6136 59.546 11.3763C59.9399 11.1389 60.3879 11.0094 60.8461 11.0005C61.3043 10.9916 61.7569 11.1035 62.1595 11.3252L107.12 37.2914C107.77 37.6687 108.309 38.213 108.684 38.8692C109.058 39.5253 109.255 40.2701 109.255 41.0282V93.2901C109.26 94.0386 109.072 94.7755 108.709 95.4276C108.346 96.0797 107.821 96.6242 107.185 97.0071Z" fill="#333333"/>
			<path d="M58.416 94.0563C59.616 94.006 60.7797 93.6271 61.7825 92.9603C62.7853 92.2934 63.5893 91.3638 64.1084 90.271L77.9161 63.9844V90.0345C77.9705 91.7992 78.7035 93.4733 79.9599 94.7021C81.2163 95.931 82.8975 96.6183 84.6473 96.6183C86.3972 96.6183 88.0783 95.931 89.3347 94.7021C90.5911 93.4733 91.3241 91.7992 91.3786 90.0345V40.793C91.4115 39.9745 91.2784 39.1578 90.9876 38.3929C90.6968 37.6281 90.2543 36.9312 89.6873 36.3449C89.1202 35.7586 88.4405 35.2952 87.6898 34.9832C86.9391 34.6712 86.1332 34.517 85.3214 34.5302C82.612 34.5302 79.9872 36.6463 78.6781 38.9398L58.416 75.3665" fill="white"/>
			<path d="M58.4228 94.0572C57.2274 94.0022 56.0691 93.6211 55.0713 92.9546C54.0735 92.288 53.2735 91.3609 52.7565 90.2719L38.9488 63.9853V90.0354C38.8944 91.8001 38.1614 93.4742 36.905 94.7031C35.6485 95.9319 33.9674 96.6192 32.2176 96.6192C30.4677 96.6192 28.7866 95.9319 27.5302 94.7031C26.2738 93.4742 25.5407 91.8001 25.4863 90.0354V40.7939C25.4536 39.9776 25.5858 39.1632 25.8751 38.4001C26.1643 37.637 26.6044 36.9414 27.1687 36.3554C27.7329 35.7695 28.4094 35.3056 29.1571 34.992C29.9047 34.6784 30.7078 34.5216 31.5174 34.5311C34.2268 34.5311 36.8516 36.6472 38.1607 38.9407L58.4228 75.3674" fill="#262626"/>
			<path d="M58.4228 94.0572C57.2274 94.0022 56.0691 93.6211 55.0713 92.9546C54.0735 92.288 53.2735 91.3609 52.7565 90.2719L38.9488 63.9853V90.0354C38.8944 91.8001 38.1614 93.4742 36.905 94.7031C35.6485 95.9319 33.9674 96.6192 32.2176 96.6192C30.4677 96.6192 28.7866 95.9319 27.5302 94.7031C26.2738 93.4742 25.5407 91.8001 25.4863 90.0354V40.7939C25.4536 39.9776 25.5858 39.1632 25.8751 38.4001C26.1643 37.637 26.6044 36.9414 27.1687 36.3554C27.7329 35.7695 28.4094 35.3056 29.1571 34.992C29.9047 34.6784 30.7078 34.5216 31.5174 34.5311C34.2268 34.5311 36.8516 36.6472 38.1607 38.9407L58.4228 75.3674" fill="#333333"/>
		</svg>
		<div class="preloader__dot_list">
			<div class="preloader__dot"></div>
			<div class="preloader__dot preloader__dot--accent"></div>
			<div class="preloader__dot"></div>
			<div class="preloader__dot preloader__dot--accent"></div>
			<div class="preloader__dot"></div>
		</div>
	</div>
</div>
<!-- Preloader END -->

 <!-- Preloader white -->
 <div class="preloader preloader--white" style="display: none">
	<div class="preloader__container">
        <div class="preloader__icon">
            <img src="/local/assets/img/shadowed-logo.png" alt="">
        </div>
		<div class="preloader__dot_list preloader__dot_list--grey">
			<div class="preloader__dot"></div>
			<div class="preloader__dot preloader__dot--accent"></div>
			<div class="preloader__dot"></div>
			<div class="preloader__dot preloader__dot--accent"></div>
			<div class="preloader__dot"></div>
		</div>
	</div>
</div>
<!-- Preloader white END -->
        <div class="full_overlay scrollable close_search mobile_menu_close filter_close"></div>
        <header class="nav <? if( $_SERVER['REQUEST_URI'] == "/local/html/" || $_SERVER['REQUEST_URI'] == "/") echo 'nav--transparent'; ?>">
            <!-- Nav Top -->
            <div class="nav_top fz12">
                <div class="container nav_top__container hide_lg">
                    <ul class="menu nav__menu">
                        <li><a href="#" class="menu_btn menu__item text_grey">О компании</a></li>
                        <li><a href="#" class="menu_btn menu__item text_grey">Доставка и оплата</a></li>
                        <li><a href="#" class="menu_btn menu__item text_grey">Гарантии и возврат</a></li>
                        <li><a href="#" class="menu_btn menu__item text_grey">Сотрудничество</a></li>
                        <li><a href="#" class="menu_btn menu__item text_grey">Контакты</a></li>
                    </ul>
                    <div class="nav_top__btns">
                        <a href="#shops_popup" class="nav_top__btns_btn open_popup menu_btn nav_top__menu_btn text_light_grey hover_accent fz12">Магазины <span class="icon-arrow-down btn_icon btn_icon--right text_accent"></span></a>
                        <a href="#cities_popup" class="nav_top__btns_btn fz12 open_popup menu_btn nav_top__menu_btn"><span class="text_grey">Ваш город: </span><span id="currentCity" class="menu_btn menu_btn--text_dashed text_light_grey city_changable">Казань</span><span class="icon-arrow-down btn_icon btn_icon--right text_accent"></span></a>
                    </div>
                </div>
            </div>
            <!-- Nav Top END -->
            <!-- Nav Main -->
            <div class="nav_main">
                <div class="container nav_main__container">
                    <a href="#" class="nav_main__catalog_open catalog_open_btn show_lg hamburger_hover mobile_menu_open">
                        <div class="hamburger hamburger--white catalog_open_btn__icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span class="text_white">Меню</span>
                    </a>
                    <a href="/" class="logo icon-logo nav_main__logo">
                    <span class="icon-logo"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                    </a>
                    <div class="search_overlay close_search"></div>
                    <!-- Search -->
                    <form class="search_block">
                        <div class="search_block__header">
                            <input type="text" name="search" class="input search_block__input nav_main__search_block" autocomplete="off">
                            <button type="submit" class="search_block__icon text_accent icon-loupe"></button>
                        </div>
                        <!-- Search dropdown -->
                        <div class="search_block__dropdown_wrap scrollable">
                            <div class="search_block__dropdown_wrap2 perfect_scrollbar perfect_scrollbar2">
                                <div class="dropdown search_block__dropdown">
                                    <div class="cart cart--small cart--search">
                                        <? for ($i=0; $i < 5; $i++) { ?>
                                        <div class="cart_item">
                                            <div class="cart__td">
                                                <a href="#" class="cart_item__img" style="background-image:url('/local/assets/img/product.png')"></a>
                                            </div>
                                            <div class="cart__td">
                                                <a href="#" class="cart_item__title h4"><span class="text_dark">Очищающая сыворотка для лица LEVRANA</span></a>
                                            </div>
                                            <div class="cart__td">
                                                <div class="in_stock hide_733">
                                                    <span class="active"></span>
                                                    <span class="active"></span>
                                                    <span class="active"></span>
                                                    <span class="active"></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <div class="fz12 show_733 mb15">
                                                    <span class="text_grey">Наличие:</span> <span class="text_accent">много</span>
                                                </div>
                                            </div>
                                            <div class="cart__td">
                                                <div class="fz14 cart_item__price"><span class="bold">440 руб.</span> <span class="cart_item__old_price text_grey fz12 text_crossed show_sm">12 500</span></div>
                                            </div>
                                            <div class="cart__td">
                                                <button type="button" class="icon-hurt cart_item__button toggle_active"></button>
                                                <a href="#tocart_popup" class="text_dark open_popup icon-cart cart_item__button toggle_active"></a>
                                            </div>
                                        </div>
                                        <hr>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                            <footer class="cart__footer cart__footer--abs">
                                <div class="fz18 cart__footer_text">Всего найдено: 343 товара</div>
                                <div class="cart__footer_buttons">
                                    <a href="#" class="cart__footer_button button">ВСЕ РЕЗУЛЬТАТЫ<span class="button__icon icon-arrow-point-to-right"></span></a>
                                </div>
                            </footer>
                        </div>
                        <!-- Search dropdown END -->
                    </form>
                    <!-- Search END -->
                    <div class="text_right search_block__cross showWhenSearch">
                        <a class="showWhenSearch close_search icon-close"></a>
                    </div>
                    <div class="phone_block hide_lg hideWhenSearch">
                        <a href="tel:88432111999" class="phone_block__number text_white">8 (843) 211-19-99</a>
                        <div class="phone_block__text fz12 text_grey">Казань</div>
                    </div>
                    <div class="phone_block hide_lg hideWhenSearch">
                        <a href="tel:88002111999" class="phone_block__number text_white">8 (800) 211-19-99</a>
                        <div class="phone_block__text fz12 text_grey">Казань</div>
                    </div>
                    <div class="icon_menu hideWhenSearch">
                        <div href="#" class="icon_menu__item">
                            <div class="icon_menu__item_inner open_search">
                                <div class="icon-loupe icon_menu__icon"></div>
                            </div>
                        </div>
                        <div href="#" class="icon_menu__item hide_lg">
                            <div class="icon_menu__item_inner lk_open">
                                <div class="icon-user icon_menu__icon"></div>
                            </div>
                            <!-- Личный кабинет -->
                            <div class="small_popup__wrap lk_popup__wrap">
                                <div class="small_popup__arrow"></div>
                                <div class="small_popup lk_popup text_left">
                                    <div class="small_popup__container">
                                        <div class="small_popup__title mb25">Личный кабинет</div>
                                        <div class="lk_popup__header mb20">
                                            <div class="lk_popup__header_icon icon-user"></div>
                                            <div>
                                                <div class="bold lk_popup__header_name">Третьякова Александра</div>
                                                <div class="text_grey fz12">info@alexandra.ru</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb15">
                                    <div class="small_popup__container fz12">
                                        <a href="#" class="text_grey link link--grey2 mb15">Мои заказы</a>
                                        <div class="badge badge--white icon_menu__badge">2</div>
                                        <br>
                                        <a href="#" class="text_grey link link--grey2 mb15">Избранное</a>
                                        <div class="badge badge--white icon_menu__badge">2</div>
                                        <br>
                                        <a href="#" class="text_grey link link--grey2 mb15 text_underline text_underline--hoverable">Персональные данные</a><br>
                                    </div>
                                    <hr class="mb20">
                                    <div class="small_popup__container">
                                        <a href="#login_popup" class="open_popup button button--empty2 mb20">ВЫЙТИ <span class="button__icon icon-arrow-point-to-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Личный кабинет END -->
                        </div>
                        <div href="#" class="icon_menu__item hide_xs">
                            <div class="icon_menu__item_inner open_liked" data-popup-left="119" data-popup-top="11">
                                <div class="icon-hurt icon_menu__icon"></div>
                                <div class="badge icon_menu__badge">2</div>
                            </div>
                        </div>
                        <div class="icon_menu__item">
                            <div class="icon_menu__item_inner open_cart">
                                <a href="#" class="icon-cart icon_menu__icon"></a>
                                <div class="badge icon_menu__badge hide_xs">2</div>
                                <div class="icon_menu__price_wrap text_light_grey fz12">
                                    <span class="icon_menu__price hide_lg">880</span><span class="hide_lg"> руб.</span>
                                </div>
                            </div>
                            <!-- Корзина -->
                            <div class="small_popup__wrap cart_popup__wrap scrollable">
                                <div class="small_popup__arrow"></div>
                                <div class="perfect_scrollbar">
                                    <div class="small_popup cart_popup text_left">
                                        <div class="small_popup__container">
                                            <div class="small_popup__title">Корзина</div>
                                        </div>
                                        <? for ($i=0; $i < 5; $i++) { ?>
                                        <div class="small_popup__container">
                                            <div class="cart cart--small cart--favourite">
                                                <div class="cart_item">
                                                    <div class="cart__td">
                                                        <a href="#" class="cart_item__img" style="background-image:url('/local/assets/img/product.png')"></a>
                                                    </div>
                                                    <div class="cart__td">
                                                        <a href="\#" class="cart_item__title h4 text_dark mb5"><span class="text_dark">Очищающая сыворотка для лица LEVRANA</span></a>
                                                        <div class="fz12 text_grey cart_item__brand hide_733">Бренд: LEVRANA</div>
                                                    </div>
                                                    <div class="cart__td">
                                                        <div class="fz12 show_733 mb15">
                                                            <span class="text_grey">Наличие:</span> <span class="text_accent">много</span>
                                                        </div>
                                                        <div class="cart_item__price">
                                                            <div class="bold fz14 cart_item__price_text">440 руб.</div>
                                                            <div class="text_grey fz12 hide_733">4 шт</div>
                                                        </div>
                                                    </div>
                                                    <div class="cart__td">
                                                        <a href="#tocart_popup" class="open_popup icon-cart cart_item__button text_dark"></a>
                                                        <button type="button" class="icon-rubbish-bin cart_item__button"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <? } ?>
                                    </div>
                                </div>
                                <div class="small_popup__container liked_popup__footer">
                                    <a href="#" class="button">В КОРЗИНУ <span class="button__icon icon-arrow-point-to-right"></span></a>
                                </div>
                            </div>
                            <!-- Корзина END -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nav Main END -->
            <!-- Nav Bottom -->
            <div class="nav_bottom hide_lg">
                <div class="container nav_bottom__container">
                    <a href="#" class="catalog_open_btn toggle_catalog hamburger_hover">
                        <div class="hamburger catalog_open_btn__icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span class="text_white">Каталог косметики</span>
                    </a>
                    <!-- Меню-каталог -->
                    <div class="catalog_menu">
                        <div class="catalog_menu__content">
                            <div class="catalog_menu__overlay close_catalog"></div>
                            <div class="catalog_menu__col" style="background-image: url('/local/assets/img/catalogMenu/1.jpg')">
                                <a href="#" class="catalog_menu__title bold fz18">Для стилистов</a>
                                <div class="catalog_menu__list mb35">
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                </div>
                                <a href="#" class="catalog_menu__button button">ПЕРЕЙТИ В РАЗДЕЛ<span class="button__icon icon-arrow-point-to-right"></span></a>
                            </div>
                            <div class="catalog_menu__col" style="background-image: url('/local/assets/img/catalogMenu/2.jpg')">
                                <a href="#" class="catalog_menu__title bold fz18">Для стилистов</a>
                                <div class="catalog_menu__list mb35">
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                </div>
                                <a href="#" class="catalog_menu__button button">ПЕРЕЙТИ В РАЗДЕЛ<span class="button__icon icon-arrow-point-to-right"></span></a>
                            </div>
                            <div class="catalog_menu__col" style="background-image: url('/local/assets/img/catalogMenu/3.jpg')">
                                <a href="#" class="catalog_menu__title bold fz18">Для стилистов</a>
                                <div class="catalog_menu__list mb35">
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                </div>
                                <a href="#" class="catalog_menu__button button">ПЕРЕЙТИ В РАЗДЕЛ<span class="button__icon icon-arrow-point-to-right"></span></a>
                            </div>
                            <div class="catalog_menu__col" style="background-image: url('/local/assets/img/catalogMenu/4.jpg')">
                                <a href="#" class="catalog_menu__title bold fz18">Для стилистов</a>
                                <div class="catalog_menu__list mb35">
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                    <a href="#" class="catalog_menu__link fz14"><span class="catalog_menu__link_text">Сыворотки</span> <span class="catalog_menu__quant">(329)</span></a>
                                </div>
                                <a href="#" class="catalog_menu__button button">ПЕРЕЙТИ В РАЗДЕЛ<span class="button__icon icon-arrow-point-to-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Меню-каталог END -->
                    <ul class="menu fz14">
                        <li><a href="#" class="menu_btn menu__item menu_btn--text_hover text_white">Бумажные изделия</a></li>
                        <li><a href="#" class="menu_btn menu__item menu_btn--text_hover text_white">Популярные товары</a></li>
                        <li><a href="#" class="menu_btn menu__item menu_btn--text_hover text_white">Распродажа</a></li>
                        <li><a href="#" class="menu_btn menu__item menu_btn--text_hover text_white">Акции</a></li>
                    </ul>
                </div>
            </div>
            <!-- Nav Bottom END -->
        </header>
        <!-- Mobile menu -->
        <div class="mobile_menu perfect_scrollbar perfect_scrollbar2 fz14">
            <div class="scrollable mobile_menu__inner">
                <div class="mobile_menu__header mb5">
                    <button class="mobile_menu_close mobile_menu__close">
                    <span class="icon-close mobile_menu__icon"></span><span>Меню</span>
                    </button>
                    <a href="#cities_popup" class="fz12 open_popup"><span class="text_grey">Ваш город: </span><span id="currentCityMobile" class="menu_btn accent_dotted text_light_grey">Казань</span></a>
                </div>
                <a href="#login_popup" class="mobile_menu__sec text_grey open_popup">
                    <div class="mobile_menu__sec_icon icon-user"></div>
                    <span>Войдите в личный кабинет</span>
                </a>
                <a href="#" class="mobile_menu__sec text_grey open_liked open_liked_mobile show_xs" data-mobile="true" data-popup-left="0" data-popup-right="0" data-popup-top="40" data-arrow-left="25">
                    <div class="mobile_menu__sec_icon icon-hurt"></div>
                    Избранное
                </a>
                <div class="mobile_menu__sec2 text_grey">
                    <a href="" class="mobile_menu__link">Для стилистов</a>
                    <a href="" class="mobile_menu__link">Для косметологов</a>
                    <a href="" class="mobile_menu__link">Для медицинских центров</a>
                    <a href="" class="mobile_menu__link">Для nail-индустрии</a>
                </div>
                <div class="mobile_menu__sec2 text_grey">
                    <a href="" class="mobile_menu__link">Бумажные изделия</a>
                    <a href="" class="mobile_menu__link">Популярные товары</a>
                    <a href="" class="mobile_menu__link">Распродажа</a>
                    <a href="" class="mobile_menu__link">Акции</a>
                </div>
                <div class="mobile_menu__sec2 text_grey">
                    <a href="" class="mobile_menu__link2">О компании</a>
                    <a href="" class="mobile_menu__link2">Доставка и оплата</a>
                    <a href="" class="mobile_menu__link2">Гарантия и возврат</a>
                    <a href="" class="mobile_menu__link2">Сотрудничество</a>
                    <a href="" class="mobile_menu__link2">Контакты</a>
                    <a href="" class="mobile_menu__link2">Магазины</a>
                </div>
                <div class="mobile_menu__footer">
                    <div class="phone_block mobile_menu__phone mb15">
                        <a href="tel:88002111999" class="phone_block__number text_white">8 (800) 211-19-99</a>
                        <div class="phone_block__text fz12 text_grey">Казань</div>
                    </div>
                    <div class="phone_block mobile_menu__phone">
                        <a href="tel:88002111999" class="phone_block__number text_white">8 (800) 211-19-99</a>
                        <div class="phone_block__text fz12 text_grey">Казань</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile menu END -->
        <!-- Избранное -->
        <div class="small_popup__wrap liked_popup__wrap text_dark">
            <div class="small_popup__arrow"></div>
            <div class="scrollable">
                <div class="perfect_scrollbar">
                    <div class="small_popup liked_popup text_left">
                        <div class="small_popup__container">
                            <div class="small_popup__title">Избранное</div>
                        </div>
                        <? for ($i=0; $i < 5; $i++) { ?>
                        <div class="small_popup__container">
                            <div class="cart cart--small cart--favourite">
                                <div class="cart_item">
                                    <div class="cart__td">
                                        <a href="#" class="cart_item__img" style="background-image:url('/local/assets/img/product.png')"></a>
                                    </div>
                                    <div class="cart__td">
                                        <a href="\#" class="cart_item__title h4 text_dark mb5"><span class="text_dark">Очищающая сыворотка для лица LEVRANA</span></a>
                                        <div class="fz12 text_grey cart_item__brand hide_733">Бренд: LEVRANA</div>
                                    </div>
                                    <div class="cart__td">
                                        <div class="cart_item__price">
                                            <div class="cart_item__price_text"><span class="fz14 bold">440 руб.</span> <span class="cart_item__old_price text_grey fz12 text_crossed">12 500</span></div>
                                            <div class="text_grey fz12">4 шт</div>
                                        </div>
                                    </div>
                                    <div class="cart__td">
                                        <a href="#tocart_popup" class="open_popup icon-cart cart_item__button text_dark"></a>
                                        <button type="button" class="icon-rubbish-bin cart_item__button"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <? } ?>
                    </div>
                </div>
            </div>
            <div class="small_popup__container liked_popup__footer">
                <a href="#" class="button liked_popup__button1">ИЗБРАННОЕ <span class="button__icon icon-arrow-point-to-right"></span></a>
                <a href="#" class="button button--empty2 liked_popup__button2">ДОБАВИТЬ ВСЕ В КОРЗИНУ <span class="button__icon icon-arrow-point-to-right"></span></a>
            </div>
        </div>
        <!-- Избранное END -->