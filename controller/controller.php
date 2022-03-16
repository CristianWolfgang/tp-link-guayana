<?php
	require './model/model.php';
	$model=new Model;
	$arrCategories=$model->getCategories();
	$arrProducts = $model->getProducts();
	$arrBrands = $model->getBrands();
	$rootPath = $model->getRootPath();
	require './view/home.php';
?>