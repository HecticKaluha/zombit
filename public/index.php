<?php
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

require(ROOT . '/packages/RedBeanPHP5_4_2-mysql/rb-mysql.php');
require(ROOT . "/core/config.php");
require(ROOT . "/core/route.php");
require(ROOT . "/core/core.php");

route();