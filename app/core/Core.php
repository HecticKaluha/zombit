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

    static function validateRequest($type, $rules, $post)
    {
        $data = $errors = null;
        $valid = true;
        $notFound = array();

        foreach ($post as $key => $value) {
            if ($value) {
                $data[$key] = Core::clean_input($value);
            } else {
                $data[$key] = "";
            }

            if (isset($rules[$key])) {
                $errors[$key] = array();
                $validationRules = explode(',', $rules[$key]);
                foreach ($validationRules as $rule) {
                    switch ($rule) {
                        case "required":
                            if (!$value) {
                                array_push($errors[$key], "Het veld $key is verplicht!");
                                $valid = false;
                            }
                            break;
                        case "unique":
                            //place this one a more appropriate level??
                            if ($value) {
                                $bean = R::findOne($type, "$key = ?", array($value));
                                if ($bean != null) {
                                    array_push($errors[$key], "Deze $key bestaat al in de database");
                                    $valid = false;
                                }
                            }
                            break;
                        default:
                            break;
                    }

                    //check if there are entries starting with confirm_
                    //if so find dthe fieldd that needs to be confirmed and check if the values are the same.
                    //if they are not the same, add an error to the stack for this specific field.
                    if (strpos($key, "confirm_") !== false) {
                        $toConfirm = substr($key, strlen('confirm_'));
                        if ($post[$toConfirm] != $post[$key]) {
                            array_push($errors[$key], "$key kwam niet overeen met $toConfirm.");
                            $valid = false;
                        }
                    }
                }
            } //the field is not found din the rulesset, no rules apply
            else {
                array_push($notFound, $key);
            }
        }

        if ($valid) {
            return [
                'valid' => true,
                'data' => $data,
                'errors' => $errors
            ];
        } else {
            return [
                'valid' => false,
                'data' => $data,
                'errors' => $errors
            ];
        }
    }

    static function clean_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}