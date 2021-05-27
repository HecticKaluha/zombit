<?php

interface ServiceInterface
{
    function get($id);

    function getAll();

    function store($user);

    function update($user);

    function destroy($id);
}