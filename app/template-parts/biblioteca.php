<?php
/*
  Template Name: Robledo Biblioteca
 */
get_header();
?>

<div class="container" id="main">
    <h1 class="display-4" id="page-title-origin">Biblioteca de Jorge Enrique Robledo</h1>
    <div class="bg-inverse">
        <div class="container">
            <div class="section">
                <h2 class="video"><i class="fa fa-video-camera" aria-hidden="true"></i> Videoteca</h2>   
                <div class="row bg-inverse ">
                    <div class="col-lg-8">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/qu5VBQkXY3k" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hidden-md-down">
                            <div class="g-ytsubscribe" data-channel="ROBLEDOTELEVISION" data-layout="full" data-theme="dark" data-count="default"></div>
                        </div>
                        <div class="hidden-lg-up pt-3">
                            <div class="g-ytsubscribe" data-channel="ROBLEDOTELEVISION" data-layout="full" data-theme="dark" data-count="default"></div>
                        </div>
                        <div class="highlight-caption text-center">
                            <h4>Robledo y Peláez - Homenaje al senador Robledo, 5 veces elegido mejor senador de Colombia</h5>
                                <p class="hidden-md-down">
                                    El "doctor" Peláez logra un divertida entrevista, donde el senador y precandidato presidencial hablan sobre
                                    su trayectoria, su familia y los deseos de ser Presidente de Colombia.
                                </p>          
                                <div class="share" data-url="http://www.youtube.com/watch?v=qu5VBQkXY3k" data-title="Robledo y Peláez - Homenaje al senador Robledo, 5 veces elegido mejor senador de Colombia">
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
                <div class="row pt-4">
                    <div class="col-md-4">
                        <div class="card card-inverse">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/FqAkM4V5Xsc" allowfullscreen=""></iframe>
                            </div>
                            <div class="card-text pt-3">
                                <h5>¿Qué esperar de la investigación por el escándalo de Odebrecht?</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-inverse"> 
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/kCmO8P_egL8" allowfullscreen=""></iframe>
                            </div>
                            <div class="card-text pt-3">
                                <h5>¿Conviene al país la indignación contra el Establecimiento?</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-inverse">          
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/QqfTauOVatE" allowfullscreen=""></iframe>
                            </div>
                            <div class="card-text pt-3">
                                <h5>Salvemos la pesca artesanal: Audiencia Pública del senador Jorge Robledo</h5>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <div class="section news">
        <h2><span>noticias</span></h2>
        <!--TODO: Acá se deben mostrar las 6 noticias (categoría) más recientes, debe ir además, antes de las noticias, espacio para el widget de suscribirse-->
        <div class="row">      
            <?php
            $query = new WP_Query(array(
                'category_name' => 'noticias-home',
                'orderby' => 'modified',
                'order' => 'DESC',
                'posts_per_page' => 6
            ));
            ?>
            <?php $i = 0; ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>" class="card <?php echo ($i == 0 ? 'bg-primary' : ($i == 2 ? 'card-inverse bg-secondary' : ($i == 4 ? 'card-inverse bg-tertiary' : 'bg-calm'))) ?>">
                            <div class="card-image-header" style="background-image: url(<?php the_post_thumbnail_url('medium') ?>)">
                                <div class="card-img-overlay">
                                    <div class="card-content bottom">
                                        <h4 class="card-title"><?php the_title() ?></h4>
                                        <p class="card-text"><small class="text-muted"><?php echo 'Hace ' . human_time_diff(get_the_time('U'), current_time('timestamp')); ?></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text p-3"><?php echo get_the_excerpt(); ?></div>
                        </a>
                    </div>
                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
        </div>
    </div>

    <div class="section audios">
        <h2><span>audios</span></h2>
        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/151219963&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
    </div>
</div>

<?php
get_footer();
