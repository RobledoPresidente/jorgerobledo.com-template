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
    <div class="container mt-4 pt-4">
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
                <li class="share-email" data-network="email"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                <li class="share-whatsapp" data-network="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4 pt-4">    
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
    <div class="container mt-4 pt-4">
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
  <div class="container mt-4 pt-4">
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
          <div class="col-md-4">
            <div class="fb-page" data-href="https://www.facebook.com/jorge.robledo.castillo" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jorge.robledo.castillo" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jorge.robledo.castillo">Jorge Enrique Robledo Castillo</a></blockquote></div>
          </div>
          <div class="col-md-4 text-center">
            <!-- SnapWidget -->
            <script src="https://snapwidget.com/js/snapwidget.js"></script>
            <iframe src="https://snapwidget.com/embed/670035" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
            <div style="font:10px/14px 'Roboto','Helvetica Neue',Arial,Helvetica,sans-serif;font-weight:400;width:100%;text-align:right"><a href="https://snapwidget.com" style="color:#777;text-decoration:none;">SnapWidget · Instagram Widget</a></div>
          </div>
          <div class="col-md-4">
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
