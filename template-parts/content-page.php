<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <header class="entry-header">

      <?php the_title('<h1>', '</h1>'); ?>

    </header>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>
    <div id="entry-content">
      <?php the_content(); ?>
    </div>
    
</article>