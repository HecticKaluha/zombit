<?php
// De render functie ontvangt het gevraagde bestandsnaam en heeft een data array als niet verplichte variabele
// Allereerst wordt er door de data array heen gelopen en wordt elk item omgezet in een variabele. Bijvoorbeeld: $data["voornaam"] wordt in de view beschikbaar als $voornaam
// Daarna worden er 3 bestanden ingeladen. De templates/header.php, jouw gewenste pagina en de templates/footer.php. Merk op dat .php hier al staat en je die dus niet mee hoeft te geven.
class Core
{
    static function render($filename, $data = null)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }

        require(ROOT . 'app/mvc/view/master.php');
    }
}