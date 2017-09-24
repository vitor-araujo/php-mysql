<?php require('view/partials/header.view.php'); ?>

	<?php require('view/partials/nav.view.php'); ?>
		<h1>Home</h1>
		<h2>This App is 100% cool</h2>

		<ol>
			<?php foreach ($task as $tasks) : ?>	
			<li>
				
				<?php if ($tasks->completed) : ?>
					<strike><?= $tasks->description ?></strike>
				<?php else : ?>
					<?= $tasks->description ?>
				<?php endif; ?>
			</li>		
			<?php endforeach; ?>

		</ol>
<?php require('view/partials/footer.view.php'); ?>
