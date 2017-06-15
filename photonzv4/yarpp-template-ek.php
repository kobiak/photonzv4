<?php
/*
YARPP Template: photoNZ Related
Description: Requires a theme which supports post thumbnails
Author: EK
*/ ?>
<h3>Ещё немного интересного</h3>
<?php if (have_posts()):?>
<div id="relatedPosts" class="clearfix">
	<?php while (have_posts()) : the_post(); ?>
		
		<div class="latest-post-wrap">
		
		<div class="latest-post">
        <div class="latest-title">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">   <?php the_title(); ?>
            </a></h2>
        </div>
        <div class="latest-image">
           <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
      </div>
		</div>
		
	<?php endwhile; ?>
</div>

<?php else: ?>
<p>No related photos.</p>
<?php endif; ?>
