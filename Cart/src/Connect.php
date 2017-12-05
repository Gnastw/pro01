<?php

namespace Fruit;

class Connect
{
    /**
     * @var null|\PDO
     */
    public static $pdo = null;

    /**
     * @param array $database
     */
    public static function set(array $database):void{

        $defaults = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
        ];

        self::$pdo = new \PDO($database['dsn'],
            $database['username'], $database['password'],
            $defaults
        );

    }

}