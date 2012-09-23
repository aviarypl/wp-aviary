<?php
/*
Plugin Name: Aviary.pl Newsbox
Plugin URI: http://www.aviary.pl
Description: Widget displaying news
Author: Marek Stępień
Version: 2.0
Author URI: http://www.aviary.pl
*/

function newsbox_widget($args) {
  print('<li class="avpl_newsbox">');
  print('<h2><a href="/category/aktualnosci/"><img src="wp-content/themes/aviarypl/images/head_akt.gif" alt="Aktualnosci" /></a></h2>');
  $myposts = get_posts('numberposts=5&category=3');
  $num = 0;
  print('<ul>');
  foreach($myposts as $post) {
    if ($num == 0)
      print('<li class="first"><h3><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></h3><p>'.$post->post_excerpt.'</p><span class="more"><a href="'.get_permalink($post->ID).'">więcej<span/></a></span></li>');
    else
      print('<li><a href="'.get_permalink($post->ID).'" rel="bookmark" title="Permanent Link: '.$post->post_title.'">'.$post->post_title.'</a></li>');
    $num++;
  }
  print('</ul>');
  print('</li>');
}

function init_newsbox(){
    wp_register_sidebar_widget("aviary_pl_newsbox", "Aviary.pl newsbox", "newsbox_widget");
}
add_action("init", "init_newsbox");
?>
