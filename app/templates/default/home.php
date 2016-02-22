<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<?php if(isset($email)) :?>
		<h2>Bienvenue<?= $this->e($email); ?></h2>
	<?php endif; ?>
<?php $this->stop('main_content') ?>
