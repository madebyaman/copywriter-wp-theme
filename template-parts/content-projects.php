<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <header class="entry-header">

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

    </header>

      <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>

    <div class="meta">
      <span class="author"><?php the_author_posts_link(); ?></span>
      &middot
      <span class="date"><?php the_date( $d = 'F d, Y' ); ?></span>
    </div>
</article>