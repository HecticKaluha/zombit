<?php

class Model_User extends RedBean_SimpleModel
{
    private static $createRules = [
        "email" => 'required,unique',
        "username" => 'required',
        "password" => 'required',
        "confirm_password" => "required"
    ];


    static function getAllUsers()
    {
        $result = null;
        try {

        } catch (Exception $e) {

        } finally {
            $conn = null;
        }
        return $result;
    }

    static function getUser($id)
    {
        return R::load('user', $id);
    }

    function storeUser($data)
    {
        // Maak hier de code om een medewerker toe te voegen
    }

    function patchUser($data)
    {
        // Maak hier de code om een medewerker te bewerken
    }

    function destroyUser($id)
    {
        // Maak hier de code om een medewerker te verwijderen
    }

    static function validateCreate($data){
        return Core::validateRequest('user', Model_User::$createRules, $data);
    }
}

