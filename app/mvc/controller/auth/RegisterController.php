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
        $validated = Model_User::validateCreate($_POST);
        $data = $validated['data'];
        $errors = $validated['errors'];
        if ($validated['valid']) {
            $user = R::dispense('user');
            $user->email = $data['email'];
            $user->username = $data['username'];
            $user->password = $data['username'];

            $id = R::store($user);

            //flash message to user
            Core::render(PARTIALS . 'auth/login.php');

        } else {
            Core::render(PARTIALS . 'auth/register.php', array('data' => $data, 'errors' => $errors));
        }
    }

    static function register()
    {

    }

    static function forgotPassword()
    {

    }


}

