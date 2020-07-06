<?php

class PasswordController
{
    static $methodAccess = [
        'index' => 'GET',
        'sendResetMail' => 'POST',
        'resetForm' => 'GET',
        'resetPassword' => 'POST',
        'logOut' => 'GET',
    ];

    static function index()
    {
        Core::render(PARTIALS . 'auth/forgotPassword.php');
    }

    static function sendResetMail()
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

    static function resetForm(){
        var_dump('aangekomen');
        die();
//        Core::render(PARTIALS . '/auth/resetPassword.php', array('data' => $data, 'errors' => $errors));
    }

    static function resetPassword(){
        //code to reset the password
    }

    static function logOut()
    {

    }


}

