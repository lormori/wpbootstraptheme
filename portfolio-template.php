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
			<div class="small-divider portfolio-color">
				<h1><?php the_title(); ?></h1>
			</div>
				<?php $args = array( 'posts_per_page' => 100, 'post_type' => 'page', 'post_parent' => 35 ); 
					$pages = get_posts($args);
					foreach($pages as $page)
					{
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} 
						$title = $page -> post_title;
						$excerpt = $page -> post_excerpt;
						$titlelink = '<a href="' . get_page_link($page -> ID) . ' "> <span class="covering-link"></span> </a>';
						echo '<div class="col-lg-4 col-homepage-portfolio portfolio-color">';
						echo $titlelink;
						echo '<h2><p>' . $title . '</p></h2>';
						echo '<p>' . $excerpt . '</p>';
						
						$morebutton = '<p><a class="btn btn-default portfolio-color" href="' . get_page_link($page -> ID) . '">More <i class="fa fa-chevron-circle-right"></i></a></p>';
						echo $morebutton;
						echo '</div>';
					}
				?>
				
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
		
	</div>
	<div class="span4">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->