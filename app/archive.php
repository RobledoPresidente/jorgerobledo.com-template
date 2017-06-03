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
                    /*
                    * Include the Post-Format-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', 'listing' );
                endwhile;

                the_posts_navigation();

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
                $query = new WP_Query(array(
                    'orderby' => 'modified',
                    'order' => 'DESC',
                    'category_name' => 'politica+videos'
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
get_footer();
