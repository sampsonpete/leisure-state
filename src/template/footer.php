<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leisure-state
 */

?>

	</div><!-- #content -->

  <div id="instafeed"></div>

	<footer id="colophon" class="site-footer">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-2',
        'menu_id'        => 'footer-menu',
      ) );
    ?>

    <p class="copyright">&copy; Leisure State <?php echo date("Y"); ?></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
