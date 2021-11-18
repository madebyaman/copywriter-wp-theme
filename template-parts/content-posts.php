<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <header class="entry-header">

      <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>

      <div class="byline meta">
        <?php the_author_posts_link(); ?>
      </div>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

    </header>
    <div id="entry-content">
      <?php the_excerpt(); ?>
    </div>

    <?php if (comments_open()): ?>

    <?php comments_template(); ?>

    <?php endif; ?>
</article>