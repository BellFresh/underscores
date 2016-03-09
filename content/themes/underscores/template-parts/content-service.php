<?php
/**
 * Template part for displaying services.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="entry-image">
			<?php the_post_thumbnail(); ?>
		</figure><!-- .entry-image -->
	<?php endif; ?>

	<div>
		<div>
			<div>
				<header class="entry-header">
					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php _s_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-summary">
					<?php the_excerpt(); ?>

					<?php  _s_more_link(); ?>
				</div><!-- .entry-summary -->

				<footer class="entry-footer">
					<?php _s_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
		</div>
	</div>
</article><!-- #post-## -->
