<?php

class CustomerLoader extends Databasemanager
{
    private array $customers;

    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;

        // create a PDO instance
        $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $sql = 'SELECT * FROM customer';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $customers = $stmt->fetchAll();
        foreach ($customers as $customer){
            $customers = new Customer($customer['id'], $customer['firstname'], $customer['lastname'],
                $customer['group_id'], $customer['fixed_discount'], $customer['variable_discount']);
        }
    }

    public function getCustomers()
    {
        return $this->customers;
    }
}
