<?php
define('WP_USE_THEMES', true);
require_once('../../../wp-load.php');



// Limit Post Title by amount of characters
function get_short_title() {
	$mytitleorig = get_the_title();
	$title = html_entity_decode($mytitleorig, ENT_QUOTES, "UTF-8"); 

	$limit = "40";
	$pad="...";

	if(strlen($title) >= ($limit+3)) {
	$title = mb_substr($title, 0, $limit) . $pad; }
	return $title;
}


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
			   'title' => get_the_title()
   				, 'short_title' => get_short_title()				   
   				, 'excerpt' => get_excerpt()
				, 'url' => get_permalink()
				, 'background_image' => wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ) //get_field('post_background_image')
		   );
       }
}
ob_get_clean();

wp_reset_query();


print json_encode($posts);