<?php get_header(); ?>

	<div class="welcome">

		<div id="landing-carousel" class="carousel slide" data-ride="carousel" data-interval="10000">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#landing-carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#landing-carousel" data-slide-to="1"></li>
		    <li data-target="#landing-carousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		       <img src="<?php bloginfo('template_directory'); ?>/images/homepage-slide-1.jpg">
		    </div>
		    <div class="item">
		       <img src="<?php bloginfo('template_directory'); ?>/images/homepage-slide-2.jpg">
		    </div>
		    <div class="item">
		       <img src="<?php bloginfo('template_directory'); ?>/images/homepage-slide-3.jpg">
		    </div>
		 
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#landing-carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#landing-carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	</div> <!-- END WELCOME DIV -->

	<div class="sub-section">
		<div class="left-col">
			<div class="about-us">
				<h2>Commemorating Every Life</h2>
				<p>We believe that a memorial does more than mark an individual’s final resting place. A memorial reflects the love, warmth, and affection that inspires reverence, faith, and hope for the living. It’s a work of art linking the past and present with our future generations.</p>
			</div>
		</div>
		<div class="right-col">
			<div class="store-details">
				<h2>Hours, Location, &amp; Contact</h2>
				<p><span class="arvo">HOURS:</span> Monday - Friday 9am - 4pm</p>
				<p class="small"><span class="red">*</span> After hour appointments available.</p>
				<p><span class="arvo">ADDRESS:</span> 1098 Fond du Lac Avenue</p>
				<p>Sheboygan Falls, WI 53085</p>
				<p><span class="arvo">Telephone:</span> (920) 467-4939</p>
				<p><span class="arvo">Email:</span> info@fallsmonument.com</p>
			</div>
		</div>
	</div>

<?php get_footer (); ?>
