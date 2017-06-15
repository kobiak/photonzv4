<section class="entry-meta">

    <?php if ( is_singular() ) 
        { ?>
    <div class="meta-date"><span class="entry-date updated" itemprop="datePublished" datetime="<?php the_time('Y-m-d') ?>" content="<?php the_time('Y-m-d') ?>" pubdate><?php the_time( get_option( 'date_format' ) ); ?></span></div>
    <div class="meta-tags"><span class="tag-links"><?php the_tags( '', ', ', '' ); ?></span></div>
    <?php
        } else { 
    ?>
        <div class="meta-date"><span class="entry-date updated" itemprop="datePublished" datetime="<?php the_time('Y-m-d') ?>" itemprop="datePublished" content="<?php the_time('Y-m-d') ?>" pubdate><?php the_time( get_option( 'date_format' ) ); ?></span></div>

        <?php } ?>
        <meta itemprop="mainEntityOfPage" content="<?php the_permalink(); ?>">
        <meta itemprop="dateModified" content="<?php the_modified_date('Y-m-d'); ?>">

        <span class="hide" itemprop="author" itemscope itemtype="https://schema.org/Person">
          <a rel="author" itemprop="url" href="https://evgenyk.nz">
            <span itemprop="name"  class="vcard author"><span class="fn">Евгений Кобяков</span></span>
          </a>
        <meta itemprop="jobTitle" content="Front end developer">

        </span>

        <span class="hide" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
          <meta itemprop="name" content="PhotoNZ">
          <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <meta itemprop="url" content="https://photonz.ru/wp-content/uploads/2016/10/logo-photonz.jpg">
            <meta itemprop="width" content="900">
            <meta itemprop="height" content="600">
          </span>
        </span>


</section>
