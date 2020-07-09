<?php

interface ServiceInterface
{
    function get($id);

    function getAll();

    function store($data);

    function update($id, $data);

    function destroy($id);
}