<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	</head>
<?php 
global $mytheme;
?>	
<body id="page-top" <?php body_class(); ?>>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php if(!is_home()){echo home_url();}else{echo "#page-top"; } ?>"><?php bloginfo('name'); ?></a>
            </div>
			<?php
				
				$args = array(
					'theme_location' => 'primary',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'nav navbar-nav navbar-right',
					'menu_id'         => ' ',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s"><li class="hidden">
                        <a href="#page-top"></a>
                    </li>%3$s</ul>',
					'depth'           => 0,
					'walker'          => new themeslug_walker_nav_menu
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
            
        </div>
        <!-- /.container-fluid -->
    </nav>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
 		  
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<?php $first = true; foreach($mytheme['opt-slides'] as $slide){  
			 if ( $first )
			{ ?><div class="item active"><?php $first = false; }
			else
			{ ?><div class="item"><?php } ?>
			  <img src="<?php echo $slide['image']; ?>" alt="...">
			  <div class="carousel-caption">
				  <div class="intro-text">
						<div class="intro-lead-in"><?php echo $slide['title']; ?></div>
						<div class="intro-heading"><?php echo $slide['description']; ?></div>
						<a href="<?php echo $slide['url']; ?>" class="page-scroll btn btn-xl">Tell Me More</a>
					</div>
			  </div>
			</div>
				
			<?php } ?>
			
		  </div>
		 
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
	</div> <!-- Carousel -->


	<!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">
			
			<!-- hd-search -->
			<div class="hd-search">
				<?php get_search_form(); ?>
			</div><!-- /hd-search -->
			
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?> <?php if (is_page('portfolio')) { ?>
				- Thank you for viewing our work
			<?php }?></h5>
			
			
			
			<nav class="site-nav">
				
				<?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
			</nav>
			
		</header><!-- /site-header -->