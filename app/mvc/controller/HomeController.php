<?php
//require(ROOT . "mvc/model/Model_User.php");

class HomeController extends Controller{

    protected $methodAccess = [
        'index' => 'GET',
    ];
    protected $middleware = [
        'index' => []
    ];
    protected $name = 'HomeController';

    public function index()
    {
        Core::render(PARTIALS .'/home.php');
    }
}
