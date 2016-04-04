<?php $this->layout('layout', ['title' => 'Ajouter un voyage']) ?>

<?php $this->start('main_content') ?> 
<div class="row" id="rowFormAddtravel">
	<div class="col-md-8 col-md-offset-2">
		

		<div>
			<h2 class="col-md-8 col-md-offset-3">Ajouter un nouveau voyage!</h2>
		</div>



		<form action="<?= $this->url('addTravelUser') ; ?>" enctype="multipart/form-data" method="POST" class="form-container col-md-6 col-md-offset-3">
			
		<?php if (isset($lastInsertId)): ?>
			<p class="bg-success">Votre voyage a bien été enregistré,merci. <a href="<?= $this->url('itineraire' , ['id'=> $lastInsertId]); ?>" ><br>Vous pouvez le voir ici!</a></p> 
		<?php endif; ?>

			<div class="form-group">
				<label for="travelName">Nom du voyage</label>
				<input type="text" class="form-control" id="travelName" name="travelName" placeholder="Nom du voyage">
	
				<?php if (isset($errors['travelName'])): ?>
					<?= $errors['travelName'] ?>
				<?php endif; ?>

			</div>

			<div class="form-group">
				<label for="travelPrice">Prix par personne et en € sur une base 2 personnes (hors vol internationaux)</label>
				<div class="input-group">
  					<span class="input-group-addon"> € </span>
					<input type="number" class="form-control" id="travelPrice" name="travelPrice" placeholder="Prix du voyage par personne en €">

				<?php if (isset($errors['travelPrice'])): ?>
					<?= $errors['travelPrice'] ?>
				<?php endif; ?>


				</div>
			</div>


            <!-- pays du voyage -->
            <!-- norme ISO 3166 a2 (2 caractères alpha) -->
            <div class="form-group" id="divCountryTravel">
                <label id="labCountryTravelId" for="countryTravelId">Pays :</label>
                <div class="input-group">
                	<span class="input-group-addon" id="spanFlagId"><img id="drapeauId" src="<?= $this->assetUrl('img/blank.png')?>" class="flag" alt=""></span>              
                	<select id="countryTravelId" name="countryTravel" class="form-control"></select>

					<?php if (isset($errors['countryTravel'])): ?>
						<?= $errors['countryTravel']; ?>
					<?php endif; ?>

                </div>
            </div>

			<div class="form-group">
				<label for="travelDescription">Description du voyage (min 500 caractères)</label>
				<textarea rows="10" class="form-control" id="travelDescription" name="travelDescription" placeholder="Description du voyage"></textarea>
				
				<?php if (isset($errors['travelDescription'])): ?>
					<?= $errors['travelDescription'] ?>
				<?php endif; ?>

			</div>


            <!-- Difficulté du voyage -->
            <div class="pure-control-group">
                <label id="travelDiffLab" for="travelDiff">Difficulté du voyage de 1 (très facile) à 5 (très difficile)</label>
                <input id="travelDiff" name="diff" type="range" min="1" max="5" step="1">
            </div>


			<div class="form-group">
			    <label for="phototravel">Ajouter une photo à ce voyage</label>
			    <input type="file" id="photoTravel" name="photoTravel" >
			    <p class="help-block">L'image doit être inférieure à 1 Mo, sinon elle ne sera pas traité. Extension acceptées *.jpg, *.png, *.gif</p>

					<?php if (isset($errors['photoName'])): ?>
						<?= $errors['photoName']; ?>
					<?php endif; ?>
					<?php if (isset($errors['photoSize'])): ?>
						<?= $errors['photoSize']; ?>
					<?php endif; ?>
					<?php if (isset($errors['photoType'])): ?>
						<?= $errors['photoType']; ?>
					<?php endif; ?>


			</div>

			  <div class="checkbox">
			    <label>
			      <input type="checkbox" value="check" name="cgu"> J'ai lu et j'accepte les <a href="" class="fancybox">CGU</a> concernant le voyage que je propose.
			    </label>

					<?php if (isset($errors['travelCGU'])): ?>
						<?= $errors['travelCGU'] ?>
					<?php endif; ?>

			  </div>

	

			<button type="submit" name="action" class="btn btn-primary">Proposer le voyage</button>
		</form>
	</div>
</div><!--  end of #rowFormAddTravel -->

<?php $this->stop('main_content') ?>
