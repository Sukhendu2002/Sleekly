<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sleekly
 */

?>

	<footer id="colophon" class="site-footer mt-6 py-6  flex justify-center" >

		<div class="site-info">

				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s by %2$s.', 'sleekly' ), 'sleekly', '<a 
    class="text-blue-500 hover:text-blue-700"
href="https://github.com/Sukhendu2002">Sukhendu Sekhar Guria</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
