<?php

class RegisterController extends Controller
{
    protected $methodAccess = [
        'create' => 'GET',
        'store' => 'POST',
        'register' => 'GET',
        'forgotPassword' => 'GET',
    ];
    protected $name = 'RegisterController';


    public function create()
    {
        Core::render(PARTIALS . 'auth/register.php');
    }

    public function store()
    {
        $request = new CreateUserRequest($_POST);
        $data = $request->getData();

        if($request->isValid()){
            $user = R::dispense('user');
            $user->setEmail($data['email']);
            $user->setUsername($data['username']);
            $user->setPassword($data['password']);

            $userService = new UserService();
            $userService->store($user);

            $_SESSION['message'] = array("type"=>"success", "message" => "Account $user->username succesvol aangemaakt.");
            Core::render(PARTIALS . 'auth/login.php', array('user' => $user));
        }
        else {
            Core::render(PARTIALS . 'auth/register.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }
}

