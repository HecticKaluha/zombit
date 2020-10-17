<?php
class LoginController extends Controller{

    protected $methodAccess = [
        'index' => 'GET',
        'login' => 'POST'
    ];
    protected $middleware = [
        'index' => [],
        'login' => []
    ];
    protected $name = 'LoginController';


    public function index(){
        Core::render(PARTIALS . 'auth/login.php');
    }

    public function login(){
        $request = new LoginUserRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            $userService = new UserService();
            if($user = $userService->login($data['email'], $data['password'])){
                $_SESSION['user'] = $user->id;
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

