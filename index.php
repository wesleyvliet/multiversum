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
        require_once  PATH."/controllers/{$class_name}.php";
    }
});

require_once 'controllers/mainController.php';

$controller = new ContactsController();
$controller->handleRequest();

?>
