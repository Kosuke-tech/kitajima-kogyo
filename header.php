<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>
    <meta name="description" content="これは北島工業の公式ホームページです。関東近辺の現場をを中心に活動している建設工事を手がける専門業者です。豊富な実績と確かな技術で、安全・高品質な施工を提供しています。公式ホームページはこちら。">
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5GVZYPY291"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6SPWHJVDTW');
    </script>

    <?php wp_head(); ?>
</head>

<body class="" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!------------------------------------- ヘッダー ------------------------------------->
    <header id="target__home" class="topBar">
        <div class="topBar__wrapper blContainer">
            <div class="topBar__logoWrapper">
                <img id="logoAnimation" class="topBar__logo" alt="北島工業"
                    src=" <?php echo esc_url(get_theme_file_uri('img/logo@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/logo@1x.png')); ?> 1x,
                <?php echo get_theme_file_uri('img/logo@2x.png'); ?> 2x">
            </div>
            <div class="topBar__itemWrapper">
                <div class="topBar__telInner">
                    <div class="topBar__telIconWrap"><i class="fa-solid fa-phone-volume"></i></div>
                    <a id="telAnimation" class="topBar__telText shake" href="tel:080-7948-9334">080-7948-9334</a>
                </div>
                <div class="topBar__iconInner">
                    <a class="topBar__lineIconWrap" href="https://line.me/ti/p/Q699liBLCK">
                        <i class="topBar__lineIcon fa-brands fa-line fa-square-line"></i>
                    </a>
                    <a class="topBar__igIconWrap" href="https://www.instagram.com/kitajmayuya/">
                        <i class="topBar__igIcon fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="headerNav">
            <ul class="headerNav__list blContainer">
                <li class="headerNav__item">
                    <a class="headerNav__link" href="#target__home">ホーム</a>
                </li>
                <li class="headerNav__item">
                    <a class="headerNav__link" href="#target__about">私たちについて</a>
                </li>
                <li class="headerNav__item">
                    <a class="headerNav__link" href="#target__business">事業概要</a>
                </li>
                <li class="headerNav__item">
                    <a class="headerNav__link" href="#target__member">メンバー紹介</a>
                </li>
                <li class="headerNav__item">
                    <a class="headerNav__link" href="#target__recruit">採用情報</a>
                </li>
                <li class="headerNav__item">
                    <a class="headerNav__link" href="https://line.me/ti/p/Q699liBLCK">お問い合わせ</a>
                </li>
            </ul>
        </div>

    </header>
    <main class="backGroundFall">
        <section class="keyVisual slider">
            <div class="swiper-container">
                <div class="keyVisual__wrapper swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="keyVisual__img1" alt="slide1"
                            src="<?php echo esc_url(get_theme_file_uri('img/key_visual1@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/key_visual1@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/key_visual1@2x.png')); ?>">
                    </div>
                    <div class="swiper-slide">
                        <img class="keyVisual__img2" alt="slide2"
                            src="<?php echo esc_url(get_theme_file_uri('img/key_visual2@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/key_visual2@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/key_visual2@2x.png')); ?>">
                    </div>
                    <div class="swiper-slide">
                        <img class="keyVisual__img3" alt="slide3"
                            src="<?php echo esc_url(get_theme_file_uri('img/key_visual3@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/key_visual3@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/key_visual3@2x.png')); ?>">
                    </div>
                    <!-- <div class="swiper-slide">
                        <img class="keyVisual__img4" src="<?php echo esc_url(get_theme_file_uri('img/dog.png')); ?>" alt="slide4">
                    </div> -->
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-pagination"></div>
        </section>