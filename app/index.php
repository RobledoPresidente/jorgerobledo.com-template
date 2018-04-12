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
  <div class="container over-menu" id="main">
    <!-- <div class="videoWrapper">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/p3_JxKHj2O4?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div> -->
    <div class="section">
      <h2 class="colored m-0"><!--<i class="fa fa-font" aria-hidden="true"></i> -->Primera plana</h2>
      <div class="row highlights justify-content-center align-items-center">
        <div class="col-md-8 col-lg-6">
          <!-- <div id="scratchcard" class="scratchpad mb-2"></div> -->
          <?php $query = new WP_Query (array(
            'category_name' => 'primera-plana-1',
            'orderby' => 'modified',
            'order' => 'DESC',
            'posts_per_page' => 1
          )); ?>
          <?php if ( $query->have_posts() ) : $query->the_post(); ?>
            <?php $custom = get_post_custom(); $image = $custom['imagen'][0]; ?>
            <a href="<?php the_permalink(); ?>" class="card">
              <div class="card-image-header white-title no-height">
                <img class="card-img-top" src="<?php echo !empty($image) ? $image : get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ) ?>" alt="<?php the_title(); ?>">
                <div class="card-content bottom">
                  <h4 class="card-title"><?php the_title(); ?></h4>
                </div>
              </div>
            </a>
          <?php endif; ?>
          <!-- <a href="https://letocaacolombia.jorgerobledo.com/">
            <img src="https://jorgerobledo.com/wp-content/uploads/2017/09/og.png" class="img-fluid">
            <h2 style="
    color: #333;
    text-align: center;
