<?php

class Controller extends DatabaseManager {


	public	$productName;
	public	$productBrand;
	public	$productResolution;
	public	$productRefreshRate;
	public	$productAccessories;
	public	$productPlatform;

	var $test =  'test';
    public static function CreateView($viewName) {
        require "./views/$viewName.php";
    }

	function dataArray(){

	$data = array(
	'name' =>$_POST['productName'],
	'brand' =>$_POST['brand'],
	'productPlatform' => $_POST['productPlatform'],
	'productResolution' => $_POST['productResolution'],
	'productRefreshRate' => $_POST['productRefreshRate'],
	'productAccessories' => $_POST['productAccessories']
	);

	return $this->$data;


	header('location: index');
	}
}


?>
