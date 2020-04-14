<?php
require_once 'DataHandler.php';

class ContactsLogic {

    public function __construct()
    {
        $this->dataHandler = new DataHandler("localhost","mysql","multiversum","root","");
    }

    public function __destruct() {}
    public function createProduct($title, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU, $vooraad) {
        $error = false;
        $message = "";
        if(empty($title)) {
            $error = true;
            $message .= 'Geen titel';
        }
        if(empty($prijs)) {
            $error = true;
            $message .= 'Geen prijs';
        } else {
            if (!preg_match('/^[0-9,]+$/', $prijs)) {
                $error = true;
                $message .= 'Ongeldige waarde bij prijs.';
            }
        }
        $newPlatform = "";
        $i = 0;
        $last = count($platform);
        if($last == 1) {
            $error = true;
            $message .= 'Geen Platform gekozen.';
        }
        foreach ($platform as $value) {
            if($value == "None") {
            } else {
                $i++;
                if($i == $last) {
                    $newPlatform .= $value;
                } else {
                    $newPlatform .= $value . ", ";
                }
            }
        }
        if($actie !== '0') {
            if(empty($korting)) {
                $error = true;
                $message .= 'Korting gezet zonder korting prijs.';
            } else {
                if (!preg_match('/^[0-9,]+$/', $prijs)) {
                    $error = true;
                    $message .= 'Ongeldige waarde bij actie prijs.';
                }
            }
        }
        if($error == false) {
            if(empty($eigenDisplay)) {$eigenDisplay = '0';}
            if(empty($resulatie)) {$resulatie = 'Niet inbegrepen';}
            if(empty($functies)) {$functies = 'Niet inbegrepen';}
            if(empty($aansluitingen)) {$aansluitingen = 'Niet inbegrepen';}
            if(empty($refreshRate)) {$refreshRate = 'Niet inbegrepen';}
            if(empty($accessoires)) {$accessoires = 'Niet inbegrepen';}
            if(empty($garantie)) {$garantie = 'Niet inbegrepen';}
            if(empty($infoProduct)) {$infoProduct = 'Niet inbegrepen';}
            if(empty($infoMerk)) {$infoMerk = 'Niet inbegrepen';}
            if(empty($infoTweakers)) {$infoTweakers = 'Niet inbegrepen';}
            if(empty($infoEAN)) {$infoEAN = 'Niet inbegrepen';}
            if(empty($infoSKU)) {$infoSKU = 'Niet inbegrepen';}
            if(empty($vooraad)) {$vooraad = '0';}
            $sql = "INSERT INTO `producten` (`id`, `title`, `prijs`, `platform`, `eigenDisplay`, `resulatie`, `actie`, `korting`, `functies`, `aansluitingen`, `refreshRate`, `accessoires`, `garantie`, `infoProduct`, `infoMerk`, `infoTweakers`, `infoEAN`, `infoSKU`, `vooraad`) VALUES (NULL, '$title', '$prijs', '$newPlatform', '$eigenDisplay', '$resulatie', '$actie', '$korting', '$functies', '$aansluitingen', '$refreshRate', '$accessoires', '$garantie', '$infoProduct', '$infoMerk', '$infoTweakers', '$infoEAN', '$infoSKU', '$vooraad')";
            $res = $this->dataHandler->createData($sql);
            return $res;
        } else {
            return 'error';
        }
    }
    public function updateProduct($title, $prijs, $platform, $eigenDisplay, $resulatie, $actie, $korting, $functies, $aansluitingen, $refreshRate, $accessoires, $garantie, $infoProduct, $infoMerk, $infoTweakers, $infoEAN, $infoSKU, $vooraad, $id) {
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
        $sql = "UPDATE `producten` SET `title` = '$title', `prijs` = '$prijs', `platform` = '$newPlatform', `eigenDisplay` = '$eigenDisplay', `resulatie` = '$resulatie', `actie` = '$actie', `korting` = '$korting', `functies` = '$functies'," .
        " `aansluitingen` = '$aansluitingen', `refreshRate` = '$refreshRate', `accessoires` = '$accessoires', `garantie` = '$garantie', `infoProduct` = '$infoProduct', `infoMerk` = '$infoMerk', `infoTweakers` = '$infoTweakers', `infoEAN` = '$infoEAN', `infoSKU` = '$infoSKU', `vooraad` = '$vooraad' WHERE `producten`.`id` = '$id' ";
        $res = $this->dataHandler->createData($sql);
        return $res;
    }
    public function updateContent($content, $title, $text) {
        $sql = "UPDATE `content` SET `title` = '$title', `text` = '$text' WHERE `content`.`page` = '$content' ";
        $res = $this->dataHandler->createData($sql);
        return $res;
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
    public function deleteProduct($id) {
        try {
            $sql = 'UPDATE producten SET archived = 1 WHERE id =' . $id;
            $res = $this->dataHandler->readsData($sql);
            $sql = 'SELECT archived FROM producten WHERE id =' . $id;
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results[0]['archived'];
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function recoverProduct($id) {
        try {
            $sql = 'UPDATE producten SET archived = 0 WHERE id =' . $id;
            $res = $this->dataHandler->readsData($sql);
            $sql = 'SELECT archived FROM producten WHERE id =' . $id;
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results[0]['archived'];
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function readDeleteProducts() {
        try {
            $sql = 'SELECT id, title, prijs, platform, resulatie FROM producten WHERE archived = 0 ORDER BY id ASC';
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results;
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function readDeleteArchive() {
        try {
            $sql = 'SELECT id, title, prijs, platform, resulatie FROM producten WHERE archived = 1 ORDER BY id ASC';
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results;
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function readProducts($page) {
        try {
            $sql = 'SELECT id, title, prijs, platform, resulatie FROM producten WHERE archived = 0 ORDER BY id ASC';
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
            $sql = 'SELECT * FROM producten WHERE archived = 0 ORDER BY id ASC';
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function readActions() {
        $sql = 'SELECT id, title, prijs, platform, resulatie, korting FROM producten WHERE archived = 0 AND actie = 1';
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
        $tmpFilePath = $file['tmp_name'];
        $path = 'views/img/products/' . $id . '.jpg';
        if(move_uploaded_file($tmpFilePath, $path)) {
            return true;
        } else {
            return false;
        }
    }
    public function readOneProduct($id) {
        try {
            $sql = "SELECT * FROM producten WHERE id = '$id'";
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function readContent($page) {
        try {
            $sql = "SELECT * FROM content WHERE page = '$page'";
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function sendMail($postcode, $houseNumber, $city, $streetname, $firstname, $secondName, $email, $payMethod, $product) {
        $productId = $product[0]['id'];
        $date = date("Y-m-d");
        $sql = "INSERT INTO `bestelingen` (`bestelingID`, `productID`, `datumBesteling`, `postcode`, `stad`, `straatNaam`, `huisnumer`, `voornaam`, `achternaam`, `betaling`) VALUES (NULL, '$productId', '$date', '$postcode', '$city', '$streetname', '$houseNumber', '$firstname', '$secondName', '$payMethod')";
        $res = $this->dataHandler->createData($sql);

        $to = $email;
        $subject = "Besteling bevesteging";

        $message = "
        <html>
        <head>
        <title>Besteling bevesteging</title>
        </head>
        <body>
        <div style='width: max-content;  background=var(--grey);height: min-content;margin: auto;background: #57575712;'>
        <h1 style='margin: 0;background: #233241;color: white; text-align:center;'>Email bevesteging</h1>
        <p style='padding: 10px; text-align:center;'>Wy hebben uw bestelling: " . $product[0]['title'] . " doorgekregen.</p>
        <p style='padding: 10px; text-align:center;'>U zal uw bestelling zo spoedig mogelijk krijgen op de onderstaande gegevens.</p>
        <table style='padding: 10px;margin: auto;width: 100%;text-align: center;'>
        <tr>
        <th>Postcode</th>
        <th>Plaats</th>
        <th>Straat</th>
        <th>Huisnummer</th>
        </tr>
        <tr>
        <td>" . $postcode . "</td>
        <td>" . $city . "</td>
        <td>" . $streetname . "</td>
        <td>" . $houseNumber . "</td>
        </table>
        </div>
        </body>
        </html>
        ";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .= 'Cc: myboss@example.com' . "\r\n";
        mail($to,$subject,$message,$headers);

        if(@mail($to,$subject,$message,$headers)) {
          //echo "Mail Sent Successfully";
          return true;
        }else{
          return false;
          //echo "Mail Not Sent";
        }

    }
    public function readOrders() {
        try {
            $sql = "SELECT * FROM bestelingen ORDER BY bestelingID DESC";
            $res = $this->dataHandler->readsData($sql);
            $results = $res->fetchAll();
            return $results;
        }catch (Exception $e) {
            throw $e;
        }
    }
    public function sendMailContact($name, $email, $text) {
        $to = $email;
        $subject = "Uw contact berigt";

        $message = "
        <html>
        <head>
        <title>Besteling bevesteging</title>
        </head>
        <body>
        <div style='width: max-content;  background=var(--grey);height: min-content;margin: auto;background: #57575712;'>
        <h1 style='margin: 0;background: #233241;color: white; text-align:center;'>Contact berigt</h1>
        <p style='padding: 10px; text-align:center;'>Wy hebben uw berigt doorgekregen.</p>
        <p style='padding: 10px; text-align:center;'>U zal ons antwoord zo spoedig mogelijk krijgen op uw onderstaande berigt.</p>
        <p style='padding: 10px; text-align:center;'>" . $text . "</p>
        </div>
        </body>
        </html>
        ";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .= 'Cc: myboss@example.com' . "\r\n";
        mail($to,$subject,$message,$headers);

        if(@mail($to,$subject,$message,$headers)) {
          //echo "Mail Sent Successfully";
          return true;
        }else{
          return false;
          //echo "Mail Not Sent";
        }
    }
public function updateContact(){}
public function deleteContact(){}
}


 ?>
