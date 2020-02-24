<?php
session_start();

define('PATH', getcwd());
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

spl_autoload_register(function($class_name) {
    // die('/classes/'.$class_name.'.php');
    if (file_exists(PATH.'/classes/'.$class_name.'.php')) {
        require_once  PATH."/classes/{$class_name}.php";
    } else if (file_exists(PATH.'/Controllers/'.$class_name.'.php')) {
        require_once  PATH."/Controllers/{$class_name}.php";
    }
});
// Search substring
$key = 'ajax';

if (strpos($_SERVER['REQUEST_URI'], $key) == false) {
	if(isset($_POST['action'])) {
	}else{
		require_once ('views/Header.php');
        require_once ('views/Nav.php');
	}
}

require_once ("Router.php");
require_once ("views/Footer.php")
?>
