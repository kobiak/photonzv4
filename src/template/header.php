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

    <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" as="style" onload="this.rel='stylesheet'">
    <meta name="google-site-verification" content="7u4TZ5YPCoAKTGC2v-yZ5Emw5AfhrYIGCQbDuXuhi78" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="theme-color" content="#000000">

    <style>
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        body {
            margin: 0;
        }
        
        .hide {
            display: none;
        }
        
        article,
        header,
        nav,
        section {
            display: block;
        }
        
        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }
        
        img {
            border-style: none;
        }
        
        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }
        
        * {
            box-sizing: border-box;
        }
        
        a {
            text-decoration: none;
        }
        
        a,
        a:visited {
            color: #0b96d0;
        }
        
        body {
            padding-top: 98px;
            color: #222;
            font-size: 16px;
            line-height: 1.3;
            font-family: PT Sans, sans-serif;
        }
        
        .header {
            background-color: #000;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1;
            min-height: 48px;
        }
        
        .wrap-inner {
            width: 960px;
            margin: 0 auto;
        }
        
        .articles {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .articles .post {
            width: 300px;
        }
        
        .articles header {
            position: relative;
        }
        
        .articles header img {
            display: block;
        }
        
        .articles header h2 {
            margin: 0;
            position: absolute;
            bottom: 0;
            background-color: rgba(0, 0, 0, .5);
            width: 100%;
            font-size: 1rem;
            padding: .5rem 1rem;
        }
        
        .articles header a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            line-height: 1.2rem;
            display: flex;
        }
        
        .menu-header-menu-container {
            overflow: hidden;
        }
        
        .menu-header-menu-container ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            min-height: 48px;
            flex-wrap: nowrap;
        }
        
        .menu-header-menu-container ul>li {
            display: flex;
            align-items: stretch;
        }
        
        .menu-header-menu-container ul a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #fff;
            padding: 0 .7em;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 1em;
            white-space: nowrap;
            border-bottom: 3px solid transparent;
        }
        
        .entry-meta {
            display: flex;
            font-size: .875em;
            padding: 1em 0 0;
            color: #777;
            /*justify-content: space-between;*/
        }

    </style>

    <?php wp_head(); ?>
    <script type='text/javascript' src="<?php echo get_stylesheet_directory_uri(); ?>/js/photonz.min.js" async></script>
</head>

<body <?php body_class(); ?>>
    <div id="mobile-menu-wrap"></div>
    <header class="header" role="header">
        <div class="wrap-inner">
            <a href="#" class="mobile-menu-button" id="js-open-menu"></a>
            <nav class="menu" role="navigation" id="mobile-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </nav>
        </div>

    </header>
