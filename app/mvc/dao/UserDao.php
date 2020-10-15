<?php

class UserDao implements DaoInterface
{
    private $type = 'user';

    public function get($id)
    {
        return R::load($this->type, $id);
    }

    public function getUserByEmail($email){
        return R::findOne('user', 'email = ?', array($email));
    }

    public function getAll($ids = [])
    {
        return R::findAll($this->type);
    }

    public function store($user)
    {
//        $user = R::dispense($this->type);
//        $user->email = $email;
//        $user->username = $username;
//        $user->password = PASSWORD_HASH($password, PASSWORD_BCRYPT);
        $id = R::store($user);
        $user->id = $id;
        return $user;
    }

    public function update($user)
    {
//        $user = $this->get($id);
//        $user->email = $data['email'];
//        $user->username = $data['username'];
//        $user->password = PASSWORD_HASH($data['password'], PASSWORD_BCRYPT);
        $id = R::store($user);
        $user->id = $id;
        return $id;
    }

    public function destroy($user)
    {
        R::hunt($user->id);
    }

    public function getByEmail($email){
        $user = R::findOne($this->type, 'email = ?',array($email));
        return $user;
    }

    public function generatePasswordResetCode($email){
        $user = $this->getByEmail($email);
        $code = false;

        if(!is_null($user)){
            $code = substr(md5(rand()), 0, 7);
            $user->code = $code;
            R::store($user);
        }
        return $code;
    }

    public function resetPassword($data){
        $user = $this->getUserByEmail($data['email']);
        $user->password = PASSWORD_HASH($data['password'], PASSWORD_BCRYPT);
        $user->code = null;
        $id = R::store($user);
        return $user;
    }

    public function checkPasswordResetCode($data){
        $bean = R::findOne($this->type, 'email = ?', array($data['email']));
        if($bean->code == $data['code']){
            return true;
        }
        else{
            return false;
        }
    }

    public function login($data){
        $bean = R::findOne($this->type, "email = ?", array($data['email']));
        if(!PASSWORD_VERIFY($data['password'], $bean->password)) {
            return false;
        }
        else{
            return $bean;
        }
    }
}