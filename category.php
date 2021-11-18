<?php
/**
 * The category file
 *
 * This is catchall file in WP theme.
 * It is a required file
 *
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  
  <main id="main" class="site-main" role="main">

    <div class="section-inner text-center"><h1><?php the_archive_title(); ?></h1></div>
    <div class="content-inner">

    <?php if (have_posts()):
    while (have_posts()):
            the_post(); ?>
      <?php get_template_part("template-parts/content", 'posts'); ?>
    <?php
        endwhile;
    endif; ?>
    <?php echo paginate_links(); ?>
    </div>
    </main>
  </div>

  <?php get_footer(); ?>

