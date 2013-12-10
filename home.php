<!-- adding some php bitches -->
<?php get_header(); ?>



<div class="container">

<div class = "row">
	<!-- SIDEBAR -->
	<div class="sidebar">
		<div>
			<button type="button" class="btn-default pull-left" data-toggle="collapse" data-target="#side">
				<span class="sr-only">Toggle navigation</span>
				<p>
				Sidebar <i class="fa fa-level-down"></i>
				</p>
			</button>
		</div>
		<br />
		<br />
		<div class="collapse" id="side">	
			<?php get_sidebar(); ?>
		</div>
	</div>
	
	<!-- BLOG POSTS -->
	<div class="blog">
		<div class="small-divider green">
			<h1> Blog </h1>
		</div>
		
		<?php $count = 0; ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
			<?php
				// create a div with a different color, every color is decided by a 6-color pattern
				// that goes in cycle and repeat itself every 6 posts. Every post will get one color
				
				// define main class
				echo '<div class="col-sm-6 ';
				
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
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
			<p><em>
				<?php 
				
				the_time('jS '); 
				
				the_time('M ');
				
				the_time('y');
				
				?>
			</em></p>
			<p><?php //the_content(); ?></p>
			<!-- end of div from the if statement -->
			</div>
			
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
		
	</div>
</div>
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->