<?php
//require(ROOT . "mvc/model/Model_User.php");

class HomeController{

    static function index()
    {
        Core::render(PARTIALS .'/home.php');
    }
}
