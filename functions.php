<?php
/* Functions */

function agenda_widgets_init() {

	register_sidebar( array(
		'name'          => 'agenda',
		'id'            => 'agenda',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	) );

}
add_action( 'widgets_init', 'agenda_widgets_init' );

?>
