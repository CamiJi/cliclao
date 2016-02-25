<?php $this->layout('layout', ['title' => 'Ajouter un voyage']) ?>

<?php $this->start('main_content') ?>
<div class="row" id="rowFormAddtravel">
	<div class="col-md-6 col-md-offset-3">

		<div>
			<h2 class="col-md-6 col-md-offset-3">Ajouter un nouveau voyage!</h2>
		</div>



		<form action="<?= $this->url('addTravelUser') ; ?>" method="POST" class="form-container col-md-6 col-md-offset-3">
			

			<div class="form-group">
				<label for="travelName">Nom du voyage</label>
				<input type="text" class="form-control" id="travelName" name="travelName" placeholder="Nom du voyage">
			</div>

			<div class="form-group">
				<label for="travelPrice">Prix par personne et en € sur une base 2 personnes (hors vol internationaux)</label>
				<div class="input-group">
  					<span class="input-group-addon"> € </span>
					<input type="number" class="form-control" id="travelPrice" name="travelPrice" placeholder="Prix du voyage par personne en €">
				</div>
			</div>

			<div class="form-group">
				<label for="travelDescription">Description du voyage (min 500 caractères)</label>
				<textarea rows="10" class="form-control" id="travelDescription" name="travelDescription" placeholder="Description du voyage"></textarea>
			</div>


            <!-- Difficulté du voyage -->
            <div class="pure-control-group">
                <label id="travelDiffLab" for="travelDiff">Difficulté du voyage de 1 (très facile) à 5 (très difficile)</label>
                <input id="travelDiff" name="Diff" type="range" min="1" max="5" step="1">
                <output id="travelDiffOutput" for="travelDiff" name="travelDiffActuel"></output>
            </div>


			<div class="form-group">
			    <label for="exampleInputFile">Ajouter une photo à ce voyage</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">La photo doit être au format jpg ou png et ne doit pas dépasser 3 Mo</p>
			</div>

			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> J'ai lu et j'accepte les <a href="<?= $this->assetUrl('img/logo_cliclao-v1.png') ?>" class="fancybox">CGU</a> concernant le voyage que je propose
			    </label>
			  </div>

	

			<button type="submit" class="btn btn-primary">Proposer le voyage</button>
		</form>
	</div>
</div><!--  end of #rowFormAddTravel -->

<?php $this->stop('main_content') ?>
