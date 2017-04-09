<?php /*Template Name: Conozcalo*/ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11"-->

    <?php wp_head(); ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/conozcalo.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/codebird.js"></script>
    <script>
        var themeDirectory = '<?php echo get_template_directory_uri(); ?>';

        var cb = new Codebird;        
        cb.setConsumerKey("m3QT1gSSXb5mENHuYClFHUVFE", "wHtgKSFmeBtF1LVQ78DioPLrEfxFmbR5Oxtzi4P0XFqQi0w7gf");
        //cb.setUseProxy(false);
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/tether/dist/js/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46114492-2', 'auto');
    ga('send', 'pageview');

  </script>
</head>
<body <?php body_class(); ?>>
<header>
    <a id="back" href="<?php echo get_home_url(); ?>" class="btn btn-white-border m-2"><i class="fa fa-chevron-left" aria-hidden="true"></i> Volver al sitio</a>
    <div class="content">
        <h1>Jorge Robledo</h1>
        <p class="highlighted">HOMBRE HONESTO Y TRABAJADOR. ARQUITECTO DE PROFESIÓN, DOCENTE POR VOCACIÓN Y POLÍTICO POR CONVICCIÓN.</p>
        <p>Reconocido en los últimos cinco años como "El mejor senador de Colombia".</p>
        <p>En 2014 obtuvo la mayor votación individual al senado</p>
        <p>Aspira a ser elegido Presidente de la República en 2018.</p>
        <button class="btn btn-white-border mt-3"><i class="fa fa-chevron-down" aria-hidden="true"></i> INFOGRAFÍA</button>
    </div>
    <div class="top-colors"></div>
</header>
<div class="bg-inverse">
    <div class="container">
        <div class="row py-3">
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
            <div class="row">

                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/foto-biografia4.jpg"  alt="Cinque Terre" align="middle"> <!---height="363" width="263"-->

                </div>

                <div class="col-md-6">
                    <h1 class="text-center">El Dirigente social</h1>
                    <h3><b>En Manizales, alternó su vocación de profesor de
                            arquitectura con la de dirigente social.</b></h3>
                    <h3>
                        Cofundador y dirigente de Unidad Cafetera y Salvación
                        Agropecuaria, ambas organizaciones de productores
                        agropecuarios que se defendían de las
                        importaciones.
                        En 1995, ayudó a la condonación de las deudas
                        bancarias de más de cien mil familias cafeteras..</h3>
                </div>

                <div class="col-12">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/franjaCol.jpg"  alt="Cinque Terre" width="3000" height="4">

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <h1 class="text-center">El Profesor</h1>
                    <h3>Durante 26 años fue profesor de tiempo completo de
                        la Universidad Nacional de Colombia, Sede Manizales.
                        Institución que le concedió las distinciones Medalla al
                        Mérito, Maestro Universitario y Orden Gerardo Molina.
                        Ha publicado 15 libros sobre historia, arquitectura,
                        vivienda, economía, agricultura, política y Tratados de
                        Libre Comercio.
                        Reconocido columnista de La Patria, donde ha
                        publicado más de 1.300 artículos.
                        En 1997 ganó la XVII Bienal Colombiana de
                        Arquitectura en la categoría Teoría, Historia y Crítica.</h3>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/B8.jpg"  alt="Cinque Terre"> <!---height="363" width="263"-->

                </div>
                <div class="col-12">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/franjaCol.jpg"  alt="Cinque Terre" width="3000" height="4">

                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/foto-biografia8.jpg"  alt="Cinque Terre" align="middle"> <!---height="363" width="263"-->

                </div>

                <div class="col-md-6">
                    <h1 class="text-center">El Senador</h1>
                    <h3>Llegó al Senado en 2002, desde entonces ha
                        realizado más de 150 debates de control político.
                        Con su labor parlamentaria, ha ayudado a
                        comprender y solucionar los temas de la política
                        nacional, convirtiéndose en el congresista que más
                        debates ha realizado en la historia del Congreso.</h3>
                    <h3><b>“Vivo con sueldo de profesor y el resto lo dono a las
                            causas que considero justas”</b></h3>
                </div>

                <div class="col-12">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/franjaCol.jpg"  alt="Cinque Terre" width="3000" height="4">

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <h1 class="text-center">El Candidato</h1>
                    <h3>Candidato a la Presidencia de la República por el Polo.
                        Su proyecto es de convergencia nacional, donde se unan todos los colombianos sin distingos
                        políticos ni sociales, que quieran superar la desigualdad y la grave crisis nacional.</h3>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/foto-biografia9.jpg"  alt="Cinque Terre"> <!---height="363" width="263"-->

                </div>
                <div class="col-12">

                    <img src="<?php echo get_template_directory_uri(); ?>/img/biografia/franjaCol.jpg"  alt="Cinque Terre" width="3000" height="4">

                </div>
            </div>


        </div>

<?php
get_footer();
