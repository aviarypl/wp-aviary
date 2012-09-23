<?php
/**
 * @package WordPress
 * @subpackage Aviary.pl_Theme
 */

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
