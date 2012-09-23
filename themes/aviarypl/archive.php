<?php get_header(); ?>

	<div id="content" class="twocol">
		<div class="col1of2" id="sidebar">
		    <?php get_sidebar(); ?>	
		</div>
		<div class="col2of2">
		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="pagetitle">Archiwum kategorii &bdquo;<?php echo single_cat_title(); ?>&rdquo;</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archiwum z dnia <?php the_time('j.m.Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archiwum &ndash; <?php the_time('F Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archiwum &ndash; rok <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">Wyniki wyszukiwania</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Archiwum autora</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Archiwum witryny</h2>

		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
				<?php edit_post_link('Edytuj', '<div class="adm-stuff">', ' </div> '); ?>
				<div class="posthead">
				<h3 class='entryh3' id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<p class="postinfo"><strong><?php the_time('j.m.Y') ?>, <?php the_time() ?></strong>; kategorie: <?php the_category(', ') ?>.<p>
				</div>
				
				<div class="entry">
					<?php the_content('(wi&#281;cej...)') ?>
				</div>

			</div>
	
		<?php endwhile; ?>

		<div class="nvg">
			<div class="alignleft"><?php next_posts_link('&laquo; Starsze') ?></div>
			<div class="alignright"><?php previous_posts_link('Nowsze &raquo;') ?></div>
			<div class="cl"></div>
		</div>
	
	<?php else : ?>

		<h2 class="center">Nie znaleziono</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
	    </div>	
	</div>


<?php get_footer(); ?>