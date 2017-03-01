<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package robledo-presidente
 */

get_header(); ?>

	<!--div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"-->

		<!--?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"--><!--?php single_post_title(); ?></h1>
				</header-->

			<!--?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main--><!-- #main -->
	<!--/div--><!-- #primary -->
  <div class="container-fluid" id="main">
    <div class="section mb-5 text-center" id="infografia">
      <img src="wp-content/themes/robledo-presidente/img/infografia.png" class="img-fluid">
    </div>
    <div class="section">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-8 text-center">
          <img class="img-fluid" src="wp-content/themes/robledo-presidente/img/banner1-billetes.jpg">
        </div>
      </div>
    </div>
    <div class="section">
      <h2><span>primera plana</span></h2>
      <div class="row highlights">
        <div class="col-md-5">
          <a href="http://jorgerobledo.com/el-arbitro-esta-comprado/" class="card card-inverse" style="background-image: url(wp-content/themes/robledo-presidente/img/posts/odebrecht.png)">
            <div class="card-img-overlay">
              <div class="card-content bottom">
                <h4 class="card-title">El árbitro está comprado</h4>
                <p class="card-text">Fiscalía vs. Odebrecht, un partido arreglado en contra de los colombianos</p>
                <p class="card-text"><small class="text-muted">Hace 2 días</small></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-4 no-gutters">
          <div class="card card-inverse card-primary">
            <div class="card-content middle text-center">
              <h4 class="card-title text-uppercase">Estamos mamados de tanta corrupción</h4>
              <h5 class="card-title">#EstoyMamadoDe</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <a href="post.html" class="card card-inverse" style="background-image: url(wp-content/themes/robledo-presidente/img/posts/Rio.jpg)">
            <div class="card-img-overlay">
              <h4 class="card-title">Multiplican los pobres pero no los peces</h4>
              <p class="card-text">Sobre cómo el gobierno maltrata a los pescadores artesanales</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </a>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-block">
              <h3>El Termómetro</h3>
              <div class="card-block">
                <p>¿Cree usted que el fiscal Nestro H. Martínez debe apartarse del caso de Odebrecht?</p>
                <div class="pl-3 text-uppercase font-weight-bold font-secondary">
                  <p>Sí</p>
                  <p>No</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 p-2">
          <div class="card card-calm">
            <div class="card-block">
              <h3>#EstoyMamadoDe... <span class="badge badge-pill bg-secondary">¡Nuevo!</span></h3>
              <div class="card-block">
                <div class="form-group">
                  <textarea class="form-control" rows="2"></textarea>
                </div>
                <button class="btn btn-secondary"><i class="fa fa-twitter" aria-hidden="true"></i> Trinar</button>
                <button class="btn btn-tertiary"><i class="fa fa-camera-retro" aria-hidden="true"></i> Haga su meme</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section" id="volunteers">
      <h2><span>voluntarios</span></h2>
      <div class="row">
        <div class="col-md-9 text-center">
          <div class="link">
            <a href="/voluntarios">
              <img src="wp-content/themes/robledo-presidente/img/voluntarios.png" class="img-fluid">
              <h3>Sea Voluntario</h3>
            </a>
          </div>
          <p class="px-4">Ellos tienen el dinero, pero nosotros tenemos la gente. Si todos quienes visitan este sitio se unen a nuestro proyecto, sin duda vamos a enrutar de nuevo a Colombia.</p>
        </div>
        <div class="col-md-3" id="colombia-container">
          <img id="colombia" src="wp-content/themes/robledo-presidente/img/map.png" alt="" usemap="#colombia-regions" class="img-fluid">
          <map name="colombia-regions" id="colombia-regions">
            <area data-key="north" alt="" title="" href="http://jorgerobledo.com/category/estepaissitienearreglo/" shape="poly" coords="3,2,5,76,13,129,84,132,81,170,109,171,132,150,160,179,186,154,185,113,253,104,262,1" />
            <area data-key="center" alt="" title="" href="http://jorgerobledo.com/category/estepaissitienearreglo/" shape="poly" coords="84,135,54,142,35,189,57,289,3,366,68,406,142,319,151,323,148,347,189,357,189,334,268,310,293,313,309,289,376,272,386,201,366,196,319,204,311,184,292,177,261,174,232,179,220,133,208,113,189,149,159,181,105,172,80,172,86,136" />
            <area data-key="south" alt="" title="" href="http://jorgerobledo.com/category/estepaissitienearreglo/" shape="poly" coords="74,410,142,324,146,325,146,355,187,362,193,336,263,316,293,320,313,295,379,276,398,353,359,458,307,526,283,527,299,488,233,493,203,483,127,486" />
          </map>
        </div>
      </div>
    </div>
    <div class="section">
      <h2><span>al minuto</span></h2>
      <img src="wp-content/themes/robledo-presidente/img/tw.png">
    </div>
    <div class="section">
      <h2><span>videoteca</span></h2>      
      <div class="row px-3">
        <div class="col-md-12 p-3 bg-inverse">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/qu5VBQkXY3k" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
      <div class="row px-3">
        <img src="wp-content/themes/robledo-presidente/img/yt.png">
      </div>          
    </div>
    <div class="section news">
      <h2><span>noticias</span></h2>
      <div class="row">
        <div class="col-md-4">
          <a href="http://jorgerobledo.com/la-prueba-reina/" class="card bg-primary">
            <div class="card-image-header" style="background-image: url(wp-content/themes/robledo-presidente/img/posts/la-prueba-reina.jpg)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title">La prueba reina</h4>
                  <p class="card-text"><small class="text-muted">Hace 2 días</small></p>
                </div>
              </div>
            </div>
            <div class="card-text p-3">Martínez Neira está impedido para ser Fiscal en Odebrecht</div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="http://jorgerobledo.com/brutos-por-siempre/" class="card">
            <div class="card-image-header" style="background-image: url(wp-content/themes/robledo-presidente/img/posts/brutos-por-siempre.jpg)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title">Brutos por siempre</h4>
                  <p class="card-text"><small class="text-muted">Hace 2 días</small></p>
                </div>
              </div>
            </div>
            <div class="card-text p-3">Santos le quita recursos a la ciencia</div>
          </a>
        </div>
        <div class="col-md-4">
          <div class="card card-inverse bg-secondary">
            <div class="card-image-header" style="background-image: url(wp-content/themes/robledo-presidente/img/posts/impuestos.png)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title">¿Que los impuestos los paguen los pobres?</h4>
                  <p class="card-text"><small class="text-muted">Hace 2 días</small></p>
                </div>
              </div>
            </div>
            <div class="card-text p-3">Sobre una Reforma Tributaria que despluma a los colombianos.</div>
          </div>
        </div>
        <div class="col-md-4">
          <a href="http://jorgerobledo.com/no-estamos-solos/" class="card">
            <div class="card-image-header" style="background-image: url(wp-content/themes/robledo-presidente/img/posts/no-estamos-solos.jpg)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title">¿No estamos solos?</h4>
                  <p class="card-text"><small class="text-muted">Hace 2 días</small></p>
                </div>
              </div>
            </div>
            <div class="card-text p-3">¿Existirá vida en otros planetas?</div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="http://jorgerobledo.com/bogota-peor-para-todos/" class="card card-inverse bg-tertiary">
            <div class="card-image-header" style="background-image: url(wp-content/themes/robledo-presidente/img/posts/bogota-peor-para-todos.png)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title">Bogotá peor para todos</h4>
                  <p class="card-text"><small class="text-muted">Hace 2 días</small></p>
                </div>
              </div>
            </div>
            <div class="card-text p-3">Peñalosa, el Alcalde técnico</div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="http://jorgerobledo.com/la-peor-cifra-de-la-decada/" class="card">
            <div class="card-image-header" style="background-image: url(wp-content/themes/robledo-presidente/img/posts/lapeorcifradedecada.jpg)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title">¡La peor cifra de la década!</h4>
                  <p class="card-text"><small class="text-muted">Hace 2 días</small></p>
                </div>
              </div>
            </div>
            <div class="card-text p-3">Una economía al servicio de los bancos</div>
          </a>
        </div>
      </div>
      <div class="section">
        <h2><span>en redes</span></h2>
        <div class="row">
          <div class="col">
            <div class="fb-page" data-href="https://www.facebook.com/jorge.robledo.castillo" data-height="450" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jorge.robledo.castillo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jorge.robledo.castillo">Jorge Enrique Robledo Castillo</a></blockquote></div>
          </div>
          <div class="col text-center">
            <!-- Inserta esta etiqueta en la sección "head" o justo antes de la etiqueta "body" de cierre. -->
            <script src="https://apis.google.com/js/platform.js" async defer>
              {lang: 'es'}
            </script>

            <!-- Inserta esta etiqueta donde quieras que aparezca widget. -->
            <div class="g-person" data-href="//plus.google.com/u/0/100711622690849831280" data-rel="author"></div>
          </div>
          <div class="col">
            <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/151219963&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
          </div>
        </div>
      </div>
    </div>
<?php
/*get_sidebar();*/
get_footer();
