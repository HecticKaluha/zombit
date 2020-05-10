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
            //mail the user a link to reset the password

            // Multiple recipients
            $to = $data['email']; // note the comma

            // Subject
            $subject = 'Reset uw wachtwoord voor Zombit';

            // Message
            $message = '
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

            // To send HTML mail, the Content-type header must be set
            $headers['MIME-Version'] = '1.0';
            $headers['Content-type'] = 'text/html; charset=iso-8859-1';

            $headers['From'] = 'support@zombit.noreply.com';

            // Mail it
            if(mail($to, $subject, $message, $headers)){
                Core::render(PARTIALS . '/auth/passwordReset.php', array('data' => $data));
            }
            else{
                $errors = array("email" => array("Het is niet gelukt om een mail te sturen naar dit email. Probeer het later opnieuw."));
                Core::render(PARTIALS . '/auth/forgotPassword.php', array('data' => $data, 'errors' => $errors));
            }
        } else {
            Core::render(PARTIALS . 'auth/forgotPassword.php', array('data' => $data, 'errors' => $request->getErrors()));
        }
    }

    static function logOut()
    {

    }


}

