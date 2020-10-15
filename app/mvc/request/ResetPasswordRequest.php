<?php

class ResetPasswordRequest extends Request
{
    protected $type = 'user';
    protected $rules = [
        "email" => 'required,exists,email',
    ];

    public function __construct($data)
    {
        $this->validate($data);
    }
}