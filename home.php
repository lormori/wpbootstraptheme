<!-- adding some php bitches -->
<?php get_header(); ?>



<div class="container">

<div class = "row">
	<div class="span8 blog">
		<div class="small-divider blog-color">
			<h1> Blog </h1>
		</div>
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
			<p><em><?php the_time('l, F jS, Y'); ?></em></p>
			<p><?php the_content(); ?></p>
			<hr>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
		
	</div>
	<div class="span4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->