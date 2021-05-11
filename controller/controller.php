<?php
	require './model/model.php';
	$modelLogo = new Model;
	$modelProducts = new Model;
	$modelCategories= new Model;
	$arrCategories=array_map( function($arr){return $arr["TYPE"];}   , $modelCategories->getData("SELECT TYPE FROM PRODUCTS"));

	require './view/home.php';
	$modelLogo = null;
	$modelProducts=null;
	$modelCategories=null;
	$arrCategories=null;
?>