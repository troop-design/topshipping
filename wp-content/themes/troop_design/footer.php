	<footer>
		<div class="col-3 col-d-3 footerdeel">
			<?php the_field('openingstijden_footer'); ?>
		</div>
		<div class="footerdeel">
			<?php the_field('bezoekadres_footer'); ?>
		</div>
		<div class="footerdeel">
			<?php the_field('postsluitingen_footer'); ?>
		</div>


		<?php

		$location = get_field('googlemaps_footer');

		if( !empty($location) ):
		?>
		<div class="acf-map">
		 <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
		<?php endif; ?>

		<section class="contact">
			<div class="contactgegevens">
				<h3>Contact</h3>
				<ul>
					<li>020 - 84 68 302</li>
					<li>info@topshipping.nl</li>
				</ul>
			</div>
			<div class="socialmedia">
				<h3>Vind ons ook op social media</h3>
				<ul>
					<li>06 12 34 56 78</li>
					<li>facebook.com/topshipping</li>
				</ul>
			</div>
		</section>
		<div class="disclaimer">

		</div>
		<div class="troop">

		</div>

	</footer>

<?php wp_footer(); ?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.your-class').slick({
			arrows: false,
			dots: true,
	    centerMode: true
		});
	});
</script>
</body>
</html>
