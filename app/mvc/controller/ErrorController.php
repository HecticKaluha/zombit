<?php
class ErrorController{
    static function error_404_controller($controller)
    {
        $message = "ERROR - 404 - De controller $controller is niet beschikbaar.";
        Core::render('view/partials/errors/error.', ["error" => true, "message" => $message]);
    }

    static function error_404_action($controller, $action)
    {
        $message = "ERROR - 404 - De action " . $action . "() is niet beschikbaar in de controller $controller.";
        Core::render('view/partials/errors/error.', ["error" => true, "message" => $message]);
    }

    static function error_incorrect_parameter_count($controller, $action){
        $message = "ERROR - De functie $action() die u probeerde aan te roepen in $controller, verwacht ten minste 1 parameter, deze is echter niet meegegeven in de url.";
        Core::render('view/partials/errors/error.', ["error" => true, "message" => $message]);
    }

    static function error_user_not_found($id){
        $message = "De opgevraagde gebruiker (id = $id) is niet in de database gevonden";
        Core::render('view/partials/errors/error.', ["error" => true, "message" => $message]);
    }
}
