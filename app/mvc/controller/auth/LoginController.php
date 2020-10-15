<?php
class LoginController{

    private $methodAccess = [
        'index' => 'GET',
        'login' => 'POST'
    ];
    private $name;

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

    public function index(){
        Core::render(PARTIALS . 'auth/login.php');
    }

    public function login(){
        $request = new LoginUserRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            if($user = Model_User::login($data['email'], $data['password'])){
                $_SESSION['user'] = $user;
                $_SESSION['message'] = array("type" => "success", "message" => "Succesvol ingelogd.");
                Core::render(PARTIALS . 'start/start.php', array('user' => $user));
            }
            else{
                $errors = array("password" => array("Ongeldig wachtwoord"));
                Core::render(PARTIALS . 'auth/login.php', array('data' => $data, 'errors' => $errors));
            }
        }
        else {
            Core::render(PARTIALS . 'auth/login.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }

    public function logOut(){

    }
}

