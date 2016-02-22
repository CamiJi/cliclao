<?php $this->layout('layout', ['title' => 'Register']) ?>

<?php $this->start('main_content') ?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form action="<?= $this->url('registerUser') ; ?>" method="POST" class="form-container">
			<div class="form-group <?php if(isset($errors['email'])) echo 'has-error' ?> "  > 
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="email">
				<?php if(isset($errors['email'])): ?>
					<span class="help-block"><?= $errors['email']; ?></span>
				<?php endif; ?>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="password">
			</div>

			<div class="form-group <?php if(isset($errors['password'])) echo 'has-error' ?>">
				<label for="confirmPassword">confirmPassword</label>
				<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="confirmPassword">
				<?php if(isset($errors['password'])): ?>
					<span class="help-block"><?= $errors['password']; ?></span>
				<?php endif; ?>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

<?php $this->stop('main_content') ?>
