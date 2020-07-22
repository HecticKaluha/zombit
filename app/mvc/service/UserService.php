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

    public function store($data)
    {
        return $this->userDao->store($data);
    }

    function update($id, $data)
    {
        return $this->userDao->update($id, $data);
    }

    function destroy($id)
    {
        $this->userDao->destroy($id);
    }

    function generatePasswordResetCode($email){
        return $this->userDao->generatePasswordResetCode($email);
    }

    function updatePassword(){
        $this->userDao->updatePassword();
    }
}

