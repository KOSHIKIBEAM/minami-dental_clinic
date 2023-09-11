<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <!-- <div class="p-sticky-notice">
        ※当サイトは株式会社デイトラが所有する<br>
        「デイトラWeb制作コース」の完成見本サイトですす
    </div> -->
    <header class="l-header">
        <div class="l-header__inner">
            <div class="l-header__left">
                <div class="l-header__logo"><a href="<?php echo esc_attr(home_url('/')); ?>"><img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/logo.png" alt="logo"></a></div>
            </div>
            <div class="l-header__right">
                <?php if (has_nav_menu('menu-1')) : ?>
                    <nav class="l-header-nav">
                        <?php
                        wp_nav_menu(
                            [
                                'theme_location' => 'menu-1',
                                'menu_class'     => 'l-header-nav__items',
                            ]
                        );
                        ?>
                        <div class="l-header-info">
                            <div class="l-header-info__address">〒166-0001 東京都杉並区阿佐谷北7-3-1</div>
                            <div class="l-header-info__tel">03-1234-5678</div>
                        </div>
                    </nav><!-- #site-navigation -->
                <?php endif; ?>
            </div>
        </div>

        <button type="button" class="p-drawer u-hidden-pc">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="p-drawer-content u-hidden-pc">
            <div class="l-header__left">
                <div class="l-header__logo"><a href="<?php echo esc_attr(home_url('/')); ?>"><img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/logo.png" alt="logo"></a></div>
            </div>
            <?php if (has_nav_menu('menu-2')) : ?>
                <nav class="p-drawer-nav">
                    <?php
                    wp_nav_menu(
                        [
                            'theme_location' => 'menu-2',
                            'menu_class'     => 'p-drawer-nav__items',
                        ]
                    );
                    ?>
                </nav><!-- #site-navigation -->
            <?php endif; ?>
        </div>
    </header>

    <?php get_template_part('template-parts/fv'); ?>