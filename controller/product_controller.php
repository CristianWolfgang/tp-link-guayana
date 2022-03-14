<?php
	
	if(isset($_GET['product'])){
	
		//	$id = htmlentities(addslashes($_GET['product']));
		// $product = ($product->getData("SELECT * FROM PRODUCTS WHERE ID='".$id."'"))[0];
		// $product['about'] = explode(".", $product['about']);
		// if(end($product['about'])==="\n"){
		// 	array_pop($product['about']);
		// }
		require './model/model.php';
		$model=new Model;
		$arrCategories=$model->getCategories();
		$arrProducts = $model->getProducts();
		$arrBrands = $model->getBrands();
		
		$product=$model->getProduct($_GET["product"]);
		//$product["about"]= explode(" ",$product["about"]);
		require './view/product_view.php';
	}
?>