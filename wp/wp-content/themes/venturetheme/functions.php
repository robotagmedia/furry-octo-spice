<?php

function vr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Top Menu' ),
		'description'  => __( 'Qtranslate Menu' ),
	) );
	}
add_action( 'widgets_init', 'vr_widgets_init' );