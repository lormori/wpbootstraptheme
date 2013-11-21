<!-- adding some php bitches -->
<?php get_header(); ?>
	
<!-- mega JUMBO MOTHERFUCKERSSSSSS -->
	<div class="jumbotron">
		<div class="container">
			<h1>Put motherfucking jumbotron here ;)</h1>
			<p>Done, let's do a fancy website. enjoy</p>
		</div>
	</div>
	
	<!-- mega three thumbnailz -->
		<div class="row">
			<div class="col-lg-4">
			
				<h2><a href = "/blog">Blog</a></h2>
				
				<?php query_posts('posts_per_page=1'); ?>
				  <?php while (have_posts()) : the_post(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
					<p><?php the_excerpt(); ?></p>
					<p><a class="btn btn-default" href="<?php the_permalink(); ?>">More &raquo;</a></p>
				  <?php endwhile;?>
				  
			</div>
			
			<div class="col-lg-4">
				
				<h2><a href ="/portfolio">Portfolio</a></h2>
				
				<?php $args = array( 'posts_per_page' => 1, 'post_type' => 'page', 'post_parent' => 35 ); 
					$pages = get_posts($args);
				
					foreach($pages as $page)
					{
						$title = $page -> post_title;
						$excerpt = $page -> post_excerpt;
						$titlelink = '<h3><p><a href="' . get_page_link($page -> ID) . '">' . $title . '</a></p></h3>';
						echo $titlelink;
						echo '<p>' . $excerpt . '</p>';
						
						$morebutton = '<p><a class="btn btn-default" href="' . get_page_link($page -> ID) . '">More &raquo;</a></p>';
						echo $morebutton;
					}
				?>
			</div>
			
			<div class="col-lg-4">
				<h2>About me</h2>
				<p>Static stuff, here I talk a little bit of myself</p>
				<p><a class="btn btn-default" href="#">More &raquo;</a></p>
			</div>
		</div>
	
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->