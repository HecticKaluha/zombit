<?php
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

require(ROOT . '/packages/RedBeanPHP5_4_2/rb.php');
require(ROOT . "/core/config.php");
R::setup('mysql:host=localhost;dbname='. DB_NAME, DB_USER, DB_PASS);
R::useFeatureSet( 'novice/latest' );

require(ROOT . "/core/route.php");
require(ROOT . "/core/core.php");

route();