<?php 
namespace App\Database;

use PDO;

class DatabaseConnection {

private static ?PDO $intance = null;

private function __construct() {}

private function __clone() {}

public static function getInstance (): PDO 
{
    if (self::$intance === null) {
        self::$intance = new PDO(
            "mysql:host=localhost;dhname=invoice_db",
            "root",
            "secret",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } 

    return self::$intance;

}

}