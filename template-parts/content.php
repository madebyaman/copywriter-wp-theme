<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <header class="entry-header">

      <?php the_title('<h1>', '</h1>'); ?>

      <div class="byline">
        <?php the_author(); ?>
      </div>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

    </header>
    <div id="entry-content">
      <?php the_content(); ?>
    </div>

    <?php if (comments_open()): ?>

    <?php comments_template(); ?>

    <?php endif; ?>
</article>