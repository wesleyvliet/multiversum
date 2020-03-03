<?php

class mainController extends Controller {
	public static function fetchProducts() {
		$sql = "SELECT * FROM producten ORDER BY id ASC";
   	    $db = DatabaseManager::getDatabaseObject();
   	    $query = $db->prepare($sql);
   	    $query->execute();
   	    $results = $query->fetchAll(PDO::FETCH_OBJ);
   	    $myJSON = json_encode($results);
   	    echo $myJSON;
	}
	public static function fetchProductsAction() {
		$sql = "SELECT * FROM producten WHERE actie = 1 ORDER BY id ASC";
   	    $db = DatabaseManager::getDatabaseObject();
   	    $query = $db->prepare($sql);
   	    $query->execute();
   	    $results = $query->fetchAll(PDO::FETCH_OBJ);
   	    $myJSON = json_encode($results);
   	    echo $myJSON;
	}
}

?>
