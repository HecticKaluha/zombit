<?php

class PasswordController extends Controller
{
    protected $methodAccess = [
        'index' => 'GET',
        'sendResetMail' => 'POST',
        'checkCode' => 'POST',
        'resetPassword' => 'POST',
        'logOut' => 'GET',
    ];
    protected $middleware = [
        'index' => [],
        'sendResetMail' => [],
        'checkCode' => [],
        'resetPassword' => []
    ];
    protected $name = 'PasswordController';
    private $userService;

    /**
     * PasswordController constructor.
     * @param $userService
     */
    public function __construct()
    {
        $this->userService = new UserService();
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
            $mail = Core::mail($data['email'], $subject, $template, $params);
            
            var_dump($mail->ErrorInfo);
            die();

            //todo check if mail is sent. 
            if($mail) {
                Core::render(PARTIALS . '/auth/passwordResetCheckCode.php', array('data' => $data));
            } else {
                ErrorController::error_cannot_send_mail($mail->ErrorInfo);
            }
        } else {
            $errors = array("email" => array("Het is niet gelukt om een mail te sturen naar dit e-mail. Probeer het later opnieuw."));
            Core::render(PARTIALS . '/auth/forgotPassword.php', array('data' => $data, 'errors' => $errors));
        }
    }

    public function checkCode(){
        $request = new CheckPasswordResetCodeRequest($_POST);
        $data = $request->getData();
        if($request->isValid()){
            $userService = new UserService();
            if($userService->checkPasswordResetCode($data['email'], $data['code'])){
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
            $userService = new UserService();
            $userService->resetPassword($data['email'], $data['password']);
            $_SESSION['message'] = array("type" => "success", "message" => "Password succesvol gereset.");
            Core::render(PARTIALS . '/auth/login.php', array('data' => $data));
        }
        else{
            Core::render(PARTIALS . '/auth/resetPassword.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }
}

