<?php
/**
 * @package WordPress
 * @subpackage Aviary.pl_Theme
 */

require_once ("aviarypl-functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/sidebar.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<meta name="keywords" content="Aviary, AviaryPL, Aviary.pl, Firefox, Thunderbird, Nvu, Mozilla, Mozilla Firefox, Netscape, gecko, przeglądarka, www, polski, po polsku, tłumaczenie, lokalizacja, polska, polska wersja, polskie, w3c, html, javascript, ecmascript, css, download, Mozilla po polsku, Mozilla polska, Firefox po polsku, polski firefox" />
	<meta name="description" content="Strona zespołu Aviary.pl - polskiej grupy lokalizatorów programów Mozilla Foundation." />	
	<!--[if lt IE 8]><link rel="stylesheet" href='<?php bloginfo('stylesheet_directory'); ?>/style-ie.css' type='text/css' /><![endif]-->
	<!--[if gte IE 7]><link rel="stylesheet" href='<?php bloginfo('stylesheet_directory'); ?>/style-ie7.css' type='text/css' /><![endif]-->
  <link rel=icon href=http://static.aviary.pl/a.64t.png />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body class="<?php echo aviarypl_get_root_name_by_post($post) . ' ' . basename($_SERVER["REQUEST_URI"]);?>">
	
	<div class="ac">
		<p>Przejdź do:</p>
		<ul>
			<li><a href="#search">wyszukiwarki</a></li>
			<li><a href="#nav">menu nawigacyjnego</a></li>
			<li><a href="#content">właściwej treści</a></li>
		</ul>

	</div>
	
	<div id="page">
	    <div id="c0">
		<div id="branding">
		    <div id="brandL"></div>
		    <div id="brandR"></div>
		    <div id="brandC"><a id="homelnk" href="<?php echo get_option('home'); ?>/"><span></span> Aviary.pl</a></div>
		    <div class="cl"></div>
		</div>
		
		<div id="menu">
			<div id="menu1"></div>
			<div id="menu2"></div>

			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
            <?php aviarypl_top_menu(); ?>
			<div class="cl"></div>
		</div>
