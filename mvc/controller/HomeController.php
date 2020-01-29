<?php
require(ROOT . "mvc/model/Model_User.php");

class HomeController{

    public static function index()
    {
        //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
//    $users = getAllUsers();
        //2. Geef een view weer en geef de variable met medewerkers hieraan mee
        render('mvc/view/master.php');
    }
}
