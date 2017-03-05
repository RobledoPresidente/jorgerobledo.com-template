<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package robledo-presidente
 */

get_header(); ?>

	<!--div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"-->

		<!--?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main--><!-- #main -->
	<!--/div--><!-- #primary -->
		
	<?php
	while ( have_posts() ) : the_post(); ?>
	    
	    <div class="container-fluid" id="main">
	        <div class="section">
	            <h2><span>entrada</span></h2>
				<header class="row mb-3">
					<div class="col-md-6 hidden-lg-up">
						<img class="img-fluid img-thumbnail" src="<?php the_post_thumbnail_url( 'medium_large' ) ?>" alt="Generic placeholder image">
					</div>
					<div class="col-md-6 text-right hidden-md-down">
						<img class="img-fluid img-thumbnail" src="<?php the_post_thumbnail_url( 'medium_large' ) ?>" alt="Generic placeholder image">
					</div>
					<div class="col-md-6">
						<h2 class="mt-0 display-3"><?php the_title(); ?></h2>
						<blockquote class="blockquote">
							<p class="mb-0"><?php echo get_the_excerpt(); ?></p>
						</blockquote>
						<p class="text-muted"><?php echo 'Hace ' . human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></p>
						<?php if ( 'post' == get_post_type() && current_user_can('edit_others_posts') ) : ?>
						<div class="entry-meta">
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</div>
				</div>
	            <?php the_content(); ?>
	        </header>
	    </div>

	<?php endwhile; // End of the loop. 
	?>


<?php
/* get_sidebar(); */
get_footer();
