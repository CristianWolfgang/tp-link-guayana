<?php
	require './model/model.php';
	$modelLogo = new Model;
	$modelCategories= new Model;
	$product = new Model;
	$arrCategories=array_map( function($arr){return $arr["TYPE"];}   , $modelCategories->getData("SELECT TYPE FROM PRODUCTS"));

	if(isset($_GET['product'])){
		$id = htmlentities(addslashes($_GET['product']));
		$product = ($product->getData("SELECT * FROM PRODUCTS WHERE ID='".$id."'"))[0];
		$product['about'] = explode(".", $product['about']);
		if(end($product['about'])==="\n"){
			array_pop($product['about']);
		}
	}

	require './view/product_view.php';
	$modelLogo = null;
	$modelCategories=null;
	$product = null;
	$id=null;
	$product=null;
	$arrCategories=null;
?>