">Cuéntale a todos, haz clic aquí</h2>
          </a> -->
        </div>
        <?php $query = new WP_Query (array(
          'category_name' => 'primera-plana-2',
          'orderby' => 'modified',
          'order' => 'DESC',
          'posts_per_page' => 1
        )); ?>
        <?php if ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-md-4 col-lg-3 no-gutters">
              <a href="<?php the_permalink(); ?>" class="card card-inverse bg-primary">
                <div class="card-body top">
                  <h3 class="card-title"><?php the_title(); ?></h3>
                  <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                  <p class="card-text"><small class="text-muted"><?php robledo_presidente_posted_on(); ?></small></p>
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
            <div class="col-lg-3 no-gutters">
              <a href="<?php the_permalink(); ?>" class="card middle">
                <div class="card-body text-center">
                  <h3 class="card-title text-uppercase"><?php the_title(); ?></h3>
                  <h4 class="card-title"><?php $custom = get_post_custom(); echo $custom['hashtag'][0]; ?></h4>
                  <div class="share" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?> <?php echo $custom['hashtag'][0]; ?>">
                    <ul>
                      <li class="share-facebook" data-network="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                      <li class="share-twitter" data-network="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                      <li class="share-google" data-network="google"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                      <li class="share-email" data-network="email"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                      <li class="share-whatsapp" data-network="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
        <?php endif; ?>
      </div>
      <div class="mt-3"><?php dynamic_sidebar( 'suscribase' ); ?></div>
    </div>
  </div>
  <div class="bg-calm bg-dark" id="bio">
    <div class="container">
      <div class="row">
        <div class="col-md-6 p-4 pt-5">
          <blockquote>
            Los países sólo cambian cuando cambian sus gentes y ellos se deciden a cambiar a sus dirigentes
            <cite>Jorge Enrique Robledo</cite>
            <!--Lo ideal es que esto esté en el encabezado de la página-->
            <a href="<?php echo get_home_url(); ?>/conozcalo" class="btn btn-white-border m-2 mt-3" id="participe">Conózcalo</a>
          </blockquote>
          <div class="row justify-content-center">
            <div class="share" data-url="<?php echo get_home_url(); ?>/conozcalo" data-title="Con millones de voluntarios vamos a ganar la Presidencia: Robledo">
              <ul>
                <li class="share-facebook" data-network="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                <li class="share-twitter" data-network="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                <li class="share-google" data-network="google"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                <li class="share-email" data-network="email"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                <li class="share-whatsapp" data-network="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-calm" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/a/ab/Flag-map_of_Colombia.svg);
    background-position-x: right;
    background-size: contain;
    background-repeat: no-repeat;">
    <div class="container">
      <div class="section">
        <h2><!--<i class="fa fa-users" aria-hidden="true"></i> -->Participe</h2>
        <div class="row">
          <div class="col-sm-6">
            <div class="card bg-calm">
              <div>
                <!-- <h3>El Termómetro</h3> -->
                <!--TODO: Acá debe ir espacio para un widget del plugin de encuestas-->
                <!--div>
                  <div id="qp_all996896" style="width:100%;"><link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><STYLE>#qp_main996896 .qp_btna:hover input {background: rgb(0, 53, 95)!important} #qp_all996896 {max-width:815px; margin:0 auto;}</STYLE><div id="qp_main996896" fp='984f4af0-42' results=0 cmt=0 style="border-radius: 0px;margin: 0px auto;padding: 0.43em 0.79em;background: rgb(255, 255, 255);font-family: 'Open Sans', sans-serif, Arial;color: rgb(0, 0, 0);border: 0px none rgb(219, 217, 217);max-width: 815px;box-sizing: border-box;font-weight: bold"><div style="font-size: 1.2em;background-color: rgb(0, 53, 95);color: rgb(255, 255, 255);font-family: 'Open Sans', sans-serif, Arial"><div style="padding: 0.8em;line-height: 1.3em">¿Cree usted que el fiscal Nestro H. Martínez debe apartarse del caso de Odebrecht?</div></div><form id="qp_form996896" action="//www.poll-maker.com/results996896x984f4af0-42" method="post" target="_blank" style="display: inline;margin: 0px;padding: 0px"><div style="padding: 0px"><input type=hidden name="qp_d996896" value="42793.9512152752-42793.9512140011"><div style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display: block;padding-left: 30px;cursor: inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px;-webkit-appearance:radio;" name="qp_v996896" type="radio" value="1" />Sí</span></div><div style="color: rgb(107, 107, 107);font-family: 'Open Sans', sans-serif, Arial;font-size: 1.1em;line-height: 1.5;padding: 13px 8px 11px;margin: 10px 0px;clear: both" class="qp_a" onClick="var c=this.getElementsByTagName('INPUT')[0]; if((!event.target?event.srcElement:event.target).tagName!='INPUT'){c.checked=(c.type=='radio'?true:!c.checked)};var i=this.parentNode.parentNode.parentNode.getElementsByTagName('INPUT');for(var k=0;k!=i.length;k=k+1){i[k].parentNode.parentNode.setAttribute('sel',i[k].checked?1:0)}"><span style="display: block;padding-left: 30px;cursor: inherit"><input style="float: left;width: 20px;margin-left: -25px;margin-top: 2px;padding: 0px;height: 20px;-webkit-appearance:radio;" name="qp_v996896" type="radio" value="2" />No</span></div></div><div style="padding-left: 0px;clear: both;text-align: left;margin: 1em auto"><a style="box-sizing: border-box;padding-right: 5px;text-decoration: none" class="qp_btna" href="#"><input name="qp_b996896" style="min-width: 7.8em;padding: 0.5em;background-color: rgb(11, 121, 211);font-family: 'Open Sans', sans-serif, Arial;font-size: 16px;color: rgb(255, 255, 255);cursor: pointer;border: 0px;-webkit-appearance: none;border-radius: 0px" type="submit" btype="v" value="Votar" /></a><a style="box-sizing: border-box;padding-left: 5px;text-decoration: none" class="qp_btna" href="#"><input name="qp_b996896" style="min-width: 7.8em;padding: 0.5em;background-color: rgb(11, 121, 211);font-family: 'Open Sans', sans-serif, Arial;font-size: 16px;color: rgb(255, 255, 255);cursor: pointer;border: 0px;-webkit-appearance: none;border-radius: 0px" type="submit" btype="r" value="Resultados" /></a></div><a id="qp_a996896" style="float:right;font-family:Arial;font-size:10px;color:rgb(0,0,0);text-decoration:none" href="http://www.poll-maker.com">Poll Maker</a></form><div style="display:none"><div id="qp_rp996896" style="font-size: 14px;width: 5ex;text-align: right;overflow: hidden;position: absolute;right: 5px;height: 1.5em;line-height: 1.5em"></div><div id="qp_rv996896" style="font-size: 14px;line-height: 1.5em;width: 0%;text-align: right;color: rgb(255, 255, 255);box-sizing: border-box;padding-right: 3px"></div><div id="qp_rb996896" style="font-size: 14px;line-height: 1.5em;color: rgb(255, 255, 255);display: block"></div><div id="qp_rva996896" style="background: rgb(0, 111, 185);border-color: rgb(0, 111, 185)"></div><div id="qp_rvb996896" style="background: rgb(22, 52, 99);border-color: rgb(22, 52, 99)"></div><div id="qp_rvc996896" style="background: rgb(91, 207, 252);border-color: rgb(20, 129, 171)"></div></div></div></div><script src="//scripts.poll-maker.com/3012/scpolls.js" language="javascript"></script>
                </div-->
                <?php dynamic_sidebar( 'el-termometro' ); ?>
              </div>
            </div>
          </div>
          <div class="col-sm-6 px-3 py-2" style="    background: rgba(255,255,255,.5);
    border-radius: 5px;
