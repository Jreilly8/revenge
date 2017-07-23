<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
	<nav id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="container">			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				 <a class="navbar-brand marg-top-5" href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo get_theme_mod('logo_image'); ?>" alt="Revenge"></a>

			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<?php
				    wp_nav_menu( array(
				    	'menu'              => 'primary',
				        'theme_location'    => 'primary',
				        'depth'             => 2,
				        'container'         => 'div',				        
				        'container_id'      => 'rev-navbar-collapse-1',
				        'menu_class'        => 'nav navbar-nav navbar-right',
				        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				        'walker'            => new wp_bootstrap_navwalker())
				        );
				?>
			</div>
		</div>
	</nav>
		<nav id="lower" class="navbar navbar-inverse navbar-fixed-top container-fluid hidden-xs hidden-sm" role="navigation">
		<div class="container-fluid">
			<div class="row">	
				<div class="col-xs-12 col-md-12">			
					<ul class="social marg-top-10 marg-left-cent">
		   				<li class="facebook marg-left-minus-20 marg-right-10">
		      				<a href="<?php echo get_theme_mod('revenge_fb'); ?>" target="_blank">
		       					<strong>Facebook</strong>
		      				</a>
		  				</li>
		  				<li class="youtube marg-right-10">
		      				<a href="<?php echo get_theme_mod('revenge_youtube'); ?>" target="_blank">
		       					<strong>Youtube</strong>
		      				</a>
		  				</li>		  		
		   				<li class="twitter ">
		      				<a href="<?php echo get_theme_mod('revenge_twitter'); ?>" target="_blank">
		         				<strong>Twitter</strong>
		      				</a>
		   				</li>
		   			<!-- More services -->
					</ul>
				</div>
			</div>
		</div>
	</nav>	