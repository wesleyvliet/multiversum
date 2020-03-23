<?php
    if ((function_exists('session_status') && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
        session_start();
        $_SESSION['name'] = 'guest';
        $_SESSION['pass']   = 'guest';
    }
    require_once 'controller/ContactsController.php';
    $controller = new ContactsController();
    $controller->handleRequest();
 ?>
