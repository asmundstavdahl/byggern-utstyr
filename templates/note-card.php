
<div class="note card <?= $note->ok ?"ok" :"" ?>">

	<pre><?= $note->body ?></pre>

	<div class="flex row menu">
		<div>
			<i><?= $note->timestamp ?></i>
		</div>
		<div>
			<input type="checkbox" <?= $note->ok ?"checked" :"" ?>>
			<label>
				<a href="<?= route("toggle_note_ok", [$note->id]) ?>">
					OK
				</a>
			</label>
		</div>
		<div>
			<a href="<?= route("delete_note", [$note->id]) ?>">
				X
			</a>
		</div>
	</div>

</div>
