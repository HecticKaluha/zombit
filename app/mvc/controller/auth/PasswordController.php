<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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

            $mail = new PHPMailer;

            $mail->isSMTP();                                    // Set mailer to use SMTP
            $mail->Host = env('MAIL_HOST');                     // Specify main and backup SMTP servers
            $mail->SMTPAuth = env('MAIL_SMTP_AUTH');            // Enable SMTP authentication
            $mail->Username = env('MAIL_USERNAME');             // SMTP username
            $mail->Password = env('MAIL_GOOGLE_APP_PASSWORD');  // SMTP password
            $mail->SMTPSecure = env('MAIL_SMTP_SECURE');        // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                  // TCP port to connect to

            $mail->setFrom('noreply@zombit.nl', env('APP_NAME'));
            $mail->addAddress($data['email']);   // Add a recipient

            $mail->isHTML(true);  // Set email format to HTML

            $bodyContent = '
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

            $mail->Subject = 'Reset je wachtwoord voor Zombit';
            $mail->Body = $bodyContent;

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

