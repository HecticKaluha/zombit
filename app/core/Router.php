<?php
class Router
{
    // Met de route functie wordt bepaald welke controller en welke action er moet worden ingeladen
    static function route()
    {
        // Hier wordt de functie aangeroepen die de URL op splitst op het standaard seperatie teken (in PHP is dit een /)
        $url = Router::splitUrl();
        // Er wordt een variable opgemaakt uit de URL, de eerste variabele wordt geplaatst in de key controller, de tweede wordt in de key action geplaatst. De overige worden in params geplaatst (als array)
        // Als die niet bestaat, gaat hij de standaard controller inladen, welke in Core.php is aangemaakt.
        // Hierna roept hij standaard de index functie aan.
        if (!$url['controller']) {
            call_user_func(array(__NAMESPACE__ . '\\' . DEFAULT_CONTROLLER, 'index'));
        }
        //wanneer we de controller moeten zoeken
        else {
            //check if file exist somewhere (nested) in controller folder
            $it = new RecursiveDirectoryIterator(ABSOLUTE_CONTROLLER_URL);
            $display = Array('php');
            $found_file = false;
            foreach (new RecursiveIteratorIterator($it) as $fileToCheck) {
                $exploded = explode('.', $fileToCheck);
                $extension = array_pop($exploded);
                if (in_array(strtolower($extension), $display)) {
                    $sub_path = substr($fileToCheck, strpos($fileToCheck, CONTROLLER_PATH) + strlen(CONTROLLER_PATH));
                    if (strpos($sub_path, $url['controller']) !== false) {
                        $found_file = $sub_path;
                        break;
                    }
                }
            }
            //if file is found in controller folder (recursively), call the functions on it
            if ($found_file) {
                // Vervolgens wordt er gekeken of er een functie met de naam bestaat die in de key action zit.
                // Bijvoorbeeld: http://localhost/Students/Edit/1, dan is de action Edit.
                // De 1 wordt als eerste 'params' geplaatst
                // In de controller Students wordt gekeken of de function Edit bestaat.
                if (method_exists($url['controller'], $url['action'])) {
                    // Wanneer die bestaat wordt er gekeken of je parameters hebt meegegeven bestaan. Als die bestaan worden die aan de functie meegegeven
                    if ($url['params']) {
                        call_user_func_array(array(__NAMESPACE__ . '\\' . $url['controller'], $url['action']), array($url['params']));
                    } else {
                        // Als ze niet bestaan, wordt alleen de functie uitgevoerd
                        try {
                            call_user_func([__NAMESPACE__ . '\\' . $url['controller'], $url['action']]);
                            //wanneer de functie wel parameters accepteerd, maar deze niet zijn meegegeven, dan wordt er een error weergegeven
                        } catch (ArgumentCountError $e) {
                            ErrorController::error_incorrect_parameter_count($url['controller'], $url['action']);
//                        call_user_func_array(array(__NAMESPACE__ . '\ErrorController', 'error_incorrect_parameter_count'), array(["controller" => $url['controller'], "action" => $url['action']]));
                        }
                    }
                } else {
                    // Wanneer de action niet bestaat, wordt de errorpagina getoond
                    ErrorController::error_404_action($url['controller'], $url['action']);
                }
            } else {
                // Wanneer de controller niet bestaat, wordt de errorpagina getoond
                ErrorController::error_404_controller($url['controller']);
            }
        }
    }

    static function splitUrl()
    {
        // Als er iets in de key url zit van $_GET, wordt de code uitgevoerd
        if (isset($_GET['url'])) {

            // Met trim haal je de zwevende shlashes weg. Bijvoorbeeld:
            // /Students/Edit/1/ wordt Students/Edit/1

            $tmp_url = trim($_GET['url'], "/");

            // Dit haalt de vreemde karakters uit de strings weg
            $tmp_url = filter_var($tmp_url, FILTER_SANITIZE_URL);

            // Met explode splits je een string op. Elk gedeelte voor de "/" wordt in een nieuwe index van een array gestopt.
            // Bijvoorbeeld /Students/Edit/1 wordt opgedeeld in:
            // $temp_url[0] = "Students",
            // $temp_url[1] = "Edit",
            // $temp_url[2] = "1"
            $tmp_url = explode("/", $tmp_url);

            // Hier worden op basis van de eerder opgegeven variable $tmp_url de keys controller en action gevuld

            $url['controller'] = isset($tmp_url[0]) ? ucwords($tmp_url[0] . 'Controller') : null;
            $url['action'] = isset($tmp_url[1]) ? $tmp_url[1] : 'index';

            // Die twee waarden worden uit de array gehaald
            unset($tmp_url[0], $tmp_url[1]);

            // De overige variabelen worden in de key params gestopt

            $url['params'] = array_values($tmp_url);

            // Dit wordt teruggegeven aan de functie
            return $url;
        }
    }
}
