<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package robledo-presidente
 */
get_header();
?>

<div class="container-fluid">
    <div id="primary" class="content-area">
        

            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <?php
                    the_archive_title('<h2 class="colored"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Noticias</h2>', '</h2>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    ?>
                </header><!-- .page-header -->

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
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="card-image-header" style="background-image: url(<?php the_post_thumbnail_url( 'medium' ) ?>)">
              <div class="card-img-overlay">
                <div class="card-content bottom">
                  <h4 class="card-title"><?php the_title() ?></h4>
                </div>
              </div>
            </div>
            <div class="card-text"><small class="text-muted"><?php echo 'Hace ' . human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></small></div>
            <div class="card-text"><?php echo get_the_excerpt(); ?></div>
          </a>
        </div>
        <?php $i++; endwhile; endif;?>
      </div>

        <!-- #main -->
    </div><!-- #primary -->
</div><!-- .container-fluid -->

<?php
/* get_sidebar(); */
get_footer();
