<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">-->
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" media="screen">
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
	<?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  
  <nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
  
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
  </div>
  
  <!-- Collect the nav links, forms, and other content for toggling -->
	<div class="navbar-collapse nav-collapse collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
		<!--
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="#about">About</a></li>
		  <li><a href="#contact">Contact</a></li>
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  <li><a href="#">Action</a></li>
			  <li><a href="#">Another action</a></li>
			  <li><a href="#">Something else here</a></li>
			  <li class="divider"></li>
			  <li class="nav-header">Nav header</li>
			  <li><a href="#">Separated link</a></li>
			  <li><a href="#">One more separated link</a></li>
			</ul>
		  </li>
		  -->
		  <!-- creating my dropdown menu. the first page of the list is the Portfolio, the others are its children -->
		  <li class="dropdown">
			<?php 
				$page = get_page_link(35);
				$page_title = get_post(35) -> post_title;
			?>
			
			<a href="<?php echo $page; ?>" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $page_title; ?> <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  <?php $args = array( 'posts_per_page' => 100, 'post_type' => 'page', 'post_parent' => 35 ); 
					$pages = get_posts($args);
				
					foreach($pages as $page)
					{
						$title = $page -> post_title;
						$titlelink = '<a href="' . get_page_link($page -> ID) . '">' . $title . '</a>';
						echo '<li>';
						echo $titlelink;
						echo '</li>';
					}
				?>
			</ul>
		  </li>
		  <?php wp_list_pages(array('title_li' => '', 'exclude' => 292, 'exclude_tree' => 35)); ?>
		  
		</ul>
	</div><!--/.nav-collapse -->

  </nav>
  
  