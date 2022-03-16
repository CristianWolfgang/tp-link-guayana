<?php
	require './model/model.php';
	$model = new Model;
	$key;
	$title = "Tp-link Guayana - ";
	$rootPath = $model->getRootPath();
	$arrBrands=$model->getBrands();
	$arrCategories= $model->getCategories();
	if(isset($_GET["category"])){
		$title.=$_GET["category"];
		$arrProducts=$model->getProductsByCategory($_GET["category"]);
	}else if(isset($_GET["promo"])){
		$title.="Productos en promoción";
		$arrProducts=$model->getPromoProducts();
	}else if(isset($_GET["new"])){
		$title.="Productos nuevos";
		$arrProducts=$model->getNewProducts();
	}else if(isset($_GET["search"])){
		$title.="Resultados de ".$_GET["search"];
		$arrProducts=$model->searchProduct($_GET["search"]);
	}else if(isset($_GET["company"])){
		$title.=$_GET["company"];
		$arrProducts=$model->getProductsByCompany($_GET["company"]);
	}
	require './view/search_view.php';
?>