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

    function checkPasswordResetCode($data){
        return $this->userDao->checkPasswordResetCode($data);
    }

    function updatePassword(){
        return $this->userDao->updatePassword();
    }

    function resetPassword($data){
        return $this->userDao->resetPassword($data);
    }

    function login($data){
        return $this->userDao->login($data);
    }
}

