<?php get_header(); ?>

	<div id="content" class="twocol">

<?php get_sidebar() ?>

	    <div class="col2of2">
				
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	
		<div class="post" id="post-<?php the_ID(); ?>">

			<?php edit_post_link('Edytuj', '<p class="adm-stuff">', '</p>'); ?>
			
				<h3 class='entryh3' id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>
				<p class="postinfo"><strong><?php the_time('j.m.Y') ?>, <?php the_time() ?></strong>; kategorie: <?php the_category(', ') ?>.<p>
	
			<div class="entrytext">
				<?php the_content('<p class="serif">Przeczytaj dalszą część tego artykułu &raquo;</p>'); ?>
	
				<?php wp_link_pages(array('<p><strong>Strony:</strong> ', '</p>', 'number')); ?>
	
			</div>
			
			</div>
		
		</div>
	<?php comments_template(); ?>

	<?php endwhile; else: ?>
	
		<p>Niestety, żaden artykuł nie spełnia żądanych kryteriów.</p>
	
<?php endif; ?>
	
	</div>

<?php get_footer(); ?>
