<?php

class Kit extends Entity {
	static $fields = [
		"id" => integer::class,
		"deposit_in" => integer::class,
		"deposit_out" => integer::class,
		"handed_out" => integer::class,
		"handed_in" => integer::class,
		"ready_current" => integer::class,
		"ready_next" => integer::class,
	];

	function getNotes() : array {
		return Note::findAllWhere("kit_id = :id", [":id" => $this->id]);
	}

	function describeNotes()
	{
		return array_reduce($this->getNotes(), function($acc, $note){
			if ($note->ok) {
				return $acc;
			} else {
				return $acc . " · {$note->body}\n";
			}
		}, "");
	}
}
