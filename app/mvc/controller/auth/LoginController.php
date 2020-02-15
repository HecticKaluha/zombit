<?php
class LoginController{
    static function index(){
        Core::render(PARTIALS . 'auth/login.php');
    }

    static function login(){
        $request = new LoginUserRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            if($user = Model_User::login($data)){
                $_SESSION['user'] = $user;
                $_SESSION['message'] = array("type" => "success", "message" => "Succesvol ingelogd.");
                Core::render(PARTIALS . 'auth/login.php', array('user' => $user));
            }
            else{
                $errors = array("password" => array("Ongeldig wachtwoord"));
                Core::render(PARTIALS . 'auth/login.php', array('data' => $data, 'errors' => $errors));
            }
        }
        else {
            Core::render(PARTIALS . 'auth/login.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }

    static function logOut(){

    }


}

