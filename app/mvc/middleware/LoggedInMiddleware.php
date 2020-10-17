<?php

class LoggedInMiddleware extends Middleware{

    public function __Construct(){
        //state the invalid case to fire the middleware interception
        if(empty($_SESSION['user'])){
            $this->passed = false;
            $this->fail();
        }
    }
    public function fail(){
        $_SESSION['message'] = array("type" => "error", "message" => "Je moet eerst inloggen om deze pagina te bekijen");
        Core::render(PARTIALS . 'auth/login.php');
    }
}