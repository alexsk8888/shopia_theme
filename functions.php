<?php
/**
 * Shopia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shopia
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/includes/enqueue-scripts-style.php';

require get_template_directory() . '/includes/navigation-menu.php';

require get_template_directory() . '/includes/theme-settings.php';

require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';

require get_template_directory() . '/woocommerce/includes/wc-functions.php';

require get_template_directory() . '/templates/front-page.php';



if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
