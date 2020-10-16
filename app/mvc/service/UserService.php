<?php

class UserService implements ServiceInterface
{
    private $userDao;

    public function __construct()
    {
        $this->userDao = new UserDao();
    }


    public function get($id)
    {
        return $this->userDao->get($id);
    }

    public function getAll()
    {
        return $this->userDao->getAll();
    }

    public function store($user)
    {
        return $this->userDao->store($user);
    }

    function update($user)
    {
        return $this->userDao->update($user);
    }

    function destroy($id)
    {
        $this->userDao->destroy($id);
    }

    function generatePasswordResetCode($email){
        return $this->userDao->generatePasswordResetCode($email);
    }

    function checkPasswordResetCode($email,$code){
        return $this->userDao->checkPasswordResetCode($email,$code);
    }

    function updatePassword(){
        return $this->userDao->updatePassword();
    }

    function resetPassword($email, $password){
        return $this->userDao->resetPassword($email, $password);
    }

    function login($email, $password){
        return $this->userDao->login($email, $password);
    }
}

