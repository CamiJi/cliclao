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

                <h2>SPÉCIALISTE DU VOYAGE AU CANADA SUR-MESURE</h2>

                <p>Découvrez nos suggestions de voyages au Canada entièrement personnalisables à votre rythme et selon vos envies :

                UNE EXPÉRIENCE AUTHENTIQUE, UN PARTAGE, UNE RENCONTRE AVEC LE CANADA

                Marco Vasco c’est avant tout une philosophie du voyage axée sur une expérience unique de la destination.

                Laissez-vous tenter par un voyage original et inoubliable dans l’ouest en séjour, en autotour ou bien par le train dans l'est.</p>
                  
                </div>
                </br>


                  <!-- Start Row ThumbnailsVoyage 1 -->
                  <div class="row" id=ThumbnailsVoyageRow1>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="" >
                          <h1>Voyage Canada 1</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="#" >
                          <h1>Voyage2</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="#" >
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
                        <a href="#" >
                          <h1>Voyage1</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="#" >
                          <h1>Voyage2</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="#" >
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
                        <a href="#" >
                          <h1>Voyage1</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="#" >
                          <h1>Voyage2</h1>
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="#" >
                          <h1>Voyage3</h1>
                        </a>                  
                      </div>
                    </div>
                  </div> <!-- ThumbnailsVoyageRow1 -->

                </br>

                <div class="row" id="texteQuandPartirPays">

                  <h3><a href="http://www.diplomatie.gouv.fr/fr/dossiers-pays/<?= $country['name'] ?>/" onclick="window.open(this.href); return false;">Que dit le ministère des affaires étrangères de ce pays?</a></h3>
                  
                </div>
                      
            </div> <!-- fin colonne 1 -->
          </div> <!-- End container main -->
 
	

<?php $this->stop('main_content') ?>
