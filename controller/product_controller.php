<?php
	
	if(isset($_GET['product'])){

		require './model/model.php';
		$model=new Model;
		$arrCategories=$model->getCategories();
		$arrProducts = $model->getProducts();
		$arrBrands = $model->getBrands();
		$rootPath = $model->getRootPath();

		$product=$model->getProduct($_GET["product"]);
		$product["about"]= explode(".",$product["about"]);
		array_pop($product["about"]);
		require './view/product_view.php';
	}
?>