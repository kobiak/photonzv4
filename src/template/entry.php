<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
    <header>
        <?php if ( is_home() || is_archive() || is_search() ) { ?>
        <div class="entry-thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
            <?php  if ( has_post_thumbnail() )  { the_post_thumbnail(); }; ?>
            </a>
            <meta itemprop="url" content="<?php the_post_thumbnail_url() ?> ">
            <meta itemprop="width" content="300">
            <meta itemprop="height" content="200">
        </div>
        <?php } ?>


        <?php if ( is_singular() ) 
            { 
                echo '<h1 class="entry-title" itemprop="headline">'; 
                the_title();
                echo '</h1>';?>



        <span class="hide" itemprop="image" itemscope itemtype="https://schema.org/ImageObject"> 
            <meta itemprop="url" content="<?php the_post_thumbnail_url() ?> ">
            <meta itemprop="width" content="300">';
            <meta itemprop="height" content="200">';
        </span>


        <?php  } else { 
                echo '<h2 class="entry-title" itemprop="headline">'; 
             ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
            <?php the_title(); ?>
        </a>

        <?php  echo '</h2>'; } ?>

        <?php if ( is_singular() ) {  edit_post_link(); } ?>

    </header>
    <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>

    <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

    
</article>
<?php if ( is_singular() ) 
{
    related_posts();
}
?>
