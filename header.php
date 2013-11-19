<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">-->
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
	<?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
  
  <nav class="navbar navbar-inverse navbar-default" role="navigation">
  
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
		  <?php wp_list_pages(array('title_li' => '', 'exclude' => 292)); ?>
		  
		</ul>
	</div><!--/.nav-collapse -->

  </nav>
  
  <div class="container">