<?php

use \Rapd\Router;
use \Rapd\View;
use \Rapd\Environment;

# Generate a response based on the request and the configured routes
$uri = $_SERVER["REQUEST_URI"];
$path = preg_replace("`^".Environment::get("ASSET_BASE")."/`", "/", $uri);
$path = preg_replace("`\?.*\$`", "", $path);
$matchedRoute = Router::match($path);

if($matchedRoute === false){
	header("HTTP/1.1 404 Not Found");
	echo View::render("404");
} else {
	echo $matchedRoute->execute($path);
}
