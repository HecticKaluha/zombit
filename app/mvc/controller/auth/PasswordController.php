<?php
class PasswordController{
    static function index(){
        Core::render(PARTIALS . 'auth/forgotPassword.php');
    }

    static function resetPassword(){
        $request = new ResetPasswordRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            //mail the user a link to reset the password


            Core::render(PARTIALS . '/auth/passwordReset.php', array('data' => $data));
        }
        else {
            Core::render(PARTIALS . 'auth/forgotPassword.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }

    static function logOut(){

    }


}

