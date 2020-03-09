<?php
require_once 'DataHandler.php';


class ContactsLogic {

    public function __construct()
    {
        $this->dataHandler = new DataHandler("localhost","mysql","multiversum","root","");
    }

    public function __destruct() {}
    public function createContact() {
        $title = 'test';
        $platform = 'test';
        $resulatie = 'test';
        $sql = 'INSERT INTO producten (title, platform, resulatie) VALUES (title, platform, resulatie)';
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
            default: break;
        }
        return $include;
    }
public function updateContact(){}
public function deleteContact(){}
}


 ?>
