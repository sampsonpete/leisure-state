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

  <?php if ( !is_singular() ) : ?>

    <!-- Index pages -->
    <div class="entry-wrapper">

      <!-- Featured image -->
      <div class="entry-image">
        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_post_thumbnail(); ?></a>
      </div>

      <div class="entry-info">
        <!-- Article title -->
        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

        <!-- Date and tags -->
        <div class="entry-meta">
        <?php leisure_state_posted_on();
        $posttags = get_the_tags();
        if ($posttags) {
          echo '<ul class="entry-tags">';
          foreach($posttags as $tag) {
            echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
          }
          echo '</ul>';
        } ?>
        </div>

        <!-- Excerpt -->
        <?php the_excerpt();
        echo '<a href="' . esc_url( get_permalink() ) . '" class="read-more-link">Read more</a>'; ?>
      </div>
    </div>

  <?php else : ?>

    <!-- Article pages -->
    <div class="entry-wrapper">

      <!-- Article title -->
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

      <!-- Date and tags -->
      <div class="entry-meta">
      <?php leisure_state_posted_on();
      $posttags = get_the_tags();
      if ($posttags) {
        echo '<ul class="entry-tags">';
        foreach($posttags as $tag) {
          echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
        }
        echo '</ul>';
      } ?>
      </div>

      <!-- Featured image -->
      <div class="entry-image">
        <?php echo get_the_post_thumbnail(); ?>
      </div>

      <!-- Article content -->
      <div class="entry-content">
        <?php the_content( sprintf(
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
      ?>
      </div>
    </div>

  <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
