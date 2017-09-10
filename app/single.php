<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package robledo-presidente
 */

get_header(); ?>
	    
<div class="container" id="main">
	<div class="section">
		
	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_format() ); ?>

		<div class="entry-navigation">
			<div><?php previous_post_link('%link', '<i class="fa fa-chevron-left" aria-hidden="true"></i> %title'); ?></div>
			<div><?php next_post_link('%link', '%title <i class="fa fa-chevron-right" aria-hidden="true"></i>'); ?></div>
		</div>
		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		/*if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;*/
	endwhile; // End of the loop. 
	?>
	</div>
</div>

<?php
//get_sidebar();
get_footer();
