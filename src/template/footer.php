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

	<footer class="site-footer">
    <?php dynamic_sidebar('footer-text'); ?>
    <div class="site-footer__instagram-wrapper">
      <h3 class="site-footer__heading">@leisure_state on Instagram</h3>
      <div id="instafeed" class="site-footer__instagram-feed"></div>
    </div>
    <p class="site-footer__copyright">&copy; Leisure State <?php echo date("Y"); ?></p>
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
