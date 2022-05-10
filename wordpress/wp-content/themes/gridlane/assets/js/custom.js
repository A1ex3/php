jQuery(document).ready(function($) {
    'use strict';

    if(gridlane_ajax_object.secondary_menu_active){
        $(".gridlane-nav-secondary .gridlane-secondary-nav-menu").addClass("gridlane-secondary-responsive-menu");

        $( ".gridlane-secondary-responsive-menu-icon" ).on( "click", function() {
            $(this).next(".gridlane-nav-secondary .gridlane-secondary-nav-menu").slideToggle();
        });

        $(window).on( "resize", function() {
            if(window.innerWidth > 1112) {
                $(".gridlane-nav-secondary .gridlane-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
                $(".gridlane-secondary-responsive-menu > li").removeClass("gridlane-secondary-menu-open");
            }
        });

        $( ".gridlane-secondary-responsive-menu > li" ).on( "click", function(event) {
            if (event.target !== this)
            return;
            $(this).find(".sub-menu:first").toggleClass('gridlane-submenu-toggle').parent().toggleClass("gridlane-secondary-menu-open");
            $(this).find(".children:first").toggleClass('gridlane-submenu-toggle').parent().toggleClass("gridlane-secondary-menu-open");
        });

        $( "div.gridlane-secondary-responsive-menu > ul > li" ).on( "click", function(event) {
            if (event.target !== this)
                return;
            $(this).find("ul:first").toggleClass('gridlane-submenu-toggle').parent().toggleClass("gridlane-secondary-menu-open");
        });
    }

    if(gridlane_ajax_object.primary_menu_active){
        $(".gridlane-nav-primary .gridlane-primary-nav-menu").addClass("gridlane-primary-responsive-menu");

        $( ".gridlane-primary-responsive-menu-icon" ).on( "click", function() {
            $(this).next(".gridlane-nav-primary .gridlane-primary-nav-menu").slideToggle();
        });

        $(window).on( "resize", function() {
            if(window.innerWidth > 1112) {
                $(".gridlane-nav-primary .gridlane-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
                $(".gridlane-primary-responsive-menu > li").removeClass("gridlane-primary-menu-open");
            }
        });

        $( ".gridlane-primary-responsive-menu > li" ).on( "click", function(event) {
            if (event.target !== this)
            return;
            $(this).find(".sub-menu:first").toggleClass('gridlane-submenu-toggle').parent().toggleClass("gridlane-primary-menu-open");
            $(this).find(".children:first").toggleClass('gridlane-submenu-toggle').parent().toggleClass("gridlane-primary-menu-open");
        });

        $( "div.gridlane-primary-responsive-menu > ul > li" ).on( "click", function(event) {
            if (event.target !== this)
                return;
            $(this).find("ul:first").toggleClass('gridlane-submenu-toggle').parent().toggleClass("gridlane-primary-menu-open");
        });
    }

    if($(".gridlane-header-icon-search").length){
        $(".gridlane-header-icon-search").on('click', function (e) {
            e.preventDefault();
            //document.getElementById("gridlane-search-overlay-wrap").style.display = "block";
            $("#gridlane-search-overlay-wrap").fadeIn();
            const gridlane_focusableelements = 'button, [href], input';
            const gridlane_search_modal = document.querySelector('#gridlane-search-overlay-wrap');
            const gridlane_firstfocusableelement = gridlane_search_modal.querySelectorAll(gridlane_focusableelements)[0];
            const gridlane_focusablecontent = gridlane_search_modal.querySelectorAll(gridlane_focusableelements);
            const gridlane_lastfocusableelement = gridlane_focusablecontent[gridlane_focusablecontent.length - 1];
            document.addEventListener('keydown', function(e) {
              let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
              if (!isTabPressed) {
                return;
              }
              if (e.shiftKey) {
                if (document.activeElement === gridlane_firstfocusableelement) {
                  gridlane_lastfocusableelement.focus();
                  e.preventDefault();
                }
              } else {
                if (document.activeElement === gridlane_lastfocusableelement) {
                  gridlane_firstfocusableelement.focus();
                  e.preventDefault();
                }
              }
            });
            gridlane_firstfocusableelement.focus();
        });
    }

    if($(".gridlane-search-closebtn").length){
        $(".gridlane-search-closebtn").on('click', function (e) {
            e.preventDefault();
            //document.getElementById("gridlane-search-overlay-wrap").style.display = "none";
            $("#gridlane-search-overlay-wrap").fadeOut();
        });
    }

    if(gridlane_ajax_object.fitvids_active){
        $(".entry-content, .widget").fitVids();
    }

    if(gridlane_ajax_object.backtotop_active){
        if($(".gridlane-scroll-top").length){
            var gridlane_scroll_button = $( '.gridlane-scroll-top' );
            gridlane_scroll_button.hide();

            $( window ).on( "scroll", function() {
                if ( $( window ).scrollTop() < 20 ) {
                    $( '.gridlane-scroll-top' ).fadeOut();
                } else {
                    $( '.gridlane-scroll-top' ).fadeIn();
                }
            } );

            gridlane_scroll_button.on( "click", function() {
                $( "html, body" ).animate( { scrollTop: 0 }, 300 );
                return false;
            } );
        }
    }

    if(gridlane_ajax_object.sticky_header_active){

    // grab the initial top offset of the navigation 
    var gridlanestickyheadertop = $('#gridlane-header-end').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var gridlanestickyheader = function(){
        var gridlanescrolltop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(gridlane_ajax_object.sticky_header_mobile_active){
            if (gridlanescrolltop > gridlanestickyheadertop) {
                $('.gridlane-site-header').addClass('gridlane-fixed');
            } else {
                $('.gridlane-site-header').removeClass('gridlane-fixed');
            }
        } else {
            if(window.innerWidth > 1112) {
                if (gridlanescrolltop > gridlanestickyheadertop) {
                    $('.gridlane-site-header').addClass('gridlane-fixed');
                } else {
                    $('.gridlane-site-header').removeClass('gridlane-fixed');
                }
            }
        }
    };

    gridlanestickyheader();
    // and run it again every time you scroll
    $(window).on( "scroll", function() {
        gridlanestickyheader();
    });

    }

    if(gridlane_ajax_object.sticky_sidebar_active){
        $('.gridlane-main-wrapper, .gridlane-sidebar-one-wrapper').theiaStickySidebar({
            containerSelector: ".gridlane-content-wrapper",
            additionalMarginTop: 0,
            additionalMarginBottom: 0,
            minWidth: 960,
        });

        $(window).on( "resize", function() {
            $('.gridlane-main-wrapper, .gridlane-sidebar-one-wrapper').theiaStickySidebar({
                containerSelector: ".gridlane-content-wrapper",
                additionalMarginTop: 0,
                additionalMarginBottom: 0,
                minWidth: 960,
            });
        });
    }

});