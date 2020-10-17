<?php

class Middleware{
    protected $passed = true;

    public function getPassed(){
        return $this->passed;
    }

    public function fail(){
        $_SESSION['message'] = array("type" => "error", "message" => "Generic middleware error message");
        Core::render(PARTIALS . 'auth/login.php');
    }
}