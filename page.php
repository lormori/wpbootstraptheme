<!-- adding some php bitches -->
<?php get_header(); ?>

<div class="container">

<div class = "row">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php
				if ($post->post_parent == '35') { // if current page is child of page with page ID 35 (a portfolio piece)
					echo '<div class="small-divider blue">';
				}
				else
				{
					echo '<div class="small-divider purple">';
				}
			?>
				<h1><?php the_title(); ?></h1>
			</div>				
			<div class="page">
				<p><?php the_content(); ?></p>
			</div>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
		
</div>
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->