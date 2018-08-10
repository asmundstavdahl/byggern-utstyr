<?php


use \Rapd\Database;

$dbFile = __DIR__."/app.sqlite3";
Database::$pdo = new PDO("sqlite:{$dbFile}");


use \Rapd\Environment;

# For JS, CSS, images etc.: (ASSET_BASE)/css/app.css
Environment::set("ASSET_BASE", "/byggern-utstyr");

Environment::set("TITLE", "byggern-utstyr");
Environment::set("AUTHOR", "Åsmund Stavdahl");
Environment::set("DESCRIPTION", "Hold oversikt over Bygger'n-utstyr");


use \Rapd\Router;

Router::setBasePath(Environment::get("ASSET_BASE"));


use \Rapd\View;

View::setRenderer(function(string $template, array $data = []){
	require_once "../src/template-preparations.php";
	extract(Environment::getAll());
	extract($data);
	ob_start();
	$templateFile = "../templates/{$template}.php";
	if(file_exists($templateFile)){
		include $templateFile;
	} else {
		echo "<h1> ".preg_replace("`^.*/`", "", $templateFile)." </h1>";
	}
	return ob_get_clean();
});
