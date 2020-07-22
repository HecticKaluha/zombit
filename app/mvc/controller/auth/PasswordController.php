<?php

class PasswordController
{
    private $methodAccess = [
        'index' => 'GET',
        'sendResetMail' => 'POST',
        'resetForm' => 'GET',
        'resetPassword' => 'POST',
        'logOut' => 'GET',
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

    public function index()
    {
        Core::render(PARTIALS . 'auth/forgotPassword.php');
    }

    public function sendResetMail()
    {
        $request = new ResetPasswordRequest($_POST);
        $data = $request->getData();
        if ($request->isValid()) {
            //maak code voor password reset aan.

            $subject = 'Reset je wachtwoord voor ' . env('APP_NAME');
            $template = 'passwordResetMail.php';
            $params = ['url' => env('SITE_DOMAIN').'password/resetForm'];

            if (Core::mail($data['email'], $subject, $template, $params)) {
                Core::render(PARTIALS . '/auth/passwordResetMailSent.php', array('data' => $data));
            } else {
                ErrorController::error_cannot_send_mail($mail->ErrorInfo);
            }
        } else {
            $errors = array("email" => array("Het is niet gelukt om een mail te sturen naar dit email. Probeer het later opnieuw."));
            Core::render(PARTIALS . '/auth/forgotPassword.php', array('data' => $data, 'errors' => $errors));
        }
    }

    public function resetForm(){
        var_dump('aangekomen');
        die();
//        Core::render(PARTIALS . '/auth/resetPassword.php', array('data' => $data, 'errors' => $errors));
    }

    public function resetPassword(){
        //code to reset the password
    }

    public function logOut()
    {

    }


}

