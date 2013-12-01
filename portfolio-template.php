<?php
/*
Template Name: Portfolio Template
*/
?>

<!-- adding some php bitches -->
<?php get_header(); ?>

<div class="container">

<div class = "row">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="small-divider portfolio-color">
				<h1><?php the_title(); ?></h1>
			</div>
				<?php $args = array( 'posts_per_page' => 100, 'post_type' => 'page', 'post_parent' => 35 ); 
					$pages = get_posts($args);
					foreach($pages as $page)
					{
						$title = $page -> post_title;
						$excerpt = $page -> post_excerpt;
						$titlelink = '<a href="' . get_page_link($page -> ID) . ' "> <span class="covering-link"></span></a>';
						echo '<div class="col-sm-4 col-portfolio portfolio-color">';
						echo $titlelink;
						echo '<h2><p>' . $title;
						//echo '<p>' . $excerpt . '</p>';
						echo '<br>';
						echo 'More <i class="fa fa-chevron-circle-right"></i></p></h2>';
						//set_post_thumbnail_size( 50, 50, true );
						echo get_the_post_thumbnail( $page -> ID, 'portfolio-thumb');
						echo '</div>';
					}
				?>
				
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
		
</div>
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->