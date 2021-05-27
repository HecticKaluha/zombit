<?php

class Model_User extends  Model
{
    private $type = 'user';


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = PASSWORD_HASH($password, PASSWORD_BCRYPT);
    }

    public function getCode(){
        return $this->code;
    }

    public function setCode($code){
        $this->code = $code;
    }
}


