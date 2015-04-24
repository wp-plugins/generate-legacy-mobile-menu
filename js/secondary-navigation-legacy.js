/**
 * secondary-navigation-legacy.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var secondary_container, secondary_button, secondary_menu;
	
	secondary_container = document.getElementById( 'secondary-navigation' );
	
	if ( ! secondary_container )
		return;

	secondary_button = secondary_container.getElementsByTagName( 'h3' )[0];
	if ( 'undefined' === typeof secondary_button )
		return;
	
	secondary_menu = secondary_container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof secondary_menu ) {
		secondary_button.style.display = 'none';
		return;
	}

	secondary_button.onclick = function() {
		if ( -1 !== secondary_container.className.indexOf( 'toggled' ) )
			secondary_container.className = secondary_container.className.replace( ' toggled', '' );
		else
			secondary_container.className += ' toggled';
	};
} )();