<?php /*Template Name: Conozcalo*/ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11"-->

    <?php wp_head(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/conozcalo.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/codebird-js/codebird.js"></script>
    <script>
        var themeDirectory = '<?php echo get_template_directory_uri(); ?>';

        var cb = new Codebird;        
        cb.setConsumerKey("m3QT1gSSXb5mENHuYClFHUVFE", "wHtgKSFmeBtF1LVQ78DioPLrEfxFmbR5Oxtzi4P0XFqQi0w7gf");
        //cb.setUseProxy(false);
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/tether/dist/js/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js" type="text/javascript"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-46114492-1', 'auto');
    ga('send', 'pageview');
    </script>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3X636P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <a id="back" href="<?php echo get_home_url(); ?>" class="btn btn-white-border m-2"><i class="fa fa-chevron-left" aria-hidden="true"></i> Volver al sitio</a>
    <div class="content">
        <h1>Jorge Robledo</h1>
        <p class="highlighted">HOMBRE HONESTO Y TRABAJADOR. ARQUITECTO DE PROFESIÓN, DOCENTE POR VOCACIÓN Y POLÍTICO POR CONVICCIÓN.</p>
        <p>Reconocido en los últimos seis años como "El mejor senador de Colombia".</p>
        <p>En 2014 obtuvo la mayor votación individual al Senado</p>
        <p>Aspira a ser elegido Senador de la República en 2018.</p>
        <button id="infografia-button" class="btn btn-white-border mt-3">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
            <i class="fa fa-chevron-up" aria-hidden="true"></i> 
            INFOGRAFÍA
        </button>
    </div>
    <div class="top-colors"></div>
</header>
<div id="infografia">
    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/infografia.jpg" class="img-fluid">
    <div>
        <div class="share" data-url="<?php echo get_template_directory_uri(); ?>/img/biografia/infografia.jpg" data-title="Infografía | Jorge Robledo">
            <ul>
                <li class="share-facebook" data-network="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                <li class="share-google" data-network="google"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                <li class="share-email" data-network="email"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                <li class="share-download"><a href="<?php echo get_template_directory_uri(); ?>/img/biografia/infografia.jpg" download="inforgrafia-robledo"><i class="fa fa-download" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<script>
$(function () {

    $('#infografia-button').click(function () {

        $(this).toggleClass('shown');

        $('#infografia').slideToggle('slow');
    })
});
</script>
<div id="family" class="bg-dark">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6 px-0">
                <div class="row align-items-center">
                    <div class="col-6 p-0">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/biografia/foto-biografia1.jpg">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid"  src="<?php echo get_template_directory_uri(); ?>/img/biografia/foto-biografia2.jpg">
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-0 content-block">
                <h2>El hombre de familia</h2>
                <p>
                    Felizmente casado hace cuarenta y dos años con su novia de la universidad, Carmen Escobar. Tienen dos hijos, Natalia y Julián. Nunca pierde oportunidad para compartir en familia y jugar con su nieta Alicia.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="his-youth">
    <div class="container">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5 px-5 content">
            <h2>Su Juventud</h2>
            <p>Nació en Ibagué el 11 de febrero de 1950. En 1968 ingresó a la Universidad de los Andes y antes de graduarse de arquitecto decidió dedicar su vida a transformar a Colombia.</p>
            <p>Se vinculó al proyecto de voluntariado pies descalzos, actividad que consistía en ayudar a la gente en las regiones a encontrar el camino para resolver sus problemas.</p>
        </div>
    </div>
</div>
<div id="the-social-leader">
    <div class="row justify-content-end">
        <div class="col-md-5 content">
            <h2>El Dirigente social</h2>
            <h3>En Manizales, alternó su vocación de profesor de arquitectura con la de dirigente social.</h3>
            <p>
                Cofundador y dirigente de <i>Unidad Cafetera y Salvación Agropecuaria</i>, ambas organizaciones de productores agropecuarios que se defendían de las importaciones.
            </p>
            <p>
                En 1995, ayudó a la condonación de las deudas bancarias de más de cien mil familias cafeteras.
            <p>
        </div>
    </div>
</div>
<div class="bg-dark" id="the-professor">
    <div class="container">
        <div class="row">
            <div class="col-md-5 content">
                <h2>El Profesor</h2>
                <p>
                    Durante 26 años fue profesor de tiempo completo de la Universidad Nacional de Colombia, Sede Manizales. Institución que le concedió las distinciones <i>Medalla al Mérito, Maestro Universitario y Orden Gerardo Molina.</i>
                </p>
                <p>Ha publicado 15 libros sobre historia, arquitectura, vivienda, economía, agricultura, política y Tratados de Libre Comercio.</p>
                <p>Reconocido columnista de <i>La Patria</i>, donde ha publicado más de 1.300 artículos.</p>
                <p>En 1997 ganó la XVII Bienal Colombiana de Arquitectura en la categoría Teoría, Historia y Crítica.</p>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/foto-biografia7.jpg" class="img-fluid">
                </div>
                <div class="row">
                    <div class="col-4 p-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/foto-biografia5_.jpg" class="img-fluid">
                    </div>
                    <div class="col-8 p-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/foto-biografia6.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-dark" id="the-senator">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-5 content">
                <h2>El Senador</h2>
                <p>Llegó al Senado en 2002, desde entonces ha realizado más de 150 debates de control político.</p>
                <p>Con su labor parlamentaria, ha ayudado a comprender y solucionar los temas de la política nacional, convirtiéndose en el congresista que más debates ha realizado en la historia del Congreso.</p>
                <p><i>“Vivo con sueldo de profesor y el resto lo dono a las causas que considero justas”</i></p>
            </div>
        </div>
    </div>
</div>
<div id="the-candidate">
    <div class="container">
    </div>
    <div class="container content bg-dark text-center">
        <h2>Coalición Colombia y Sergio Fajardo</h2>
        <h3 class="text-uppercase">CANDIDATO AL SENADO POR EL POLO #1</h3>
        <p>Robledo hace lo que cree mejor para el país. Desde el Polo y junto al Partido Verde y Compromiso Ciudadano, puso todo su esfuerzo para construir la Coalición Colombia. Declinó su candidatura presidencial en favor de la de Sergio Fajardo, la única que puede derrotar a los mismos con las mismas. Vuelve al Senado a seguir apoyando a la gente y a buscar la unión de los colombianos y las colombianas porque Este País Sí Tiene Arreglo.</p>
    </div>
</div>

<?php
get_footer();
