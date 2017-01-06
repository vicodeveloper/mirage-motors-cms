<?php
/**
 * Created by PhpStorm.
 * User: ViCODeveloper
 * Date: 026 26.12.16
 * Time: 21:48
 */

defined('ViCODev') or die("Access interzis!");




// connectare Model
/** @noinspection PhpIncludeInspection */
require_once MODEL;

// get menu massive from db
$getProductMenu = getMenu($conn);

// get all product list
$getProduct = getAllProduct($conn);



// adaugam fisierul cu functii
/** @noinspection PhpIncludeInspection */
require_once 'functions/functions.php';

// connectam template-ul implicit main
$view = empty($_GET['view']) ? 'includes/main' : $_GET['view'];

// conectare View
/** @noinspection PhpIncludeInspection */
require_once TEMPLATE."index.php";