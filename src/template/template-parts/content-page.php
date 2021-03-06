<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leisure-state
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- Featured image for article pages -->
  <?php if (is_singular() && has_post_thumbnail()) :
  echo '<div class="article-featured-image">' . get_the_post_thumbnail() . '</div><div class="article-content">';
  elseif (is_singular() && !has_post_thumbnail()) :
  echo '<div class="article-content">';
  endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'leisure-state' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'leisure-state' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

  <!-- Close article div -->
  <?php if (is_singular()) :
  echo '</div>';
  endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
