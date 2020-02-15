<?php

class CreateUserRequest extends Request
{
    protected $type = 'user';
    protected $rules = [
        "email" => 'required,unique,min:3,email',
        "username" => 'required,min:3',
        "password" => 'required,min:8',
        "confirm_password" => "required"
    ];

    private $errors = array();
    private $data = array();
    private $valid = false;

    public function __construct($data)
    {
        $this->validate($data);
    }

    function validate($data){
        $result = $this->validateRequest($this->type, $this->rules, $data);
        $this->valid = $result['valid'];
        $this->data = $result['data'];
        if(!$this->valid){
            $this->errors = $result['errors'];
        }
        if(!$hashed = PASSWORD_HASH($data['password'], PASSWORD_BCRYPT)){
            $this->valid = false;
            array_push($this->errors['password'], "Dit wachtwoord kon niet worden gehashed. Vul een ander wachtwoord in.");
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