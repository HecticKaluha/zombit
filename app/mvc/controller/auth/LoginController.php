<?php
class LoginController{
    static function index(){
        Core::render(PARTIALS . 'auth/login.php');
    }

    static function login(){
        $request = new LoginUserRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            var_dump('Aangekomen');
            die();
            $user = Model_User::login($data);
            $_SESSION['message'] = "Succesvol ingelogd.";
            Core::render(PARTIALS . 'auth/login.php', array('user' => $user));
        }
        else {
            Core::render(PARTIALS . 'auth/login.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }

    static function logOut(){

    }


}

