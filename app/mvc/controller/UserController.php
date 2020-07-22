<?php
class UserController{

    private $methodAccess = [
        'index' => 'GET',
        'show' => 'GET',
        'create' => 'GET',
        'store' => 'POST',
        'edit' => 'GET',
        'update' => 'POST',
        'delete' => 'GET',
        'destroy' => 'POST',
    ];
    private $name;

    public function getMethodAccess(): array
    {
        return $this->methodAccess;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function index()
    {
        $users = [];
        Core::render('app/mvc/view/partials/user/index.php', ['users' => $users]);
    }

    public function show($params){
        $user = Model_User::getUser($params[0]);
        if($user->id != 0){
            Core::render('app/mvc/view/partials/user/show.php', ["user" => $user]);
        } else{
            ErrorController::error_user_not_found($params[0]);
        }
    }

    public function create(){
        //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker

    }

    public function store(){
        //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database

        //2. Bouw een url op en redirect hierheen

    }

    public function edit($id){
        //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

        //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee

    }

    public function update(){
        //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database

        //2. Bouw een url en redirect hierheen

    }

    public function delete($id){
        //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

        //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

    }

    public function destroy($id){
        //1. Delete een medewerker uit de database

        //2. Bouw een url en redirect hierheen

    }
}
