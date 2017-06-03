<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package robledo-presidente
 */
get_header();
?>

<div class="container" id="main">
    <h1 class="display-5" id="page-title-origin"><?php printf(__('Resultados de búsqueda para: %s', 'robledo-presidente'), '<span>' . get_search_query() . '</span>'); ?></h1>
    <div class="section">
        <?php if (!have_posts()) : ?>            
        <h3><?php _e('No se encontraron resultados', 'robledo-presidente'); ?></h3>
        <?php get_template_part('template-parts/content', 'none'); ?>
        <?php else: ?>
        <div class="row entries">
                <?php
                /* Start the Loop */
                while (have_posts()) : the_post();
                    get_template_part( 'template-parts/content', 'listing' );
                endwhile; ?>
        </div>
        <?php the_posts_navigation(); ?>
        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
