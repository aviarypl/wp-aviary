<?php
/*
Plugin Name: Aviary.pl pages list
Plugin URI: http://www.aviary.pl
Description: Widget displaying news
Author: Marek Stępień
Version: 2.0
Author URI: http://www.aviary.pl
*/

function pageslist_widget($args) {
  global $wpdb, $wp_query, $post;

  $post = $wp_query->post;
  
  $parent_array = array();
  $current_page = $post->ID;
  $parent = 1;
  $prev = 0;
  
  while($parent) {
   $page_query = $wpdb->get_row("SELECT ID, post_parent FROM " . $wpdb->posts . " WHERE ID = '" . $current_page . "'");
   $parent = $current_page = $page_query->post_parent;
  
   if($parent)
    $parent_array[] = $page_query->post_parent;
  }
  if (count($parent_array))  
    $root = $parent_array[count($parent_array)-1];
  else
    $root = 0;
  if (!$root)
   $root = $post->ID;
  $lp_param = "sort_column=menu_order&title_li=&echo=0&child_of=" . $root;
  
  $list = wp_list_pages($lp_param);
  if ($list)
    echo '<li class="widget widget_categories"><ul>'.$list.'</ul></li>';
}

function init_pageslist(){
    wp_register_sidebar_widget("aviary_pl_pagelist", "Aviary.pl pageslist", "pageslist_widget");
}
add_action("init", "init_pageslist");
?>
