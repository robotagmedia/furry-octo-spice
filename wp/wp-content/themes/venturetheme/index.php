<?php get_header(); ?>

<?php
if ( is_front_page() && qtrans_getLanguage() == 'en' ) {
	get_template_part( 'homepage' );

} elseif ( is_front_page() && qtrans_getLanguage() == 'ja' ) {
	get_template_part( 'homepage_jp' );
} elseif ( qtrans_getLanguage() == 'en' ) {
    get_template_part( 'content' );
} else {
    get_template_part( 'content_jp' );
}
?>

<?php get_footer(); ?>