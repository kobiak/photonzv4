<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="//img-fotki.yandex.ru">
    <link rel="preconnect" href="//ajax.googleapis.com">
    <link rel="preconnect" href="//fonts.googleapis.com">
   
    <meta name="google-site-verification" content="7u4TZ5YPCoAKTGC2v-yZ5Emw5AfhrYIGCQbDuXuhi78" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="/favicon.ico">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="theme-color" content="#000000">   
    
    <style><?php include 'inline.css' ?></style>

    <?php wp_head(); ?>
    <script type='text/javascript' src="<?php echo get_stylesheet_directory_uri(); ?>/js/photonz.min.js" async></script>
</head>

<body id="body" <?php body_class(); ?>>
   
    <div id="mobile-menu-wrap"></div>
    
    <header class="header">
        <div class="wrap-inner">
            <a href="#" class="mobile-menu-open" id="js-open-menu"></a>
            <nav class="mobile-menu" role="navigation" id="mobile-menu">
                <a href="#" class="mobile-menu-close" id="js-close-menu"></a>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>                
            </nav>
            <a href="#" class="search-button" title="Кликнуть для поиска" id="js-search-button"></a>
        </div>
    </header>
