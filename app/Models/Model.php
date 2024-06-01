<?php

namespace Models;

class Model
{
    protected static \PDO $pdo;
    protected string $table;
    public function __construct()
    {
        try
        {
            static::$pdo = new \PDO(
                'mysql:host=' . Constants::DB_HOST .
                ';dbname=' . Constants::DB_NAME,
                Constants::DB_USERNAME,
                Constants::DB_PASSWORD,
                [
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]);
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function all() : array
    {
        return $this->getPDO()->query("SELECT * FROM {$this->table}")->fetchAll();
    }

    protected function getPDO() : \PDO
    {
        return static::$pdo;
    }
}