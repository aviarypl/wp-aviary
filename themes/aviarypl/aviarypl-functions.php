<?php

/* zwraca liste <ul> z top menu */
function aviarypl_top_menu() {
    print('<ul id="nav">');
    if (is_front_page())
        $class = 'page_item current_page_item current_root';
    else
        $class = 'page_item';
    print('<li class="'.$class.'"><a href="'.get_option('home').'" title="Strona główna">Strona główna</a></li>');
    wp_list_pages('title_li=&depth=1&exclude=3');
    print('</ul>');
}

/* drukuje posty kategorii dla prasy w odpowiedniej postaci */
function aviarypl_get_recent_pressposts($no_posts = 10, $before = '<li>', $after = '<div class="cl"></div></li>', $show_pass_post = false, $skip_posts = 0) {
	global          $wpdb, $tableposts, $table_prefix;
	$posts = get_posts(array('category'=>4));

	foreach($posts as $post) {
		$post_title = stripslashes($post->post_title);
		$post_excerpt = stripslashes($post->post_excerpt);
		$permalink = get_permalink($post->ID);
		
		$postdate = strtotime($post->post_date);
		
	        echo $before.'<span class="bgdt">';
		echo date("j.m", $postdate) . "<br />" . date("Y", $postdate);
		
		echo '</span><a href="'.$permalink.'">'.$post_title.'</a>'.$after;
	}
}

/* nazwa (slug) korzenia danej strony ("projekty" dla strony "Mozilla Firefox") */
function aviarypl_get_root_name_by_post($post) {
    global $wpdb;

    if (!$post)
        return '';
 
    while ($parent = $post->post_parent) {
      $post = get_post($parent);
    }

    return $post->post_name;
}

?>
