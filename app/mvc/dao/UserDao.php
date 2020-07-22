<?php


class UserDao implements DaoInterface
{
    private $type = 'user';

    function get($id)
    {
        return R::load($this->type, $id);
    }

    function getAll($ids = [])
    {
        return R::findAll($this->type);
    }

    function store($data)
    {
        $user = R::dispense($this->type);
        $user->email = $data['email'];
        $user->username = $data['username'];
        $user->password = PASSWORD_HASH($data['password'], PASSWORD_BCRYPT);
        $id = R::store($user);
        return $id;
    }

    function update($id, $data)
    {
        $user = $this->get($id);
        $user->email = $data['email'];
        $user->username = $data['username'];
        $user->password = PASSWORD_HASH($data['password'], PASSWORD_BCRYPT);
        $id = R::store($user);
        return $id;
    }

    function destroy($id)
    {
        $user = $this->get($id);
        R::trash($user);
    }

    function getByEmail($email){
        $user = R::findOne($this->type, 'email = ?',array($email));
        return $user;
    }

    function generatePasswordResetCode($email){
        $user = $this->getByEmail($email);
        $code = false;

        if(!is_null($user)){
            $code = substr(md5(rand()), 0, 7);
            $user->code = $code;
            R::store($user);
        }
        return $code;
    }

    function updatePassword(){

    }
}