">
            <!-- <div class="card bg-calm"> -->
              <!--<h3><?php //echo get_theme_mod( 'rp_custom_hashtag' ); ?> ... <span class="badge badge-secondary">¡Nuevo!</span></h3>
              <div class="form-group">
                <textarea id="meme-text" class="form-control" placeholder="Comparta sus pensamientos ahora que Robledo volverá a ser le mejor senador :)"></textarea>
              </div>
              <div>
                <button class="btn btn-secondary" id="share-twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Trinar</button>
                <button class="btn btn-tertiary" id="meme"><i class="fa fa-camera-retro" aria-hidden="true"></i> Haga su meme</button>
              </div>-->
              <h3>Encuentra tu candidato a la Cámara <span class="badge badge-secondary">¡Nuevo!</span></h3>
              <div class="ui-widget"><input id="departamentos" type="text" class="form-control" placeholder="Escribe tu departamento: " /></div>
              <h5 id="candidatos" class="mt-3">Si tu departamento no aparece, te invitamos a marcar sólo el logo del POLO</h5>
<script>
  $(function() {
    $( "#departamentos" ).autocomplete({
      source: availableTags,
select: function( event, ui ) {
$('#candidatos').text(ui.item.candidatos.join(' - '));
}, change: function( event, ui ) {
$('#candidatos').text('Si tu departamento no aparece, te invitamos a marcar sólo el logo del POLO');
}
    });
  } );
</script>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="section" id="volunteers">
          <h2><!--<i class="fa fa-hand-peace-o" aria-hidden="true"></i> -->Voluntarios</h2>
          <div class="link text-center">
            <a href="/voluntarios">
              <img src="<?php echo get_template_directory_uri(); ?>/img/voluntarios.png" class="img-fluid">
              <h3>Sea Voluntario</h3>
            </a>
          </div>
          <p class="px-4 text-center">Llegó la hora de transformar a Colombia. Vincúlese a este gran cambio.</p>
        </div>
      </div>
      <!-- <div class="col-md-4" id="colombia-container">
        <div class="section">
          <h2>Este País Sí Tiene Arreglo</h2>
          <img id="colombia" src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="" usemap="#colombia-regions" class="img-fluid">
          <map name="colombia-regions" id="colombia-regions">
            <area data-key="north" alt="" title="" href="http://jorgerobledo.com/category/estepaissitienearreglo/" shape="poly" coords="3,2,5,76,13,129,84,132,81,170,109,171,132,150,160,179,186,154,185,113,253,104,262,1" />
            <area data-key="center" alt="" title="" href="http://jorgerobledo.com/category/estepaissitienearreglo/" shape="poly" coords="84,135,54,142,35,189,57,289,3,366,68,406,142,319,151,323,148,347,189,357,189,334,268,310,293,313,309,289,376,272,386,201,366,196,319,204,311,184,292,177,261,174,232,179,220,133,208,113,189,149,159,181,105,172,80,172,86,136" />
            <area data-key="south" alt="" title="" href="http://jorgerobledo.com/category/estepaissitienearreglo/" shape="poly" coords="74,410,142,324,146,325,146,355,187,362,193,336,263,316,293,320,313,295,379,276,398,353,359,458,307,526,283,527,299,488,233,493,203,483,127,486" />
          </map>
        </div>
      </div> -->
      <div class="col-md-5">      
        <div class="section">
          <h2><i class="fa fa-calendar-check-o" aria-hidden="true"></i> La agenda de Robledo</h2>
          <?php dynamic_sidebar( 'eventos' ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">    
    <div class="section" id="feed">
      <h2 class="twitter">
        <i class="fa fa-twitter" aria-hidden="true"></i> Twitter
        <script>window.twttr=function(t,e,r){var n,i=t.getElementsByTagName(e)[0],w=window.twttr||{};return t.getElementById(r)?w:(n=t.createElement(e),n.id=r,n.src="https://platform.twitter.com/widgets.js",i.parentNode.insertBefore(n,i),w._e=[],w.ready=function(t){w._e.push(t)},w)}(document,"script","twitter-wjs")</script><a href="https://www.periscope.tv/jerobledo" class="periscope-on-air" data-size="large">@JERobledo</a>
        <div id="periscope"></div>
      </h2>
      <div class="card-columns"></div>
      <div class="text-center">
        <a class="btn btn-primary twitter-more" href="javascriot:none"><i class="fa fa-plus" aria-hidden="true"></i> Cargar más...</a>
        <a class="btn btn-secondary" href="https://twitter.com/JERobledo/"><i class="fa fa-twitter" aria-hidden="true"></i> Ir a Twitter...</a>
      </div>
    </div>
  </div>
   <div class="bg-dark">
    <div class="container">
        <div class="section">
            <h2 class="video"><i class="fa fa-video-camera" aria-hidden="true"></i> Videoteca</h2>   
            <?php
            $query = new WP_Query(array(
                'orderby' => 'modified',
                'order' => 'DESC',
                'posts_per_page' => 4,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => array( 'videos-destacados' ),
                    ),
                    array(
                        'taxonomy' => 'post_format',
                        'field'    => 'slug',
                        'terms'    => array( 'post-format-video' ),
                    ),
                )
            ));
            ?>
            <div class="row bg-dark">
                <?php if ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-lg-8">
                    <?php robledo_presidente_youtube_embed(get_the_content()) ?>
                </div>
                <div class="col-lg-4">
                    <div class="d-none d-lg-block">
                        <div class="g-ytsubscribe" data-channel="ROBLEDOTELEVISION" data-layout="full" data-theme="dark" data-count="default"></div>
                    </div>
                    <div class="d-lg-none pt-3">
                        <div class="g-ytsubscribe" data-channel="ROBLEDOTELEVISION" data-layout="full" data-theme="dark" data-count="default"></div>
                    </div>
                    <div class="highlight-caption text-center">
                        <h5><?php the_title(); ?></h5>
                            <p class="d-none d-lg-block">
                                <?php echo get_the_excerpt(); ?>
                            </p>          
                            <div class="share" data-url="<?php echo get_the_content() ?>" data-title="<?php the_title(); ?>">
                                <ul>
                                    <li class="share-facebook" data-network="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                    <li class="share-twitter" data-network="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                    <li class="share-google" data-network="google"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                                    <li class="share-email" data-network="email"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                                    <li class="share-whatsapp" data-network="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="row pt-4">
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card card-inverse">
                        <?php robledo_presidente_youtube_embed(get_the_content()) ?>
                        <div class="card-text pt-3">
                            <h5><?php the_title(); ?></h5>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <a href="https://www.youtube.com/user/ROBLEDOTELEVISION" class="more"><i class="fa fa-plus" aria-hidden="true"></i> Ver más...</a>
            </div>          
        </div>
    </div>
