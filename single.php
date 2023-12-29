<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sleekly
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle mb-3">' . esc_html__( 'Previous:', 'sleekly' ) . '</span> <span class="nav-title mb-3">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'sleekly' ) . '</span> <span class="nav-title">%title</span>',
					'class'     => 'text-blue-500',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
if(!is_single()){
    get_sidebar();
}
get_footer();
