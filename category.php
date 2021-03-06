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
		<div class="small-divider green">
			<h1> <?php single_cat_title(); ?></h1>	
		</div>
	
	
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
			<?php
				// create a div with a different color, every color is decided by a 6-color pattern
				// that goes in cycle and repeat itself every 6 posts. Every post will get one color
				
				// define main class
				echo '<div class="col-sm-6 blog-entry ';
				
				// define color
				if(($count % 6) == 0)
				{
					echo 'blue';
				}
				elseif(($count % 6) == 1)
				{
					echo 'purple';
				}
				elseif(($count % 6) == 2)
				{
					echo 'green';
				}
				elseif(($count % 6) == 3)
				{
					echo 'red';
				}
				elseif(($count % 6) == 4)
				{
					echo 'light-blue';
				}
				elseif(($count % 6) == 5)
				{
					echo 'yellow';
				}
				// end definition of div
				echo '">';
				$count++;
			?>
			<!-- transparent background to get squared shaped. NB commented out at the moment -->
			<?php //echo wp_get_attachment_image( 333, 'full' ); ?>
			
			<a href="<?php the_permalink(); ?>"><span class="covering-link"></span></a>
			<p>
			<span class="blog-date"><?php the_time('j'); ?></span>
			<span><?php the_time('S'); ?></span>
			<br>
			<span><?php the_time('M \'y'); ?></span>
			<br>
			<?php the_title(); ?>
			</p>
			<!-- end of div from the if statement -->
			</div>

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	</div>
</div>
	
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->