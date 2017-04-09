<?php /*Template Name: Crea tu meme*/

get_header(); ?>
	    
<div class="container text-center" id="main">
	<div class="section">
		<canvas id="memecanvas">
			Sorry, canvas not supported
		</canvas>
		<div>
			Tu mensaje: <textarea type="text" rows="2" id="meme-text"></textarea>
		</div>
		<div class="row opciones mt-3">
			<div class="col p-0"><img src="<?php echo get_template_directory_uri(); ?>/memes/img/positivo1.jpg" data-id="<?php echo get_template_directory_uri(); ?>/memes/img/positivo1.jpg" class="img-fluid selected" width="200"></div>
			<div class="col p-0"><img src="<?php echo get_template_directory_uri(); ?>/memes/img/positivo2.jpg" data-id="<?php echo get_template_directory_uri(); ?>/memes/img/positivo2.jpg" class="img-fluid" width="200"></div>
			<div class="col p-0"><img src="<?php echo get_template_directory_uri(); ?>/memes/img/positivo3.jpg" data-id="<?php echo get_template_directory_uri(); ?>/memes/img/positivo3.jpg" class="img-fluid" width="200"></div>
			<div class="col p-0"><img src="<?php echo get_template_directory_uri(); ?>/memes/img/positivo4.jpg" data-id="<?php echo get_template_directory_uri(); ?>/memes/img/positivo4.jpg" class="img-fluid" width="200"></div>
			<div class="col p-0"><img src="<?php echo get_template_directory_uri(); ?>/memes/img/positivo5.jpg" data-id="<?php echo get_template_directory_uri(); ?>/memes/img/positivo5.jpg" class="img-fluid" width="200"></div>
		</div>
		<div class="text-center mt-1">
			<a id="download" class="btn btn-tertiary"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a>
			<button class="btn btn-secondary" id="share-twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Trinar</button>
		</div>
	</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/memes/js/index.js"></script>
<?php
get_footer();
