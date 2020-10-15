<?php

class LoginUserRequest extends Request
{
    protected $type = 'user';
    protected $rules = [
        "email" => 'required,exists,email',
        "password" => 'required',
    ];

    public function __construct($data)
    {
        $this->validate($data);
    }
}