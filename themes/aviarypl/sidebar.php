<?php
/**
 * @package WordPress
 * @subpackage Aviary.pl_Theme
 */
?>

<ul class="sidebar left">
	<?php
	if (is_front_page()) {
		dynamic_sidebar('leftbar front page');
    } elseif (is_single() || is_category() || is_date()) {
		dynamic_sidebar('leftbar post');
	} else {
		dynamic_sidebar('leftbar subpages');
	}
	?>
</ul>
