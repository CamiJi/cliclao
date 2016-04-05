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

                <?php if (!empty($country)) : ?>
                  
                <h2>Spécialiste des voyages au <?= $country['name'] ?> sur-mesure</h2>

                <p><?= $country['description'] ?></p>
                  
                <?php endif; ?>


                <?php if (!empty($errors['countryNotFind'])): ?>

                    <h2 class='bg-danger'>Votre recherche : "<?= $errors['countryNotFind'] ?> "n'a retourné aucun résultat. <a href="<?= $this->url('home'); ?>"></br>Cliquez ici pour retourner à la page d'acceuil.</a></h2>
                <?php endif; ?>
              

                </div>
                </br>


                  <!-- Start Row ThumbnailsVoyage 1 -->
                  <div class="row" id=ThumbnailsVoyageRow1>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 1]); ?>" >
                          <img src="<?= $this->assetUrl('img/banff4X4.jpg') ?>" alt="">
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 2]); ?>" >
                          <img src="<?= $this->assetUrl('img/goat4X4.jpg') ?>" alt="">
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 3]); ?>" >
                          <img src="<?= $this->assetUrl('img/katwalk4X4.jpg') ?>" alt="">
                        </a>                  
                      </div>
                    </div>
                  </div> <!-- ThumbnailsVoyageRow1 -->

                </br>




                  <!-- Start Row ThumbnailsVoyage 1 -->
                  <div class="row" id=ThumbnailsVoyageRow1>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 4]); ?>" >
                          <img src="<?= $this->assetUrl('img/moraine4X4.jpg') ?>" alt="">
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 5]); ?>" >
                          <img src="<?= $this->assetUrl('img/niagara4X4.jpg') ?>" alt="">
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 6]); ?>" >
                          <img src="<?= $this->assetUrl('img/peyto4X4.jpeg') ?>" alt="">
                        </a>                  
                      </div>
                    </div>
                  </div> <!-- ThumbnailsVoyageRow1 -->

                </br>


                  <!-- Start Row ThumbnailsVoyage 1 -->
                  <div class="row" id=ThumbnailsVoyageRow1>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 7]); ?>" >
                          <img src="<?= $this->assetUrl('img/husky4X4.jpg') ?>" alt="">
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 8]); ?>" >
                          <img src="<?= $this->assetUrl('img/whale.jpg') ?>" alt="">
                        </a>                  
                      </div>
                    </div>
                    <div class = "col-sm-6 col-md-4">
                      <div class="thumbnail tile tile-medium tile-teal">
                        <a href="<?= $this->url('itineraire' , ['id'=> 9]); ?>" >
                          <img src="<?= $this->assetUrl('img/quebec4X4.jpg') ?>" alt="">
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
