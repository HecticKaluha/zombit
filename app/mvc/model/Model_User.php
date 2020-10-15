<?php

class Model_User extends  Model
{
    protected static $type = 'user';
    private $email = "tets";

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

    static function store($email, $username, $password)
    {
        $user = R::dispense(self::$type);
        $user->email = $email;
        $user->username = $username;
        $user->password = PASSWORD_HASH($password, PASSWORD_BCRYPT);
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

    static function login($email, $password){
        $bean = R::findOne(self::$type, "email = ?", array($email));
        if(!PASSWORD_VERIFY($password, $bean->password)) {
            return false;
        }
        else{
            return $bean;
        }
    }

    static function checkPasswordResetCode($email, $code){
        $bean = R::findOne(self::$type, 'email = ?', array($email));
        if($bean->code == $code){
            return true;
        }
        else{
            return false;
        }
    }

    static function resetPassword($email, $password){
        $user = self::getUserByEmail($email);
        $user->password = PASSWORD_HASH($password, PASSWORD_BCRYPT);
        $user->code = null;
        $id = R::store($user);
        return $user;
    }




}

