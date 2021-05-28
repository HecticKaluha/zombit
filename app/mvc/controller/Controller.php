<?php

class Controller{
    public function getMethodAccess(): array
    {
        return $this->methodAccess;
    }

    /**
     * @return mixed
     */
    public function getName() : string
    {
        return $this->name;
    }
    public function getMiddleware() : array{
        return $this->middleware;
    }
}