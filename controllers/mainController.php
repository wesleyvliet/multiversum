<?php

require_once 'models/ContactsLogic.php';
require_once 'models/routerClasses.php';

class ContactsController {
    public function __construct(){
        $this->ContactsLogic = new ContactsLogic();
    }
    public function __destruct() {}
    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op'])?$_REQUEST['op']:null;
            $lowerCaseUrl = strtolower($_GET['url']);
    		switch($lowerCaseUrl){
                case "":
                case "index.php":
                case "home": $this->collectReadContact(); break;
    			case "contact": $this->collectLoadContact(); break;
                case "admin": $this->collectLoadAdmin(); break;
    			default:
    				//echo $_SERVER['REQUEST_URI'];
    				//echo "<br>Sorry cannot find your page :(" ;
    				Controller::CreateView('invalidLink'); echo $lowerCaseUrl; break;
    			break;
    		}
            switch ($op) {
                case 'login':
                $this->collectReadAdmin($_REQUEST['userName'], $_REQUEST['userPass']);
                break;
                case 'reads':
                $this->collectReadsContacts();
                break;
                case 'read':
                $this->collectReadContact();
                break;
                case 'email':
                $this->collectUpdateContact();
                break;
                default:
                //$this->collectReadContact();
                break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }
    }
    public function collectCreateContact(){}
    public function collectReadAdmin($name, $pass) {
        $login = $this->ContactsLogic->readAdmin($name, $pass);
        if($login == true) {
            //$this->collectReadContact();
            header("Location: home");
            die();
        } else {
            //include 'views/admin.php';
            header("Location: admin");
            die();
        }
    }
    public function collectReadContact(){
        $page = 1;
        $products = $this->ContactsLogic->displayProducts($page);
        $actions = $this->ContactsLogic->readActions();
        $content = $this->ContactsLogic->readContent(1);
        include 'views/home.php';
    }
    public function collectUpdateContact(){
    }
    public function collectDeleteContact(){}
    public function collectLoadContact() {
        include 'views/contact.php';
    }
    public function collectLoadAdmin() {
        include 'views/admin.php';
    }
}

?>
