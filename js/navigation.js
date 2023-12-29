/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 *
 * @package Sleekly
 */

(function () {
	document.addEventListener(
		'DOMContentLoaded',
		function () {
			const menuBtn     = document.getElementById( 'menu-btn' );
			const primaryMenu = document.getElementById( 'site-navigation' );

			menuBtn.addEventListener(
				'click',
				function () {
					if ( primaryMenu.style.display === 'block' ) {
						primaryMenu.style.display = 'none';
					} else {
						primaryMenu.style.display = 'block';
					}

				}
			);

			// Close the navigation menu when a menu item is clicked (optional).
			const menuItems = document.querySelectorAll( '#primary-menu a' );
			menuItems.forEach(
				function (item) {
					item.addEventListener(
						'click',
						function () {
							primaryMenu.style.display = 'none';
						}
					);
				}
			);
		}
	);
})();