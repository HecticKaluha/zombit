<?php
// Met de route functie wordt bepaald welke controller en welke action er moet worden ingeladen
require(ROOT . 'mvc/controller/ErrorController.php');

function route()
{
    // Hier wordt de functie aangeroepen die de URL op splitst op het standaard seperatie teken (in PHP is dit een /)
    $url = splitUrl();
    // Er wordt een variable opgemaakt uit de URL, de eerste variabele wordt geplaatst in de key controller, de tweede wordt in de key action geplaatst. De overige worden in params geplaatst (als array)
    // Als die niet bestaat, gaat hij de standaard controller inladen, welke in core.php is aangemaakt.
    // Hierna roept hij standaard de index functie aan.
    if (!$url['controller']) {
        require(ROOT . 'mvc/controller/' . DEFAULT_CONTROLLER . '.php');
        call_user_func(array(__NAMESPACE__ . '\\' . DEFAULT_CONTROLLER, 'index'));
        // Als dat niet het geval is, dus als er wel een controller is, kijkt hij of het bestand bestaat.
        //	Vervolgens laad hij dat bestand in
    } elseif (file_exists(ROOT . 'mvc/controller/' . $url['controller'] . '.php')) {
        require(ROOT . 'mvc/controller/' . $url['controller'] . '.php');
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
                    call_user_func_array(array(__NAMESPACE__ . '\ErrorController', 'error_incorrect_parameter_count'), array(["controller" => $url['controller'], "action" => $url['action']]));
                }
            }
        } else {
            // Wanneer de action niet bestaat, wordt de errorpagina getoond
            call_user_func_array(array(__NAMESPACE__ . '\ErrorController', 'error_404_action'), array(["controller" => $url['controller'], "action" => $url['action']]));
        }
    } else {
        // Wanneer de controller niet bestaat, wordt de errorpagina getoond
        call_user_func_array(array(__NAMESPACE__ . '\ErrorController', 'error_404_controller'), array(["controller" => $url['controller']]));
    }
}

// De in de functie Route aangeroepen functie splitUrl
function splitUrl()
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
