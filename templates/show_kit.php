<?= render("header") ?>

<h1>
	<a class="button" href="<?= route("home") ?>">&uarr;</a>
	Utstyrssett #<?= $kit->id ?>
</h1>

<a class="button" href="<?= route("show_kit", [$kit->id - 1]) ?>">&larr;</a>
<a class="button" href="<?= route("show_kit", [$kit->id + 1]) ?>">&rarr;</a>

<div class="flex row">

	<?= render("kit-card", ["kit" => $kit]) ?>

	<div>
		<h2>Notater</h2>

		<?= render("note-form", [
			"kit" => $kit,
			"note" => new Note(),
		]) ?>

		<?php foreach($notes as $note): ?>
			<?= render("note-card", ["note" => $note]) ?>
		<?php endforeach; ?>
	</div>

</div>

<?= render("footer") ?>
