<?php
/**
 * Created by PhpStorm.
 * User: ViCODeveloper
 * Date: 026 26.12.16
 * Time: 23:43
 */

defined('ViCODev') or die("Access interzis!"); ?>

<!DOCTYPE html>
<html lang="ro">
<head>
	 <meta charset="UTF-8">
	 <meta http-equiv="x-ua-compatible" content="ie=edge">
	 <title>Mirage Motors</title>

	 <!--Import Google Icon Font-->
	 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!--Import materialize.css-->
	 <link type="text/css" rel="stylesheet" href="<?=TEMPLATE;?>css/materialize.css"  media="screen,projection"/>

	 <!--Import mm.css-->
	 <link type="text/css" rel="stylesheet" href="<?=TEMPLATE;?>css/mm.css" />

	 <!--Let browser know website is optimized for mobile-->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<header>
	 <div class="container hide-on-small-only">
		  <!-- main Header -->
		  <div class="row main_header">
				<div class="col s12 m6 l3">
					 <img src="<?=TEMPLATE;?>img/logo.png">
				</div>
				<div class="col s12 m6 l5 ">
					 <p class="header-p">Iti oferim piesa cautata,<br />de cea mai buna calitate,<br /> in cel mai scurt timp</p>
				</div>
				<div class="col s12 m6 l4">
					 <div class="container" style="position: relative">
						  <span class="header-social-ico">+(373) 69-017-172</span>
					 </div>
				</div>
		  </div>
	 </div>
	 <div class="">
		  <div class="row no-margin-bottom">
				<!-- second Header -->
				<nav class="grey darken menu_bg">
					 <div class="nav-wrapper menu_bg container">
						  <a href="#" class="brand-logo center hide-on-large-only">Bine ati venit!</a>
						  <ul class="left hide-on-med-and-down menu_desc">
								<li <?php echo ($view == 'includes/main') ? "class='active'" : ""; ?>><a class="waves-effect" href="/">О нас</a></li>
								<li <?php echo ($view == 'products') ? "class='active'" : ""; ?>><a class="waves-effect" href="?view=products">Продукция</a></li>
								<li><a class="waves-effect" href="#">Услуги</a></li>
								<li><a class="waves-effect" href="#">Брэнды</a></li>
								<li><a class="waves-effect" href="#">Доставка</a></li>
								<li><a class="waves-effect" href="#">Контакты</a></li>
						  </ul>
						  <!-- Dropdown Trigger -->
						  <ul id="nav-mobile" class="right hide-on-med-and-down menu_desc menu_bg">
								<!-- Dropdown Trigger -->
								<li><a class="dropdown-button" href="#" data-activates="dropdown1">Язык сайта<i class="material-icons right">arrow_drop_down</i></a></li>
						  </ul>

						  <!-- Dropdown Structure -->
						  <ul id="dropdown1" class="dropdown-content menu_desc menu_bg">
								<li class="active2"><a href="#!">Русский</a></li>
								<li class="divider"></li>
								<li><a href="#">Русский</a></li>
								<li><a href="#">Română</a></li>
						  </ul>
						  <ul id="slide-out" class="left side-nav hide-on-large-only">
								<li><div class="userView">
										  <a href="<?=TEMPLATE;?>index.php"><img src="<?=TEMPLATE;?>img/logo.png"></a>
									 </div></li>
								<li> <a href="#" class="black-text"><i class="black-text material-icons">phone</i> +(373) 069-017-172</a></li>
								<li><a class="waves-effect" href="#">О нас</a></li>
								<li><a class="waves-effect" href="#">Продукция</a></li>
								<li><a class="waves-effect" href="#">Услуги</a></li>
								<li><a class="waves-effect" href="#">Брэнды</a></li>
								<li><a class="waves-effect" href="#">Доставка</a></li>
								<li><a class="waves-effect" href="#">Контакты</a></li>
						  </ul>
						  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
					 </div>
				</nav>
		  </div>
	 </div>
</header>