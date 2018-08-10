<?php

class Note extends Entity {
	static $fields = [
		"id" => integer::class,
		"kit_id" => integer::class,
		"body" => string::class,
		"ok" => integer::class,
		"timestamp" => string::class,
	];
}
