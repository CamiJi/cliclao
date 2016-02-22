<?php $this->layout('layout', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>

<div class="row">
	<div class="col-md-6 col-md-offset-3">


		<?php if (isset($errors['login'])): ?>
			<div class="alert alert-danger">
				<p><?= $errors['login']?></p>
			</div>
		<?php endif; ?>

		<h2 class="col-md-6 col-md-offset-3">Connectez-vous!</h2>

		<form action="<?= $this->url('loginUser');?>" class="form-container" method="POST">

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="email">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="password">
			</div>

			<button type="submit" class="btn btn-primary">Connexion</button>
		</form>
	</div>
</div>
<?php $this->stop('main_content') ?>
