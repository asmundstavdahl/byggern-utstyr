<form action="<?= route("new_note", [$kit->id]) ?>" method="POST">
	<?php if($note->id): ?>
	<input type="text" name="id" value="<?php $note->id ?>">
	<?php endif; ?>
	<input type="text" name="body" value="<?php $note->body ?>">
	<input type="submit">
</form>
