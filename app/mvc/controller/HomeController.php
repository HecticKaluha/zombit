<?php
//require(ROOT . "mvc/model/Model_User.php");

class HomeController{

    static function index()
    {
        Core::render('app/mvc/view/partials/home.php');
    }
}
