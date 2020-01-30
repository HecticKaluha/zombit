<?php
class ErrorController{
    static function error_404_controller($data)
    {
        $message = "ERROR - 404 - De controller " . $data["controller"] . " is niet beschikbaar.";
        render('view/partials/errors/404.', ["error" => true, "message" => $message]);
    }

    static function error_404_action($data)
    {
        $message = "ERROR - 404 - De action " . $data['action'] . "() is niet beschikbaar in de controller " . $data['controller'] . ".";
        render('view/partials/errors/404.', ["error" => true, "message" => $message]);
    }

    static function error_incorrect_parameter_count($data){
        $message = "ERROR - De functie ". $data['action'] . "() die u probeerde aan te roepen in " . $data['controller'] . ", verwacht ten minste 1 parameter, deze is echter niet meegegeven in de url.";
        render('view/partials/errors/404.', ["error" => true, "message" => $message]);
    }
}
