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
                $this->collectCreateContact($_REQUEST['title'], $_FILES["fileToUpload"], $_REQUEST['prijs'], $_REQUEST['platform'], $_REQUEST['eigenDisplay'], $_REQUEST['resulatie'], $_REQUEST['actie'], $_REQUEST['korting'], $_REQUEST['functies'], $_REQUEST['aansluitingen'], $_REQUEST['refreshRate'], $_REQUEST['accessoires'], $_REQUEST['garantie'], $_REQUEST['infoProduct'], $_REQUEST['infoMerk'], $_REQUEST['infoTweakers'], $_REQUEST['infoEAN'], $_REQUEST['infoSKU']);
                break;
                case 'upload':
                $this->collectUploadImg($_FILES["fileToUpload"]);
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
    public function collectCreateContact($title, $file, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU){
        $productId = $this->ContactsLogic->createContact($title, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU);
        $checkId = $this->ContactsLogic->readContact($productId);
        $checkId = $checkId[0]['id'];
        $upload = $this->ContactsLogic->uploadImg($file, $checkId);
        //$uploadImg = $this->ContactsLogic->uploadImg($file, $checkId);
        include 'view/adminAfter.php';
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
    public function collectUploadImg($file) {
        $id = 1;
        $upload = $this->ContactsLogic->uploadImg($file, $id);
    }
    public function collectUpdateContact(){}
    public function collectDeleteContact(){}
}
 ?>
