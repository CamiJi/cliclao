<?php $this->layout('layout', ['title' => 'Register']) ?>

<?php $this->start('main_content') ?>
<div class="row" id="rowFormRegister">
	<div class="col-md-6 col-md-offset-3">

		<div>
			<h2 class="col-md-6 col-md-offset-3">Ajouter un nouveau voyage!</h2>
		</div>
		<form action="<?= $this->url('registerUser') ; ?>" method="POST" class="form-container col-md-6 col-md-offset-3">
			<div class="form-group <?php if(isset($errors['email'])) echo 'has-error' ?> "  > 
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="email">
				<?php if(isset($errors['email'])): ?>
					<span class="help-block"><?= $errors['email']; ?></span>
				<?php endif; ?>
			</div>


			<div class="form-group">
				<label for="name">Nom</label>
				<input type="name" class="form-control" id="name" name="name" placeholder="Nom">
			</div>

			<div class="form-group">		
				<label for="password">Mot de passe</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
			</div>

			<div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">
				<label for="confirmPassword">Confirmation du mot de passe</label>
				<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Mot de passe">
				<?php if(isset($errors['password'])): ?>
					<span class="help-block"><?= $errors['password']; ?></span>
				<?php endif; ?>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

<?php $this->stop('main_content') ?>
