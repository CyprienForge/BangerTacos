<?php

namespace Models;

class Basket extends Model
{
    protected string $table = "Baskets";
    private int $idOwner;
    private int $idProduct;

    public function getIdOwner(): int
    {
        return $this->idOwner;
    }

    public function getIdProduct(): int
    {
        return $this->idProduct;
    }

    public function isAlreadyInBasket(int $idOwner, int $idProduct): bool
    {
        // TO IMPLEMENT
    }
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
        $query->execute([$ownerId]);
        $query->setFetchMode(\PDO::FETCH_CLASS, self::class);

        return $query->fetchAll();
    }

    public function getArticleNameById(int $idProduct) : string
    {
        $query = $this->getPDO()->prepare("
            SELECT m.name
            FROM {$this->table} b JOIN Menus m ON b.idProduct = m.id  
            WHERE idProduct = ?
        ");

        $query->execute([$idProduct]);
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $result  = $query->fetchAll();

        return $result[0]['name'];
    }

    public function getArticlePriceById(int $idProduct) : string
    {
        $query = $this->getPDO()->prepare("
            SELECT m.price
            FROM {$this->table} b JOIN Menus m ON b.idProduct = m.id  
            WHERE idProduct = ?
        ");

        $query->execute([$idProduct]);
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $result  = $query->fetchAll();

        return $result[0]['price'];
    }
}