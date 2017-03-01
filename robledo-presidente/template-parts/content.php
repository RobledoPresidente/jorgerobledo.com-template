<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package robledo-presidente
 */

?>

<!--article id="post--><!--?php the_ID(); ?>" --><!--?php post_class(); ?>>
	<header class="entry-header"-->
		<!--?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta"-->
			<!--?php robledo_presidente_posted_on(); ?>
		</div--><!-- .entry-meta -->
		<!--?php
		endif; ?>
	</header--><!-- .entry-header -->

	<!--div class="entry-content"-->
		<!--?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'robledo-presidente' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'robledo-presidente' ),
				'after'  => '</div>',
			) );
		?>
	</div--><!-- .entry-content -->

	<!--footer class="entry-footer"-->
		<!--?php robledo_presidente_entry_footer(); ?>
	</footer--><!-- .entry-footer -->
<!--/article--><!-- #post-## -->

    <div class="container-fluid" id="main">
        <div class="section">
            <h2><span>entrada</span></h2>
            <div class="media mb-3">
                <img class="d-flex mr-3 img-thumbnail" src="img/posts/Rio.jpg" width="250" alt="Generic placeholder image">
                <div class="media-body">
                    <h2 class="mt-0 display-3">Multiplican los pobres pero no los peces</h2>
                    <blockquote class="blockquote">
                        <p class="mb-0">Sobre cómo el gobierno maltrata a los pescadores artesanales</p>
                    </blockquote>
                </div>
            </div>
            <img src="img/posts/pescadores/pescadores.jpg" width="400" class="img-fluid mr-3 mb-3" style="float: right">
            <p>“El pescador…no tiene fortuna, solo su atarraya”, canta Toto. En el Caribe y el Pacífico, en San Andrés y Providencia, en el Magdalena, el Cauca, el Orinoco, el Amazonas, el San Jorge, etc., en todos los rincones del país miles de colombianos madrugan a las faenas pesqueras. Su canoa y su atarraya, sus “armas” para buscar la comida. En el mercado venden los pescados para llevar el sustento a su familia. Grandes esfuerzos, grandes sacrificios, pero el gobierno los ha abandonado a su suerte. Promueve la ruina de la pesca artesanal y así se pierde nuestra cultura y una insustituible fuente de trabajo, progreso y sostenimiento de la seguridad alimentaria de los colombianos. Salvemos la pesca artesanal.</p>
            <p>Ver más: <a href="http://aureliosuarezm.co/sobre-como-se-traiciona-a-la-patria-con-la-politica-pesquera-video-de-8-minutos/">Sobre cómo se traiciona a la patria con la política pesquera. Aurelio Suárez</a></p>
        </div>
    </div>