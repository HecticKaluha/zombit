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

    public function __construct($data)
    {
        $this->validate($data);
    }
}