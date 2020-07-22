<?php
//require(ROOT . "mvc/model/Model_User.php");

class HomeController{

    private $methodAccess = [
        'index' => 'GET',
    ];
    private $name;

    /**
     * @return array
     */
    public function getMethodAccess(): array
    {
        return $this->methodAccess;
    }

    public function index()
    {
        Core::render(PARTIALS .'/home.php');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
