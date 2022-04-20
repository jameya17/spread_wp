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
		    <title>Spread | <?php echo $title; ?></title>
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
		    <link href="<?php bloginfo('template_directory'); ?>/css/base.css" rel="stylesheet"/>
		    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.1.js"></script>

		<?php } ?>
	</head>

	<body class="sec-page">

		<div class="wrapper">

			<header class="header">
	            <div class="header-pad">
					<div class="top-links">
						<ul>
							<?php
								$href = home_url();
								if(LANGUAGE == "de"){
									$href1 = "javascript:void(0);";
									$id = 120;
									$pageId = get_the_id();
									if($pageId == 133){
										$id = 107;
									}
									if($pageId == 109){
										$id = 135;
									}
									if($pageId == 104){
										$id = 137;
									}
									if($pageId == 8){
										$id = 140;
									}
									$href2 = get_the_permalink($id);

							?>
									<li><a class="active" href="<?php echo $href1; ?>">De</a></li>
									<li><a href="<?php echo $href2; ?>">En</a></li>
							<?php
								}
								else
								{
									$id = 6;
									$pageId = get_the_id();
									if($pageId == 107){
										$id = 133;
									}
									if($pageId == 135){
										$id = 109;
									}
									if($pageId == 137){
										$id = 104;
									}
									if($pageId == 140){
										$id = 8;
									}
									$href1 = get_the_permalink($id);
									$href2 = "javascript:void(0);";
							?>
									<li><a href="<?php echo $href1; ?>">De</a></li>
									<li><a class="active" href="<?php echo $href2; ?>">En</a></li>
							<?php
								}
							?>
						</ul>
					</div>
					<div class="head-links">
						<div class="logo-wrap">
							<div class="header-logo">
								<?php
								$href = home_url();
								if(LANGUAGE == "en"){
									$href = get_the_permalink(120);
								}

								?>
								<a class="logo" href="<?php echo $href; ?>">
									<img class="desktop" src="<?php bloginfo('template_directory'); ?>/images/spread-logo.png" alt="Spread Logo" title="Spread Logo">
									<img class="mobile" src="<?php bloginfo('template_directory'); ?>/images/spread-logo-mob.png" alt="Spread Logo" title="Spread Logo">
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
									<?php
                                	  $text = "Über uns";
                                	  if(LANGUAGE == "en"){
                                	  	$text = "About";
                                	  }

                                	?>
									<li><a href="#about-us" class="sticky-nav-tab"><?php echo $text; ?></a></li>
									<?php
                                	  $text = "Leistungen";
                                	  if(LANGUAGE == "en"){
                                	  	$text = "Services";
                                	  }

                                	?>
									<li><a href="#core-services" class="sticky-nav-tab" ><?php echo $text; ?></a></li>
									<?php
                                	  $text = "Referenzen";
                                	  if(LANGUAGE == "en"){
                                	  	$text = "References";
                                	  }

                                	?>
									<li><a href="#our-clients" class="sticky-nav-tab" ><?php echo $text; ?></a></li>
									<li><a href="#our-team" class="sticky-nav-tab" >Team</a></li>
									<?php
                                	  $text = "Kontakt";
                                	  if(LANGUAGE == "en"){
                                	  	$text = "Contact";
                                	  }

                                	?>
									<li><a href="#contact" class="sticky-nav-tab" ><?php echo $text; ?></a></li>
									<li><a href="/" class="sticky-nav-tab green-btn">Newsroom</a></li>
								<?php } else { ?>
									<li style="display: none;"><a href="javascript:void(0);" class="sticky-nav-tab">home</a></li>
									<?php
                                	  $text = "Über uns";
                                	  $href = home_url();
                                	  if(LANGUAGE == "en"){
                                	  	$text = "About";
                                	  	$href = get_the_permalink(120);
                                	  }

                                	?>
									<li><a href="<?php echo $href; ?>/?id=about-us" class="sticky-nav-tab"><?php echo $text; ?></a></li>
									<?php
                                	  $text = "Leistungen";
                                	  $href = home_url();
                                	  if(LANGUAGE == "en"){
                                	  	$text = "Services";
                                	  	$href = get_the_permalink(120);
                                	  }

                                	?>
									<li><a href="<?php echo $href; ?>/?id=core-services" class="sticky-nav-tab" ><?php echo $text; ?></a></li>
									<?php
                                	  $text = "Kunden";
                                	  $href = home_url();
                                	  if(LANGUAGE == "en"){
                                	  	$text = "Clients";
                                	  	$href = get_the_permalink(120);
                                	  }

                                	?>
									<li><a href="<?php echo $href; ?>/?id=our-clients" class="sticky-nav-tab" ><?php echo $text; ?></a></li>
									<li><a href="<?php echo $href; ?>/?id=our-team" class="sticky-nav-tab" >Team</a></li>
									<?php
                                	  $text = "Kontakt";
                                	  $href = home_url();
                                	  if(LANGUAGE == "en"){
                                	  	$text = "Contact";
                                	  	$href = get_the_permalink(120);
                                	  }

                                	?>
									<li><a href="<?php echo $href; ?>/?id=contact" class="sticky-nav-tab" ><?php echo $text; ?></a></li>
									<li><a href="/" class="sticky-nav-tab green-btn">Newsroom</a></li>
								<?php } ?>
							</ul>
						</nav>
					</div>

	                

	            </div>
	        </header>
