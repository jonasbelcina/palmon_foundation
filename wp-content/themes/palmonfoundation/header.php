<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="mobile-overlay"></div>
	<header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Palmon Foundation" />
						</a>

			    		<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			    		    <span class="icon-bar"></span>
			    		    <span class="icon-bar"></span>
			    		    <span class="icon-bar"></span>
			    		</button> -->

			    		<button type="button" class="mobile-menu">
			    		    <span class="icon-bar"></span>
			    		    <span class="icon-bar"></span>
			    		    <span class="icon-bar"></span>
			    		</button>

			    		<div id="navbar" class="navbar-collapse">
			    		    <ul class="nav navbar-nav">
			    		    	<li><a href="<?php echo home_url(); ?>" <?php if(is_front_page()) { ?>class="current-page"<?php } ?>>Home</a></li>
			    		    	<li><a href="<?php echo home_url(); ?>/about-us" <?php if(is_page('92')) { ?>class="current-page"<?php } ?>>About us</a></li>
			    		    	<li><a href="<?php echo home_url(); ?>/what-we-do" <?php if(is_page('97')) { ?>class="current-page"<?php } ?>>What we do</a></li>
			    		    	<li><a href="<?php echo home_url(); ?>/support-us" <?php if(is_page('123')) { ?>class="current-page"<?php } ?>>Support us</a></li>
			    		    	<li><a href="<?php echo home_url(); ?>/news" <?php if(is_home()) { ?>class="current-page"<?php } ?>>News &amp; Events</a></li>
			    		    </ul>
					    </div>
					</div>
				</nav>
			</div>
		</div>
	</header>







