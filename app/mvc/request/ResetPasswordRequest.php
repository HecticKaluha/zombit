<?php

class ResetPasswordRequest extends Request
{
    protected $type = 'user';
    protected $rules = [
        "password" => 'required,min:8',
        "confirm_password" => "required"
    ];

    public function __construct($data)
    {
        $this->validate($data);
    }
}