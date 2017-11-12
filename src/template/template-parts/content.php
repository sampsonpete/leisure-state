<?php
/**
 * Template part for displaying posts
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
  <!-- Featured image for index pages -->
  <?php if (!is_singular() && has_post_thumbnail()) :
  echo '<a href="' . esc_url( get_permalink() ) . '">' . get_the_post_thumbnail() . '</a>';
  endif; ?>
  <?php
  if ( is_singular() ) :
  the_title( '<h1 class="entry-title">', '</h1>' );
  else :
  the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  endif; ?>
  </header><!-- .entry-header -->

  <?php if ( 'post' === get_post_type() ) : ?>
  <div class="entry-meta">
  <?php leisure_state_posted_on(); ?>
  <?php $posttags = get_the_tags();
  if ($posttags) {
    echo '<ul class="entry-tags">';
    foreach($posttags as $tag) {
      echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
    }
    echo '</ul>';
  } ?>
  </div><!-- .entry-meta -->
  <?php
  endif; ?>

  <div class="entry-content">
    <!-- If is not singular and has excerpt, show the post excerpt,
    else show the full post content -->
    <?php if (!is_singular() && has_excerpt()) :
    the_excerpt();
    echo '<a href="' . get_permalink() . '" class="read-more-link">Read more</a>';
    else:
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'leisure-state' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'leisure-state' ),
				'after'  => '</div>',
			) );
  	endif; ?>
  </div><!-- .entry-content -->

  <!-- Close article div -->
  <?php if (is_singular()) :
  echo '</div>';
  endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
