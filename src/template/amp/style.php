/* Generic WP styling */

* {
    box-sizing: border-box;
}

amp-img.alignright {
    float: right;
    margin: 0 0 1em 1em;
}

amp-img.alignleft {
    float: left;
    margin: 0 1em 1em 0;
}

amp-img.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.alignright {
    float: right;
}

.alignleft {
    float: left;
}

.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.wp-caption.alignleft {
    margin-right: 1em;
}

.wp-caption.alignright {
    margin-left: 1em;
}

.amp-wp-enforced-sizes {
    /** Our sizes fallback is 100vw, and we have a padding on the container; the max-width here prevents the element from overflowing. **/
    max-width: 100%;
}

.amp-wp-unknown-size img {
    /** Worst case scenario when we can't figure out dimensions for an image. **/
    /** Force the image into a box of fixed dimensions and use object-fit to scale. **/
    object-fit: contain;
}


/* Template Styles */

.amp-wp-content,
.amp-wp-title-bar div {
    <?php $content_max_width=absint( $this->get( 'content_max_width'));
    ?><?php if ( $content_max_width > 0): ?> max-width: <?php echo sprintf( '%dpx', $content_max_width);
    ?>;
    margin: 0 auto;
    <?php endif;
    ?>
}

body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
    font-size: 16px;
    line-height: 1.5rem;
    background: #fff;
    color: #3d596d;
    padding-bottom: 10px;
}

.amp-wp-content {
    padding: 16px;
    overflow-wrap: break-word;
    word-wrap: break-word;
    font-weight: 400;
    color: #3d596d;
}

.amp-wp-title {
    margin: 1rem 0;
    font-size: 26px;
    line-height: 1.5rem;
    font-weight: 700;
    color: #333333;
}

.amp-wp-meta {
    margin-bottom: 16px;
}

p,
ol,
ul,
figure {
    margin: 0 0 24px 0;
}

a,
a:visited {
    color: #0087be;
}

a:hover,
a:active,
a:focus {
    color: #33bbe3;
}


/* UI Fonts */

.amp-wp-meta,
nav.amp-wp-title-bar,
.wp-caption-text {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen-Sans", "Ubuntu", "Cantarell", "Helvetica Neue", sans-serif;
    font-size: 15px;
}


/* Meta */

ul.amp-wp-meta {
    padding: 24px 0 0 0;
    margin: 0 0 24px 0;
}

ul.amp-wp-meta li {
    list-style: none;
    display: inline-block;
    margin: 0;
    line-height: 24px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 300px;
}

ul.amp-wp-meta li:before {
    content: "\2022";
    margin: 0 8px;
}

ul.amp-wp-meta li:first-child:before {
    display: none;
}

.amp-wp-meta,
.amp-wp-meta a {
    color: #4f748e;
}

.amp-wp-meta .screen-reader-text {
    /* from twentyfifteen */
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    overflow: hidden;
    position: absolute;
    width: 1px;
}

.amp-wp-byline amp-img {
    border-radius: 50%;
    border: 0;
    background: #f3f6f8;
    position: relative;
    top: 6px;
    margin-right: 6px;
}


/* Titlebar */

nav.amp-wp-title-bar {
    background: #333333;
    padding: 0 16px;
}

nav.amp-wp-title-bar div {
    line-height: 54px;
    color: #fff;
}

nav.amp-wp-title-bar a {
    color: #fff;
    text-decoration: none;
}

nav.amp-wp-title-bar .amp-wp-site-icon {
    /** site icon is 32px **/
    float: left;
    margin: 11px 8px 0 0;
    border-radius: 50%;
}


/* Captions */

.wp-caption-text {
    padding: 8px 16px;
    font-style: italic;
}


/* Quotes */

blockquote {
    padding: 16px;
    margin: 8px 0 24px 0;
    border-left: 2px solid #87a6bc;
    color: #4f748e;
    background: #e9eff3;
}

blockquote p:last-child {
    margin-bottom: 0;
}


/* Other Elements */

amp-carousel {
    background: #000;
}

amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
    background: #f3f6f8;
}

amp-carousel>amp-img>img {
    object-fit: contain;
}

.amp-wp-iframe-placeholder {
    background: #f3f6f8 url(<?php echo esc_url( $this->get( 'placeholder_image_url' ));
    ?>) no-repeat center 40%;
    background-size: 48px 48px;
    min-height: 48px;
}


/* related posts */
#relatedPosts {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.yarpp-related .latest-post-wrap {
    width: 49%;
   
    position: relative;
    margin-bottom: 1rem;
}



.yarpp-related .latest-post-wrap .latest-title {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 1;
    background-color: rgba(0, 0, 0, .5);
    padding: 5px 10px;
}

.yarpp-related .latest-post-wrap h2 {
    font-size: 12px;
    line-height: 16px;
    margin: 0;
    padding: 0;
}

.yarpp-related .latest-post-wrap h2 a {
    color: #ffffff;
    text-decoration: none;
}
