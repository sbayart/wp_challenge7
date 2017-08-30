<?php

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

// Remove p tags from category description
remove_filter('term_description','wpautop');
