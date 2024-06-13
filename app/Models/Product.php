<?php

namespace Models;

class Product extends Model
{
    protected string $table = 'Products';
    private int $id;
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
}