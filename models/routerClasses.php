<?php

class Controller {
    public static function CreateView($viewName) {
        require "./views/$viewName.php";
    }
}

class Route {
    public static $validRoutes = array();
    public static function set ($route, $function) {
        self::$validRoutes[] = $route;
        //print_r(self::$validRoutes);
        if ($_GET['url'] == $route) {
            $function->__invoke();
        }

    }
}

class url {
	static function findUrl() {
		$lowerCaseUrl = strtolower($_GET['url']);
		switch($lowerCaseUrl){
            case "index.php":
			case "home": Controller::CreateView('home'); break;
			default:
				//echo $_SERVER['REQUEST_URI'];
				//echo "<br>Sorry cannot find your page :(" ;
				Controller::CreateView('invalidLink'); break;
			break;
		}
	}
}

?>
