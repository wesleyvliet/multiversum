<?php
require_once 'DataHandler.php';


class ContactsLogic {

    public function __construct()
    {
        $this->dataHandler = new DataHandler("localhost","mysql","mvc2","root","");
    }

    public function __destruct() {}
    public function createContact() {}
    public function readContact() {}
    public function readContacts() {
        try {
        $sql = 'SELECT * FROM content';
        $res = $this->dataHandler->readsData($sql);
        $results = $res->fetchAll();
        return $results;
    }catch (Exception $e) {
        throw $e;
    }
    }
public function updateContact(){}
public function deleteContact(){}
}


 ?>
