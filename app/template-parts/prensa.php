<?php /*Template Name: Prensa*/

get_header(); ?>

<div class="container" id="main">
    <h1 class="display-5" id="page-title-origin">Prensa</h1>
    <?php dynamic_sidebar( 'suscribase' ); ?>
    <div class="section">
      <div class="text-center"><a class="btn btn-secondary" href="<?php echo get_home_url(); ?>/prensa/kit-de-prensa/ "><i class="fa fa-microphone" aria-hidden="true"></i> Vea el kit de prensa</a></div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;*/

			endwhile; // End of the loop.
			?>
    </div>
</div>

<?php
get_footer();
