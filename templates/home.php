<?= render("header") ?>

<h1>Bygger'n - utstyrssett</h1>

<div class="flex row">
	<?php foreach($kits as $kit): ?>
		<?= render("kit-card", ["kit" => $kit]) ?>
	<?php endforeach; ?>
</div>

<br>
<a class="button" href="<?= route("add_kit") ?>">Legg til et sett</a>

<?= render("footer") ?>
