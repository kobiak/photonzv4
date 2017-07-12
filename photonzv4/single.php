<?php get_header(); ?>
    <section id="content" role="main">
        <div class="wrap-inner">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <?php get_template_part( 'entry' ); ?>
                
                <?php // if ( ! post_password_required() ) comments_template( '', true ); ?>
            
            <?php endwhile; endif; ?>
                           
                  

            <div data-background-alpha="0.0" data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="disable" data-share-style="1" data-mode="share" data-like-text-enable="false" data-mobile-view="true" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="rectangle" data-sn-ids="fb.vk.tw.ok.gp.ps." data-share-size="40" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1364738" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="true" data-selection-enable="false" class="uptolike-buttons" ></div>         
                            
            <footer class="footer">
                <?php get_template_part( 'nav', 'below-single' ); ?>
            </footer>
        </div>
        <div class="single-map"><?php echo GeoMashup::map() ?></div>
        <div class="single-comments"><?php comments_template('', true); ?></div>
    </section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>



