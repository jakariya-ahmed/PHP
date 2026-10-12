<?php 
declare(strict_types=1);

namespace Core;
use PDO;
use PDOException;

class Database
{
    private PDO $connection;
   public function __construct(array $config)
   {
        $dsn = sprintf(
            '%s:host=%s;port=%s;dbname=%s;charset=utf8mb4',
            $config['connection'],
            $config['host'],
            $config['port'],
            $config['database'],
        );

        try {
            $this->connection = new PDO(
                $dsn,
                $config['username'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );    
        } catch(PDOException $e) {
            throw new PDOException('Database Connection Failed: ' . $e->getMessage(), (int)$e->getCode(), $e);
        }
   }


public function connection(): PDO 
    {
        return $this->connection;
    }

    
}

