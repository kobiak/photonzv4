<?php get_header(); ?>
    <section id="content" role="main">
        <div class="wrap-inner">
            <div class="articles" itemscope itemtype="http://schema.org/Blog">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'entry' ); ?>
                        <?php comments_template(); ?>
                            <?php endwhile; endif; ?>

            </div>
            <?php get_template_part( 'nav', 'below' ); ?>

        </div>

    </section>

    <?php get_footer(); ?>
