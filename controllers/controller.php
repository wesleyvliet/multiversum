<?php

class Controller extends DatabaseManager {
	var $test =  'test';
    public static function CreateView($viewName) {
        require "./views/$viewName.php";
    }
}

?>
