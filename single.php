<!-- adding some php bitches -->
<?php get_header(); ?>

<div class="container">

<div class = "row">
	<div class="sidebar beige">
		<div>
			<button type="button" class="btn-default pull-left" data-toggle="collapse" data-target="#side">
				<span class="sr-only">Toggle navigation</span>
				<p>
				Navigate <i class="fa fa-level-down"></i>
				</p>
			</button>
		</div>
		<br />
		<br />
		<div class="navbar-collapse nav-collapse collapse navbar-ex1-collapse" id="side">	
			<?php get_sidebar(); ?>
		</div>
	</div>
	<div class="blog">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="small-divider green">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="blog-content">
			<p><?php the_content(); ?></p>
			</div>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
		
	</div>
</div>
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->