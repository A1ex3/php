(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// Menu
		$('.site-menu-btn').on('click', function(e){
			e.preventDefault();
			$('.menu-wrapper').addClass('open');
		});	

		$('.site-menu-btn--close').on('click', function(e){
			e.preventDefault();
			$('.menu-wrapper').removeClass('open');

		});	

		// Trap focus on mobile menu when onpen
		const menuDiv = $('#main-site-menu'); // select the menu div by it's id
		const menuButton = $('#show-mobile-menu-btn');
		const focusableMenuElements = menuDiv.find('.menu-item a'); // select menu options

		const firstFocusableElement = focusableMenuElements[0]; // get first menu option to be focused 
		const lastFocusableElement = focusableMenuElements[focusableMenuElements.length - 1]; // get last menu option to be focused

		$(document).keydown(function(e) {
			let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

			if (!isTabPressed) {
				return;
			}
		  	
		  	if ( menuButton.is(":visible")){ // if we are on mobile view
			    if (document.activeElement === lastFocusableElement) { // if last menu option is focused
			      firstFocusableElement.focus(); // add focus for the first menu option
			      e.preventDefault();
			    }
		    }	
		});
	});
	
})(jQuery, this);
