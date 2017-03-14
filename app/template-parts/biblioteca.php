<?php
/*
Template Name: Robledo Biblioteca
*/
get_header(); ?>

<h1>Biblioteca de Jorge Enrique Robledo</h1>
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

<?php
get_footer();
