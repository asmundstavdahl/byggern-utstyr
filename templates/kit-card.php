
<?php
$extraClasses = "";

if ($kit->hasNonOkNote()) {
	$extraClasses .= " not-ok";
}

if ($kit->ready_next) {
	$extraClasses .= " ok-green";
} else {
	if ($kit->handed_in) {
		if ($kit->deposit_out) {
			$extraClasses .= " good-yellow";
		} else {
			$extraClasses .= " meh-yellow";
		}
	}
}

?>

<div class="kit card <?= $extraClasses ?>" id="kit-<?= $kit->id ?>" title="<?= $kit->describeNotes() ?>">

	<h3>
		<a href="<?= route("show_kit", [$kit->id]) ?>">
			#<?= $kit->id ?>
		</a>
	</h3>

	<div>
		<input type="checkbox" id="ready_current-<?= $kit->id ?>" <?= $kit->ready_current ?"checked" :"" ?>
		>
		<label for="ready_current-<?= $kit->id ?>">
			<a href="<?= route("toggle", [$kit->id, "ready_current"]) ?>">
				klar Y+0
			</a>
		</label>
	</div>

	<div>
		<input type="checkbox" id="deposit_in-<?= $kit->id ?>" <?= $kit->deposit_in ?"checked" :"" ?>
		>
		<label for="deposit_in-<?= $kit->id ?>">
			<a href="<?= route("toggle", [$kit->id, "deposit_in"]) ?>">
				$ inn
			</a>
		</label>
	</div>

	<div>
		<input type="checkbox" id="handed_out-<?= $kit->id ?>" <?= $kit->handed_out ?"checked" :"" ?>
		>
		<label for="handed_out-<?= $kit->id ?>">
			<a href="<?= route("toggle", [$kit->id, "handed_out"]) ?>">
				hentet
			</a>
		</label>
	</div>

	<div>
		<input type="checkbox" id="handed_in-<?= $kit->id ?>" <?= $kit->handed_in ?"checked" :"" ?>
		>
		<label for="handed_in-<?= $kit->id ?>">
			<a href="<?= route("toggle", [$kit->id, "handed_in"]) ?>">
				levert
			</a>
		</label>
	</div>

	<div>
		<input type="checkbox" id="deposit_out-<?= $kit->id ?>" <?= $kit->deposit_out ?"checked" :"" ?>
		>
		<label for="deposit_out-<?= $kit->id ?>">
			<a href="<?= route("toggle", [$kit->id, "deposit_out"]) ?>">
				$ ut
			</a>
		</label>
	</div>

	<div>
		<input type="checkbox" id="ready_next-<?= $kit->id ?>" <?= $kit->ready_next ?"checked" :"" ?>
		>
		<label for="ready_next-<?= $kit->id ?>">
			<a href="<?= route("toggle", [$kit->id, "ready_next"]) ?>">
				klar Y+1
			</a>
		</label>
	</div>

</div>
