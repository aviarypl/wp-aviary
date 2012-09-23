<?php get_header(); ?>

	<div id="content" class="twocol search">
	    <div class="col1of2" id="sidebar">
        <p class="sidebar left">
            Oto wyniki wyszukiwania frazy '<strong><?php the_search_query(); ?></strong>' w serwisie <a href="http://www.aviary.pl/">Aviary.pl</a>.
            Jeśli nic nie zostało znalezione, skorzystaj z menu głównego.
        </p>
	    </div>
	    <div class="col2of2">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Wyniki wyszukiwania</h2>
		
		<ul>
		<?php while (have_posts()) : the_post(); ?>
				
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a><br />
				<small><?php the_time('l, j.m.Y') ?></small></li>
	
		<?php endwhile; ?>
		</ul>
		
		<div class="nvg">
			<div class="alignleft"><?php next_posts_link('&laquo; Starsze ') ?></div>
			<div class="alignright"><?php previous_posts_link('Nowsze &raquo;') ?></div>
			<div class="cl"></div>
		</div>
	
	<?php else : ?>

		<h2 class="center">Nic nie znaleziono</h2>
		
		<p> Prosimy spr&oacute;bowa&#263; innego zapytania.<br/><br/></p>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
	    </div>	
	</div>

<?php get_footer(); ?>
