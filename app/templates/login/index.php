<?php $this->layout('layout', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>

<div class="row" id="formLogin">
	<div class="col-md-6 col-md-offset-3" id="divFormLogin">

		<div>
		<h1 class="col-md-6 col-md-offset-3">Connectez-vous!</h1>
		</div>

		<?php if (isset($errors['login'])): ?>
			<div class="alert alert-danger col-md-6 col-md-offset-3">
				<p><?= $errors['login']?></p>
			</div>
		<?php endif; ?>




		<form action="<?= $this->url('loginUser');?>" class="form-container col-md-6 col-md-offset-3" method="POST">

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="email">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="password">
			</div>


			<button type="submit" class="btn btn-primary" id="loginButton">Connexion</button>
		</form>
	</div>
</div>
<?php $this->stop('main_content') ?>
