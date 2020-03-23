<?php
require_once 'DataHandler.php';


class ContactsLogic {

    public function __construct()
    {
        $this->dataHandler = new DataHandler("localhost","mysql","multiversum","root","");
    }

    public function __destruct() {}
    public function createContact($title, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU) {
        $newPlatform = "";
        $i = 0;
        $last = count($platform);
        foreach ($platform as $value) {
            $i++;
            if($i == $last) {
                $newPlatform .= $value;
            } else {
                $newPlatform .= $value . ", ";
            }
        }
        $sql = "INSERT INTO `producten` (`id`, `title`, `prijs`, `platform`, `eigenDisplay`, `resulatie`, `actie`, `korting`, `functies`, `aansluitingen`, `refreshRate`, `accessoires`, `garantie`, `infoProduct`, `infoMerk`, `infoTweakers`, `infoEAN`, `infoSKU`) VALUES (NULL, '$title', '$prijs', '$newPlatform', '$eigenDisplay', '$resulatie', '$actie', '$korting', '$functies', '$aansluitingen', '$refreshRate', '$accessoires', '$garantie', '$infoProduct', '$infoMerk', '$infoTweakers', '$infoEAN', '$infoSKU')";
        $res = $this->dataHandler->createData($sql);
        return $res;
    }
    public function readContact($id) {
        try {
            $sql = 'SELECT * FROM producten WHERE id =' . $id;
            $res = $this->dataHandler->readData($sql);
            $results = $res->fetchAll();
            return $results;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function readAdmin($name, $pass) {
        try {
            $sql = "SELECT * FROM `admin` WHERE name = '$name' AND pass = '$pass'";
            $res = $this->dataHandler->readData($sql);
            $results = $res->fetchAll();
            if (!empty($results)) {
                $results[0]['id'];
                if($results >= 1) {
                    $_SESSION['name'] = $results[0]['name'];
                    $_SESSION['pass'] = $results[0]['pass'];
                }
            }
            return $results;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function readContacts() {
        try {
            $sql = 'SELECT * FROM producten ORDER BY id ASC';
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function displayContacts($page) {
        try {
            $sql = 'SELECT * FROM producten ORDER BY id ASC';
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            $arrEnd = $page * 10;
            $arrStart = $arrEnd - 10;
            $display = array_slice($results, $arrStart, $arrEnd);
            $count = count($display);
            if($count !== 0) {
                return $display;
            } else {
                $arrEnd = $arrEnd - 10;
                $arrStart = $arrStart - 10;
                $display = array_slice($results, $arrStart, $arrEnd);
                $page = $page - 1;
            }
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function readContactsActions() {
        $sql = 'SELECT * FROM producten WHERE actie = 1 ORDER BY id ASC';
        $res = $this->dataHandler->readsData($sql);
        $results = $res->fetchAll();
        return $results;
    }
    public function readView($view) {
        switch ($view) {
            case 'home': $include = 'view/contacts.php'; break;
            case 'contact': $include = 'view/contact.php'; break;
            case 'algemene': $include = 'view/algemene.php'; break;
            case 'privacy': $include = 'view/privacy.php'; break;
            case 'cookies': $include = 'view/cookie.php'; break;
            case 'li8cehj792rqh8px7dsa3r768dy': $include = 'view/admin.php'; break;
            case 'admin': $include = 'view/login.php'; break;
            default: break;
        }
        return $include;
    }
    public function uploadImg($file, $id) {
        $id = $id;
        $setter = 1;
        $filename = "$id-$setter";
        $temp = explode(".", $file["name"]);
        $newfilename = $filename . '.' . end($temp);
        $target_dir = "view/assets/img/products";
        $target_file = $target_dir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if (file_exists('view/assets/img/products/' . $newfilename)) {
            $counter = 999;
            for ($i=0; $i < $counter; $i++) {
                if (file_exists('view/assets/img/products/' . $newfilename)) {
                    $setter = $setter + 1;
                    $filename = "$id-$setter";
                    $newfilename = $filename . '.' . end($temp);
                    echo $newfilename;
                } else {
                    $counter = 999;
                }
            }
        }
        move_uploaded_file($file["tmp_name"], "view/assets/img/products/" . $newfilename);
    }
public function updateContact(){}
public function deleteContact(){}
}


 ?>
