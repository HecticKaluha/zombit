<?php

class Router
{
    private $errorController;
    private $url;
    public function __construct()
    {
        $this->errorController = new ErrorController();
    }

    // Met de route functie wordt bepaald welke controller en welke action er moet worden ingeladen
    function route()
    {
        // Hier wordt de functie aangeroepen die de URL op splitst op het standaard seperatie teken (in PHP is dit een /)

        if(isset($_GET['url'])){
            $this->url = new Url($_GET['url']);
        }else{
            $this->url = new Url();
        }
        // Er wordt een variable opgemaakt uit de URL, de eerste variabele wordt geplaatst in de key controller, de tweede wordt in de key action geplaatst. De overige worden in params geplaatst (als array)
        // Als die niet bestaat, gaat hij de standaard controller inladen, welke in Core.php is aangemaakt.
        // Hierna roept hij standaard de index functie aan.
        if (null == $this->url->getController()) {
            $controller = new HomeController();
            $controller->index();
        } //wanneer we de controller moeten zoeken
        else {
            //check if file exist somewhere (nested) in controller folder
            $found_file = $this->checkFileExist();
            //if file is found in controller folder (recursively), call the functions on it
            if ($found_file) {
                $controller = $this->url->getController();
                $controller = new $controller;
                $action = $this->url->getAction();
                // Vervolgens wordt er gekeken of er een functie met de naam bestaat die in de key action zit.
                // Bijvoorbeeld: http://localhost/Students/Edit/1, dan is de action Edit.
                // De 1 wordt als eerste 'params' geplaatst
                // In de controller Students wordt gekeken of de function Edit bestaat.
                if (method_exists($controller, $action)) {
                    //Controleer of de action die je opvraagt, wel opgevraagd mag worden met de requesttype (Get/Post)
                    $methodAccess = $controller->getMethodAccess();
                    if ($_SERVER['REQUEST_METHOD'] == (array_key_exists($action, $methodAccess) ? strtoupper($methodAccess[$action]) : Null)) {
                        // Wanneer die bestaat wordt er gekeken of je parameters hebt meegegeven bestaan. Als die bestaan worden die aan de functie meegegeven
                        if ($this->url->getParams()) {
                            $controller->$action($this->url->getParams());
                        } else {
                            // Als ze niet bestaan, wordt alleen de functie uitgevoerd
                            try {
                                $reflectedFunction = new ReflectionMethod($controller->getName(), $action);
                                if(count( $reflectedFunction->getParameters()) == 0){
//                                    try {
                                        $controller->$action();
//                                    }
//                                    catch (Exception $e) {
//                                        $this->errorController->error_scripting_mistake($controller->getName(), $action);
//                                    }
                                }
                                //wanneer de functie wel parameters accepteerd, maar deze niet zijn meegegeven, dan wordt er een error weergegeven
                                else{
                                    $this->errorController->error_incorrect_parameter_count($controller->getName(), $action);
                                }
                            } catch (ReflectionException $e) {
                                $this->errorController->error_router_reflection($controller->getName(), $action);
                            }

                        }
                    } else {
                        $this->errorController->error_wrong_route_access_type($controller->getName(), $action, $_SERVER['REQUEST_METHOD']);
                    }
                } else {
                    // Wanneer de action niet bestaat, wordt de errorpagina getoond
                    $this->errorController->error_404_action($controller->getName(), $action);
                }
            } else {
                // Wanneer de controller niet bestaat, wordt de errorpagina getoond
                $this->errorController->error_404_controller($this->url->getController());
            }
        }
    }

    function checkFileExist(){
        $it = new RecursiveDirectoryIterator(ABSOLUTE_CONTROLLER_URL);
        $display = Array('php');
        $found_file = false;
        foreach (new RecursiveIteratorIterator($it) as $fileToCheck) {
            $exploded = explode('.', $fileToCheck);
            $extension = array_pop($exploded);
            if (in_array(strtolower($extension), $display)) {
                $sub_path = substr($fileToCheck, strpos($fileToCheck, CONTROLLER_PATH) + strlen(CONTROLLER_PATH));
                if (strpos($sub_path, $this->url->getController()) !== false) {
                    $found_file = $sub_path;
                    break;
                }
            }
        }
        return $found_file;
    }
}
