<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Core
{
    // De render functie ontvangt het gevraagde bestandsnaam en heeft een data array als niet verplichte variabele
    // Allereerst wordt er door de data array heen gelopen en wordt elk item omgezet in een variabele. Bijvoorbeeld: $data["voornaam"] wordt in de view beschikbaar als $voornaam
    // Daarna worden er 3 bestanden ingeladen. De templates/header.php, jouw gewenste pagina en de templates/footer.php. Merk op dat .php hier al staat en je die dus niet mee hoeft te geven.
    static function render($filename, $data = null)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }

        require(ROOT . 'app/mvc/view/master.php');
    }

    static function mail($email, $subject, $template, $params)
    {
        $mail = new PHPMailer;

        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host = env('MAIL_HOST');                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = env('MAIL_SMTP_AUTH');            // Enable SMTP authentication
        $mail->Username = env('MAIL_USERNAME');             // SMTP username
        $mail->Password = env('MAIL_GOOGLE_APP_PASSWORD');  // SMTP password
        $mail->SMTPSecure = env('MAIL_SMTP_SECURE');        // Enable TLS encryption, `ssl` also accepted
        $mail->Port = env('MAIL_PORT');                     // TCP port to connect to

        $mail->setFrom(env('MAIL_FROM'), env('APP_NAME'));
        $mail->addAddress($email);   // Add a recipient

        $mail->isHTML(true);  // Set email format to HTML

        $mail->Subject = $subject;

        $body = file_get_contents(ROOT .'app/mvc/view/mails/' . $template);
        foreach($params as $key => $value)
        {
            $body = str_replace('{{'.$key.'}}', $value, $body);
        }

        $mail->Body = $body;
        return $mail->send();
    }
}