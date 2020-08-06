<?php
require_once 'credentials.php';

class Databasemanager
{

    protected $dbhost = "localhost";
    protected $dbuser = "becode";
    protected $dbpass = "PWD";
    protected $dbname = "pricecalculator";


    public function connect(): PDO
    {
        $this->dbhost = "localhost";
        $this->dbuser = "becode";
        $this->dbpass = "becode123";
        $this->dbname = "pricecalculator";


            // set DSN
            $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;

            // create a PDO instance
            $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $pdo;



        //PDO QUERY

        $stmt = $pdo->query('SELECT * FROM product ');
        while ($row = $stmt ->fetch(PDO::FETCH_ASSOC)) {
            echo $row['name']. '<br>';
        }
    }
}

/*
        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpass, $driverOptions);
        return $pdo;
    }

    public function getGroup($id)
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT * FROM customer_group WHERE id = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        $group = $handle->fetch();
        return new Customergroup($group['id'], $group['name'], $group['parent_id'], $group['fixed_discount'], $group['variable_discount'] );
    }

    public function getProducts()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT * FROM product');
        $handle->execute();
        $array = $handle->fetchAll();
        $products = [];
        foreach ($array as $item){
            $products[$item['id']] = new product($item['id'], $item['name'], $item['price']);
        }
        return $products;
    }

    public function getCustomerdata()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT * FROM customer');
        $handle->execute();
        $array = $handle->fetchAll();
        $customers = [];
        foreach ($array as $customer){
            $group = $this->getGroup($customer['group_id']);
            $customers[$customer['id']] = new customer($customer['id'], $customer['firstname'], $customer['lastname'], $customer['group_id'], $customer['fixed_discount'], $customer['variable_discount']);
        }
        return $customers;

    }


}