<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

      <div class="container" id="mainContainer">
        <div class="row">



          <div class="col-xs-12 col-md-7" id="colMainItineraire">
            <div id="divImgItineraire">
              <img id="imgItineraire" src="<?= $this->assetUrl('img/vc.jpg' ) ?>">
            </div> <!-- end divImgItineraire -->
            <div id="divNomItineraire">
              <h3>Canada : Québec en famille</h3>
            </div> <!-- End divNomItineraire  -->
            <div id="divDescriptionItineraire">
              <p id="descriptionItineraire">Au Québec, il y a tant de choses à faire et à voir que c’est une destination idéale à découvrir en famille. Les enfants vont adorer dormir dans un tipi et apprendre l’histoire des amérindiens, observer les animaux sauvages dans leur habitat naturel : castor, orignal, ours noir, en découvrir d’autres au fabuleux zoo sauvage de St Félicien, aller faire du kayak ou de l’accrobranche avec des vues panoramiques sur le fjord du Saguenay, nourrir les animaux de la ferme dans la région de Tadoussac pour enfin partir sur l’eau pour observer les géants des mers : les baleines à bosse et autres mammifères marins. Vos enfants vous en reparleront longtemps de ce voyage ! Les hébergements ont été sélectionnés en fonction des préférences des enfants.</p>
            </div> <!-- End #divDescriptionItineraire -->          
          </div> <!-- End colMainItineraire -->











          <div class="col-xs-6 col-md-4" id="colCaractItineraires">
            <div id="divCaracteristiquesItineraire">
              <div id="divContainerCaractItineraire" class="container">
                <div id="divCaracteristiquesSql" class="row">
                  <div id="divPrixItineraire" class="col-md-1">
                    <h4>Prix:</h4>
                    <p id="prixItineraire">à partir de <b>659 € </b>par personne</p>
                  </div> <!-- End#divPrixItineraire -->

                  <div id="divDifficulteItineraire" class="col-md-1">
                    <h4 id="difficulteItineraire">Niveau de Difficulté : </h4>
                    <i class="fa fa-hand-scissors-o"></i>
                    <i class="fa fa-hand-scissors-o"></i>
                    <i class="fa fa-hand-scissors-o"></i>                  
                     <!-- TODO: on repetera ce signe le nombre de niveau de difficulté -->  
                  </div> <!-- End#divDifficulteItineraire -->

                  <div id="divThemesItineraire" class="col-md-2">
                    <h4>Le voyage correspond aux thèmes suivants:</h4>
                    <i class="fa fa-anchor"></i>
                    <i class="fa fa-car"></i>
                    <i class="fa fa-ship"></i>
                    <i class="fa fa-bicycle"></i>            
                  </div> <!-- End divThemesItineraire -->

                </div> <!-- End of #divContainerCaractItineraire --> 
              </div> <!-- End of #divCaracteristiquesSql -->

              <div id="divGroupButtons">
                <div id="divButtonDevis">
                  <button type="button" class="btn btn-success btn-block">Demandez votre devis</button>
                </div> <!-- End #divButtonDevis -->

                <div id="divButtonFav">
                  <button type="button" class="btn btn-default btn-block">Ajoutez aux favoris</button>
                </div> <!-- End of #divButtonFav -->

              </div> <!-- End of #divGroupButtons -->

              <div id="divApiGMItineraire">
                <img src="<?= $this->assetUrl('img/mapCanada.jpg') ?>" alt="" id="apiGMItineraire">             
              </div> <!-- end #divApiGMItineraire -->
             
            </div> <!-- End #divCaracteristiquesItineraire -->         
          </div> <!-- End colCaractItineraires -->
        </div> <!-- end of row Itineraire -->






        <div class="row" id="rowDayByDay">
           <div class="col-xs-12 col-md-7" id="colDayByDay">
              <h3>Descriptif du Voyage</h3>


              <div id="day1" class="dayByday" >
               <h5>Jour 1&2</h5>
               <h4>VOL INTERNATIONAL POUR MONTRÉAL</h4>
                <p>Arrivée à Montréal. Premières découvertes : le quartier du Plateau Mont Royal, le "village" de Montréal avec ses lofts, ses boutiques de designers, ses bars et restaurants branchés, le Vieux Port et ses promenades sans oublier la rue Ste Catherine pour le shopping. 
                Installation dans une adresse confortable du centre-ville idéalement située à deux pas du Vieux Montréal. On aime la déco sobre et élégante, les chambres spacieuses et l'accueil chaleureux de la part du personnel.
                A voir - Le musée de la Pointe à Callière, à l’architecture remarquable, qui raconte l'histoire de la ville sur fond d'archéologie.
                </p>
              </div> <!-- End of #day1  class="dayByday"-->



              <div id="day2" class="dayByday" >
               <h5>Jour 2</h5>
               <h4>MONTRÉAL - SAINT-PAULIN (130 KM )</h4>
                <p>Prise en charge de votre location de voiture. Route pour le Parc National de la Mauricie, parsemé de lacs, couvert de forêts à perte de vue, à découvrir à pied ou en canot. À proximité de votre étape, la réserve faunique de la Mastigouche, refuge des castors et orignaux invite à la détente. 
                Installation dans une auberge au bord d'une rivière qui mise tout sur le bien être et l'accord avec la nature. Pour votre confort : spa, yoga etc... 
                A faire - Se lever au petit matin dans la forêt encore endormie pour observer la faune.
                </p>
              </div> <!-- End of #day2  class="dayByday"-->              



              <div id="day3" class="dayByday" >
               <h5>Jour 3</h5>
               <h4>SAINT-PAULIN - LAC SAINT JEAN (330 KM)</h4>
                <p>Départ pour la région du Lac Saint Jean connue pour son parc zoologique à St Félicien. On peut y observer les espèces animales du Canada dans leur habitat naturel. Il est aussi très agréable de se balader en vélo sur la "piste cyclable des bleuets", ou de se baigner. Installation dans une jolie maison familiale lovée à fleur d'eau.
                </p>
              </div> <!-- End of #day3  class="dayByday"-->




              <div id="day4" class="dayByday" >
               <h5>Jour 4</h5>
               <h4>LAC SAINT JEAN - FJORD DU SAGUENAY (145 KM)</h4>
                <p>La route se poursuit vers le Fjord du Saguenay, l'un des plus beaux sites du Québec. Le parc des Monts-Vallins est également un régal pour les randonneurs.
                Installation dans une pourvoirie rustique surplombant le Fjord. 
                Pour les aventureux - Une avalanche d'activités possibles dans ce panorama spectaculaire : Parcours d'accrobranche, sorties en kayak pour approcher les bélugas...
                </p>
              </div> <!-- End of #day4  class="dayByday"-->


              <div id="day5" class="dayByday" >
               <h5>Jour 5</h5>
               <h4>FJORD DU SAGUENAY - TADOUSSAC (140 KM)</h4>
                <p>Route le long du fjord offrant de nombreux points de vue exceptionnels sur les falaises escarpées et les petits villages traditionnels de pêcheurs. Continuation vers Tadoussac, qui jouit d'une position privilégiée dans une des plus belles baies du monde.
                Installation dans un gîte au cœur du village de Tadoussac. On aime - la jolie vue sur le Saint-Laurent, l'accueil chaleureux et les petits déjeuners copieux faits maison. 
                Déjà prévue - Une croisière en zodiac pour approcher les baleines, les rorquals et les bélugas dans les eaux si vastes du St Laurent qu'on dirait la mer.
                </p>
              </div> <!-- End of #day5 -->

           </div> <!-- End of #colDayByDay -->
        </div> <!-- End of #rowDayByDay -->
      </div> <!-- end MainContainer -->
	

<?php $this->stop('main_content') ?>
