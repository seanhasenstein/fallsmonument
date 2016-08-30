<?php
/*

	Template Name: Etching Template

*/
?>

<?php get_header(); ?>

	<div class="content-wrapper">
		<div class="text-center">
			<h2 class="etchings">Etchings Gallery</h2>
			<p class="etchings">Etching provides a more detailed picture or emblem that allows families to customize any drawing or emblem to their liking. The process is done with a tool that lightly scratches into the polish. Below are a few examples of etchings that we have done in the past. Stop in today to see what our artists can do for you!</p>	
		</div>

		<?php echo do_shortcode('[foogallery id="66"]')?>

	</div>

<?php get_footer (); ?>
