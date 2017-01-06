<?php
/**
 * Created by PhpStorm.
 * User: ViCODeveloper
 * Date: 026 26.12.16
 * Time: 21:48
 */

defined('ViCODev') or die("Access interzis!");

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($conn,"utf8");

function getMenu($link){
	 $query = "SELECT * FROM products_menu ORDER BY parent, ro_name_product";
	 $result = mysqli_query($link,$query);

	 $cat = array();

	 while( $row = mysqli_fetch_assoc($result)){
		  if(!$row['parent']){
				$cat[$row['id_menu']][] = $row['ro_name_product'];
		  } else {
				$cat[$row['parent']]['sub'][$row['id_menu']] = $row['ro_name_product'];
		  }
	 }
	 return $cat;
}

function getAllProduct($link){
	 $query = "SELECT * FROM products LEFT JOIN brands ON products.id_brand = brands.id_brand";
	 $result = mysqli_query($link,$query);

	 $products = array();
	 while( $row = mysqli_fetch_assoc($result)){
		  $products[] = $row;
		  }
	 return $products;
}