<!DOCTYPE html>
<html clas="No-JS" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <?php
      ob_start();
        wp_head();
        $themeHead = ob_get_contents();
      ob_end_clean();
      define( 'HEAD_CONTENT', $themeHead );
        $allowedTags = '<style><link><meta><title>';
      print theme_strip_tags_content( HEAD_CONTENT, $allowedTags );
    ?>
  </head>
  <body <?php body_class(); ?>>

	<!-- Header -->
  		<header id="header" role="banner">
  			<div class="container">
  				<!-- Logo -->
  				<div id="logo">
  					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
  				</div>
  				<!-- Logo -->

  				<!-- Mobile Toggle Menu Button -->
  				<a href="#" class="nav-toggle"><i></i></a>

  				<!-- Main Nav -->
  				<div id="main-nav">
  					<nav id="nav" role="navigation">
  						<ul>
                  <?php
                  wp_nav_menu( array(
                      'menu'              => 'primary',
                      'theme_location'    => 'primary',
                      'depth'             => 2,
                      'container'         => 'div id',
                      'container_class'   => 'nav-toggle',
                      'container_id'      => 'main-nav',
                      'menu_class'        => 'nav',
                      'echo' 		          => true,
                      'before'            => '',
                      'after'             => '',
                      'link_before'       => '',
                      'link_after'        => '',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      'walker'            => new custom_nav())
                    );
                  ?>
  						</ul>
  					</nav>
				<div id="header-menu-login">
									<a id="menu-login" href="<?php bloginfo('url'); ?>/login"><button type="submit" class="btn btn-default">Login</button></a>
														</div>
  				</div>
  				<!-- Main Nav -->
  			</div>
  		</header>
  		<!-- Header -->
