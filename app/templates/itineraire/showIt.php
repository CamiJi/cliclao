<?php $this->layout('layout', ['title' => $it[0]['voyage_name'] ]) ?>
 
<?php $this->start('main_content') ?>
  
      <div class="container" id="mainContainer">
        <div class="row">

          <div class="col-xs-12 col-md-7" id="colMainItineraire">
            <div id="divImgItineraire">
              <img id="imgItineraire" src="<?= $this->assetUrl($it[0]['img_voyage']) ?>">
            </div> <!-- end divImgItineraire -->
            <div id="divNomItineraire">
              <h3><?= $it[0]['name'] ?></h3>
            </div> <!-- End divNomItineraire  -->
            <div id="divDescriptionItineraire">
              <p id="descriptionItineraire"><?= $it[0]['description_voyage'] ?></p>
            </div> <!-- End #divDescriptionItineraire -->          
          </div> <!-- End colMainItineraire -->


          <div class="col-xs-6 col-md-4" id="colCaractItineraires">
            <div id="divCaracteristiquesItineraire">
              <div id="divContainerCaractItineraire" class="container">
                <div id="divCaracteristiquesSql" class="row">
                  <div id="divPrixItineraire" class="col-md-2">
                    <h4>Prix:</h4>
                    <p id="prixItineraire"><?= $it[0]['budget'] ?> € / Personne</p>
                  </div> <!-- End#divPrixItineraire -->

                  <div id="divDifficulteItineraire" class="col-md-1">
                    <h4 id="difficulteItineraire">Difficulté: </h4>

                      <!-- J'ajoute ici via une boucle for le nombre de difficulté du voyage -->
                      <?php for ($i=0; $i < $it[0]['difficulte']; $i++) :?>
                        <i class="fa fa-hand-scissors-o"></i>
                      <?php endfor ?>   

                  </div> <!-- End#divDifficulteItineraire -->



                </div> <!-- End of #divContainerCaractItineraire --> 
              </div> <!-- End of #divCaracteristiquesSql -->

              <div id="divGroupButtons">
                <div id="divButtonDevis">
                  <button type="button" class="btn btn-success btn-block">Demandez votre devis</button>
                </div> <!-- End #divButtonDevis -->

                <div id="divButtonFav">
                  <button type="button" class="btn btn-default btn-block"><i class="fa fa-heart-o"></i> Ajoutez aux favoris</button>
                </div> <!-- End of #divButtonFav -->

              </div> <!-- End of #divGroupButtons -->

              <div id="divApiGMItineraire">
<!--                 <img src="" alt="" id="apiGMItineraire">  -->            
              </div> <!-- end #divApiGMItineraire -->
             
            </div> <!-- End #divCaracteristiquesItineraire -->         
          </div> <!-- End colCaractItineraires -->
        </div> <!-- end of row Itineraire -->






        <div class="row" id="rowDayByDay">
           <div class="col-xs-12 col-md-7" id="colDayByDay">
              <div id="descriptifTitre">
                <h3>Descriptif du Voyage</h3>
              </div>


<!-- Démarage de la boucle qui affiche le jour par jour. 1. Affichage du day_name 2.Affichage du bodyText -->

                  <?php if(!empty($days)): ?>
                    <?php foreach ($days as $keyVoyages => $voyage): ?>

                            <div  class="dayByDay" id="day<?php echo $voyage['ordering']; ?>">
                              <p>Jour <?php echo $voyage['ordering']; ?></p>
                              <h4><?php echo $voyage['name']; ?></h4>
                              <p><?php echo $voyage['bodyText']; ?></p>                  
                            </div> <!-- rowDayByDay -->

                    <?php endforeach; ?>

                  <?php else: ?>
                    <div class="alert alert-danger" role="alert">
                    <p>Ce voyage ne contient pas de descriptif de jour par jour</p>
                    </div>
                  <?php endif; ?>



<!-- Fin de la boucle affichant le jour par jour -->


           </div> <!-- End of #colDayByDay -->
        </div> <!-- End of #rowDayByDay -->
      </div> <!-- end MainContainer -->
	

<?php $this->stop('main_content') ?>
