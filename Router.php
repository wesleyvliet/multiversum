<?php
include "classes/Database.php";

define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'multiversum');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');
define('LOG_FILE', "C:/dev/log.txt");

function dbg($text) {
}

function portalShutDownFunction() {
}

register_shutdown_function('portalShutDownFunction');

class url {
	static function findUrl() {
		$lowerCaseUrl = $_GET['url'];
		switch($lowerCaseUrl){
			case "home":
			case "Home":
			case "index.php": mainController::CreateView('Home'); break;
			case "Contact":
			case "contact": mainController::CreateView('Contact'); break;
			case "Algemene":
			case "algemene": mainController::CreateView('Algemene'); break;
			case "upcYcfSzzHbDvFAkN6BFAbqzsuVzpK": mainController::CreateView('products'); break;
			case "ajax-tariev-select": TarievController::selectTariev(); break;
			case "ajax-tariev-insert": TarievController::insertTariev(); break;
			default:
				//echo $_SERVER['REQUEST_URI'];
				//echo "<br>Sorry cannot find your page :(" ;
				mainController::CreateView('invalidLink'); break;
			break;
		}
	}
}

class router {
	static function findRoute() {
		$url = $_POST['action'];
		switch ($url) {
            case 'fetchProducts': mainController::fetchProducts(); return;
            case 'fetchProductsAction': mainController::fetchProductsAction(); return;
			case 'deleteUser': mainController::deleteUser(); return;
            case 'checkForm': mainController::checkLogin(); return;
			default: echo 'No action was taken'; break;
		}
	}
}

try {
	if(isset($_POST['action'])) {
		router::findRoute($_POST['action']);
	} else {
		$check = $_GET['url'];
		if($check == 'ajaxPost.php') {
		mainController::storeImg();
		} else {
			url::findUrl();
		}
	}
}
catch(Exception $ex) {
    dbg("CAUGHT ERROR: ".$ex->getMessage()."\nin ".$ex->getFile()." on line ".$ex->getLine()."\n".$ex->getTraceAsString());
}

?>
