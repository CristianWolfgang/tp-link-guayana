<?php
	require './model/model.php';
	$model=new Model;
	$arrCategories=$model->getCategories();
	$arrProducts = $model->getProducts();
	$arrBrands = $model->getBrands();
	require './view/home.php';
?>