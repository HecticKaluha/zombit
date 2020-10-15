<?php

class RegisterController
{
    private $methodAccess = [
        'create' => 'GET',
        'store' => 'POST',
        'register' => 'GET',
        'forgotPassword' => 'GET',
    ];
    private $name;

    /**
     * @return array
     */
    public function getMethodAccess(): array
    {
        return $this->methodAccess;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

//    static function index(){
//        Core::render(PARTIALS . 'auth/register.php');
//    }


    public function create()
    {
        Core::render(PARTIALS . 'auth/register.php');
    }

    public function store()
    {
        $request = new CreateUserRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            $user = Model_User::store($data);
            $_SESSION['message'] = array("type"=>"success", "message" => "Account $user->username succesvol aangemaakt.");
            Core::render(PARTIALS . 'auth/login.php', array('user' => $user));
        }
        else {
            Core::render(PARTIALS . 'auth/register.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }
}

