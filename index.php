<!-- adding some php bitches -->
<?php get_header(); ?>

<div class="container">

<div class="blog">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="small-divider blog-color">
			<h1><?php the_title(); ?></h1>	
		</div>

		<p><?php the_time('l, F jS, Y'); ?></p>
		<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
</div>
<div class="span4">
	<?php get_sidebar(); ?>
</div>
	
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->