<?php

class RegisterController
{
    static $methodAccess = [
        'create' => 'GET',
        'store' => 'POST',
        'register' => 'GET',
        'forgotPassword' => 'GET',
    ];

//    static function index(){
//        Core::render(PARTIALS . 'auth/register.php');
//    }

    static function create()
    {
        Core::render(PARTIALS . 'auth/register.php');
    }

    static function store()
    {
        $request = new CreateUserRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            $user = Model_User::store($data);
            $_SESSION['message'] = array("type"=>"success", "message" => "Account $user->username succesvol aangemaakt.");
            Core::render(PARTIALS . 'auth/login.php', array('user' => $user));
        }
        else {
            Core::render(PARTIALS . 'auth/register.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }

    static function register()
    {

    }

    static function forgotPassword()
    {

    }


}

