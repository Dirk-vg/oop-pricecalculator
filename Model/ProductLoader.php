<?php

class ProductLoader extends DatabaseManager
{
    private array $products;

    public function __construct()
    {
        // set DSN
       /* $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;

        // create a PDO instance
        $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);Price()
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);*/

        $sql = 'SELECT * FROM product';
        $stmt = $this->connect()->query($sql);
        $products = $stmt->fetchAll();
        foreach ($products as $product){
            $this->products[] = new Product((int)$product['id'], (string)$product['name'], (int)$product['price']);
        }

    }

    public function getAllProducts():array
    {
        return $this->products;
    }
}
