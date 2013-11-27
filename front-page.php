<!-- adding some php bitches -->
<?php get_header(); ?>
	
<!-- mega JUMBO MOTHERFUCKERSSSSSS -->
	<div class="jumbotron">
		<div class="containerjumbo">
			<h1>Put motherfucking jumbotron here ;)</h1>
			<p>Done, let's do a fancy website. enjoy</p>
		</div>
	</div>
	
	<div class="big-divider">
		<p>Have a look around.</p>
	</div>
	
	<div class="container">
	
	<!-- mega three thumbnailz -->
		<div class="row">
			<div class="col-lg-4 blog-color">
				<p>
					<h1><center><i class="fa fa-book"></i></center></h1>
				</p>
				<a href = "/blog"><span class="covering-link"></span></a>
				<h2>Blog</h2>
				
				<?php query_posts('posts_per_page=1'); ?>
				  <?php while (have_posts()) : the_post(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
					<i class="fa fa-quote-left fa-2x pull-left fa-border"></i>
					<p><?php the_excerpt(); ?></p>
					<p><a class="btn btn-default blog-color" href="<?php the_permalink(); ?>">More &raquo;</a></p>
				  <?php endwhile;?>
				  
			</div>
			
			<div class="col-lg-4 portfolio-color">
				<p>
					<h1><center><i class="fa fa-briefcase"></i></center> </h1>
				</p>
				<a href ="/portfolio"><span class="covering-link"></span></a>
				<h2>Portfolio</h2>
				
				<?php $args = array( 'posts_per_page' => 1, 'post_type' => 'page', 'post_parent' => 35 ); 
					$pages = get_posts($args);
				
					foreach($pages as $page)
					{
						$title = $page -> post_title;
						$excerpt = $page -> post_excerpt;
						$titlelink = '<h3><a href="' . get_page_link($page -> ID) . '">' . $title . '</a></h3>';
						echo $titlelink;
						echo '<p>' . $excerpt . '</p>';
						
						$morebutton = '<p><a class="btn btn-default portfolio-color" href="' . get_page_link($page -> ID) . '">More &raquo;</a></p>';
						echo $morebutton;
					}
				?>
			</div>
			
			<div class="col-lg-4 about-color">
				<p>
					<h1><center><i class="fa fa-info-circle"></i></center></h1>
				</p>
				<a href ="/about"><span class="covering-link"></span></a>
				<h2>HELLO</h2>
				<p>Static stuff, here I talk a little bit of myself</p>
				<p><a class="btn btn-default about-color" href="#">More &raquo;</a></p>
			</div>
		</div>
	
<?php get_footer(); ?> <!-- this is a wordpres function that returns the footer.php file -->