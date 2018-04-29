/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Background color
	if ( jQuery(window).width() > 768 ) {

		wp.customize( 'sd_fixed_width', function( value ) {
			value.bind( function() {
				$( 'body' ).toggleClass( 'sd-fixed-width' );
			} );
		} );

		wp.customize( 'sd_max_width', function( value ) {
			value.bind( function() {
				$( 'body' ).toggleClass( 'sd-max-width' );
			} );
		} );

		wp.customize( 'sd_scale', function( value ) {
			value.bind( function( to ) {
				$( 'body' ).removeClass( 'sd-scale-smaller' ).removeClass( 'sd-scale-larger' );
				$( 'body' ).addClass( 'sd-scale-' + to );
			} );
		} );

		wp.customize( 'sd_button_flat', function( value ) {
			value.bind( function( to ) {
				if ( to === true ) {
					$( 'body' ).addClass( 'sd-buttons-flat' );
				} else {
					$( 'body' ).removeClass( 'sd-buttons-flat' );
				}
			} );
		} );

		wp.customize( 'sd_button_rounded', function( value ) {
			value.bind( function( to ) {
				$( 'body' ).removeClass( 'sd-buttons-rounded sd-buttons-rounded-more sd-buttons-rounded-full' );

				if ( 1 == to ) {
					$( 'body' ).addClass( 'sd-buttons-rounded' );
				}

				if ( 2 == to ) {
					$( 'body' ).addClass( 'sd-buttons-rounded-more' );
				}

				if ( 3 == to ) {
					$( 'body' ).addClass( 'sd-buttons-rounded-full' );
				}
			} );
		} );

		wp.customize( 'sd_button_size', function( value ) {
			value.bind( function( to ) {
				$( 'body' ).removeClass( 'sd-button-size-smaller sd-button-size-smallest sd-button-size-larger sd-button-size-largest' );

				if ( 0 == to ) {
					$( 'body' ).addClass( 'sd-button-size-smallest' );
				}

				if ( .5 == to ) {
					$( 'body' ).addClass( 'sd-button-size-smaller' );
				}

				if ( 1.5 == to ) {
					$( 'body' ).addClass( 'sd-button-size-larger' );
				}

				if ( 2 == to ) {
					$( 'body' ).addClass( 'sd-button-size-largest' );
				}
			} );
		} );
	}
} )( jQuery );