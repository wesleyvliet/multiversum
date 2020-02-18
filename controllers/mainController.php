<?php

class mainController extends Controller {
	public static function checkLogin() {
		$check = true;
		if (empty($_POST["name"])) {
			$check = false;
		}
		if (empty($_POST["name"])) {
			$check = false;
		}
		if($check === true) {
			$sql = "INSERT INTO users (`name`, `secondName`) VALUES ( :name, :secondName)";
            $db = DatabaseManager::getDatabaseObject();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(":name", $_POST['name']);
            $stmt->bindParam(":secondName", $_POST['lastName']);
            $stmt->execute();
			$message = 'Gebruiker toegevoegd';
            echo json_encode($message);
		}
	}
	public static function fetchUsers() {
		$sql = "SELECT * FROM users";
		$db = DatabaseManager::getDatabaseObject();
		$query = $db->prepare($sql);
		$query->execute();
		$results = $query->fetchAll(PDO::FETCH_OBJ);
		$myJSON = json_encode($results);
		echo $myJSON;
	}
	public static function fetchUsersSearch() {
		$input = $_POST['input'];
		$sql = "SELECT * FROM users where id = $input";
		$db = DatabaseManager::getDatabaseObject();
		$query = $db->prepare($sql);
		$query->execute();
		$results = $query->fetchAll(PDO::FETCH_OBJ);
		$myJSON = json_encode($results);
		echo $myJSON;
	}
	public static function deleteUser() {
		$id = $_POST['id'];
		if($id == "") {
			echo 'fout in programa';
		} else {
			$sql = "DELETE FROM users where id = $id";
			$db = DatabaseManager::getDatabaseObject();
			$query = $db->prepare($sql);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_OBJ);
		}
	}
}

?>
