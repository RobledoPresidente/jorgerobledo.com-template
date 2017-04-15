<?php /*Template Name: Prensa*/

get_header(); ?>

<div class="container" id="main">
    <h1 class="display-5" id="page-title-origin">Prensa</h1>
    <?php dynamic_sidebar( 'suscribase' ); ?>
    <div class="section">
      <div class="text-center"><a class="btn btn-secondary" href="<?php echo get_home_url(); ?>/prensa/kit-de-prensa/ "><i class="fa fa-microphone" aria-hidden="true"></i> Vea el kit de prensa</a></div>
            <div class="row px-3 pt-3">
              <div class="col pb-3">        
                <div class="card bg-calm"> 
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/RBJ7c3H4-_M" allowfullscreen=""></iframe>
                  </div>
                  <div class="card-text p-3">En cinco respuestas explico el escandaloso caso de corrupción de Odebrecht y por qué el fiscal Martínez sí debe declararse impedido para investigar el caso.</div>
                </div>
              </div>
              <div class="col pb-3">
                <div class="card bg-calm">    
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/rIBeDVrPiEw" allowfullscreen=""></iframe>
                  </div>
                  <div class="card-text p-3">En CNN en Español, 9 de febrero de 2017</div>
                </div>
              </div>
              <div class="col pb-3">
                <div class="card bg-calm">            
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/j6l0kDtYz44" allowfullscreen=""></iframe>
                  </div>
                  <div class="card-text p-3">#TrinoDeFrente de la Revista Semana, le respondo a algunos tuiteros sobre corrupción, política y mi vida</div>
                </div>
              </div>
              <div class="col pb-3">
                <div class="card bg-calm">            
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/dsJMOJbZDUs" allowfullscreen=""></iframe>
                  </div>
                  <div class="card-text p-3">#EnBLUjeans de Blu radio sobre mi nuevo libro y la política nacional</div>
                </div>
              </div>
              <div class="col pb-3">
                <div class="card bg-calm">            
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/KGgjnv1XywA" allowfullscreen=""></iframe>
                  </div>
                  <div class="card-text p-3">Rueda de prensa sobre los impedimentos del Fiscal Martínez para actuar en el caso Odebrehct, 14 de febrero de 2017</div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="card bg-calm"> 
                  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/308106844&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                  <p>Los más de 120.000 pescadores artesanales de Colombia están sufriendo. Y no sufren por castigo divino sino por las malas políticas del gobierno nacional que fomentan inmensos daños ambientales y sociales.</p>
                </div>
            </div>
            <div class="col">
                <div class="card bg-calm"> 
                  <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/295707507&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                  <p>El senador Jorge Enrique Robledo presenta su ultimo libro “La corrupción en el poder y el poder de la corrupción en Colombia”</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<?php
get_footer();
