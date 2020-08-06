<?php

class CustomergroupLoader extends Databasemanager
{
    private array $customergroup;

    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;

        // create a PDO instance
        $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $sql = 'SELECT * FROM customer_group';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $customergroups = $stmt->fetchAll();
        foreach ($customergroups as $customergroup){
            $customergroups = new Customergroup($customergroup['id'], $customergroup['name'], $customergroup['parent_id'], $customergroup['fixed_discount'], $customergroup['variable_discount']);
        }
    }

    public function getCustomergroup()
    {
        return $this->customergroup;
    }
}
