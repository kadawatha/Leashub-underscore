<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leashub
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <h3 class="ro_ro_ro">
        <a href="single.html" class="single-text text-dark font-weight-light">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </a>
    </h3>

	<?php leashub_post_thumbnail(); ?>


		<?php

        $phrase = get_the_content();
        // This is where wordpress filters the content text and adds paragraphs
        $phrase = apply_filters('the_content', $phrase);
        $replace = '<p style="text-align: justify; font-size: 14px; line-height: 22px; color: #1b3d52; font-weight: normal; margin: 15px 0px; font-style: italic;">';

        echo str_replace('<p>', $replace, $phrase);

		?>


	<?php if ( get_edit_post_link() ) : ?>

		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'leashub' ),
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
</article><!-- #post-<?php the_ID(); ?> -->

