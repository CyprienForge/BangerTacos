<?php

namespace Models;

class Basket extends Model
{
    protected string $table = "Baskets";
    private int $idOwner;
    private int $idProduct;
    private int $units;

    public function getIdOwner(): int
    {
        return $this->idOwner;
    }

    public function getIdProduct(): int
    {
        return $this->idProduct;
    }

    public function getUnits(): float
    {
        return $this->units;
    }

    public function isAlreadyInBasket(int $idOwner, int $idProduct) : bool
    {
        $query = $this->getPDO()->prepare("
            SELECT * FROM {$this->table}
            WHERE idOwner = ? AND idProduct = ?
        ");
        $query->execute([$idOwner, $idProduct]);
        $result = $query->fetchAll();

        if(empty($result)){
            return false;
        }

        return true;
    }
    public function addProduct(int $idOwner, int $idProduct)
    {
        $query = $this->getPDO()->prepare("
        INSERT INTO $this->table VALUES(?, ?, 1)
        ");
        $query->execute([$idOwner, $idProduct]);
    }

    public function addOneUnit(int $idOwner, int $idProduct) : void
    {
        $query = $this->getPDO()->prepare("
            UPDATE  {$this->table}
            SET units = units + 1
            WHERE idOwner = ? AND idProduct = ?
        ");
        $query->execute([$idOwner, $idProduct]);
    }

    public function getArticlesByOwnerId(int $ownerId) : array
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
    public function deleteArticle(int $idOwner, int $idProduct) : void
    {
        $query = $this->getPDO()->prepare("
            DELETE FROM {$this->table}
            WHERE idOwner = ? AND idProduct = ?
        ");
        $query->execute([$idOwner, $idProduct]);
    }

    public function dropBasket(int $idOwner)
    {
        $query = $this->getPDO()->prepare("
            DELETE FROM {$this->table}
            WHERE idOwner = ?
        ");
        $query->execute([$idOwner]);
    }

    public function getPriceCurrentBasket(int $idOwner)
    {
        $query = $this->getPDO()->prepare("
            SELECT sum(m.price*b.units) as price
            FROM {$this->table} b JOIN Menus m ON b.idProduct = m.id
            WHERE  b.idOwner = ?
        ");
        $query->execute([$idOwner]);
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $result = $query->fetchAll();

        return $result[0]['price'];
    }
    public function getCurrentBasket(int $idOwner)
    {
        $query = $this->getPDO()->prepare("
            SELECT m.id, m.name, m.description, m.price FROM {$this->table} b 
            JOIN Menus m ON b.idProduct = m.id
            WHERE idOwner = ?
        ");
        $query->execute([$idOwner]);
        $query->setFetchMode(\PDO::FETCH_CLASS, Menu::class);

        return $query->fetchAll();
    }

    public function getQuantityArticle(int $idOwner, int $idProduct)
    {
        $query = $this->getPDO()->prepare("
            SELECT units as quantity
            FROM {$this->table}
            WHERE idOwner = ? AND idProduct = ?
        ");
        $query->execute([$idOwner, $idProduct]);
        $query->setFetchMode(\PDO::FETCH_ASSOC);

        $result = $query->fetchAll();

        return $result[0]['quantity'];
    }
}