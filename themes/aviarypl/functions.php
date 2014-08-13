<?php
/**
 * @package WordPress
 * @subpackage Aviary.pl_Theme
 */

remove_action("template_redirect", "wp_shortlink_header", 11);

remove_action("wp_head", "adjacent_posts_rel_link_wp_head");
remove_action("wp_head", "feed_links", 2);
remove_action("wp_head", "feed_links_extra", 3);
remove_action("wp_head", "rel_canonical");
remove_action("wp_head", "rsd_link");
remove_action("wp_head", "wlwmanifest_link");
remove_action("wp_head", "wp_shortlink_wp_head");

register_sidebar(array(
  'name' => 'leftbar front page',
  'before_widget' => '<li class="widget %2$s">',
  'after_widget' => '</li>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
));

register_sidebar(array(
  'name' => 'leftbar subpages',
  'before_widget' => '<li class="widget %2$s">',
  'after_widget' => '</li>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
));

register_sidebar(array(
  'name' => 'leftbar post',
  'before_widget' => '<li class="widget %2$s">',
  'after_widget' => '</li>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
));

register_sidebar(array(
  'name' => 'press area',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
));

?>
