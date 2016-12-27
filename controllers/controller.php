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

// connectam template-ul implicit main
$view = empty($_GET['view']) ? 'includes/main' : $_GET['view'];

// conectare View
/** @noinspection PhpIncludeInspection */
require_once TEMPLATE."index.php";