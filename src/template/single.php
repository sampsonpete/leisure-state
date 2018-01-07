<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package leisure-state
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

      $args = array(
      	'prev_text'          => '<span>%title</span> Read more</a>',
      	'next_text'          => '<span>%title</span> Read more</a>',
      	'in_same_term'       => false,
      	'taxonomy'           => 'category',
      	'excluded_terms'     => array(),
      	'screen_reader_text' => 'Post navigation'
      );

			the_post_navigation($args);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
