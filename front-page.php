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
			
				<h2>Blog</h2>
				
				<?php query_posts('posts_per_page=1'); ?>
				  <?php while (have_posts()) : the_post(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
					<?php the_excerpt(); ?>
					<p><a class="btn btn-default" href="<?php the_permalink(); ?>">More &raquo;</a></p>
				  <?php endwhile;?>
				  
			</div>
			
			<div class="col-lg-4">
				<h2>Portfolio</h2>
				<p>something 2something 2something 2something 2something 2something 2something 2something 2something 2something 2</p>
				<p><a class="btn btn-default" href="#">More &raquo;</a></p>
			</div>
			
			<div class="col-lg-4">
				<h2>About me</h2>
				<p>something 3something 3something 3something 3something 3something 3something 3something 3something 3something 3</p>
				<p><a class="btn btn-default" href="#">More &raquo;</a></p>
			</div>
		</div>
	
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->