<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robledo-presidente
 */

?>

	<!--/div--><!-- #content -->

	<!--footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info"-->
			<!--a href="--><!--?php echo esc_url( __( 'https://wordpress.org/', 'robledo-presidente' ) ); ?>"--><!--?php printf( esc_html__( 'Proudly powered by %s', 'robledo-presidente' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span-->
			<!--?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'robledo-presidente' ), 'robledo-presidente', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div--><!-- .site-info -->
	<!--/footer--><!-- #colophon -->
<!--/div--><!-- #page -->


    <footer class="section bg-dark py-4 px-3 text-white">
      <div class="row">
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-2">
              <h3><a href="biografia.pdf" target="_blank">conózcalo</a></h3>
            </div>
            <div class="col-md-4">
              <h3><a href="<?php echo get_home_url(); ?>/biblioteca">biblioteca</a></h3>
              <!--TODO: Los enlaces de Boletines, debates y articulo quincenal deben ser enlaces a la categoría y deben tene rel contador de artículos en esa categoría (lo del contador puede o no ser)-->
              <div class="list-group">
                <a href="https://www.youtube.com/user/ROBLEDOTELEVISION" class="list-group-item list-group-item-action justify-content-between bg-dark border-0">Videos <span class="badge bg-secondary badge-pill">+1000</span></a>
                <a href="<?php echo get_home_url(); ?>/category/boletines" class="list-group-item list-group-item-action justify-content-between bg-dark border-0">Boletines <span class="badge bg-secondary badge-pill">+1000</span></a>
                <a href="https://soundcloud.com/prensa-jorge-enrique-robledo" class="list-group-item list-group-item-action justify-content-between bg-dark border-0">Audios <span class="badge bg-secondary badge-pill">+300</span></a>
                <a href="<?php echo get_home_url(); ?>/category/debates/" class="list-group-item list-group-item-action justify-content-between bg-dark border-0">Debates <span class="badge bg-secondary badge-pill">+150</span></a>
                <a href="<?php echo get_home_url(); ?>/category/articulos/" class="list-group-item list-group-item-action justify-content-between bg-dark border-0">Artículos <span class="badge bg-secondary badge-pill">+1300</span></a>
                <a href="<?php echo get_home_url(); ?>/category/noticias/" class="list-group-item list-group-item-action justify-content-between bg-dark border-0">Noticias <span class="badge bg-secondary badge-pill">+1300</span></a>
              </div>
            </div>
            <div class="col-md-2">
              <h3><a href="<?php echo get_home_url(); ?>/prensa">prensa</a></h3>
              <div class="list-group">
                <a href="<?php echo get_home_url(); ?>/category/articulo-quincenal/" class="list-group-item list-group-item-action bg-dark border-0">Artículo quincenal</a>
                <a href="/prensa/kit-de-prensa/" class="list-group-item list-group-item-action bg-dark border-0">Kit de prensa</a>
                <a href="<?php echo get_home_url(); ?>/category/boletines" class="list-group-item list-group-item-action bg-dark border-0">Boletines</a>
              </div>
            </div>
            <div class="col-md-2">
              <h3><a href="<?php echo get_home_url(); ?>/voluntarios">voluntarios</a></h3>
            </div>
          </div>
        </div>
        <div class="col-lg-2 text-center">
          <div class="list-group">
            <a href="<?php echo get_home_url(); ?>/politicadedatos/" class="list-group-item list-group-item-action bg-dark border-0"><i class="fa fa-info-circle" aria-hidden="true"></i> Política datos personales</a>
          </div>
          <br>
          <p>Todos los derechos reservados © <?php echo date('Y') ?></p>
          <small><i class="fa fa-code" aria-hidden="true"></i> Desarrollado como un <a href="https://github.com/RobledoPresidente/WebCandidato" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> proyecto de código abierto</a> bajo GNU GENERAL PUBLIC LICENSE</small>
        </div>
      </div>
      <div class="row">
        <div class="col text-center pt-3">Hecho con <i class="fa fa-heart text-tertiary" aria-hidden="true"></i> por voluntarios</div>
      </div>
    </footer>

    <?php wp_footer(); ?> 
  
    <script src="<?php echo get_template_directory_uri(); ?>/lib/alertifyjs/dist/js/alertify.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/tether/dist/js/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/spin.js/spin.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/spin.js/jquery.spin.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/header.js" type="text/javascript"></script>
</body>
</html>
