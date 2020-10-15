<?php

use RedBeanPHP\SimpleModel;

interface DaoInterface
{
    function get($id);

    function getAll();

    function store($user);

    function update($user);

    function destroy($id);

}