<?php
//namespace Zombit;
session_start();

define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

//require autoloaded files
require(ROOT . "/app/core/config.php");
require_once(ROOT . 'vendor/autoload.php');

//not autoloadable... so require instead
require(ROOT . '/packages/RedBeanPHP5_4_2/rb.php');

R::setup('mysql:host=localhost;dbname='. env("DB_NAME"), env("DB_USERNAME"), env("DB_PASSWORD"));
R::useFeatureSet( 'novice/latest' );
$router = new Router();
$router->route();
//Router::route();