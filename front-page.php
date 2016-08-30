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

	<div class="sub-section row">
		<div class="gallery-heading">
			<h3>View Our Galleries</h3>
		</div>
		<div class="home-buttons row">
			<a class="individual" href="http://www.fallsmonument.com/individual">
				<!-- <div class="individual"> -->
					<h4>Individual Monuments</h4>
				<!-- </div> -->
			</a>
			<a class="companion" href="http://www.fallsmonument.com/companion">
				<!-- <div class="companion"> -->
					<h4>Companion Monuments</h4>
				<!-- </div> -->
			</a>
			<a class="etchings" href="http://www.fallsmonument.com/etchings">
				<!-- <div class="etchings"> -->
					<h4>Etching Examples</h4>
				<!-- </div> -->
			</a>
			<a class="granite" href="http://www.fallsmonument.com/granite">
				<!-- <div class="granite"> -->
					<h4>Granite Colors</h4>
				<!-- </div> -->
			</a>
		</div>
		<div class="left-col">
			<div class="about-us">
				<h2>Commemorating Every Life</h2>
				<p>Here at Falls Monument we believe that a memorial does more than mark an individual’s final resting place. A memorial reflects the love, warmth, and affection that inspires reverence, faith, and hope for the living. It’s a work of art that links the past and present with our future generations.</p>
				<p>We realize that families may be unfamiliar with the many aspects of selecting a lasting memorial and our caring staff is here to be of assistance. We offer attention to detail, creativity, and exceptional worksmanship with thoughtful consideration for the families we serve.</p>
				<a href="http://www.fallsmonument.com/about"><h3>Learn More About Us<i class="fa fa-angle-right"></i></h3></a>
				<a href="http://www.fallsmonument.com/services"><h3>See Our Services<i class="fa fa-angle-right"></i></h3></a>
			</div>
		</div>
		<div class="right-col">
			<a href="https://www.youtube.com/watch?v=-9_Ef7Cx-OE&autoplay=1" class="foobox"><img src="<?php bloginfo('template_directory'); ?>/images/videoThumbnail2.jpg"></a>
		</div>
	</div>

<?php get_footer (); ?>
