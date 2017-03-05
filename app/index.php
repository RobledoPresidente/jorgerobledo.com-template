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
      <div class="row mb-5 especial">
        <div class="col text-center">
          <div id="scratchcard" class="scratchpad"></div>
        </div>
      </div>
    </div>
    <div class="section">
      <h2><span>primera plana</span></h2>
      <div class="row highlights">
        <?php $query = new WP_Query (array(
          'category_name' => 'primera-plana-1',
          'orderby' => 'modified',
          'order' => 'DESC',
          'posts_per_page' => 1
        )); ?>
        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-md-5">
            <a href="<?php the_permalink(); ?>" class="card card-inverse" style="background-image: url(<?php the_post_thumbnail_url( 'medium_large' ) ?>)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title"><?php the_title(); ?></h4>
                  <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                  <p class="card-text"><small class="text-muted"><?php echo 'Hace ' . human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></small></p>
                </div>
              </div>
            </a>
          </div>
        <?php endif; ?>
        <?php $query = new WP_Query (array(
          'category_name' => 'primera-plana-2',
          'orderby' => 'modified',
          'order' => 'DESC',
          'posts_per_page' => 1
        )); ?>
        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-sm-6 col-md-4 no-gutters">
              <a href="<?php the_permalink(); ?>" class="card card-inverse card-primary">
                <div class="card-content middle text-center">
                  <h4 class="card-title text-uppercase"><?php the_title(); ?></h4>
                  <!--TODO: acá debe ir el custom field Hashtag-->
                  <h5 class="card-title"><?php $custom = get_post_custom(); echo $custom['hashtag'][0]; ?></h5>
                </div>
              </a>
            </div>
        <?php endif; ?>
        <?php $query = new WP_Query (array(
          'category_name' => 'primera-plana-3',
          'orderby' => 'modified',
          'order' => 'DESC',
          'posts_per_page' => 1
        )); ?>
        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-sm-6 col-md-3">
              <a href="<?php the_permalink(); ?>" class="card card-inverse" style="background-image: url(<?php the_post_thumbnail_url( 'medium_large' ) ?>)">
                <div class="card-img-overlay">
                  <h4 class="card-title"><?php the_title(); ?></h4>
                  <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                  <p class="card-text"><small class="text-muted"><?php echo 'Hace ' . human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></small></p>
                </div>
              </a>
            </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="section">
      <h2><span>participe</span></h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div>
              <h3>El Termómetro</h3>
              <!--TODO: Acá debe ir espacio para un widget del plugin de encuestas-->
              <div>
                <div id="qp_all996896" style="width:100%;"><link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><STYLE>#qp_main996896 .qp_btna:hover input {background: rgb(0, 53, 95)!important} #qp_all996896 {max-width:815px; margin:0 auto;}</STYLE><div id="qp_main996896" fp='984f4af0-42' results=0 cmt=0 style="border-radius: 0px;margin: 0px auto;padding: 0.43em 0.79em;background: rgb(255, 255, 255);font-family: 'Open Sans', sans-serif, Arial;color: rgb(0, 0, 0);border: 0px none rgb(219, 217, 217);max-width: 815px;box-sizing: border-box;font-weight: bold"><div style="font-size: 1.2em;background-color: rgb(0, 53, 95);color: rgb(255, 255, 255);font-family: 'Open Sans', sans-serif, Arial"><div style="padding: 0.8em;line-height: 1.3em">¿Cree usted que el fiscal Nestro H. Martínez debe apartarse del caso de Odebrecht?</div></div><form id="qp_form996896" action="//www.poll-maker.com/results996896x984f4af0-42" method="post" target="_blank" style="display: inline;margin: 0px;padding: 0px"><div style="padding: 0px"><input type=hidden name="qp_d996896" value="42793.9512152752-42793.9512140011"><div style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display: block;padding-left: 30px;cursor: inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px;-webkit-appearance:radio;" name="qp_v996896" type="radio" value="1" />Sí</span></div><div style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display: block;padding-left: 30px;cursor: inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px;-webkit-appearance:radio;" name="qp_v996896" type="radio" value="2" />No</span></div></div><div style="padding-left: 0px;clear: both;text-align: left;margin: 1em auto"><a style="box-sizing: border-box;padding-right: 5px;text-decoration: none" class="qp_btna" href="#"><input name="qp_b996896" style="min-width: 7.8em;padding: 0.5em;background-color: rgb(11, 121, 211);font-family: 'Open Sans', sans-serif, Arial;font-size: 16px;color: rgb(255, 255, 255);cursor: pointer;border: 0px;-webkit-appearance: none;border-radius: 0px" type="submit" btype="v" value="Votar" /></a><a style="box-sizing: border-box;padding-left: 5px;text-decoration: none" class="qp_btna" href="#"><input name="qp_b996896" style="min-width: 7.8em;padding: 0.5em;background-color: rgb(11, 121, 211);font-family: 'Open Sans', sans-serif, Arial;font-size: 16px;color: rgb(255, 255, 255);cursor: pointer;border: 0px;-webkit-appearance: none;border-radius: 0px" type="submit" btype="r" value="Resultados" /></a></div><a id="qp_a996896" style="float:right;font-family:Arial;font-size:10px;color:rgb(0,0,0);text-decoration:none" href="http://www.poll-maker.com">Poll Maker</a></form><div style="display:none"><div id="qp_rp996896" style="font-size: 14px;width: 5ex;text-align: right;overflow: hidden;position: absolute;right: 5px;height: 1.5em;line-height: 1.5em"></div><div id="qp_rv996896" style="font-size: 14px;line-height: 1.5em;width: 0%;text-align: right;color: rgb(255, 255, 255);box-sizing: border-box;padding-right: 3px"></div><div id="qp_rb996896" style="font-size: 14px;line-height: 1.5em;color: rgb(255, 255, 255);display: block"></div><div id="qp_rva996896" style="background: rgb(0, 111, 185);border-color: rgb(0, 111, 185)"></div><div id="qp_rvb996896" style="background: rgb(22, 52, 99);border-color: rgb(22, 52, 99)"></div><div id="qp_rvc996896" style="background: rgb(91, 207, 252);border-color: rgb(20, 129, 171)"></div></div></div></div><script src="//scripts.poll-maker.com/3012/scpolls.js" language="javascript"></script>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 p-2">
          <div class="card bg-calm">
            <div class="card-block">
              <h3><span id="hashtag"></span>... <span class="badge badge-pill bg-secondary">¡Nuevo!</span></h3>
              <div class="card-block">
                <div class="form-group">
                  <textarea id="meme-text" class="form-control" rows="2" placeholder="Comparta sus pensamientos ahora que Robledo es el PRIMER candidato presidencial :)"></textarea>
                </div>
                <button class="btn btn-secondary" id="share-twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Trinar</button>
                <button class="btn btn-tertiary" id="meme"><i class="fa fa-camera-retro" aria-hidden="true"></i> Haga su meme</button>
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
          <h4 class="px-4">Llegó la hora de transformar a Colombia. Vincúlese a este gran cambio.</h4>
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
    <div class="section" id="feed">
      <h2><span><i class="fa fa-twitter" aria-hidden="true"></i> twitter a la mano</span></h2>
      <div class="text-center p-3">
        Transmisiones en vivo en Periscope:
        <script>window.twttr=function(t,e,r){var n,i=t.getElementsByTagName(e)[0],w=window.twttr||{};return t.getElementById(r)?w:(n=t.createElement(e),n.id=r,n.src="https://platform.twitter.com/widgets.js",i.parentNode.insertBefore(n,i),w._e=[],w.ready=function(t){w._e.push(t)},w)}(document,"script","twitter-wjs")</script><a href="https://www.periscope.tv/jerobledo" class="periscope-on-air" data-size="large">@JERobledo</a>
        <div id="periscope"></div>
      </div>
      <div class="card-columns"></div>
      <div class="text-center">
        <a class="btn btn-primary more" href="javascriot:none"><i class="fa fa-plus" aria-hidden="true"></i> Cargar más...</a>
        <a class="btn btn-secondary" href="https://twitter.com/JERobledo/"><i class="fa fa-twitter" aria-hidden="true"></i> Ir a Twitter...</a>
      </div>
    </div>
    <div class="section video">
      <!--TODO: esto debe mostrar 4 videos destacados y ordenados con descripción, plugin?-->
      <h2><span>videoteca</span></h2>      
      <div class="row px-3 bg-inverse ">
        <div class="col-md-8 p-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/qu5VBQkXY3k" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-md-4 pt-4 pb-4 pr-4 highlight">
          <div class="g-ytsubscribe" data-channel="ROBLEDOTELEVISION" data-layout="full" data-theme="dark" data-count="default"></div>
          <h4>Robledo y Peláez, Homenaje</h5>
          <p>Esta amena charla se dio en el marco del homenaje que amigos y familiares le hicieron a Robledo por ser elegido por 5ta ocasión consecutiva como el mejor senador de Colombia por el 'Panel de Opinión' elaborado por Cifras & Conceptos. El "doctor" Peláez logra un divertida entrevista, donde el senador y precandidato presidencial habla sobre su trayectoria, su familia y los deseos de ser Presidente de Colombia.</p>
        </div>
      </div>
      <div class="row px-3 pt-3">
        <div class="col pb-3">        
          <div class="card bg-calm"> 
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/FqAkM4V5Xsc" allowfullscreen=""></iframe>
            </div>
            <div class="card-text p-3">Aquí hay una batalla enorme entre el tapen tapen agenciada por poderes políticos y económicos enormes y quienes queremos que la verdad avance en nuestro país. Los colombianos tenemos que cerrar filas para detener esta vagabunderia y salvar el país</div>
          </div>
        </div>
        <div class="col pb-3">
          <div class="card bg-calm">    
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/kCmO8P_egL8" allowfullscreen=""></iframe>
            </div>
            <div class="card-text p-3">Debate en la universidad Javeriana con el profesor Malcom Deas, donde planteo la importancia que tiene la la indignación de los colombianos como motivación para cambiar el país. La gente tiene la capacidad y el derecho de cambiar y cambiar a sus dirigentes.</div>
          </div>
        </div>
        <div class="col pb-3">
          <div class="card bg-calm">            
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/QqfTauOVatE" allowfullscreen=""></iframe>
            </div>
            <div class="card-text p-3">El 16 de febrero se realizó en las instalaciones de la Comisión Quinta del Senado la audiencia pública Salvemos la pesca artesanal por iniciativa de Robledo</div>
          </div>
        </div>
      </div>          
    </div>
    <div class="section news">
      <h2><span>noticias</span></h2>
      <!--TODO: Acá se deben mostrar las 6 noticias (categoría) más recientes, debe ir además, antes de las noticias, espacio para el widget de suscribirse-->
      <div class="row">      
        <?php $query = new WP_Query (array(
          'category_name' => 'noticias-home',
          'orderby' => 'modified',
          'order' => 'DESC',
          'posts_per_page' => 6
        )); ?>
        <?php $i = 0; ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-md-4">
          <a href="<?php the_permalink(); ?>" class="card <?php echo ($i == 0 ? 'bg-primary' : ($i == 2 ? 'card-inverse bg-secondary' : ($i == 4 ? 'card-inverse bg-tertiary' : 'bg-calm'))) ?>">
            <div class="card-image-header" style="background-image: url(<?php the_post_thumbnail_url( 'medium' ) ?>)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title"><?php the_title() ?></h4>
                  <p class="card-text"><small class="text-muted"><?php echo 'Hace ' . human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></small></p>
                </div>
              </div>
            </div>
            <div class="card-text p-3"><?php echo get_the_excerpt(); ?></div>
          </a>
        </div>
        <?php $i++; endwhile; endif;?>
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
    <script src="wp-content/themes/robledo-presidente/js/jquery.min.js" type="text/javascript"></script>
    <script src="wp-content/themes/robledo-presidente/js/tether.min.js" type="text/javascript"></script>
    <script src="wp-content/themes/robledo-presidente/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="wp-content/themes/robledo-presidente/js/jquery.imagemapster.min.js" type="text/javascript"></script>
    <script src="wp-content/themes/robledo-presidente/js/wScratchPad.js" type="text/javascript"></script>
    <script type="text/javascript" src="wp-content/themes/robledo-presidente/js/codebird.js"></script>
    <script src="wp-content/themes/robledo-presidente/js/spin.min.js"></script>
    <script src="wp-content/themes/robledo-presidente/js/jquery.spin.js"></script>
    <script src="wp-content/themes/robledo-presidente/js/header.js" type="text/javascript"></script>  
    <script src="wp-content/themes/robledo-presidente/js/home.js" type="text/javascript"></script>   
    <script src="wp-content/themes/robledo-presidente/js/twitter.js" type="text/javascript"></script> 
    <script src="wp-content/themes/robledo-presidente/js/twitterFetcher_min.js" type="text/javascript"></script>
    <!-- Inserta esta etiqueta en la sección "head" o justo antes de la etiqueta "body" de cierre. -->
    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'es'}
    </script>
<?php
/*get_sidebar();*/
get_footer();
