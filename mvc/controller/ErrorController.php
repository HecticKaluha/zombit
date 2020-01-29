<?php

function error_404_controller($data)
{
    $message = "404 - De controller " . $data . " is niet beschikbaar.";
    render('view/partials/errors/404.', ["error" => true, "message" => $message]);
}

function error_404_action($data)
{
    $message = "404 - De action " . $data['action'] . " is niet beschikbaar in de controller " . $data['controller'] . ".";
    render('view/partials/errors/404.', ["error" => true, "message" => $message]);
}