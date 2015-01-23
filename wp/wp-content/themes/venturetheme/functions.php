<?php
add_theme_support( 'post-thumbnails' );
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function vr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Top Menu' ),
		'description'  => __( 'Qtranslate Menu' ),
	) );
	}
add_action( 'widgets_init', 'vr_widgets_init' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
