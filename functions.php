<?php 
/**
 * functions.php
 * 
 * Functions to modify and extend the WordPress JSON API and the WP Admin go here
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/?s=rest_&post_type%5B%5D=wp-parser-hook
 *
 */

/**
 * Adds a custom field to the JSON API
 */
/**
function my_rest_prepare_post( $data, $post, $request ) {
  $_data = $data->data;
  $_data['MY_CUSTOM_FIELD'] = get_post_meta( $post->ID, 'MY_CUSTOM_FIELD', true );
  $data->data = $_data;
  return $data;
}

add_filter( 'rest_prepare_post', 'my_rest_prepare_post', 10, 3 );
 */
