<?php get_header(); ?>

   <section id="content" role="main">
    <div class="wrap-inner">
       <div class="tag-title">
            <?php 
                if ( is_day() ) { printf( __( '%s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
                elseif ( is_month() ) { printf( __( '%s', 'blankslate' ), get_the_time( 'F Y' ) ); }
                elseif ( is_year() ) { printf( __( '%s', 'blankslate' ), get_the_time( 'Y' ) ); }
                else { _e( 'Архив', 'blankslate' ); }
            ?>
        </div>
    
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
    </div>
</section>

<?php get_footer(); ?>
