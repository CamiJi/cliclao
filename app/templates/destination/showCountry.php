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

                <h2>SPÉCIALISTE DU VOYAGE AU <?= $country['name'] ?> SUR-MESURE</h2>

                <p><?= $country['description'] ?></p>
                  
                </div>
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

                  <h2>QUELLES SONT LES MEILLEURES PÉRIODES POUR PARTIR AU CANADA ?</h2>

                  <h3>DE JUIN À AOÛT PARTEZ POUR L’OUEST CANADIEN</h3>


                  <p>Les températures dans l'Ouest canadien peuvent atteindre jusqu'à + 35°c. Préparez votre voyage été Canada dans la région d'Alberta. En famille, entre amis et même en couple, profitez de la période idéale pour vos circuits en camping-car. Promenez-vous aux bords des lacs, rivières et découvrez ses attractions et ses cinq parcs nationaux. Pendant cette saison, nombreux sont les Canadiens à louer un chalet (ou "cottage") pour le week-end. Séjournez au gré de vos envies, près des Montagnes Rocheuses ou des Grandes Plaines. Convivialité, rencontres et découvertes sont assurées.</p>

                  <h3>DE SEPTEMBRE À NOVEMBRE DÉCOUVREZ L’EST CANADIEN</h3>


                  <p>Ne ratez surtout pas l'été indien. En direction de l'Est canadien, faites un voyage au Québec à cette période la région se pare de couleurs magnifiques. L'arrivée de l'automne annonce généralement une baisse de température (entre + 5°c et + 15°c) mais le spectacle n'en restera pas moins époustouflant. Les couleurs flamboyantes des feuilles des arbres et les journées particulièrement ensoleillées sont propices aux randonnées, au survol des lacs en hydravion et au safari photo. Offrez-vous un moment unique auprès de la population chaleureuse québécoise. Vous ne cesserez d'être ébahi.</p>

                  <h3>DE JANVIER À MARS CAP SUR LA RÉGION DU GRAND NORD</h3>


                  <p>Saisissez l'opportunité de visiter la région du Yukon, territoire du Grand Nord. Attendez-vous au grand frisson.

                  Au mois de février et au mois mars, à la tombée de la nuit, admirez les spectaculaires aurores boréales et allez à la rencontre de la population locale.

                  Le meilleur voyage hiver Canada qu'on puisse imaginer est accessible. En chiens de traîneau ou en motoneige, partagez un moment inoubliable au cœur de la toundra et approchez la flore et la faune sauvages canadiennes (ours polaires, caribous, bisons et hiboux). Un rêve qui devient réalité !

                  Le territoire canadien dispose d’une grande variété de paysages et d’activités à vous proposer. Certains sites et activités sont cependant à privilégier en fonction de la saison. Que vous partiez en famille ou entre amis nos spécialistes Canada élaboreront un voyage sur mesure adapté à vos besoins.</p>


                  <h3><a href="http://www.diplomatie.gouv.fr/fr/dossiers-pays/<?= $country['name'] ?>/" onclick="window.open(this.href); return false;">Que dit le ministère des affaires étrangères de ce pays</a></h3>
                  
                </div>
                      
            </div> <!-- fin colonne 1 -->
          </div> <!-- End container main -->
 
	

<?php $this->stop('main_content') ?>
