<?php
$page = 1;
require_once 'model/ContactsLogic.php';

class ContactsController {
    public function __construct(){
        $this->ContactsLogic = new ContactsLogic();
    }
    public function __destruct() {}
    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op'])?$_REQUEST['op']:null;
            switch ($op) {
                case 'create':
                $this->collectCreateContact();
                break;
                case 'reads':
                $this->collectDisplayContacts($_REQUEST['page']);
                break;
                case 'read':
                $this->collectReadContact($_REQUEST['id']);
                break;
                case 'update':
                $this->collectUpdateContact();
                break;
                case 'view':
                $this->collectLoadView($_REQUEST['view']);
                break;
                default:
                $this->collectReadContacts();
                break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }
    }
    public function collectCreateContact(){
        $contacts = $this->ContactsLogic->createContact();
        var_dump($contacts);
        //include 'view/admin.php';
    }
    public function collectReadContact($id){
        $contacts = $this->ContactsLogic->readContact($id);
        include 'view/product.php';
    }
    public function collectDisplayContacts($page) {
        if($page <= 0) {
            $page = 1;
        }
        $contacts = $this->ContactsLogic->displayContacts($page);
        $actions = $this->ContactsLogic->readContactsActions();
        if($contacts == null) {
            $page = $page - 1;
            $contacts = $this->ContactsLogic->displayContacts($page);
        }
        include 'view/contacts.php';
    }
    public function collectReadContacts(){
        $contacts = $this->ContactsLogic->readContacts();
        $actions = $this->ContactsLogic->readContactsActions();
        $page = 1;
        include 'view/contacts.php';
    }
    public function collectLoadView($view) {
        $include = $this->ContactsLogic->readView($view);
        if($include == 'view/contacts.php') {
            $contacts = $this->ContactsLogic->readContacts();
            $actions = $this->ContactsLogic->readContactsActions();
            $page = 1;
        }
        include $include;
        //include 'view/' . $view . '.php';
    }
    public function collectUpdateContact(){}
    public function collectDeleteContact(){}
}
 ?>
