<?php
/**
 * The template for displaying footer
 *
 * Contains closing of #content div and content after
 */
?>

    </div> <!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">

      <?php if (is_active_sidebar('footer-widgets')) : ?>  
    <div class="footer cta-widget content-inner">
      <?php dynamic_sidebar('footer-widgets'); ?>
    </div>
    <?php endif; ?>

    <?php if (is_active_sidebar('footer-widgets-2')) : ?>
    <div class="footer contact content-inner">
      <?php dynamic_sidebar('footer-widgets-2'); ?>
    </div>
    <?php endif; ?>

    </footer>
  </div> <!-- #page -->
  <?php wp_footer(); ?>
</body>
</html>