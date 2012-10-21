<?php
?>

<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
  	<meta name="author" content="A blog about Sandboxes" />
  	
	<title><?php bloginfo('name');?></title>
	<link rel="canonical" href=""> <!-- PUT YOUR SITE URL IN HERE -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?'.filemtime( get_stylesheet_directory().'/style.css'); ?>"
  	media="screen" />
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>	
  	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>   	
	
</head>

<!-- $ START BODY -->

<body <?php body_class();?>>
	<div id="wrapper">
		<header>
			<a href="#"><img src="/images/logo.png" alt="logo"></a>
			<nav id="menu" role="navigation">
				<?php wp_nav_menu(); ?>		
			</nav>
			
			<nav id="search" role="navigation"><!-- BUILD YOUR SEARCH IN HERE --></nav>
			
			<nav id="social" role="navigation">
			<!-- $ BEGIN SOCIAL MEDIA ICONS -->
				<ul>
					<li><a href="#"><img src="/images/tweet.png" alt="twitter icon"></a></li>
					<li><a href="#"><img src="/images/dribbble.png" alt="dribbble icon"></a></li>
					<li><a href="#"><img src="/images/facebook.png" alt="facebook icon"></a></li>
					<li><a href="#"><img src="/images/rss.png" alt="rss icon"></a></li>
				</ul>
			<!-- $ END SOCIAL MEDIA ICONS -->
			</nav>
		</header>