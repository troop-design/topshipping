<!doctype html>

<html>
<head>
	<title><?php bloginfo('title' ); ?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/slick/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">

	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div id="logo">

		</div>
		<nav>
			<ul>
				<li>Home</li>
				<li>Verzenden</li>
				<li>Bestemmingen</li>
				<li>Webshop</li>
				<li>Over ons</li>
				<li>Contact</li>
			</ul>
		</nav>

	</header>

	<div class="banner-home" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">>

	</div>
