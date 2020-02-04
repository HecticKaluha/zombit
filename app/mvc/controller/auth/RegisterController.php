<?php

class RegisterController
{

//    static function index(){
//        Core::render(PARTIALS . 'auth/register.php');
//    }

    static function create()
    {
        Core::render(PARTIALS . 'auth/register.php');
    }

    static function store()
    {
        $result = Model_User::store($_POST);
        if(gettype($result) !== "array"){
            //flash message to user.
            Core::render(PARTIALS . 'auth/login.php', array('user' => $result));
        }
        else {
            Core::render(PARTIALS . 'auth/register.php', array('data' => $result['data'], 'errors' => $result['errors']));
        }
    }

    static function register()
    {

    }

    static function forgotPassword()
    {

    }


}

