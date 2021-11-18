<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <header class="entry-header section-inner">

      <?php the_title('<h1 class="text-center">', '</h1>'); ?>

      <div class="byline text-center">
        <?php the_author(); ?>
      </div>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

    </header>

      <div class="main-content">

        <div class="entry-content">
          <?php the_content(); ?>
        </div>

        <?php if (comments_open()): ?>

        <?php comments_template(); ?>

        <?php endif; ?>

        <div class="blog-navigation content-inner">
          <div><?php previous_post_link( '<div class="pagination-label">PREVIOUS</div><h2>%link</h2>' ); ?> </div>
          <div><?php next_post_link( '<div class="pagination-label">NEXT</div><h2 class="text-right">%link</h2>' ); ?> </div>
        </div> <!-- end navigation -->

      </div> <!-- .main-content -->
    
</article>