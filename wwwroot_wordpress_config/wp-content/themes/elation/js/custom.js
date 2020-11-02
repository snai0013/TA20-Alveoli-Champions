/**
 * Elation Custom Functionality
 * Gets elation_js from localize script
 */
( function( $ ) {

    $( document ).ready( function() {
        // Add button to sub-menu item to show nested pages / Only used on mobile
        $( '.main-navigation li.page_item_has_children > a, .main-navigation li.menu-item-has-children > a' ).after( '<button class="menu-dropdown-btn"><i class="fa fa-angle-right"></i></button>' );
        $( '.main-navigation.elation-nav-block ul#elation-main-menu > li > a, .main-navigation.elation-nav-block #elation-main-menu > ul > li > a' ).wrapInner( '<span class="nav-span-block"></span>' );
        // Add/Remove .focus class for accessibility
        $( '.main-navigation' ).find( 'a' ).on( 'focus blur', function() {
            $( this ).parents( 'ul, li' ).toggleClass( 'focus' );
        } );
        // Mobile nav button functionality
        $( '.menu-dropdown-btn' ).click( function(e){
            $(this).parent().toggleClass( 'open-page-item' );
        });
        // The menu toggle button
        $( '.menu-toggle' ).click( function(e){
            $( 'body' ).toggleClass( 'show-main-menu' );
            var element = $( '.menu-main-menu-container' );
            trapFocus( element );
        });
        $( '.main-menu-close' ).click( function(e){
            $( '.menu-toggle' ).click();
            $( '.menu-toggle' ).focus();
        });
        $( document ).on( 'keyup',function(evt) {
            if ( $( 'body' ).hasClass( 'show-main-menu' ) && evt.keyCode == 27 ) {
                $( '.menu-toggle' ).click();
                $( '.menu-toggle' ).focus();
            }
        });
        // True/False Aria label for accessibility
        $( '.menu-toggle' ).on( 'click', function() {
            var visible = $( 'body' ).hasClass( 'show-main-menu' );
            if ( visible ) {
                $( this ).attr( 'aria-expanded', 'true' );
            } else {
                $( this ).attr( 'aria-expanded', 'false' );
            }
        } );

        // Show / Hide Floating Sidebar
        $( '.floating-sidebar-control' ).click( function(e){
            $( 'body' ).toggleClass( 'show-floating-sidebar' );
        });

        // Show / Hide Search
        $( 'button.header-search' ).on( 'click', function() {
            $( 'body').toggleClass( 'show-site-search' );
            $( '.header-search-block input.search-field' ).focus();
        });

        // Scroll To Top Button Functionality
        $( '.scroll-to-top' ).bind( 'click', function() {
            $( 'html, body' ).animate( { scrollTop: 0 }, 800 );
        });
        $( window ).scroll(function(){
            if ( $( this ).scrollTop() > 400 ) {
                $( '.scroll-to-top' ).addClass( 'btt-show' );
            } else {
                $( '.scroll-to-top' ).removeClass( 'btt-show' );
            }
        });

    } );

    $( window ).on('load',function () {
        // Product layout 4 image height position button
        $( '.elation-wc-4 ul.products li.product, .elation-wc-5 .related.products ul.products li.product, .elation-wc-5 ul.products li.product, .elation-wc-4 .related.products ul.products li.product' ).each( function( index, value ) {
            var imgHeight = $( this ).find( 'a.woocommerce-loop-product__link img' ).height();
            console.log( imgHeight );
            $( this ).find( 'a.button' ).css( 'top', imgHeight - 65 );
        });
    });

    $( window ).resize(function () {
        // Close menu if open and browser is scrolled out on mobile
        var breakpoint = 'tablet' == elation_js.menu_breakpoint ? elation_js.menu_tablet : elation_js.menu_mobile;
        if ( $( window ).width() > breakpoint ) {
            $( 'body' ).removeClass( 'show-main-menu' );
        }
        // Product layout 4 image height position button
        $( '.elation-wc-4 ul.products li.product, .elation-wc-5 .related.products ul.products li.product, .elation-wc-5 ul.products li.product, .elation-wc-4 .related.products ul.products li.product' ).each( function( index, value ) {
            var imgHeight = $( this ).find( 'a.woocommerce-loop-product__link img' ).height();
            console.log( imgHeight );
            $( this ).find( 'a.button' ).css( 'top', imgHeight - 65 );
        });
    });

    // Hide Search if user clicks outside
    $( document ).mouseup( function (e) {
        var container = $( '.header-search-block' );
        if ( !container.is( e.target ) && container.has( e.target ).length === 0 ) {
            $( 'body' ).removeClass( 'show-site-search' );
        }
    });

} )( jQuery );

function trapFocus( element, namespace ) {
    var focusableEls = element.find( 'a, button' );
    var firstFocusableEl = focusableEls[0];
    var lastFocusableEl = focusableEls[focusableEls.length - 1];
    var KEYCODE_TAB = 9;

    firstFocusableEl.focus();

    element.keydown( function(e) {
        var isTabPressed = ( e.key === 'Tab' || e.keyCode === KEYCODE_TAB );

        if ( !isTabPressed ) { 
            return;
        }

        if ( e.shiftKey ) /* shift + tab */ {
            if ( document.activeElement === firstFocusableEl ) {
                lastFocusableEl.focus();
                e.preventDefault();
            }
        } else /* tab */ {
            if ( document.activeElement === lastFocusableEl ) {
                firstFocusableEl.focus();
                e.preventDefault();
            }
        }

    });
}
