<?php

namespace Models;

class Extra extends Model
{
    protected string $table = 'Extras';

    private int $id;
    private string $name;
    private float $price;

    public function getId() : int
    {
        return $this->id;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function getPrice() : float
    {
        return $this->price;
    }

    public function getExtras()
    {
        $query = $this->getPDO()->prepare("
            SELECT * 
            FROM {$this->table}
        ");
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS, self::class);

        return $query->fetchAll();
    }
}