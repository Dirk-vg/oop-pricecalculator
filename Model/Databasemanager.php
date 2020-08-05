<?php

class Databasemanager{

    private string $customer;
    private array $customergroup;
    private array $product;


    public function openconnection() :PDO
    {
        $dbhost = "localhost";
        $dbuser = "becode";
        $dbpass = "PWD";
        $db = "pricecalculator";


        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $connect = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass, $driverOptions);

        return $PDO;

        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT name FROM product where name = :name');
        $handle->bindValue(':id', 5);
        $handle->execute();
        $rows = $handle->fetchAll();
        echo htmlspecialchars($rows[0]['name']);
    }
}