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
    public function updateContent($title1, $text1, $title2, $text2) {
        //$sql = "UPDATE content SET lastname='Doe' WHERE id=2";
        $sql = "UPDATE content SET title = '$title1', text = '$text1' WHERE id = 1";
        $res = $this->dataHandler->createData($sql);
        $sql = "UPDATE content SET title = '$title2', text = '$text2' WHERE id = 3";
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
            $sql = "SELECT * FROM admin WHERE name = '$name' AND pass = '$pass'";
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            if (!empty($results)) {
                $results[0]['id'];
                if($results >= 1) {
                    $_SESSION['name'] = $results[0]['name'];
                    $_SESSION['pass'] = $results[0]['pass'];
                    $login = true;
                } else {
                    $login = false;
                }
            } else {
                $login = false;
            }
            return $login;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function readProducts($page) {
        try {
            $sql = 'SELECT id, title, prijs, platform, resulatie FROM producten ORDER BY id ASC';
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            $arrEnd = $page * 9;
            $arrStart = $arrEnd - 9;
            $display = array_slice($results, $arrStart, $arrEnd);
            $count = count($display);
            if($count !== 0) {
                return $display;
            } else {
                $arrEnd = $arrEnd - 9;
                $arrStart = $arrStart - 9;
                $display = array_slice($results, $arrStart, $arrEnd);
                $page = $page - 1;
            }
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function displayProducts($page) {
        try {
            $sql = 'SELECT * FROM producten ORDER BY id ASC';
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function readActions() {
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
            case 'pageContent': $include = 'view/pageContent.php'; break;
            case 'li8cehj792rqh8px7dsa3r768dy': $include = 'view/admin.php'; break;
            case 'admin': $include = 'view/login.php'; break;
            default: break;
        }
        return $include;
    }
    public function uploadImg($file, $id) {
        var_dump($file);
        $total = count($file['name']);
        // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {
            //Get the temp file path
            $tmpFilePath = $file['tmp_name'][$i];
            //Make sure we have a file path
            if ($tmpFilePath != ""){
                $counter = 1;
                //Setup our new file path
                //$newFilePath = "view/assets/img/products/" . $file['name'][$i];
                $newfilename = $id . "-" . $counter;
                $end = 10;
                for ($i=0; $i < $end; $i++) {
                    $path = 'view/assets/img/products/' . $newfilename . '.jpg';
                    if (file_exists($path)) {
                        $counter = $counter + 1;
                        $newfilename = $id . "-" . $counter;
                        echo 'new file name<br>';
                    } else {
                        $end = 1;
                        echo 'free name<br>';
                    }
                }
                echo $newfilename . "<br>";
                move_uploaded_file($tmpFilePath, "view/assets/img/products/" . $newfilename . ".jpg");
            }
        }
    }
    public function readContent($content) {
        $sql = 'SELECT * FROM content WHERE page =' . $content;
        $res = $this->dataHandler->readsData($sql);
        $results = $res->fetchAll();
        return $results;
    }
public function updateContact(){}
public function deleteContact(){}
}


 ?>
