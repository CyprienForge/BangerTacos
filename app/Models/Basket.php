<?php

namespace Models;

class Basket extends Model
{
    protected string $table = "Baskets";
    private int $idOwner;
    private int $idProduct;

    public function addProduct(int $idOwner, int $idProduct)
    {
        $query = $this->getPDO()->prepare("
        INSERT INTO $this->table VALUES(?, ?)
        ");
        $query->execute([$idOwner, $idProduct]);
    }

    public function getArticlesByOwnerId(int $ownerId)
    {
        $query = $this->getPDO()->prepare("
            SELECT * FROM {$this->table}
            WHERE idOwner = ?
        ");
        return $query->execute([$ownerId])->fetchAll();
    }
}