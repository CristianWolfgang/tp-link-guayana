<?php
	require './model/model.php';
	$modelLogo = new Model;
	$modelSearch = new Model;
	$modelCategories= new Model;
	$arrCategories=array_map( function($arr){return $arr["TYPE"];}   , $modelCategories->getData("SELECT TYPE FROM PRODUCTS"));
	$key;
	$results=array();
	$title = "Tp-link Guayana - ";
	
	if(isset($_GET['q'])){
		require './controller/array_unique_multidimensional.php';
		$keys = htmlentities(addslashes($_GET["q"]),ENT_QUOTES,"UTF-8");
		$keys = explode(" ", $keys);

		foreach ($keys as $key) {
			array_push($results, $modelSearch->getData("SELECT * FROM PRODUCTS WHERE KEYBOARDS LIKE '%". $key ."%'"));
		}
		$results = (array_unique_multidimensional($results))[0];
		$title .= "Resultados de ". $key;
		
	}else if(isset($_GET['category'])){
		$key = htmlentities(addslashes($_GET['category']),ENT_QUOTES,"UTF-8");
		$results = $modelSearch->getData("SELECT * FROM PRODUCTS WHERE TYPE LIKE '%". $key ."%'");
		$title .= $key."s";
	}else if(isset($_GET['company'])){
		$key = htmlentities(addslashes($_GET['company']),ENT_QUOTES,"UTF-8");
		$results = $modelSearch->getData("SELECT * FROM PRODUCTS WHERE COMPANY LIKE '%". $key ."%'");
		$title .= $key;
	}else if(isset($_GET['promo'])){
		$key = htmlentities(addslashes($_GET['promo']),ENT_QUOTES,"UTF-8");
		$results = $modelSearch->getData("SELECT * FROM PRODUCTS WHERE PROMO=1");
		$title .= "Promociones";
	}else if(isset($_GET['new'])){
		$key = htmlentities(addslashes($_GET['new']),ENT_QUOTES,"UTF-8");
		$results = $modelSearch->getData("SELECT * FROM PRODUCTS WHERE NEW=1");
		$title .= "Productos nuevos";
	}
	
	require './view/search_view.php';
	$modelLogo=null;
	$modelSearch=null;
	$arrCategories=null;
	$key=null;
	$results=null;
?>