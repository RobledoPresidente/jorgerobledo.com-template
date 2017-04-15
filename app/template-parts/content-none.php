<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package robledo-presidente
 */

?>

<?php
if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( wp_kses( __( 'Preparado para publicar tu primer post? <a href="%1$s">Comienza aquí</a>.', 'robledo-presidente' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif ( is_search() ) : ?>

	<p><?php esc_html_e( 'Intente hacer una búqueda con diferentes palabras', 'robledo-presidente' ); ?></p>
<?php else : ?>

	<p><?php esc_html_e( 'Parece que no pudimos encontrar lo que estaba buscandos. Tal vez sirva buscar.', 'robledo-presidente' ); ?></p>
<?php endif; ?>

<form class="form-inline">
	<label class="sr-only" for="inlineFormInput">Texto a buscar</label>
	<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Encuentre..." name="s">

	<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
</form>