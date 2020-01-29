<?php
require(ROOT . "mvc/model/Model_User.php");

class UserController{
    function index()
    {
        //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
        $users = [];
        //2. Geef een view weer en geef de variable met medewerkers hieraan mee
        render('mvc/view/master.php', $users);
    }

    function show($params){
        //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
//    $users = getAllUsers();
        //2. Geef een view weer en geef de variable met medewerkers hieraan mee
        render('mvc/view/master.php', ["data" => $params]);
    }

    function create(){
        //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker

    }

    function store(){
        //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database

        //2. Bouw een url op en redirect hierheen

    }

    function edit($id){
        //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

        //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee

    }

    function update(){
        //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database

        //2. Bouw een url en redirect hierheen

    }

    function delete($id){
        //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

        //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

    }

    function destroy($id){
        //1. Delete een medewerker uit de database

        //2. Bouw een url en redirect hierheen

    }
}
