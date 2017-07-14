<?php get_header(); ?>
<section id="content" role="main">

    <div class="wrap-inner">



        <div class="tag-title">
            <?php printf( __( 'Найдено по запросу: <span style="border-bottom:1px dashed #ccc;">%s</span>', 'blankslate' ), get_search_query() ); ?>
        </div>

        <div class="articles">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>

            <?php endwhile; endif; ?>

        </div>
        <?php get_template_part( 'nav', 'below' ); ?>
    </div>

</section>


<?php get_footer(); ?>
