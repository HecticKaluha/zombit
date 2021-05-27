<?php


class Url
{

    private $controller = null;
    private $action = [];
    private $params = [];

    public function __construct($url = null)
    {
        $this->splitUrl($url);
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    private function splitUrl($url)
    {
        // Als er iets in de key url zit van $_GET, wordt de code uitgevoerd
        if (isset($url)) {

            // Met trim haal je de zwevende shlashes weg. Bijvoorbeeld:
            // /Students/Edit/1/ wordt Students/Edit/1

            $tmp_url = trim($url, "/");

            // Dit haalt de vreemde karakters uit de strings weg
            $tmp_url = filter_var($tmp_url, FILTER_SANITIZE_URL);

            // Met explode splits je een string op. Elk gedeelte voor de "/" wordt in een nieuwe index van een array gestopt.
            // Bijvoorbeeld /Students/Edit/1 wordt opgedeeld in:
            // $temp_url[0] = "Students",
            // $temp_url[1] = "Edit",
            // $temp_url[2] = "1"
            $tmp_url = explode("/", $tmp_url);

            // Hier worden op basis van de eerder opgegeven variable $tmp_url de keys controller en action gevuld

            $this->controller = isset($tmp_url[0]) ? ucwords($tmp_url[0] . 'Controller') : null;
            $this->action = isset($tmp_url[1]) ? $tmp_url[1] : 'index';

            // Die twee waarden worden uit de array gehaald
            unset($tmp_url[0], $tmp_url[1]);

            // De overige variabelen worden in de key params gestopt

            $this->params = array_values($tmp_url);

        }
    }
}