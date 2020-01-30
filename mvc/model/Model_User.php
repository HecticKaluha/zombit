<?php

class Model_User extends RedBean_SimpleModel
{
    function getAllUsers()
    {
        $result = null;
        try {


        } catch (Exception $e) {

        } finally {
            $conn = null;
        }
        return $result;
    }

    function getUser($id)
    {
        $result = null;
        try {


        } catch (Exception $e) {

        } finally {
            $conn = null;
        }
        return $result;
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

    public static function find($id){
        return R::load('user', $id);
    }
}

