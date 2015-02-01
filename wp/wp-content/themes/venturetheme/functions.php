<?php

function get_excerpt(){
$excerpt = get_the_excerpt();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 100);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.'...';
return $excerpt;
}

add_theme_support( 'post-thumbnails' );

function vr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Top Menu' ),
		'description'  => __( 'Qtranslate Menu' ),
	) );
	register_sidebar( array(
		'name'          => __( 'Archive' ),
		'description'  => __( 'All posts' ),
	) );
	}
add_action( 'widgets_init', 'vr_widgets_init' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// QTRANSLATE MENU LINK

function qtrans_convertHomeURL($url, $what) {
    if($what=='/') return qtrans_convertURL($url);
    return $url;
}

add_filter('home_url', 'qtrans_convertHomeURL', 10, 2);
// Remove images link
add_filter( 'the_content', 'attachment_image_link_remove_filter' );

function attachment_image_link_remove_filter( $content ) {
    $content =
        preg_replace(
            array('{<a(.*?)(wp-att|wp-content\/uploads)[^>]*><img}',
                '{ wp-image-[0-9]*" /></a>}'),
            array('<img','" />'),
            $content
        );
    return $content;
}

add_filter('the_content', 'filter_ptags_on_images');
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<img .* \/>)\s*<\/p>/iU', '\1\2\3', $content);
}
