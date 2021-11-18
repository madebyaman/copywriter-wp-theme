<?php
/**
 * The main template file
 *
 * This is catchall file in WP theme.
 * It is a required file
 *
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
  
  <main id="main" class="site-main archive-project" role="main">

    <div class="section-inner"><h1><?php the_archive_title(); ?></h1></div>
    <div class="section-inner">


    <?php if (have_posts()):
    while (have_posts()):
            the_post(); ?>
      <?php get_template_part("template-parts/content", 'projects'); ?>
    <?php
        endwhile;
    endif; ?>
    <?php echo paginate_links(); ?>
    </div>
    </main>
  </div>

  <?php get_footer(); ?>

