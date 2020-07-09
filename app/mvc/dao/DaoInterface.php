<?php

use RedBeanPHP\SimpleModel;

interface DaoInterface
{
    function get($id);

    function getAll();

    function store($data);

    function update($id, $data);

    function destroy($id);

}