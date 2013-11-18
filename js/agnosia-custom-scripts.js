/* Parallax effect */
jQuery( document ).ready( function( $ ) {
	var scrollable = $('#branding .navbar-inner');
	var difference = 5;
	if ( scrollable.length ) {
		var a = document.body;
		var e = document.documentElement;
		$( window ).unbind("scroll").scroll( function () {
			scrollable.css( 'background-position', '0px ' + -( Math.max( e.scrollTop, a.scrollTop ) / difference ) + 'px' );
		} );
	}
});