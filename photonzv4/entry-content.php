<div class="entry-content">

    <?php if ( is_singular() ) 
        { 
            echo '<div>' . the_content() . '</div>';            
            
        } else { 
            echo '<div>' . the_excerpt() . '</div>';             
            
    } ?>

        <div class="entry-links">
            <?php wp_link_pages(); ?>
        </div>
</div>
