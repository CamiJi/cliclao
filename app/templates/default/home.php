<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>


  <!-- Start Row Video -->
  
  	<!-- TODO intgrer un background video -->

    <div id="bandeauDiv">



        <img src="<?= $this->assetUrl('img/home-voyage-sur-mesure2-1980x450.jpg') ?>">
 		
  			<div class="col-md-6 col-md-offset-3" id="slogan">
  				<h1>Créer votre voyage sur mesure avec une agence locale</h1>
          <form action="<?= $this->url('search'); ?>" method="POST">
    				<div class = "input-group">
    					<span class = "input-group-btn">
    						<button class = "btn btn-default" type = "submit" id="buttonGo">
    							Go!
    						</button>
    					</span>

    					<input type = "text" class = "form-control" name="search" id="searchId" placeholder="Vers quelle destination désirez-vous vous envoler?">
    				</div><!-- /input-group -->
          </form>

  			</div> <!-- End of .col-md-6 col-md-offset-3 -->
  	
  
    </div> <!-- End row #bandeau -->





          <!-- Start Main Container -->
          <div class="container"> 



             <?php if(!empty($randomTravel)): ?>
                    <?php foreach ($randomTravel as $keyVoyages => $voyage): ?>
                      <div class = "col-sm-6 col-md-4">
                        <div class="thumbnail tile tile-medium tile-teal">
                          <a href="<?= $this->url('itineraire' , ['id'=> $voyage['id']]); ?>" >
                          <img src="<?= $this->assetUrl($voyage['img_voyage']) ?>" alt="">
                          <p><?php echo $voyage['name']; ?></p>
                          <p>Prix: <?php echo $voyage['budget']; ?> €</p>
                          </a>                  
                        </div>
                      </div>
                    <?php endforeach; ?>
              <?php endif; ?>

          


            <div id="apiGm" class="row">
              <label for="googleMaps">Nos voyageurs à travers le monde:</label>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63297476.45919606!2d33.91707391944581!3d14.463352354156584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1455806321372" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen id="googleMaps"></iframe>
              
            </div>


          </div> <!-- End container main -->
	

<?php $this->stop('main_content') ?>
