<?php

namespace Models;

class Command extends Model
{
    protected string $table = 'Commands';
    private int $idCommand;
    private int $idOwner;
    private string $hour;
    private float $price;

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

    public function createCommand(int $idOwner, string $hour, float $price)
    {
        $query = $this->getPDO()->prepare("
            INSERT INTO {$this->table}
            (idOwner, hour, price) 
            VALUES(?, ?, ?)
        ");
        $query->execute([$idOwner, $hour, $price]);
    }
}