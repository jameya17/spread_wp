<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$title = get_the_title();
?>
<!DOCTYPE html>

<html>

	<head>
		<?php
			if($title == "Home"){
		?>
		    <meta charset="utf-8" />
		    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, viewport-fit=cover">
		    <title>spread-vienna.com</title>
			<meta name="description" content=""/>
			<meta name="keywords" content=""/>
			<meta property="og:title" content="" />
			<meta property="og:description" content="" />
			<meta property="og:url" content="" />
			<meta property="og:image" content="http://www.greenweeks.at/wp-content/themes/twentytwenty/images/og-image.png" />
			<meta property='og:image:type' content='image/png' />
			<meta property="og:image:width" content="200" />
			<meta property="og:image:height" content="200" />
			<meta property="og:type" content="article" />
			<meta property="og:site_name" content="Spread" />
			<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
		    <link href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css" rel="stylesheet"/>
		    <link href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.css" rel="stylesheet"/>
		    <link href="<?php bloginfo('template_directory'); ?>/css/base.css" rel="stylesheet"/>
		    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
		    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick.css">

		    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.1.js"></script>
		    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
		    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/shutter-plugins.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
		    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>

		    <script type="module">
		        import { Fancybox } from "https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js";
		    </script>
		    
		    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
		<?php 
			} 
			else{
		?>
			<meta charset="utf-8" />
		    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, viewport-fit=cover">
		    <title>Spread | <?php echo $title; ?></title>
		    <link href="<?php bloginfo('template_directory'); ?>/css/base.css" rel="stylesheet"/>
		    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.1.js"></script>

		<?php } ?>
	</head>

	<body class="sec-page">

		<div class="wrapper">

			<header class="header">
	            <div class="header-pad">
	                <div class="logo-wrap">
	                    <div class="header-logo">
	                    	<?php
                        	  $href = home_url();
                        	  if(LANGUAGE == "en"){
                        	  	$href = get_the_permalink(120);
                        	  }

                        	?>
	                        <a class="logo" href="<?php echo $href; ?>">
	                            <img src="<?php bloginfo('template_directory'); ?>/images/spread-logo.png" alt="Greenweeks Logo" title="Greenweeks Logo">
	                        </a>
	                    </div>
	                    <div class="social-media">
	                        <a target="_blank"  href="https://www.instagram.com/spreadpr/">
	                            <img src="<?php bloginfo('template_directory'); ?>/images/header-logos/instagram.png" alt="instagram-icon" title="Instagram">
	                        </a>
	                        <a target="_blank" href="https://twitter.com/spreadpr">
	                            <img src="<?php bloginfo('template_directory'); ?>/images/header-logos/twitter.png" alt="twitter-icon" title="twitter">
	                        </a>
	                        <a target="_blank" href="https://www.facebook.com/SPREADPR/">
	                            <img src="<?php bloginfo('template_directory'); ?>/images/header-logos/facebook.png" alt="facebook-icon" title="facebook">
	                        </a>
	                        <a target="_blank" href="https://www.linkedin.com/company/spread-pr-marketing-sales/">
	                            <img src="<?php bloginfo('template_directory'); ?>/images/header-logos/linkedin.png" alt="linkedin-icon" title="linkedin">
	                        </a>
							<a target="_blank" href="https://www.tiktok.com/@spreadpr">
                            	<img src="<?php bloginfo('template_directory'); ?>/images/header-logos/tik-tok.png" alt="TikTok-icon" title="Tik Tok">
                        	</a>
	                    </div>
	                </div>
	        
	                <div class="icon-burger">
	                    <span class="burger-patty"></span>
	                    <span class="burger-patty"></span>
	                    <span class="burger-patty"></span>
	                </div>
	        
	                <nav class="sticky-nav-tabs">
	                    <ul class="sticky-nav-tabs-container" id="top-menu">
	                    	<?php
								if($title == "Home"){
							?>
		                        <li style="display: none;"><a href="javascript:void(0);" class="sticky-nav-tab">home</a></li>
		                        <li><a href="#about-us" class="sticky-nav-tab">About</a></li>
		                        <li><a href="#core-services" class="sticky-nav-tab" >Services</a></li>
		                        <li><a href="#our-clients" class="sticky-nav-tab" >Clients</a></li>
		                        <li><a href="#our-team" class="sticky-nav-tab" >Team</a></li>
		                        <li><a href="#contact" class="sticky-nav-tab" >Contact</a></li>
		                        <li><a href="/" class="sticky-nav-tab green-btn">Newsroom</a></li>
		                    <?php } else { ?>
		                    	<li style="display: none;"><a href="javascript:void(0);" class="sticky-nav-tab">home</a></li>
		                        <li><a href="<?php echo home_url(); ?>/?id=about-us" class="sticky-nav-tab">About</a></li>
		                        <li><a href="<?php echo home_url(); ?>/?id=core-services" class="sticky-nav-tab" >Services</a></li>
		                        <li <?php if($title == "Clients"){ ?> class="active" <?php } ?>><a href="<?php echo home_url(); ?>/?id=our-clients" class="sticky-nav-tab" >Clients</a></li>
		                        <li><a href="<?php echo home_url(); ?>/?id=our-team" class="sticky-nav-tab" >Team</a></li>
		                        <li><a href="<?php echo home_url(); ?>/?id=contact" class="sticky-nav-tab" >Contact</a></li>
		                        <li><a href="/" class="sticky-nav-tab green-btn">Newsroom</a></li>
		                	<?php } ?>
	                    </ul>
	                </nav>

	            </div>
	        </header>
