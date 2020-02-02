<?php
class LoginController{

    static function login(){
        Core::render(PARTIALS . 'auth/login.php');
    }

    static function logOut(){

    }


}

