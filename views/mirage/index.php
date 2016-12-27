<?php
    defined('ViCODev') or die("Access interzis!");

    include_once 'includes/header.php'; //header template

    include $view.".php"; // main template (if no load other pages)

    include_once 'includes/footer.php'; // footer template

	if($view == 'products'){ include_once 'includes/product-footer.php';}

