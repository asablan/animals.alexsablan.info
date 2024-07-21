<?php

namespace App\Models;

use PDO;

class BaseModel
{
    protected static $db;

    public static function init()
    {
        if (!self::$db) {
            $config = require __DIR__ . '/../../config/config.php';
            $dbConfig = $config['database'];

            self::$db = new PDO(
                "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}",
                $dbConfig['username'],
                $dbConfig['password'],
                $dbConfig['options']
            );
        }
    }

    public static function getDb()
    {
        self::init();
        return self::$db;
    }
}
