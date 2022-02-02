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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11"-->

  <?php wp_head(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/lib/alertifyjs/dist/css/alertify.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/codebird-js/codebird.js"></script>
  <script>
      var hashtag = '<?php echo get_theme_mod( 'rp_custom_hashtag', 'default_value' ); ?>';

      var themeDirectory = '<?php echo get_template_directory_uri(); ?>';
      
      var homeUrl = '<?php echo get_home_url(); ?>';

      var cb = new Codebird;        
      cb.setConsumerKey("D7YLtH32E2sQIpVM3bW9UExSC", "fdadR5AKN4HYhYOLJUQdInefDZti1jYoEFkzC8KQQxpGRKwKcS");
      //cb.setUseProxy(false);
  </script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-46114492-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3X636P"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
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
    <div id="header-img" class="container">
      <a href="<?php echo get_home_url(); ?>"><img class="biglogo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
    </div>
    <!-- <div class="top-colors"></div> -->
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">'R!</a>
      <div id="up">
        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
      </div>
      <div class="collapse navbar-collapse" id="navbar">        
        <!--TODO: Los items de este menú deben ser un Menú de wordpress, aun no tan priopritario ahora-->
        <ul class="navbar-nav m-auto main-menu">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_home_url(); ?>/conozcalo">conózcalo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo get_home_url(); ?>/biblioteca">biblioteca</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo get_home_url(); ?>/biblioteca" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">temas</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/salud">Salud 🏥</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/corrupcion">Corrupción 💸</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/economia">Economía 📉</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/agro">Agro 👩🏼‍🌾</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/educacion">Educación y ciencia 👩🏻‍🏫</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/industria">Industria 🏭</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/internacional">Internacional 🌎</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/trabajo">Trabajo 👷‍</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/ambiente">Ambiente 🌳</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/mujeres">Mujeres ♀️</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/regiones">Regiones 🇨🇴</a>
              <a class="dropdown-item font-weight-bold" href="<?php echo get_home_url(); ?>/category/temas/bogota">Bogotá 🌆</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_home_url(); ?>/eventos">agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_home_url(); ?>/prensa">prensa</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="<?php echo get_home_url(); ?>/contactenos">contáctenos</a>
          </li>-->
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control mr-sm-2" placeholder="Encuentre..." name="s">
          </div>
        </form>
        <ul class="navbar-nav social">
          <li class="nav-item">
            <a class="nav-link" href="https://es-la.facebook.com/jorge.robledo.castillo/"><img src="<?php echo get_template_directory_uri(); ?>/img/social-facebook.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/jerobledo?lang=es"><img src="<?php echo get_template_directory_uri(); ?>/img/social-twitter.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/jorge_enrique_robledo/"><img src="<?php echo get_template_directory_uri(); ?>/img/social-instagram.png"></a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-snapchat.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/social-whatsapp.png"></a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com/user/ROBLEDOTELEVISION"><img src="<?php echo get_template_directory_uri(); ?>/img/social-youtube.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://soundcloud.com/prensa-jorge-enrique-robledo"><img src="<?php echo get_template_directory_uri(); ?>/img/social-soundcloud.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://plus.google.com/100711622690849831280"><img src="<?php echo get_template_directory_uri(); ?>/img/social-google+.png"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.linkedin.com/in/jorge-robledo/"><img src="<?php echo get_template_directory_uri(); ?>/img/social-linkedin.png"></a>
          </li>
        </ul>        
      </div>
      </div>
    </nav>
  </header>
  <!--End Header-->