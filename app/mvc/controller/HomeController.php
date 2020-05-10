<?php
//require(ROOT . "mvc/model/Model_User.php");

class HomeController{

    static $methodAccess = [
        'index' => 'GET',
    ];

    static function index()
    {
        Core::render(PARTIALS .'/home.php');
    }
}
