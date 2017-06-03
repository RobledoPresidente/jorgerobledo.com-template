<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package robledo-presidente
 */

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