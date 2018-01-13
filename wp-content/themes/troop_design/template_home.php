<?php /* Template Name: homepage */ get_header(); ?>



<section class="home-info">
	<div class="intro-tekst">
		<h2><?php the_field('titel_home'); ?></h2>
		<p><?php the_field('informatie_topshipping'); ?></p>
	</div>
	<div class="home-slider">
		<div class="your-class">
			<div><img src="http://lorempixel.com/400/200/" />
				<p>ooy</p>
			</div>

			<div><img src="http://lorempixel.com/400/200/" /></div>
			<div><img src="http://lorempixel.com/400/200/" /></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
