<?php
/*
Template Name: Portfolio Template
*/
?>

<!-- adding some php bitches -->
<?php get_header(); ?>

<div class="container">

<div class = "row">
	<div class="span8">	
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
				<hr>
					<?php $args = array( 'posts_per_page' => 100, 'post_type' => 'page', 'post_parent' => 35 ); 
						$pages = get_posts($args);
						foreach($pages as $page)
						{
							$title = $page -> post_title;
							$excerpt = $page -> post_excerpt;
							$titlelink = '<h2><p><a href="' . get_page_link($page -> ID) . '">' . $title . '</a></p></h2>';
							echo '<div class="col-lg-4">';
							echo $titlelink;
							echo '<p>' . $excerpt . '</p>';
							
							$morebutton = '<p><a class="btn btn-default" href="' . get_page_link($page -> ID) . '">More &raquo;</a></p>';
							echo $morebutton;
							echo '</div>';
						}
					?>
				<hr>
				
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
		
	</div>
	<div class="span4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->