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


    <footer class="section bg-inverse py-4 px-3 text-white">
      <div class="row">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-2">
              <h2>conócelo</h2>
            </div>
            <div class="col-md-2">
              <h2>biblioteca</h2>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Videos <span class="badge badge-primary badge-pill">14</span></a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Boletines <span class="badge badge-primary badge-pill">14</span></a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Audios <span class="badge badge-primary badge-pill">14</span></a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Debates <span class="badge badge-primary badge-pill">14</span></a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between bg-inverse border-0">Artículos <span class="badge badge-primary badge-pill">14</span></a>
              </div>
            </div>
            <div class="col-md-2">
              <h2>prensa</h2>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Robledo en medios</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Artículo quincenal</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Kit de prensa</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Boletines</a>
              </div>
            </div>
            <div class="col-md-2">
              <h2>agenda</h2>
            </div>
            <div class="col-md-2">
              <h2>voluntarios</h2>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Registro</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">En tu localidad</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Kit del voluntario</a>
                <a href="#" class="list-group-item list-group-item-action bg-inverse border-0">Apps</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 text-center">
          <p>Todos los derechos reservados © 2017</p>
          <small><i class="fa fa-code" aria-hidden="true"></i> Desarrollado como un <a href="https://github.com/RobledoPresidente/WebCandidato" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> proyecto de código abierto</a> bajo GNU GENERAL PUBLIC LICENSE</small>
        </div>
      </div>
      <div class="row">
        <div class="col text-center pt-3">Hecho con <i class="fa fa-heart text-tertiary" aria-hidden="true"></i> por voluntarios</div>
      </div>
    </footer>
    <script src="wp-content/themes/robledo-presidente/lib/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="wp-content/themes/robledo-presidente/lib/bootstrap/dist/js/boostrap.min.js" type="text/javascript"></script>
    <script src="wp-content/themes/robledo-presidente/lib/ImageMapster/dist/jquery.imagemapster.js" type="text/javascript"></script>
    <script src="wp-content/themes/robledo-presidente/js/home.js" type="text/javascript"></script>    

<?php wp_footer(); ?>

</body>
</html>
