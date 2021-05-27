<?php

class Request
{

    protected $errors = array();
    protected $data = array();
    protected $valid = false;

    function validateRequest($type, $rules, $post)
    {
        $data = $errors = null;
        $valid = true;
        $notFound = array();

        foreach ($post as $key => $value) {
            if ($value) {
                $data[$key] = self::clean_input($value);
            } else {
                $data[$key] = "";
            }

            if (isset($rules[$key])) {
                $errors[$key] = array();
                $validationRules = explode(',', $rules[$key]);
                foreach ($validationRules as $rule) {
                    switch (true) {
                        case $rule === "required":
                            if (!$value) {
                                array_push($errors[$key], "Het veld $key is verplicht!");
                                $valid = false;
                            }
                            break;
                        case $rule === 'unique':
                            if ($value) {
                                $bean = R::findOne($type, "$key = ?", array($value));
                                if ($bean != null) {
                                    $valid = false;
                                    array_push($errors[$key], "Deze $key bestaat al in de database");
                                }
                            }
                            break;
                        case $rule === 'exists':
                            if ($value) {
                                $bean = R::findOne($type, "$key = ?", array($value));
                                if ($bean == null) {
                                    array_push($errors[$key], "Deze $key is niet gevonden in de database");
                                    $valid = false;
                                }
                            }
                            break;
                        case strpos($rule, "min") !== false:
                            $min = substr($rule, strpos($rule, ":") + 1);
                            if (strlen($value) < $min) {
                                array_push($errors[$key], "$key moet ten minste $min karakters lang zijn.");
                                $valid = false;
                            }
                            break;
                        case strpos($rule, "max") !== false:
                            $max = substr($rule, strpos($rule, ":") + 1);
                            if (strlen($value) > $max) {
                                array_push($errors[$key], "$key mag niet meer dan $max karakters lang zijn.");
                                $valid = false;
                            }
                            break;
                        case $rule === "email":
                            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                                array_push($errors[$key], "$key is geen geldig email");
                                $valid = false;
                            }
                            break;
                        default:
                            break;
                    }
                }
            } //the field is not found in the rulesset, no rules apply
            else {
                array_push($notFound, $key);
            }

            //check if there are entries starting with confirm_
            //if so find the field that needs to be confirmed and check if the values are the same.
            //if they are not the same, add an error to the stack for this specific field.
            if (strpos($key, "confirm_") !== false) {
                $toConfirm = substr($key, strlen('confirm_'));
                if ($post[$toConfirm] != $post[$key]) {
                    array_push($errors[$key], "$key kwam niet overeen met $toConfirm.");
                    $valid = false;
                }
            }
            //check if given password is hashable after cleaning the inputdata
            if($key === "password"){
                if(!$hashed = PASSWORD_HASH($data[$key], PASSWORD_BCRYPT)){
                    $valid = false;
                    array_push($errors[$key], "Dit wachtwoord kon niet worden gehashed. Vul een ander wachtwoord in.");
                }
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

    function clean_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function validate($data)
    {
        $result = $this->validateRequest($this->type, $this->rules, $data);
        $this->valid = $result['valid'];
        $this->data = $result['data'];
        if (!$this->valid) {
            $this->errors = $result['errors'];
        }
    }


    /**
     * @return null
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param null $errors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param null $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * @param bool $valid
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
    }
}