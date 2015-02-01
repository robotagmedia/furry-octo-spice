<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>
<?php if ( wp_title(' ', false) ) { ?>
<?php wp_title(' '); ?>
&nbsp;-
<?php } ?>
<?php if ( is_single() ) { ?>
Blog Archive -
<?php } ?>
<?php bloginfo('name'); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="比較サイト,ポイントサイト,クチコミサイト,ベンチャーリパブリック,VR,VRG" />
<meta name="Description" content="株式会社ベンチャーリパブリックは、比較サイト・ポイントサイト・クチコミサイトなどを運営する会社です。" />
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/stylesheet.css" type="text/css" charset="utf-8" />
<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/archive.css?v12">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-select.min.css">
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.4.0/mapbox-gl.css' rel='stylesheet' />
<link href="<?php bloginfo('stylesheet_url'); ?>?v74" rel="stylesheet" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/instagramLite.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/Chart.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.min.js"></script>
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.4.0/mapbox-gl.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/froogaloop.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?v21"></script>

<?php wp_head(); ?>
</head>

<body>

</head>
<body>
<header>