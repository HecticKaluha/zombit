<?php

class PasswordController
{
    static $methodAccess = [
        'index' => 'GET',
        'resetPassword' => 'POST',
        'logOut' => 'GET',
    ];

    static function index()
    {
        Core::render(PARTIALS . 'auth/forgotPassword.php');
    }

    static function resetPassword()
    {
        $request = new ResetPasswordRequest($_POST);
        $data = $request->getData();
        if ($request->isValid()) {

            $subject = 'Reset je wachtwoord voor ' . env('APP_NAME');
            $body = '
                        <html>
                            <head>
                                <title>Reset uw wachtwooord voor zombit</title>
                            </head>
                            <body>
                                <h1>Reset je wachtoord voor Zombit.</h1>
                                <p>Klik op de onderstaande link om uw wachtwoord te resetten.</p>
                                <a href="#">Link hier</a>
                            </body>
                        </html>
                       ';

            $mail = Core::mail($data['email'], $subject, $body);

            if ($mail->send()) {
                Core::render(PARTIALS . '/auth/passwordReset.php', array('data' => $data));
            } else {
                ErrorController::error_cannot_send_mail($mail->ErrorInfo);
            }
        } else {
            $errors = array("email" => array("Het is niet gelukt om een mail te sturen naar dit email. Probeer het later opnieuw."));
            Core::render(PARTIALS . '/auth/forgotPassword.php', array('data' => $data, 'errors' => $errors));
        }
    }
//    else
//{
//Core::render(PARTIALS . 'auth/forgotPassword.php', array('data' => $data, 'errors' => $request->getErrors()));
//}
//}

    static function logOut()
    {

    }


}

