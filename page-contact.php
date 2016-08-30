<?php
/*

	Template Name: Contact Template

*/
?>

<?php get_header(); ?>

	<div class="content-wrapper contact-page">
		<div class="text-center">
			<h2 class="contact">Contact Us</h2>
			<p class="contact">To get in touch call <span class="bold">(920) 467-4939</span>, email <span class="bold"><a href="mailto:rae@fallsmonument.com">rae@fallsmonument.com</a></span>, or fill out the form below and someone will be with you shortly.</p>	
		</div>

		<div class="detail-container row">
			<div class="details">
				<h3>Location</h3>
				<p><a href="https://www.google.com/maps/place/1098+Fond+Du+Lac+Ave,+Sheboygan+Falls,+WI+53085/@43.7337504,-87.8252132,17z/data=!3m1!4b1!4m2!3m1!1s0x8804a052fb38fe21:0x10d7bf94d466a74f" target="_blank">1098 Fond du Lac Avenue<br>Sheboygan Falls, WI 53085</a></p>

				<h3>Hours</h3>
				<p class="hours"><span class="bold">Monday - Friday:</span> 9am to 4pm</p>
				<p class="contact-details"><span class="red">*</span> After hour appointments available upon request</p>
			</div>
			<div class="map">
				<a href="https://www.google.com/maps/place/1098+Fond+Du+Lac+Ave,+Sheboygan+Falls,+WI+53085/@43.7337504,-87.8252132,17z/data=!3m1!4b1!4m2!3m1!1s0x8804a052fb38fe21:0x10d7bf94d466a74f" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/map.png"></a>
			</div>

			<h3 class="form-header">Get in touch</h3>
			<?php gravity_form(1, false, false, false, '', true, 12); ?>

		</div>

		

	</div>

<?php get_footer (); ?>
