<?php

class PasswordController
{
    private $methodAccess = [
        'index' => 'GET',
        'sendResetMail' => 'POST',
        'checkCode' => 'POST',
        'resetPassword' => 'POST',
        'logOut' => 'GET',
    ];
    private $name;
    private $userService;

    /**
     * PasswordController constructor.
     * @param $userService
     */
    public function __construct()
    {
        $this->userService = new UserService();
    }


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

    public function index()
    {
        Core::render(PARTIALS . 'auth/forgotPassword.php');
    }

    public function sendResetMail()
    {
        $request = new SendResetMailRequest($_POST);
        $data = $request->getData();
        if ($request->isValid()) {
            //maak code voor password reset aan.
            $code = $this->userService->generatePasswordResetCode($data['email']);

            $subject = 'Reset je wachtwoord voor ' . env('APP_NAME');
            $template = 'passwordResetMail.php';
            $params = ['url' => env('SITE_DOMAIN').'password/resetForm', 'code' => $code];

            if (Core::mail($data['email'], $subject, $template, $params)) {
                Core::render(PARTIALS . '/auth/passwordResetCheckCode.php', array('data' => $data));
            } else {
                ErrorController::error_cannot_send_mail($mail->ErrorInfo);
            }
        } else {
            $errors = array("email" => array("Het is niet gelukt om een mail te sturen naar dit email. Probeer het later opnieuw."));
            Core::render(PARTIALS . '/auth/forgotPassword.php', array('data' => $data, 'errors' => $errors));
        }
    }

    public function checkCode(){
        $request = new CheckPasswordResetCodeRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            if(Model_User::checkPasswordResetCode($data['email'], $data['code'])){
                Core::render(PARTIALS . '/auth/resetPassword.php', array('data' => $data));
            }
            else{
                $errors = array("code" => array("De opgegeven code komt niet overeen met de wachtwoordresetcode van dit account."));
                Core::render(PARTIALS . '/auth/passwordResetCheckCode.php', array('data' => $data, 'errors' => $errors));
            }
        }
        else{
            Core::render(PARTIALS . '/auth/passwordResetCheckCode.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }

    public function resetPassword(){
        $request = new resetpasswordRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            Model_User::resetPassword($data['email'], $data['password']);
            Core::render(PARTIALS . '/auth/login.php', array('data' => $data));
        }
        else{
            Core::render(PARTIALS . '/auth/resetPassword.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }

    public function logOut()
    {

    }


}

