<?php

use \Rapd\Router;
use \Rapd\Router\Route;
use \Rapd\View;
use \Rapd\Environment;

Router::add(new Route(
	"home",
	"/",
	function(){
		return View::render("home", [
			"kits" => Kit::findAll()]);
	}
));

Router::add(new Route(
	"add_kit",
	"/new_kit",
	function(){
		$existingKits = Kit::findAll();
		$kit = new Kit([
			"nr" => 1 + count($existingKits),
		]);
		$kit->insert();
		return Router::redirectTo("home");
	}
));

Router::add(new Route(
	"show_kit",
	"/(\d+)",
	function(int $id){
		$kit = Kit::findById($id);
		$notes = array_reverse($kit->getNotes());
		return View::render("show_kit", [
			"kit" => $kit,
			"notes" => $notes,
		]);
	}
));

Router::add(new Route(
	"toggle",
	"/(\d+)/toggle/([\w_]+)",
	function(int $id, string $fieldName){
		$kit = Kit::findById($id);
		$kit->{$fieldName} = $kit->{$fieldName} ?0 :1;
		$kit->update();
		return Router::redirectTo("home");
	}
));
