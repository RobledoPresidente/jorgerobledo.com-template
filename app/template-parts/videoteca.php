<?php
/*
  Template Name: Robledo Biblioteca
 */
get_header();
?>
<div class="container" id="main">
    <h1 class="display-5" id="page-title-origin">Biblioteca de Jorge Enrique Robledo</h1>
    <div class="mb-3"><?php dynamic_sidebar( 'suscribase' ); ?></div>
</div>

<div class="bg-inverse">
    <div class="container">
        <div class="section">
            <h2 class="video"><i class="fa fa-video-camera" aria-hidden="true"></i> Videoteca</h2>   
            <?php
            $query = new WP_Query(array(
                'orderby' => 'modified',
                'order' => 'DESC',
                'posts_per_page' => 4,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field'    => 'slug',
                        'terms'    => 'post-format-video'
                    ),
                )
            ));
            ?>
            <div class="row bg-inverse">
                <?php if ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-lg-8">
                    <?php robledo_presidente_youtube_embed(get_the_content()) ?>
                </div>
                <div class="col-lg-4">
                    <div class="hidden-md-down">
                        <div class="g-ytsubscribe" data-channel="ROBLEDOTELEVISION" data-layout="full" data-theme="dark" data-count="default"></div>
                    </div>
                    <div class="hidden-lg-up pt-3">
                        <div class="g-ytsubscribe" data-channel="ROBLEDOTELEVISION" data-layout="full" data-theme="dark" data-count="default"></div>
                    </div>
                    <div class="highlight-caption text-center">
                        <h5><?php the_title(); ?></h5>
                            <p class="hidden-md-down">
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
                <a href="<?php echo get_home_url(); ?>/videoteca" class="more"><i class="fa fa-plus" aria-hidden="true"></i> Ver más...</a>
            </div>          
        </div>
    </div>
</div>
<div class="container">
    <div class="section" id="topics">
        <h2><span>Temas</span></h2>
        <div class="text-center">
            <div class="row justify-content-between">
                <div class="col-4">
                    <a href="<?php echo get_home_url(); ?>/category/temas/economia">Economía</a>
                </div>
                <div class="col-4">
                    <a href="<?php echo get_home_url(); ?>/category/temas/internacional">Internacional</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <a href="<?php echo get_home_url(); ?>/category/temas/medio-ambiente">Medio ambiente</a>
                </div>
                <div class="col-4">
                    <a href="<?php echo get_home_url(); ?>/category/temas/politica">Política</a>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4">
                    <a href="<?php echo get_home_url(); ?>/category/temas/regiones">Regiones</a>
                </div>
                <div class="col-4">
                    <a href="<?php echo get_home_url(); ?>/category/temas/social">Social</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <h2><span>Boletines de prensa</span></h2>
        <div class="row entries">      
            <?php
            $query = new WP_Query(array(
                'category_name' => 'boletines',
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
                                        <p class="card-text"><small class="text-muted"><?php robledo_presidente_posted_on(); ?></small></p>
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
        <a href="<?php echo get_home_url(); ?>/category/boletines" class="more"><i class="fa fa-plus" aria-hidden="true"></i> Ver más...</a>
    </div>
    <div class="section">
        <h2><span>Audios</span></h2>
        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/151219963&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
    </div>
    <div class="section">
        <h2><span>Debates</span></h2>
        <div class="row entries">      
            <?php
            $query = new WP_Query(array(
                'category_name' => 'debates',
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
                                        <p class="card-text"><small class="text-muted"><?php robledo_presidente_posted_on(); ?></small></p>
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
        <a href="<?php echo get_home_url(); ?>/category/debates" class="more"><i class="fa fa-plus" aria-hidden="true"></i> Ver más...</a>
    </div>
</div>
<div class="bg-inverse">
    <div class="container">
        <div class="section">
            <h2><span>Artículo quicenal</span></h2>
            <div class="row">      
                <?php
                $query = new WP_Query(array(
                    'category_name' => 'articulo-quincenal',
                    'orderby' => 'modified',
                    'order' => 'DESC',
                    'posts_per_page' => 4
                ));
                ?>
                <?php if ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-lg-7">
                    <img src="<?php the_post_thumbnail_url('large') ?>" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <h5><?php the_title(); ?></h5>
                    <p class="hidden-md-down">
                        <?php echo get_the_excerpt(); ?>
                    </p>          
                    <div class="share" data-url="<?php echo the_permalink() ?>" data-title="<?php the_title(); ?>">
                        <ul>
                            <li class="share-facebook" data-network="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                            <li class="share-twitter" data-network="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                            <li class="share-google" data-network="google"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                            <li class="share-email" data-network="email"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                            <li class="share-whatsapp" data-network="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="section">        
        <div class="row entries">      
            <?php $i = 0; ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>" class="card">
                            <div class="card-image-header" style="background-image: url(<?php the_post_thumbnail_url('medium') ?>)">
                                <div class="card-img-overlay">
                                    <div class="card-content bottom white-title">
                                        <h4 class="card-title"><?php the_title() ?></h4>
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
        <a href="<?php echo get_home_url(); ?>/category/articulos" class="more"><i class="fa fa-plus" aria-hidden="true"></i> Ver más...</a>
    </div>
</div>

<!-- Inserta esta etiqueta en la sección "head" o justo antes de la etiqueta "body" de cierre. -->
    <script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'es'}
    </script>

<?php
get_footer();
