<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Smart Cleaning
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses smart_cleaning_header_style()
 */
function smart_cleaning_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'smart_cleaning_custom_header_args', array(
		'width'                  => 1600,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'smart_cleaning_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'smart_cleaning_custom_header_setup' );

if ( ! function_exists( 'smart_cleaning_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see smart_cleaning_custom_header_setup().
	 */
	function smart_cleaning_header_style() {
		$smart_cleaning_header_text_color = get_header_textcolor(); ?>

		<style type="text/css">
			<?php
				//Check if user has defined any header image.
				if ( get_header_image() ) :
			?>
				.socialmedia {
					background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat !important;
					background-position: center top;
				}
			<?php endif; ?>
		</style>

		<?php
	}
endif;
