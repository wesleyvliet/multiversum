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
            if(empty($op)) {
        		switch($lowerCaseUrl){
                    case "":
                    case "index.php":
                    case "home": $this->collectReadProductsDisplay(); break;
        			case "contact": $this->collectLoadContact(); break;
                    case "admin": $this->collectLoadAdmin(); break;
                    case 'nieuw-product': $this->collectLoadAddProduct(); break;
                    case 'delete-product': $this->collectLoadDeleteProduct(); break;
                    case 'update': $this->collectLoadUpdateProduct(); break;
                    case 'inhoudoverzicht': $this->collectLoadContentDisplay(); break;
        			default:
        				//echo $_SERVER['REQUEST_URI'];
        				//echo "<br>Sorry cannot find your page :(" ;
        				Controller::CreateView('invalidLink'); echo $lowerCaseUrl; break;
        			break;
        		}
            } else {
                switch ($op) {
                    case 'login':
                    $this->collectReadAdmin($_REQUEST['userName'], $_REQUEST['userPass']);
                    break;
                    case 'create':
                    $this->collectCreateProduct($_REQUEST['title'], $_FILES["upload"], $_REQUEST['prijs'], $_REQUEST['platform'], $_REQUEST['eigenDisplay'], $_REQUEST['resulatie'], $_REQUEST['actie'], $_REQUEST['korting'], $_REQUEST['functies'], $_REQUEST['aansluitingen'], $_REQUEST['refreshRate'], $_REQUEST['accessoires'], $_REQUEST['garantie'], $_REQUEST['infoProduct'], $_REQUEST['infoMerk'], $_REQUEST['infoTweakers'], $_REQUEST['infoEAN'], $_REQUEST['infoSKU']);
                    break;
                    case 'read':
                    $this->collectReadProduct($_REQUEST['id']);
                    break;
                    case 'delete':
                    $this->collectDeleteProduct($_REQUEST['id']);
                    break;
                    case 'recover':
                    $this->collectRecoverProduct($_REQUEST['id']);
                    break;
                    case 'update':
                    $this->collectReadUpdateProduct($_REQUEST['id']);
                    break;
                    case 'updateProduct':
                    $this->collectUpdateProduct($_REQUEST['title'], $_FILES["upload"], $_REQUEST['prijs'], $_REQUEST['platform'], $_REQUEST['eigenDisplay'], $_REQUEST['resulatie'], $_REQUEST['actie'], $_REQUEST['korting'], $_REQUEST['functies'], $_REQUEST['aansluitingen'], $_REQUEST['refreshRate'], $_REQUEST['accessoires'], $_REQUEST['garantie'], $_REQUEST['infoProduct'], $_REQUEST['infoMerk'], $_REQUEST['infoTweakers'], $_REQUEST['infoEAN'], $_REQUEST['infoSKU'], $_REQUEST['id']);
                    break;
                    case 'updateContent':
                    $this->collectUpdateContent($_REQUEST['content'], $_REQUEST["title"], $_REQUEST['text']);
                    break;
                    case 'checkout':
                    $this->collectLoadCheckout($_REQUEST['product']);
                    break;
                    case 'checkedout':
                    $this->collectLoadCheckedout($_REQUEST['postcode'], $_REQUEST['houseNumber'], $_REQUEST['city'], $_REQUEST['streetname'], $_REQUEST['firstname'], $_REQUEST['secondName'], $_REQUEST['email'], $_REQUEST['payMethod'], $_REQUEST['product']);
                    break;
                    default:
                    //$this->collectReadContact();
                    break;
                }
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
    public function collectRecoverProduct($id) {
        $product = $this->ContactsLogic->recoverProduct($id);
        if($product == 0) {
            $h1 = 'Product is Hersteld!';
            $p = 'Product is nu zichtbaar voor klanten.';
        } else {
            $h1 = 'Error product is niet hersteld!';
            $p = 'Proebeer nogmaals opnieuw.';
        }
        $products = $this->ContactsLogic->readDeleteProducts();
        $archive = $this->ContactsLogic->readDeleteArchive();
        include 'views/deleteProduct.php';
    }
    public function collectReadProductsDisplay(){
        $page = 1;
        $products = $this->ContactsLogic->displayProducts($page);
        $actions = $this->ContactsLogic->readActions();
        $content = $this->ContactsLogic->readContent('home');
        //echo var_dump($actions);
        include 'views/home.php';
    }
    public function collectReadProduct($id) {
        $product = $this->ContactsLogic->readOneProduct($id);
        include 'views/productDetails.php';
    }
    public function collectReadUpdateProduct($id) {
        $product = $this->ContactsLogic->readOneProduct($id);
        include 'views/nieuwProduct.php';
    }
    public function collectUpdateContact(){
    }
    public function collectDeleteProduct($id){
        $product = $this->ContactsLogic->deleteProduct($id);
        if($product == 1) {
            $h1 = 'Product is verwijdert!';
            $p = 'Product kan hersteld worden onder archive tabel.';
        } else {
            $h1 = 'Error product is niet verwijdert';
            $p = 'Proebeer nogmaals te verwijderen';
        }
        $products = $this->ContactsLogic->readDeleteProducts();
        $archive = $this->ContactsLogic->readDeleteArchive();
        include 'views/deleteProduct.php';
    }
    public function collectLoadContact() {
        $content = $this->ContactsLogic->readContent('contact');
        include 'views/contact.php';
    }
    public function collectLoadAdmin() {
        include 'views/admin.php';
    }
    public function collectLoadAddProduct() {
        include 'views/nieuwProduct.php';
    }
    public function collectCreateProduct($title, $file, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU){
        $productId = $this->ContactsLogic->createProduct($title, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU);
        $checkId = $this->ContactsLogic->readOneProduct($productId);
        $checkId = $checkId[0]['id'];
        $upload = $this->ContactsLogic->uploadImg($file, $checkId);
        if($upload == true) {
            $h1 = 'Product is toegevoegd!';
            $p = 'U kan gerust verder gaan met de onderstaande formulier';
            include 'views/nieuwProduct.php';
        } else {
            $h1 = 'kon foto niet uploaden!';
            $p = 'foto is niet geupload voeg opnieuw toe bij het updaten product ID: ' . $checkId;
            include 'views/nieuwProduct.php';
        }
    }
    public function collectUpdateProduct($title, $file, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU, $id){
        $productId = $this->ContactsLogic->updateProduct($title, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU, $id);
        $h1 = 'Product is toegevoegd!';
        $p = 'U kan gerust verder gaan met de onderstaande formulier';
        $page = 1;
        $products = $this->ContactsLogic->displayProducts($page);
        include 'views/updateProduct.php';
    }
    public function collectUpdateContent($content, $title, $text) {
        $content = $this->ContactsLogic->updateContent($content, $title, $text);
        $contentHome = $this->ContactsLogic->readContent('home');
        $contentContact = $this->ContactsLogic->readContent('contact');
        include 'views/contentDisplay.php';
    }
    public function collectLoadDeleteProduct() {
        $products = $this->ContactsLogic->readDeleteProducts();
        $archive = $this->ContactsLogic->readDeleteArchive();
        include 'views/deleteProduct.php';
    }
    public function collectLoadUpdateProduct() {
        $page = 1;
        $products = $this->ContactsLogic->displayProducts($page);
        include 'views/updateProduct.php';
    }
    public function collectLoadContentDisplay() {
        $contentHome = $this->ContactsLogic->readContent('home');
        $contentContact = $this->ContactsLogic->readContent('contact');
        include 'views/contentDisplay.php';
    }
    public function collectLoadCheckout($product) {
        $product = $this->ContactsLogic->readOneProduct($product);
        $content = $this->ContactsLogic->readContent('contact');
        include 'views/checkout.php';
    }
    public function collectLoadCheckedout($postcode, $houseNumber, $city, $streetname, $firstname, $secondName, $email, $payMethod, $product) {
        $sendMail = $this->ContactsLogic->sendMail($postcode, $houseNumber, $city, $streetname, $firstname, $secondName, $email, $payMethod, $product);
    }
}

?>
