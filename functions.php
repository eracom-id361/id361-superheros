<?php
// enqueue styles for child theme
// @ https://digwp.com/2016/01/include-styles-child-theme/
function id361_style_parent() {
	// enqueue parent styles
	wp_enqueue_style('atomic-parent-theme', get_template_directory_uri() .'/style.css');
}
add_action('wp_enqueue_scripts', 'id361_style_parent');

// ajout de la font Libre Baskerville
// Le thême atomic blocks contient les font : Nunito Sans et Muli. Celle-ci sont chargées depuis google font.
// atomic-blocks-fonts-css

function id361_styles() {
	wp_dequeue_style( 'atomic-blocks-fonts' );
}
add_action( 'wp_enqueue_scripts', 'id361_styles', 11 );
