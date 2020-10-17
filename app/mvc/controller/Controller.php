<?php

class Controller{
    public function getMethodAccess(): array
    {
        return $this->methodAccess;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    public function getMiddleware(){
        return $this->middleware;
    }
}