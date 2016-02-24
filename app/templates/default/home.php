<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


  <!-- Start Row Video -->
            <div class="row" id="rowSearch">
              <!-- TODO intgrer un background video -->
              

              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3" id="slogan">
                   <h1>Créer votre voyage sur mesure avec une agence locale</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class = "input-group">
               
                      <span class = "input-group-btn">
                        <button class = "btn btn-default" type = "button">
                          Go!
                        </button>
                      </span>
            
                      <input type = "text" class = "form-control">
               
                    </div><!-- /input-group -->
                  </div> <!-- End of .col-md-6 col-md-offset-3 -->
                </div>

              </div>
              <!-- glyphicon glyphicon-search pour l'input -->



            </div> <!-- End rowVideo -->





          <!-- Start Main Container -->
          <div class="container"> 





            <!-- Start Row Thumbnails 1 -->
            <div class="row" id=ThumbnailsRow1>
              <div class = "col-sm-6 col-md-4">
                <div class="thumbnail tile tile-medium tile-teal">
                  <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                    <h1>Tuile1</h1>
                  </a>                  
                </div>
              </div>
              <div class = "col-sm-6 col-md-4">
                <div class="thumbnail tile tile-medium tile-teal">
                  <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                    <h1>Tuile2</h1>
                  </a>                  
                </div>
              </div>
              <div class = "col-sm-6 col-md-4">
                <div class="thumbnail tile tile-medium tile-teal">
                  <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                    <h1>Tuile2</h1>
                  </a>                  
                </div>
              </div>
            </div> <!-- ThumbnailsRow1 -->


            <div id="apiGm" class="row">
              <label for="googleMaps">Nos voyageurs à travers le monde:</label>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63297476.45919606!2d33.91707391944581!3d14.463352354156584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1455806321372" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen id="googleMaps"></iframe>
              
            </div>


            <!-- Start Row Thumbnails 2 -->
            <div class="row" id=ThumbnailsRow2>
              <div class = "col-sm-6 col-md-4">
                <div class="thumbnail tile tile-medium tile-teal">
                  <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                    <h1>Tuile4</h1>
                  </a>                  
                </div>
              </div>
              <div class = "col-sm-6 col-md-4">
                <div class="thumbnail tile tile-medium tile-teal">
                  <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                    <h1>Tuile5</h1>
                  </a>                  
                </div>
              </div>
              <div class = "col-sm-6 col-md-4">
                <div class="thumbnail tile tile-medium tile-teal">
                  <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                    <h1>Tuile6</h1>
                  </a>                  
                </div>
              </div>

            </div> <!-- End ThumbnailsRow2 -->
          </div> <!-- End container main -->
	

<?php $this->stop('main_content') ?>
