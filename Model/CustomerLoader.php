<?php

class CustomerLoader extends DatabaseManager
{
    private array $customers;

    public function __construct()
    {

        $sql = 'SELECT * FROM customer';
        $stmt = $this->connect()->query($sql);
        $customers = $stmt->fetchAll();
        foreach ($customers as $customer){
            $customers = new Customer((int)$customer['id'], (string)$customer['firstname'], (string)$customer['lastname'],
                $customer['group_id'], (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
    }

    public function getCustomers():array
    {

        return $this->customers;
    }

    public function getCustomerById(int $id)  :? Customer
    {
        foreach ($this->customers as $customer) {
            if ($customer->getId() === $id) {
                return $customer;
            }
        }
    }




}
