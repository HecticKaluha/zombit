<?php

class Model_User extends  Model
{
    private static $createRules = [
        "email" => 'required,unique,min:3,email',
        "username" => 'required,min:3',
        "password" => 'required,min:8',
        "confirm_password" => "required"
    ];
    private static $type = 'user';

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
        $validated = parent::validateRequest(self::$type, self::$createRules, $data);
        if($validated['valid']){
            $user = R::dispense(self::$type);
            $user->email = $data['email'];
            $user->username = $data['username'];
            $user->password = $data['username'];
            $id = R::store($user);
            return $user;
        } else{
            return $validated;
        }
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

