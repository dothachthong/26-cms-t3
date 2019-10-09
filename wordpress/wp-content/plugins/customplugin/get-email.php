<?php
   /*
   Plugin Name: Show post_email
   Plugin URI: 
   description: Show post_email in all post
   Version: 1.0
   Author: locokmenok
   Author URI: 
   License: GPL2
   */

add_filter( 'manage_posts_columns', 'smashing_filter_posts_columns' );
function smashing_filter_posts_columns( $columns ) {
  $columns = array(
      'cb' => $columns['cb'],
      'title' => __( 'Title' ),
      'email' => __( 'Email', 'smashing' ),
      'author'      => ('Author'),
        'categories'  => ('Categories'),
        'tags'        => ('Tags'),
  'comments'    => ('Comments'),
  'date'       => ('Date')
    );
  return $columns;
}


add_action( 'manage_posts_custom_column', 'smashing_column', 10, 2);
function smashing_column( $column, $post_id ) {
  // Image column
  if ( 'email' === $column ) {
    echo get_the_email( $post_id );
  }
}

?>

