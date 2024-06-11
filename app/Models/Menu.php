<?php

namespace Models;

class Menu extends Model
{
    protected string $table = 'Menus';
    private int $id;
    private string $name;
    private string $description;
    private float $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getMenus()
    {
        $query = $this->getPDO()->prepare("SELECT * FROM {$this->table}");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_CLASS, "Models\\Menu");
    }
}