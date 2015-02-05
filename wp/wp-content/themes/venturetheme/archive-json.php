<?php
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');


$posts = array();
$year = (isset($_GET['year'])) ? $_GET['year'] : 0;
$month = (isset($_GET['month'])) ? $_GET['month'] : 0;


$args = array(
	'cat'      => 3,
	'post_type' => 'post',
	'year'     => $year,
	'monthnum' => $month,
	'order'    => 'ASC',
	'showposts' => 20
);
query_posts( $args );

ob_start();
if (have_posts()) {
       while (have_posts()) {
		   the_post();
		   $posts[] = array(
			   'short_title' => short_title()
   				, 'excerpt' => get_excerpt()
				, 'url' => get_permalink()
				, 'background_image' => wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') )
		   );
       }
}
ob_get_clean();

wp_reset_query();


print json_encode($posts);