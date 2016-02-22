<?php $this->layout('layout', ['title' => 'Page Destination']) ?>

<?php $this->start('main_content') ?>

          <div id="bandeau">
            <!-- Insertion d'une image background sur toute la largeur -->
            <img src="<?= $this->assetUrl('img/home-voyage-sur-mesure2-1980x450.jpg') ?>">
          </div>     
          
          <!-- Start Main Container -->
          <div class="container"> 
            <div class="col-md-12" id="colonne1">
                <div class="row" id="textePresentationPays">

                <h2>Spécialiste des voyages au <?= $country['name'] ?> sur-mesure</h2>

                <p><?= $country['description'] ?></p>
                  
                </div>
                </br>


                  <!-- Start Row ThumbnailsVoyage 1 -->
                  <div class="row" id=ThumbnailsVoyageRow1>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage Canada 1</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage2</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage3</h1>
                        </a>                  
                      </div>
                    </div>
                  </div> <!-- ThumbnailsVoyageRow1 -->

                </br>




                  <!-- Start Row ThumbnailsVoyage 1 -->
                  <div class="row" id=ThumbnailsVoyageRow1>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage1</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage2</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage3</h1>
                        </a>                  
                      </div>
                    </div>
                  </div> <!-- ThumbnailsVoyageRow1 -->

                </br>


                  <!-- Start Row ThumbnailsVoyage 1 -->
                  <div class="row" id=ThumbnailsVoyageRow1>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage1</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage2</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <h1>Voyage3</h1>
                        </a>                  
                      </div>
                    </div>
                  </div> <!-- ThumbnailsVoyageRow1 -->

                </br>

                <div class="row" id="texteQuandPartirPays">

                  <h3><a href="http://www.diplomatie.gouv.fr/fr/conseils-aux-voyageurs/conseils-par-pays/<?= $country['name']; ?>/" onclick="window.open(this.href); return false;">Que dit le ministère des affaires étrangères de ce pays ?</a></h3>
                  
                </div>
                      
            </div> <!-- fin colonne 1 -->
          </div> <!-- End container main -->
 
	

<?php $this->stop('main_content') ?>
