<?php
/**
 * The header
 *
 * This is the template to display the <head> section + everything till main content
 */

 ?>

 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
 <?php wp_body_open(); ?>
 <div id="page" class="site">
   <a href="#content" class="skip-link screen-reader-text"><?php esc_html_e('Skip to content', 'copywriter') ?></a>

  <header id="masthead" class="site-header" role="banner" itemscope="" itemtype="https://schema.org/WPHeader">

    <div class="section-inner">

    <div class="site-branding">
      <p class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </p>
    </div>

    <!-- Display navigation menu -->
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <?php esc_html_e("Primary Menu", "copywriter"); ?>
      </button>
      <?php wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_id'        => 'primary-menu',
        'depth'          => 1,
      ]);
      ?>
    </nav>

    </div>

  </header>

  <div id="content" class="site-content">

      