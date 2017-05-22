<?php

/**
 * Created by PhpStorm.
 * User: Grzegorz Kasperek
 * Date: 21.05.2017
 * Time: 19:21
 */

namespace Infinity\Others\Login;

use Exception;
use PDO;

class Db
{
    public function connect()
    {
        $dsn = 'mysql:host=localhost;dbname=pdo';
        try {
            $db = new PDO($dsn, 'Grzegorz2', '123456');
            return $db;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
