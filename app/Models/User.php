<?php

namespace Models;

class User extends Model
{
    protected string $table = 'Users';
    private int $id;
    private string $firstName;
    private string $surName;
    private string $email;
    private ?string $phone;
    private string $password;
    private int $loyaltyPoints;

    public function hashPassword(string $password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getSurName(): string
    {
        return $this->surName;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPhone(): string
    {
        return $this->phone;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getLoyaltyPoints(): int
    {
        return $this->loyaltyPoints;
    }
    public function addUser(string $firstName, string $surName, string $email, string $password, string $phone) : void
    {
        $password = $this->hashPassword($password);
        $query = $this->getPDO()->prepare("INSERT INTO {$this->table} (firstName, surName, email, phone, password, loyaltyPoints) 
                                                 VALUES(?, ?, ?, ?, ?, 0);");
        $query->execute([$firstName, $surName, $email, $phone, $password]);
    }

    public function isEmailAvailable(string $email) : bool
    {
        $query = $this->getPDO()->prepare("SELECT count(*) as counter FROM {$this->table} WHERE email = ?;");
        $query->execute([$email]);
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        if($result[0]['counter'] > 0)
        {
            return false;
        }
        return true;
    }

    public function searchPassword(string $email)
    {
        $query = $this->getPDO()->prepare("SELECT password FROM {$this->table} WHERE email = ?;");
        $query->execute([$email]);
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $result[0]['password'];
    }

    public function getUserId(string $email)
    {
        $query = $this->getPDO()->prepare("SELECT id FROM {$this->table} WHERE email = ?;");
        $query->execute([$email]);
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $result[0]['id'];
    }

    public function getById(int $id)
    {
        $query = $this->getPDO()->prepare("SELECT * FROM {$this->table} WHERE id = ?;");
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS, self::class);

        return $query->fetch() ?? false;
    }

    public function updateById(string $firstName, string $surName, string $email, string $phone, int $id)
    {
        $query = $this->getPDO()->prepare(
            "UPDATE {$this->table}
                   SET firstName = ? , 
                       surName = ?,
                       email = ? ,
                       phone = ? 
                   WHERE id = ?"
        );
        $query->execute([$firstName, $surName, $email, $phone, $id]);
    }

    public function getUserByEmail(string $email)
    {
        $query = $this->getPDO()->prepare("
            SELECT *
            FROM {$this->table}
            WHERE email = ?
        ");
        $query->execute([$email]);
        $query->setFetchMode(\PDO::FETCH_CLASS, self::class);

        return $query->fetch();
    }

}