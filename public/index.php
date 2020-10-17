<?php
session_start();

define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

//require autoloaded files
require(ROOT . "/app/core/Config.php");
require_once(ROOT . 'vendor/autoload.php');

class_alias('\RedBeanPHP\R','\R');


R::setup('mysql:host=localhost;dbname='. env("DB_NAME"), env("DB_USERNAME"), env("DB_PASSWORD"));
R::useFeatureSet( 'novice/latest' );

$router = new Router();
$router->route();