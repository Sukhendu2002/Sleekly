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
				printf( esc_html__( '%1$s by %2$s.', 'sleekly' ), 'sleekly', '<a class="text-blue-500 hover:text-blue-700" href="https://github.com/Sukhendu2002">Sukhendu Sekhar Guria</a>' );
				?>

			<div class="social-icons flex justify-center mt-4 ">
            <?php if ( get_theme_mod( 'sleekly_facebook_url' ) ) : ?>
                <a  href=<?php echo get_theme_mod('sleekly_facebook_url'); ?>>
				<svg xmlns="http://www.w3.org/2000/svg"
					aria-label="Facebook" role="img"
					viewBox="0 0 512 512"><path
							d="m0 0H512V512H0"
							fill="#fff"/><path d="m331 312h-45v134a192 192 0 10-60 0V312h-49v-56h49v-45q4-89 116-68v47h-26q-29 1-30 30v36h53.5" fill="#1877f2"/></svg>
                </a>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sleekly_instagram_url' ) ) : ?>
                    <a href=<?php echo get_theme_mod('sleekly_instagram_url'); ?>>

				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
					aria-label="Instagram" role="img"
					viewBox="0 0 512 512"><path
							d="m0 0H512V512H0"
							id="b"/><use fill="url(#a)" xlink:href="#b"/><use fill="url(#c)" xlink:href="#b"/><radialGradient
							id="a" cx=".4" cy="1" r="1"><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><linearGradient
							id="c" x2=".2" y2="1"><stop offset=".1" stop-color="#3771c8"/><stop offset=".5" stop-color="#60f" stop-opacity="0"/></linearGradient><g
							fill="none" stroke="#fff" stroke-width="30"><rect width="308" height="308" x="102" y="102" rx="81"/><circle cx="256" cy="256" r="72"/><circle cx="347" cy="165" r="6"/></g></svg>

                </a>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'sleekly_twitter_url' ) ) : ?>
                    <a href=<?php echo get_theme_mod('sleekly_twitter_url'); ?>>
				<svg xmlns="http://www.w3.org/2000/svg"
					aria-label="X" role="img"
					viewBox="0 0 512 512"><rect
							width="512" height="512"
							fill="#fff"/><path d="M281.7 234.3 382.2 120h-23.8l-87.3 99.2-69.7-99.2H121l105.4 150L121 389.9h23.8L237 285.1l73.6 104.8H391ZM153.4 137.5H190l168.4 235.6h-36.6Z"/></svg>
			                    </a>
                <?php endif; ?>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
