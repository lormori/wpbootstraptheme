<!-- adding some php bitches -->
<?php get_header(); ?>

<div class="container">

<div class = "row">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php
				if ($post->post_parent == '35') { // if current page is child of page with page ID 35
					echo '<div class="small-divider portfolio-color">';
				}
				else
				{
					echo '<div class="small-divider about-color">';
				}
			?>
				<h1><?php the_title(); ?></h1>
			</div>
				<hr>
				<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
		
</div>
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->