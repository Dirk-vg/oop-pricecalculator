<?php

class ProductLoader extends Databasemanager
{
    private array $products;

    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;

        // create a PDO instance
        $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $sql = 'SELECT * FROM product';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
        foreach ($products as $product){
            $products = new Product($product['id'], $product['name'], $product['price']);
        }

    }

    public function getAllProducts()
    {
        return $this->products;
    }
}
