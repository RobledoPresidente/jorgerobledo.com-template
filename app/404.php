<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package robledo-presidente
 */

get_header(); ?>
<div class="container" id="main">
	<h1 class="display-5 section" id="page-title-origin"><?php esc_html_e( 'Oops! La página que buscas no puede ser encontrada.', 'robledo-presidente' ); ?></h1>
	<?php dynamic_sidebar( 'suscribase' ); ?>
	<div class="section">

		<div class="page-content">
			<p><?php esc_html_e( 'Intente ingresar a uno de los enlaces o realizar una búsqueda', 'robledo-presidente' ); ?></p>

			<?php
				get_search_form();

				the_widget( 'WP_Widget_Recent_Posts' );

				// Only show the widget if site has multiple categories.
				if ( robledo_presidente_categorized_blog() ) :
			?>

			<div class="widget widget_categories">
				<h2 class="widget-title"><?php esc_html_e( 'Categorías más visitadas', 'robledo-presidente' ); ?></h2>
				<ul>
				<?php
					wp_list_categories( array(
						'orderby'    => 'count',
						'order'      => 'DESC',
						'show_count' => 1,
						'title_li'   => '',
						'number'     => 10,
					) );
				?>
				</ul>
			</div><!-- .widget -->

			<?php
				endif;

				/* translators: %1$s: smiley */
				$archive_content = '<p>' . sprintf( esc_html__( 'Ingresa a una de nuestras categorías', 'robledo-presidente' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

				the_widget( 'WP_Widget_Tag_Cloud' );
			?>

		</div><!-- .page-content -->
	</div>
</div>

<?php
get_footer();
