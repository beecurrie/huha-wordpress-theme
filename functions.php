<?php

function import_styles() {
  wp_enqueue_style('ustom-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'import_styles');

register_nav_menus(['primary'=> 'HUHA Primary Menu']);

 ?>
