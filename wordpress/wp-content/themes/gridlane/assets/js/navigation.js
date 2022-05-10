/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var gridlane_secondary_container, gridlane_secondary_button, gridlane_secondary_menu, gridlane_secondary_links, gridlane_secondary_i, gridlane_secondary_len;

    gridlane_secondary_container = document.getElementById( 'gridlane-secondary-navigation' );
    if ( ! gridlane_secondary_container ) {
        return;
    }

    gridlane_secondary_button = gridlane_secondary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof gridlane_secondary_button ) {
        return;
    }

    gridlane_secondary_menu = gridlane_secondary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof gridlane_secondary_menu ) {
        gridlane_secondary_button.style.display = 'none';
        return;
    }

    gridlane_secondary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === gridlane_secondary_menu.className.indexOf( 'nav-menu' ) ) {
        gridlane_secondary_menu.className += ' nav-menu';
    }

    gridlane_secondary_button.onclick = function() {
        if ( -1 !== gridlane_secondary_container.className.indexOf( 'gridlane-toggled' ) ) {
            gridlane_secondary_container.className = gridlane_secondary_container.className.replace( ' gridlane-toggled', '' );
            gridlane_secondary_button.setAttribute( 'aria-expanded', 'false' );
            gridlane_secondary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            gridlane_secondary_container.className += ' gridlane-toggled';
            gridlane_secondary_button.setAttribute( 'aria-expanded', 'true' );
            gridlane_secondary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    gridlane_secondary_links    = gridlane_secondary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( gridlane_secondary_i = 0, gridlane_secondary_len = gridlane_secondary_links.length; gridlane_secondary_i < gridlane_secondary_len; gridlane_secondary_i++ ) {
        gridlane_secondary_links[gridlane_secondary_i].addEventListener( 'focus', gridlane_secondary_toggleFocus, true );
        gridlane_secondary_links[gridlane_secondary_i].addEventListener( 'blur', gridlane_secondary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function gridlane_secondary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'gridlane-focus' ) ) {
                    self.className = self.className.replace( ' gridlane-focus', '' );
                } else {
                    self.className += ' gridlane-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( gridlane_secondary_container ) {
        var touchStartFn, gridlane_secondary_i,
            parentLink = gridlane_secondary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, gridlane_secondary_i;

                if ( ! menuItem.classList.contains( 'gridlane-focus' ) ) {
                    e.preventDefault();
                    for ( gridlane_secondary_i = 0; gridlane_secondary_i < menuItem.parentNode.children.length; ++gridlane_secondary_i ) {
                        if ( menuItem === menuItem.parentNode.children[gridlane_secondary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[gridlane_secondary_i].classList.remove( 'gridlane-focus' );
                    }
                    menuItem.classList.add( 'gridlane-focus' );
                } else {
                    menuItem.classList.remove( 'gridlane-focus' );
                }
            };

            for ( gridlane_secondary_i = 0; gridlane_secondary_i < parentLink.length; ++gridlane_secondary_i ) {
                parentLink[gridlane_secondary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( gridlane_secondary_container ) );
} )();


( function() {
    var gridlane_primary_container, gridlane_primary_button, gridlane_primary_menu, gridlane_primary_links, gridlane_primary_i, gridlane_primary_len;

    gridlane_primary_container = document.getElementById( 'gridlane-primary-navigation' );
    if ( ! gridlane_primary_container ) {
        return;
    }

    gridlane_primary_button = gridlane_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof gridlane_primary_button ) {
        return;
    }

    gridlane_primary_menu = gridlane_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof gridlane_primary_menu ) {
        gridlane_primary_button.style.display = 'none';
        return;
    }

    gridlane_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === gridlane_primary_menu.className.indexOf( 'nav-menu' ) ) {
        gridlane_primary_menu.className += ' nav-menu';
    }

    gridlane_primary_button.onclick = function() {
        if ( -1 !== gridlane_primary_container.className.indexOf( 'gridlane-toggled' ) ) {
            gridlane_primary_container.className = gridlane_primary_container.className.replace( ' gridlane-toggled', '' );
            gridlane_primary_button.setAttribute( 'aria-expanded', 'false' );
            gridlane_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            gridlane_primary_container.className += ' gridlane-toggled';
            gridlane_primary_button.setAttribute( 'aria-expanded', 'true' );
            gridlane_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    gridlane_primary_links    = gridlane_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( gridlane_primary_i = 0, gridlane_primary_len = gridlane_primary_links.length; gridlane_primary_i < gridlane_primary_len; gridlane_primary_i++ ) {
        gridlane_primary_links[gridlane_primary_i].addEventListener( 'focus', gridlane_primary_toggleFocus, true );
        gridlane_primary_links[gridlane_primary_i].addEventListener( 'blur', gridlane_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function gridlane_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'gridlane-focus' ) ) {
                    self.className = self.className.replace( ' gridlane-focus', '' );
                } else {
                    self.className += ' gridlane-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( gridlane_primary_container ) {
        var touchStartFn, gridlane_primary_i,
            parentLink = gridlane_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, gridlane_primary_i;

                if ( ! menuItem.classList.contains( 'gridlane-focus' ) ) {
                    e.preventDefault();
                    for ( gridlane_primary_i = 0; gridlane_primary_i < menuItem.parentNode.children.length; ++gridlane_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[gridlane_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[gridlane_primary_i].classList.remove( 'gridlane-focus' );
                    }
                    menuItem.classList.add( 'gridlane-focus' );
                } else {
                    menuItem.classList.remove( 'gridlane-focus' );
                }
            };

            for ( gridlane_primary_i = 0; gridlane_primary_i < parentLink.length; ++gridlane_primary_i ) {
                parentLink[gridlane_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( gridlane_primary_container ) );
} )();