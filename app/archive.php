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

        <?php if (have_posts()) : ?>
        <div class="row entries">
            <?php
            /* Start the Loop */
            while (have_posts()) : the_post();
                ?>
                <div class="col-md-4">
                    <a href="<?php the_permalink(); ?>" class="card">
                        <div class="card-image-header" style="background-image: url(<?php the_post_thumbnail_url('medium') ?>)">
                            <div class="card-img-overlay">
                                <div class="card-content bottom">
                                    <h4 class="card-title"><?php the_title() ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-text"><small class="text-muted"><?php robledo_presidente_posted_on(); ?></small></div>
                        <div class="card-text"><?php echo get_the_excerpt(); ?></div>
                    </a>
                </div>
                <!-- /*
                    * Include the Post-Format-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                    */
                    /*get_template_part( 'template-parts/content', get_post_format() );*/-->

                <?php
            endwhile;

            the_posts_navigation();

            else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>
        </div>
    </div>
</div>

<?php
/* get_sidebar(); */
get_footer();
