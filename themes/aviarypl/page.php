<?php
/**
 * @package WordPress
 * @subpackage Aviary.pl_Theme
 */

require_once ("aviarypl-functions.php"); 
?>

<?php get_header(); ?>

    <div id="content" class="twocol">
<?php get_sidebar() ?>

	<?php echo '<div class="col2of2">'; ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post();  ?>
	
	<?php edit_post_link('Edytuj', '<p class="adm-stuff">', '</p>'); ?>
	
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entrytext">
				<?php the_content('<p class="serif">Czytaj dalsza czesc tej strony &raquo;</p>'); ?>
	
				<?php wp_link_pages(array('<p><strong>Strony:</strong> ', '</p>', 'number')); ?>
	
			</div>
		</div>
		
		<?php
		
		if (is_page('Dla prasy')) { 
			dynamic_sidebar('press area');
		}
		
		?>
		
	  <?php endwhile; endif; ?>

	</div>
	
	
        </div>

	<?php get_footer(); ?>

