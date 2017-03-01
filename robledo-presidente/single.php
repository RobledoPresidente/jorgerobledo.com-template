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
	            <div class="media mb-3">
	                <!--img class="d-flex mr-3 img-thumbnail" src="img/posts/Rio.jpg" width="250" alt="Generic placeholder image"-->
	                <div class="media-body">
	                    <h2 class="mt-0 display-3"><?php the_title(); ?></h2>
	                    <!--blockquote class="blockquote">
	                        <p class="mb-0">Sobre cómo el gobierno maltrata a los pescadores artesanales</p>
	                    </blockquote-->
	                </div>
	            </div>
	            <?php the_content(); ?>
	        </div>
	    </div>

	<?php endwhile; // End of the loop. 
	?>


<?php
/* get_sidebar(); */
get_footer();
