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

<div class="container" id="main">
    <h1 class="display-5" id="page-title-origin"><?php the_archive_title(); ?></h1>
    <?php dynamic_sidebar( 'suscribase' ); ?>
	<div class="section">
        <?php 
        global $query_string;
        $idVideos = get_category_by_slug('videos');
        query_posts( $query_string . '&category__not_in=' . $idVideos->term_id );
        ?>
        <?php if (have_posts()) : ?>
            <?php the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="card">
                <div class="row">
                    <div class="col-lg-8 text-center">
                        <img src="<?php the_post_thumbnail_url('large') ?>" class="img-fluid">
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4 class="card-title"><?php the_title() ?></h4>
                        <div class="card-text"><?php echo get_the_excerpt(); ?></div>
                        <div class="card-text"><small class="text-muted"><?php robledo_presidente_posted_on(); ?></small></div> 
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
                </div>
            </a>
            <hr>
            <div class="row entries">
            <?php
                /* Start the Loop */
                while (have_posts()) : the_post();
                    /*
                    * Include the Post-Format-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', 'listing' );
                endwhile;

            else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>
        </div>
    </div>
</div>
<div class="bg-inverse">
    <div class="container">
        <div class="section">
            <h2>Videos</h2>
            <?php
                $cate = get_queried_object();
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
                $query = new WP_Query(array(
                    'orderby' => 'modified',
                    'order' => 'DESC',
                    'category_name' => $cate->slug . '+videos',
                    'posts_per_page' => 5,
                    'paged' => $paged
                ));
                ?>
            <?php if ($query->have_posts()) : ?>
            <div class="row entries">
                <?php while ($query->have_posts()) : $query->the_post();?>
                <div class="col-md-4">
                    <div class="card card-inverse">
                        <?php robledo_presidente_youtube_embed(get_the_content()) ?>
                        <div class="card-text pt-3">
                            <h5><?php the_title(); ?></h5>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
/* get_sidebar(); */
the_posts_navigation();
get_footer();
