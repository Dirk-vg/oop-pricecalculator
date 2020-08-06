<?php

class CustomerLoader extends DatabaseManager
{
    private array $customers;

    public function __construct()
    {

        //$sql = 'SELECT * FROM customer';
        $stmt = $this->connect()->query('SELECT * FROM customer');
        $customers = $stmt->fetchAll();
        foreach ($customers as $customer){
            $this->customers[] = new Customer((int)$customer['id'], (string)$customer['firstname'], (string)$customer['lastname'],
                (int)$customer['group_id'], (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
    }

    public function getCustomers():array
    {
        return $this->customers;
    }
}
