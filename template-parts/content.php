<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sleekly
 */

?>

<article class="mb-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-2xl md:text-3xl mb-2">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title text-2xl md:text-3xl mb-1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta mb-4 text-gray-500 text-sm ">
				<?php
				sleekly_posted_on();
				sleekly_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
<!--    <div class="">-->
	<?php sleekly_post_thumbnail(); ?>

	<div class="entry-content">
		<a class="" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php if ( is_singular() ) : ?>
				<?php
				the_content(
					sprintf(
						wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sleekly' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					)
				);
				?>
			<?php else : ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>
		</a>
		<?php


		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sleekly' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
<!--    </div>-->

	<!-- .entry-content -->

<!--	<footer class="entry-footer ">-->
<!--		--><?php // sleekly_entry_footer(); ?>
<!--	</footer>-->
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
