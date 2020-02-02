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
        $validated = Core::validateRequest($_POST);
        $data = $validated['data'];
        $errors = $validated['errors'];
        if ($validated['valid']) {
            if ($data['password'] === $data['confirm_password']) {
                $user = R::dispense('user');
                $user->email = $data['email'];
                $user->username = $data['username'];
                $user->password = $data['username'];

                $id = R::store($user);

                //flash message to user
                Core::render(PARTIALS . 'auth/login.php');
            } else {
                //show errors on page
                $errors['confirm_password'] = "De wachtwoorden kwamen niet overeen";
                Core::render(PARTIALS . 'auth/register.php', array('data' => $data, 'errors' => $errors));
            }
        }
        else{
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

