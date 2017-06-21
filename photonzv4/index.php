<?php get_header(); ?>
<section id="content" role="main">
    <div class="wrap-inner">
        <div class="articles" itemscope itemtype="http://schema.org/Blog">
           
           <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $page_num = $paged;
                if( $paged >1 ) 
                    $showposts = 12; 
                else 
                    $showposts = 13;
                    query_posts('showposts=' .$showposts. '&paged='.$page_num);
                ?>
           
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php if( $wp_query->current_post == 0 && !is_paged() && ( is_home() || is_archive() ) ) : ?>
            <!-- first posts -->

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'featured-post'); ?> itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
                <header>
                    <?php if ( is_home() || is_archive() ) { ?>
                    <section class="entry-thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                            <?php  if ( has_post_thumbnail() )  { the_post_thumbnail('full'); }; ?>
                        </a>

                        <meta itemprop="url" content="<?php the_post_thumbnail_url() ?> ">
                        <meta itemprop="width" content="300">
                        <meta itemprop="height" content="200">
                    </section>
                    <?php } ?>

                    <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
                    
                    <div class="feature-post-content">
                        <h2 class="entry-title" itemprop="headline">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        

                        <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

                    </div>

                </header>


            </article>


            <?php else : ?>

            <!-- other posts -->
            <?php get_template_part( 'entry' ); ?>
            <?php comments_template(); ?>
            <?php endif; ?>


            <?php endwhile; endif; ?>

        </div>
        <?php get_template_part( 'nav', 'below' ); ?>

    </div>

</section>

<?php get_footer(); ?>
