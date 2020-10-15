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

    static function getUserByEmail($email){
        return R::findOne('user', 'email = ?', array($email));
    }

    static function store($data)
    {
        $user = R::dispense(self::$type);
        $user->email = $data['email'];
        $user->username = $data['username'];
        $user->password = PASSWORD_HASH($data['password'], PASSWORD_BCRYPT);
        $id = R::store($user);
        return $user;
    }

    function patchUser($data)
    {
        // Maak hier de code om een user te bewerken
    }

    function destroyUser($id)
    {
        // Maak hier de code om een user te verwijderen
    }

    /**
     * @return string
     */
    public static function getType()
    {
        return self::$type;
    }

    static function login($data){
        $bean = R::findOne(self::$type, "email = ?", array($data['email']));
        if(!PASSWORD_VERIFY($data['password'], $bean->password)) {
            return false;
        }
        else{
            return $bean;
        }
    }

    static function checkPasswordResetCode($data){
        $bean = R::findOne(self::$type, 'email = ?', array($data['email']));
        if($bean->code == $data['code']){
            return true;
        }
        else{
            return false;
        }
    }

    static function resetPassword($data){
        $user = self::getUserByEmail($data['email']);
        $user->password = PASSWORD_HASH($data['password'], PASSWORD_BCRYPT);
        $user->code = null;
        $id = R::store($user);
        return $user;
    }




}

