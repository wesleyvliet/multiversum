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
    		//switch($lowerCaseUrl){
                //case "home": Controller::CreateView('home'); break;
    			//case "contact": Controller::CreateView('contact'); break;
                //case "admin": Controller::CreateView('admin'); break;
    			//default:
    				//echo $_SERVER['REQUEST_URI'];
    				//echo "<br>Sorry cannot find your page :(" ;
    				//Controller::CreateView('invalidLink'); $lowerCaseUrl; break;
    			//break;
    		//}
            switch ($op) {
                case 'create':
                $this->collectCreateContact();
                break;
                case 'reads':
                $this->collectReadsContacts();
                break;
                case 'read':
                $this->collectReadContact();
                break;
                case 'update':
                $this->collectUpdateContact();
                break;
                default:
                $this->collectReadContact();
                break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }
    }
    public function collectCreateContact(){}
    public function collectReadContact(){
        $page = 1;
        $products = $this->ContactsLogic->displayProducts($page);
        $actions = $this->ContactsLogic->readActions();
        $content = $this->ContactsLogic->readContent(1);
        include 'views/home.php';
    }
    public function collectUpdateContact(){}
    public function collectDeleteContact(){}
}

?>
