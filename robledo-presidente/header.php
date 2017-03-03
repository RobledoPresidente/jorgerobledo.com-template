<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robledo-presidente
 */

?><!--!DOCTYPE html-->
<!--html--> <!--?php language_attributes(); ?>>
<head-->
<!--meta charset="--><!--?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11"-->

<!--?php wp_head(); ?>
</head-->

<!--body --><!--?php body_class(); ?>-->
<!--div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"--><!--?php esc_html_e( 'Skip to content', 'robledo-presidente' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding"-->
			<!--?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="--><!--?php echo esc_url( home_url( '/' ) ); ?>" rel="home"--><!--?php bloginfo( 'name' ); ?></a></h1-->
			<!--?php else : ?>
				<p class="site-title"><a href="--><!--?php echo esc_url( home_url( '/' ) ); ?>" rel="home"--><!--?php bloginfo( 'name' ); ?></a></p-->
			<!--?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"--><!--?php echo $description; /* WPCS: xss ok. */ ?></p-->
			<!--?php
			endif; ?>
		</div--><!-- .site-branding -->

		<!--nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"--><!--?php esc_html_e( 'Primary Menu', 'robledo-presidente' ); ?></button-->
			<!--?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav--><!-- #site-navigation -->
	<!--/header--><!-- #masthead -->

	<!--div id="content" class="site-content"-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="wp-content/themes/robledo-presidente/style.css" rel="stylesheet" type="text/css">
  <link rel="profile" href="http://gmpg.org/xfn/11"-->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!--TODO: quitar una vez se incorpore a wordpress-->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=122026308404";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!---->
  <!--Header-->
  <header>
    <div id="header-img">
      <a href="/"><img class="biglogo" src="wp-content/themes/robledo-presidente/img/logo.png"></a>
    </div>
    <nav class="navbar navbar-toggleable-md navbar-light">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="wp-content/themes/robledo-presidente/img/logo-s.png"></a>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav m-auto main-menu">
          <li class="nav-item active">
            <a class="nav-link" href="#">conózcalo <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">biblioteca</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">prensa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">voluntarios</a>
          </li>
        </ul>
        <ul class="navbar-nav social">
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-facebook.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-twitter.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-instagram.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-snapchat.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-whatsapp.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-youtube.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-soundcloud.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-google+.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="wp-content/themes/robledo-presidente/img/social-linkedin.png"></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--End Header-->