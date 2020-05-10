<?php
class LevelController{

    static $methodAccess = [
        'index' => 'GET',
        'show' => 'GET',
        'create' => 'GET',
        'store' => 'POST',
        'edit' => 'GET',
        'update' => 'POST',
        'delete' => 'GET',
        'destroy' => 'POST',
    ];

    static function index()
    {
        //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
        //change to Model_LEvel
        $levels = Model_User::getAllUsers();
        //2. Geef een view weer en geef de variable met medewerkers hieraan mee
        Core::render('app/mvc/view/partials/level/level_template.php', $levels);
    }

    static function show($params){
        $level = Model_User::getUser($params[0]);
        Core::render('app/mvc/view/partials/level/level_template.php', $level);
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