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
  <?php
    wp_nav_menu( array(
      'theme_location' => 'menu-1',
      'menu_id'        => 'primary-menu',
    ) );
  ?>
</nav><!-- #site-navigation -->
