<?php

use \Rapd\Router;
use \Rapd\Router\Route;
use \Rapd\View;
use \Rapd\Environment;

Router::add(new Route(
	"new_note",
	"/(\d+)/new_note",
	function(int $kitId){
		$note = new Note();
		$note->kit_id = $kitId;
		$note->patch($_REQUEST);
		$note->timestamp = date("Y-m-d H:i:s");
		$note->insert();

		return Router::redirectTo("show_kit", [$note->kit_id]);
	}
));

Router::add(new Route(
	"toggle_note_ok",
	"/note/(\d+)/ok",
	function(int $id){
		$note = Note::findById($id);
		$note->ok = $note->ok ?0 :1;
		$note->update();
		return Router::redirectTo("show_kit", [$note->kit_id]);
	}
));

Router::add(new Route(
	"delete_note",
	"/note/(\d+)/delete",
	function(int $id){
		$note = Note::findById($id);
		$note->delete();
		return Router::redirectTo("show_kit", [$note->kit_id]);
	}
));
