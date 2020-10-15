<?php
class ErrorController{
    public function error_404_controller($controller)
    {
        $message = "ERROR - 404 - De controller $controller is niet beschikbaar.";
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }

    public function error_404_action($controller, $action)
    {
        $message = "ERROR - 404 - De action " . $action . "() is niet beschikbaar in de controller $controller.";
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }

    public function error_incorrect_parameter_count($controller, $action){
        $message = "ERROR - De functie $action() die u probeerde aan te roepen in $controller verwacht ten minste 1 parameter, deze is echter niet meegegeven in de url.";
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }

    public function error_user_not_found($id){
        $message = "De opgevraagde gebruiker (id = $id) is niet in de database gevonden";
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }

    public function error_incomplete_validation_ruleset($notFound, $type){
        $message = "Key(s) ".implode(", ", $notFound) ." niet gevonden in de ruleset van Model_".ucfirst($type);
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }

    public function error_wrong_route_access_type($controller, $action, $type){
        $message = "ERROR - De functie $action() die u probeerde aan te roepen in $controller accepteerd geen request van het type $type ";
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }

    public function error_cannot_send_mail($errorInfo){
        $message = "ERROR - De functie $action() die u probeerde aan te roepen in $controller accepteerd geen request van het type $type ";
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }

    public function error_scripting_mistake($controller, $action){
        $message = "ERROR - De functie $action() die u probeerde aan te roepen in $controller bevat codematige errors en heeft een exception opgegooid. Contacteer de beheerder van Zombit ";
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }

    public function error_router_reflection($controller, $action){
        $message = "ERROR - De functie $action() die u probeerde aan te roepen in $controller kon niet worden gereflect in de router. Contacteer de beheerder van Zombit ";
        Core::render('app/mvc/view/partials/errors/error.php', ["error" => true, "message" => $message]);
    }
}
