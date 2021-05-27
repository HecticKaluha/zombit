<?php
$variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'DB_NAME' => 'demoDB',
    'DB_PORT' => '3306',
];

foreach ($variables as $key => $value) {
    putenv("$key=$value");
}

function env($key, $default = null)
{
    $value = getenv($key);

    if ($value === false) {
        return $default;
    }

    return $value;
}