</div>
  <div class="container">
    <div class="section news">
      <h2 class="colored"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Noticias</h2>
      <?php dynamic_sidebar( 'suscribase' ); ?>
      <div class="row entries">      
        <?php $query = new WP_Query (array(
          'category_name' => 'noticias-home',
          'orderby' => 'modified',
          'order' => 'DESC',
          'posts_per_page' => 6
        )); ?>
        <?php $i = 0; ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-md-4">
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="card-image-header white-title" style="background-image: url(<?php the_post_thumbnail_url('medium') ?>)">
              <div class="card-content bottom">
                <h4 class="card-title"><?php the_title() ?></h4>
              </div>
            </div>
            <div class="card-text"><small class="text-muted"><?php robledo_presidente_posted_on(); ?></small></div>
            <div class="card-text p-3"><?php echo get_the_excerpt(); ?></div>
          </a>
        </div>
        <?php $i++; endwhile; endif;?>
      </div>
      <a href="<?php echo get_home_url(); ?>/bibliote" class="more"><i class="fa fa-plus" aria-hidden="true"></i> Ir a la biblioteca...</a>
    </div>
    <div class="section">
      <h2 class="colored"><i class="fa fa-share-alt" aria-hidden="true"></i> En redes</h2>
        <div class="row">
          <div class="col">
            <div class="fb-page" data-href="https://www.facebook.com/jorge.robledo.castillo" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jorge.robledo.castillo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jorge.robledo.castillo">Jorge Enrique Robledo Castillo</a></blockquote></div>
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
    </div>
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/lib/ImageMapster/dist/jquery.imagemapster.min.js" type="text/javascript"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/lib/wScratchPad/wScratchPad.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/home.js" type="text/javascript"></script>   
    <script src="<?php echo get_template_directory_uri(); ?>/js/twitter.js" type="text/javascript"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/lib/twitter-fetcher/js/twitterFetcher_min.js" type="text/javascript"></script>

    <!-- Inserta esta etiqueta en la sección "head" o justo antes de la etiqueta "body" de cierre. -->
    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'es'}
    </script>
<?php
/*get_sidebar();*/
get_footer();
