<?php get_header(); ?>

<div id="primary" class="content-area">
  
  <main id="main" class="site-main" role="main">

    <div class="wrap">

    <?php if (have_posts()):
    while (have_posts()):
            the_post(); ?>
      <?php get_template_part("template-parts/content", "page"); ?>
    <?php
        endwhile;
    endif; ?>
    </div>
    </main>
  </div>

  <?php get_footer(); ?>
