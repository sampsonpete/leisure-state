<?php
/**
 * Template part for displaying the site navigation
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leisure-state
 */

?>

<nav id="site-navigation" class="main-navigation">
  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'leisure-state' ); ?></button>
  <?php
    wp_nav_menu( array(
      'theme_location' => 'menu-1',
      'menu_id'        => 'primary-menu',
    ) );
  ?>
</nav><!-- #site-navigation -->
