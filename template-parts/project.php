<article id="project-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <header class="section-inner entry-header">

      <?php the_title('<h1 class="text-center">', '</h1>'); ?>
      <?php the_terms( $post->ID, 'skills', '<div class="category meta text-center">', ' &middot; ', '</div>' ) ?>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

      </header>

      <div id="entry-content" class="content-inner">
      <?php the_content(); ?>
      <p class="url-button">
      <a class="url-button" href="<?php the_field('url'); ?>" target="_blank">
        <?php esc_html_e('Visit the project', 'copywriter'); ?> &rarr;
      </a>
      </p>

    </div>

</article>