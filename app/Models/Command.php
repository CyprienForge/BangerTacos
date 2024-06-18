<?php

namespace Models;

class Command extends Model
{
    protected string $table = 'Commands';
    private int $idCommand;
    private int $idOwner;
    private string $hour;
    private float $price;
    private string $date;

    public function getIdCommand(): int
    {
        return $this->idCommand;
    }
    public function getIdOwner(): int
    {
        return $this->idOwner;
    }
    public function getHour(): string
    {
        return $this->hour;
    }
    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function createCommand(int $idOwner, string $hour, float $price, string $date)
    {
        $query = $this->getPDO()->prepare("
            INSERT INTO {$this->table}
            (idOwner, hour, price, date) 
            VALUES(?, ?, ?, ?)
        ");
        $query->execute([$idOwner, $hour, $price, $date]);
    }

    public function getCommandsByOwnerId(int $id)
    {
        $query = $this->getPDO()->prepare("
            SELECT * 
            FROM {$this->table}
            WHERE idOwner = ?
        ");
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS, self::class);

        return $query->fetchAll();
    }
}