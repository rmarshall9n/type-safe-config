<?php

require_once __DIR__ . '/Schema/Database.php';

function envget($key)
{
    return ['dbdriver' => 'mysql'][$key];
}

class Config {

    public static function database(): Database
    {
        return require __DIR__ . '/DatabaseConfig.php';
    }
}
