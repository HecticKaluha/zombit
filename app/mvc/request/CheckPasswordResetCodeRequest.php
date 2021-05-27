<?php

class CheckPasswordResetCodeRequest extends Request
{
    protected $type = 'user';
    protected $rules = [
        "code" => 'required',
    ];

    public function __construct($data)
    {
        $this->validate($data);
    }
}