<?php
/*
テーマのための関数
*/

// delete version
remove_action('wp_head', 'wp_generator');

// thumbnail
add_theme_support('post-thumbnails');

// editor customize
function my_tiny_mce_before_init( $init_array ) {
  global $allowedposttags;
  $init_array['valid_elements'] = '*[*]';
  $init_array['extended_valid_elements'] = '*[*]';
  $init_array['valid_children'] = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
  // $init_array['indent'] = true;
  if ( is_page() ){
  $init_array['wpautop'] = false;
  $init_array['force_p_newlines'] = false;
  }
  return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );