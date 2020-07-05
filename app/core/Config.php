<?php

define('HTTP', 'http:');
define('HTTPS', 'https:');

define('URL_PUBLIC_FOLDER', 'public');			// De public folder is de folder waar alle bestanden in staan die via de adresbalk direct aangevraagd kunnen worden, denk aan CSS, JS, afbeeldingen etc...

define('URL_PROTOCOL', '//');					// Het URL protocol bepaalt of een site via HTTP of HTTPS wordt opgevraagd. Bij '//' wordt de gebruikte methode gebruikt
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);	// Dit bepaald de URL van de website
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME']))); // Dit bepaalt de subfolder van de website. Bijvoorbeeld of jij de website op: 127.0.0.1/webapp hebt draaien.
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER); // Dit genereerd de standaard URL van de applicatie

define('SITE_DOMAIN', HTTP . URL);


define('DEFAULT_CONTROLLER', 'homeController');


define('SOURCES', URL . URL_PUBLIC_FOLDER .'/sources/');
define('VIEW', URL .'app/mvc/view/');
define('PARTIALS', 'app/mvc/view/partials/');
define('CONTROLLER', URL .'app/mvc/controller/');

define('CONTROLLER_PATH','app/mvc/controller/');

//absolutes
define('ABSOLUTE_CONTROLLER_URL', $_SERVER["DOCUMENT_ROOT"].URL_SUB_FOLDER.'app/mvc/controller');