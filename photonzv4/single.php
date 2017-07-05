<?php get_header(); ?>
    <section id="content" role="main">
        <div class="wrap-inner">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <?php get_template_part( 'entry' ); ?>
                
                <?php // if ( ! post_password_required() ) comments_template( '', true ); ?>
            
            <?php endwhile; endif; ?>
                            
            <footer class="footer">
                <?php get_template_part( 'nav', 'below-single' ); ?>
            </footer>
        </div>
        <div class="single-map"><?php echo GeoMashup::map() ?></div>
        <div class="single-comments"><?php comments_template('', true); ?></div>
    </section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>



