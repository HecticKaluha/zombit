<?php

class Model_User extends  Model
{
    protected static $type = 'user';

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

    static function store($data)
    {
        $user = R::dispense(self::$type);
        $user->email = $data['email'];
        $user->username = $data['username'];
        $user->password = $data['username'];
        $id = R::store($user);
        return $user;
    }

    function patchUser($data)
    {
        // Maak hier de code om een medewerker te bewerken
    }

    function destroyUser($id)
    {
        // Maak hier de code om een medewerker te verwijderen
    }

    /**
     * @return array
     */
    public static function getCreateRules()
    {
        return self::$createRules;
    }

    /**
     * @return string
     */
    public static function getType()
    {
        return self::$type;
    }

    static function test(){
        return "gelukt";
    }


}

